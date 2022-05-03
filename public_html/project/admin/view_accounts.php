<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
?>

<?php
$db = getDB();
$id = $_GET["id"];
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT A.id, A.account, A.account_type, A.modified, A.balance, S.apy_value as APY, A.isFrozen FROM Accounts A
 LEFT JOIN Systemprop S on S.id = A.apy
 WHERE user_id = :user_id AND A.isActive = true"; //TODO change table name and desired columns
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
                    <a href="transactions_admin.php?id=<?php se($record, "id"); ?>">View Transactions</a>
                </td>
                <td>
                    <a href="freeze.php?id=<?php se($record, "id"); ?>">Freeze Account</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<h3><a href="create_account_admin.php?id=<?php echo $_GET["id"];?>">Create New Account</a></h3>


<?php
require(__DIR__ . "/../../../partials/flash.php");