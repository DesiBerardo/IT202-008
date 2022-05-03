<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>

<?php

$id = $_GET["id"];
$db = getDB();

$query = "SELECT balance, account_type FROM Accounts WHERE id = :id";

$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":id" => $id]);
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}

$balance = (int)se($results,"balance",0, false);
$account_type = se($results, "account_type", null, false);

if($account_type == "loan" && $balance >= 0)
{
    
    $query = "UPDATE Accounts set isActive = 0 WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->execute([":id" => $id]);


    flash("Loan Closed Successfully, any remaining balance is now property of the bank", "success");
}
else if($balance == 0)
{
    $query = "UPDATE Accounts SET isActive = 0 WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->execute([":id" => $id]);

    flash("Account Closed Successfully ", "success");
}

else
{
    flash("Account must have a balance of $0", "danger");
}



redirect("my_accounts.php");
?>



<?php
require(__DIR__ . "/../../partials/flash.php");