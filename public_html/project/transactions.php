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

<?php
$query = "SELECT A.account as account_src, B.account as account_dest, transaction_type, balance_change, expected_total, T.modified, memo
 FROM Transactions T
  JOIN Accounts A on A.id = T.account_src JOIN Accounts B on B.id = T.account_dest
  WHERE account_src = :id  LIMIT 10"; 
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":id" => $id]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
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
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>


                <td>
                    <a href="transactions.php?id=<?php se($record, "account"); ?>">View Transactions</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>


<?php
require(__DIR__ . "/../../partials/flash.php");