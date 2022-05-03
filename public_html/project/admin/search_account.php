<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
?>
<div class="container-fluid">
    <h1>User Lookup</h1>
    <form method="POST" onsubmit="return validate(this);">
        <label for="user">Lookup Account Number</label>
            <input type="text" class="form-control" name="number">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<?php
$db= getDB();
$name = se($_POST, "number", "null", false);

$query = "SELECT id, Account FROM Accounts WHERE account LIKE :n";

$stmt = $db->prepare($query);
$stmt->execute([":n" => "%$name%"]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<h3>Accounts</h3>
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
                    <th>View Transactions And Freeze</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "-");?></td>
                <?php endforeach; ?>
                <td>
                    <a href="transactions_admin.php?id=<?php se($record, "id"); ?>">View Transactions</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>



<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>