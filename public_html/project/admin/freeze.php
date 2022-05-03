<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
?>

<?php
$db= getDB();
$id = $_GET["id"];

$query = "SELECT isFrozen FROM Accounts WHERE id = :id";

$stmt = $db->prepare($query);
$stmt->execute([":id" => $id]);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

$status = se($results, "isFrozen", null, false);


if($status == 0)
{
    $status = 1;
}
else
{
    $status = 0;
}

$query = "UPDATE Accounts SET isFrozen = :stat WHERE id = :id";

$stmt = $db->prepare($query);
$stmt->execute([":id" => $id, ":stat" => $status]);

flash("Account Frozen", "success");

redirect("admin/transactions_admin.php?id=" . $id);
?>


<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>