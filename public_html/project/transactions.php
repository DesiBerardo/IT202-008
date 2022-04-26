<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<?php
$id = $_GET["id"];
$db = getDB();
$query = "SELECT id, account, account_type, balance, created FROM Accounts WHERE id = :id";
$stmt = $db->prepare($query);
$stmt->execute([":id" => $id]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h3>Account Information</h3>
    <table class = dynamic-table>
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

<div class = trans_filter>
<form method="POST" onsubmit="return validate(this);">
    <label for = "startdate">Start Date</label>
    <input type="date" name="startdate" id="startdate">
    <label for = "enddate">End Date</label>
    <input type="date" name="enddate" id="enddate">

    <label for="transactiontype">Transaction Type</label>
    <select class = "form-control" name="transactiontype">
        <option value="all" >All</option>
        <option value="deposit" >Deposits</option>
        <option value="withdraw" >Withdraws</option>
        <option value="Internal Transfer" >Internal Transfer</option>
        <option value="ext-transfer" >External Transfer</option>
    </select>

    <button type="submit" class="btn btn-primary">Apply</button>
</form>
</div>

<?php
$startdate = se($_POST, "startdate", 0, false);
$enddate = se($_POST, "enddate", 0, false);
$type = se($_POST, "transactiontype", "", false);
$params = [":id" => $id];

$query = "SELECT A.account as account_src, B.account as account_dest, transaction_type, balance_change, expected_total, T.modified, memo
 FROM Transactions T
  JOIN Accounts A on A.id = T.account_src JOIN Accounts B on B.id = T.account_dest
  WHERE account_src = :id ";
  
if($type != "all")
{
    $query .= "AND transaction_type = :type ";
    $params[":type"] = $type;
}


if($startdate =! 0 && $enddate != 0)
{
    if($startdate < $enddate)
    {
        $query .= "AND T.modified BETWEEN :sdate AND :edate";
        $params[":sdate"] = $startdate . " 00:00:00";
        $params[":edate"] = $enddate . " 23:59:59";
    }
    else
    {
        flash("start date must be before end date", "warning");
    }
}
$query .= " ORDER BY T.modified DESC LIMIT 10";

echo $query;
$total_query = "SELECT count(1) as total FROM Transactions id";
$stmt = $db->prepare($query);
$results = [];
$total = 5;
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results)
    {
        $total = (int)se($results, "total", 0, false);
    }
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}
$page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
$per_page = 4; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
$offset = ($page - 1) * $per_page;
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

echo  "**" . $total . "**";

if (!isset($total)) {
    flash("Note to Dev: The total variable is undefined", "danger");
}
if (!isset($per_page)) {
    flash("Note to Dev: The per_page variable is undefined", "danger");
}
$total_pages = ceil($total / $per_page);
//updates or inserts page into query string while persisting anything already present
function persistQueryString($page)
{
    //set the query param for easily building
    $_GET["page"] = $page;
    //https://www.php.net/manual/en/function.http-build-query.php
    return http_build_query($_GET);
}
function check_apply_disabled_prev($page)
{
    echo $page < 1 ? "disabled" : "";
}
function check_apply_active($page, $i)
{
    echo ($page - 1) == $i ? "active" : "";
}
function check_apply_disabled_next($page)
{
    global $total_pages;
    echo ($page) >= $total_pages ? "disabled" : "";
}
?>

<h3>Transaction History</h3>

<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class = dynamic-table>
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<nav aria-label="Page navigation example I hope I get changed heheh nope :)">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php check_apply_disabled_prev(($page - 1)) ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
        </li>
        <?php for ($i = 0; $i < $total_pages; $i++) : ?>
            <li class="page-item <?php check_apply_active($page, $i); ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?php check_apply_disabled_next($page); ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
        </li>
    </ul>
</nav>
<?php
require(__DIR__ . "/../../partials/flash.php");