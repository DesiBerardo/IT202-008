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

$query = "SELECT isActive, firstname FROM Users WHERE id = :id";

$stmt = $db->prepare($query);
$stmt->execute([":id" => $id]);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

$status = se($results, "isActive", null, false);
$firstname = se($results, "firstname", "", false);


if($status == 1)
{
    $status = 0;
}
else
{
    $status = 1;
}

$query = "UPDATE Users SET isActive = :stat WHERE id = :id";

$stmt = $db->prepare($query);
$stmt->execute([":id" => $id, ":stat" => $status]);

flash("Active status for " . $firstname . " changed.", "success");

redirect("admin/search_user.php");
?>


<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>