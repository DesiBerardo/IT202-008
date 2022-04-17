<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
$db = getDB();
$id = get_user_id();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT account, account_type, modified, balance FROM Accounts WHERE user_id = :user_id LIMIT 5"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
<Div>
    <h3><a href="my_accounts.php">My Accounts</a></h3>
    <h3><a href="deposit.php">Deposit</a></h3>
    <h3><a href="withdraw.php">Withdraw</a></h3>
    <h3><a href="#">Transfer</a></h3>
    <h3><a href="profile.php">Profile</a></h3>
</Div>

<?php
require(__DIR__ . "/../../partials/flash.php");