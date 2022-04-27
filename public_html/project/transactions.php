<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<?php
$id = $_GET["id"];
$db = getDB();
$query_acc = "SELECT id, account, account_type, balance, created FROM Accounts WHERE id = :id";
$stmt = $db->prepare($query_acc);
$stmt->execute([":id" => $id]);
$results_acc = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h3>Account Information</h3>
    <table class = dynamic-table>
        <?php foreach ($results_acc as $index => $record) : ?>
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

<?php
$startdate = se($_GET, "startdate", "", false);
$enddate = se($_GET, "enddate", "", false);
$t_type = se($_GET, "transactiontype", "", false);
$params = [":id" => $id];


$base_query = "SELECT A.account as account_src, B.account as account_dest, transaction_type, balance_change, expected_total, T.modified, memo
 FROM Transactions T
  JOIN Accounts A on A.id = T.account_src JOIN Accounts B on B.id = T.account_dest ";
$query = "WHERE account_src = :id AND 1=1 ";
  
if($t_type != "all" && $t_type != "")
{
    $query .= "AND transaction_type = :type ";
    $params[":type"] = $t_type;
}


if($startdate != "" && $enddate != "")
{
    if(strtotime($startdate) < strtotime($enddate))
    {
        $query .= " AND T.modified BETWEEN :sdate AND :edate ";
        $params[":sdate"] = $startdate . " 00:00:00";
        $params[":edate"] = $enddate . " 23:59:59";
    }
    else
    {
        flash("start date must be before end date", "warning");
    }
}
$query .= " ORDER BY T.modified DESC ";
$page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
$per_page = 10; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
//$offset = ($page - 1) * $per_page;
$total_query = "SELECT count(1) as total FROM Transactions as T ";

paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//echo $query;

$stmt = $db->prepare($base_query . $query);
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null;
$results = [];
try {
    $stmt->execute($params);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($r)
    {
        $results = $r;
    }
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}

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
<div class = trans_filter>
<form method="GET" onsubmit="return validate(this);">
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/> 

    <label for = "startdate">Start Date</label>
    <input type="date" name="startdate" id="startdate" value="<?php se($startdate);?>">
    <label for = "enddate">End Date</label>
    <input type="date" name="enddate" id="enddate" value="<?php se($enddate);?>">
    <label for="transactiontype">Transaction Type</label>
    <select class = "form-control" name="transactiontype" value = "<?php se($t_type);?>">
        <option value="all" >All</option>
        <option value="deposit" >Deposits</option>
        <option value="withdraw" >Withdraws</option>
        <option value="Internal Transfer" >Internal Transfer</option>
        <option value="ext-transfer" >External Transfer</option>
    </select>
    <script>
        document.forms[0].transactiontype.value = "<?php se($t_type); ?>";
        </script>
    <button type="submit" class="btn btn-primary">Apply</button>
    <button onclick="event=>{event.preventDefault(); [...event.srcElement.closest('form').children].forEach(c=>c.value='');}">Reset</button>
</form>
</div>
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