<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<?php
$account = $_GET["id"];
$db = getDB();
$id = get_user_id();
$query = "SELECT account, account_type, balance, created FROM Accounts WHERE account = :account";
$stmt = $db->prepare($query);
$stmt->execute([":account" => $account]);
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
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT account_src, account_dest, transaction_type, balance_change, expected_total, modified, memo FROM Transactions WHERE account_src OR account_dest = :account LIMIT 10"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":account" => $account]);
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