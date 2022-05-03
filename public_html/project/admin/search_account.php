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
$name;


?>



<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>