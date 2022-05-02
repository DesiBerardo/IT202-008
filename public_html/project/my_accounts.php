<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>

<?php
$db = getDB();
$id = get_user_id();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT A.id, A.account, A.account_type, A.modified, A.balance, S.apy_value as APY FROM Accounts A
 LEFT JOIN Systemprop S on S.id = A.apy
 WHERE user_id = :user_id"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":user_id" => $id]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}
?>
<h3>View Accounts</h3>
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
                    <td><?php se($value, null, "-"); ?></td>
                <?php endforeach; ?>


                <td>
                    <a href="transactions.php?id=<?php se($record, "id"); ?>">View Transactions</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<h3><a href="create_account.php">Create New Account</a></h3>
<h3><a href="create_loan.php">Take Out a Loan</a></h3>


<?php
require(__DIR__ . "/../../partials/flash.php");