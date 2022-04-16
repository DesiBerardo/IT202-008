<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>

<Div>
    <h3><a href="#">My Accounts</a></h3>
    <h3><a href="#">Deposit</a></h3>
    <h3><a href="#">Withdraw</a></h3>
    <h3><a href="#">Transfer</a></h3>
    <h3><a href="profile.php">Profile</a></h3>
</Div>

<?php
require(__DIR__ . "/../../partials/flash.php");