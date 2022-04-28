<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<Div>
    <h3><a href="int_transfer.php">Internal Transfer</a></h3>
    <h3><a href="ext_transfer.php">External Transfer</a></h3>
</Div>

<?php
require(__DIR__ . "/../../partials/flash.php");