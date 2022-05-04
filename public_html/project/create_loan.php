<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>



<?php
$db = getDB();

$query = "SELECT apy_value FROM Systemprop WHERE id = 2";
$stmt = $db->prepare($query);
$stmt->execute([]);
$resultapy = $stmt->fetch(PDO::FETCH_ASSOC);

$apyvalue = $resultapy["apy_value"];






$id = get_user_id();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT id, account FROM Accounts WHERE user_id = :user_id AND NOT account_type = :loan"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":user_id" => $id, ":loan" => "loan"]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}



?>
<div class="container-fluid">
    <h1>Take a Loan</h1>
    <h3>Current APY is: <?php se($apyvalue); ?>%</h3>
    <form method="POST" onsubmit="return validate(this);">
        <label for="account">Select Destination Account</label>
        <select class="form-control" name="id_dest">
            <?php foreach ($results as $index => $records) :?>
                <option name = "id_dest" value="<?php se($records, "id", false); ?>"><?php se($records, "account", false); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="amount">Amount</label>
        <input type="number" class="form-control" name = "amount">
        <button type="submit" class="btn btn-primary">Take the loan</button>
    </form>
</div>


<?php

    //db32 5/3/2022
    $account_type = "loan";
    $amount = se($_POST, "amount", "", false);
    $apy = 2;
    $id_dest = se($_POST, "id_dest", 0, false);

    if($amount >= 500)
    {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (account_type, user_id, apy) VALUES (:account_type, :user_id, :apy)");
        try {
            $stmt->execute([":account_type" => $account_type, ":user_id" => get_user_id(), ":apy" => $apy]);
    
            flash("Successfully took out a loan!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        $id = $db->lastInsertId();
        $account_num = str_pad($id, 12, "0", STR_PAD_LEFT);
        $stmt = $db->prepare("UPDATE Accounts SET account = :account_num WHERE id = :id");
        $stmt->execute([":account_num" => $account_num, ":id" => $id]);
        $id_src = $id;

        $queryBal = "SELECT balance FROM Accounts WHERE id = :id";

        $stmt = $db->prepare($queryBal);
        $stmt->execute([":id" => $id_src]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $src_b =  (int)se($result,"balance",0, false);

        $stmt->execute([":id" => $id_dest]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dest_b =  (int)se($result,"balance",0, false);

        $e1 = $src_b - $amount;
        $e2 = $dest_b + $amount;
        $memo = "Initial Loan";

        $query = "INSERT INTO Transactions(account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES(:src, :dest, :bal, :type, :memo, :total)";

        $stmt = $db->prepare($query);
        $stmt->execute([":src" => $id_src, ":dest" => $id_dest, ":bal" => $amount * -1, ":type" => "Loan", ":memo" => $memo, ":total" => $e1]);

        $queryUp = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) WHERE id = :id";
        $stmt = $db->prepare($queryUp);
        $stmt->execute([":src" => $id_src, ":id" => $id_src]);

        $stmt = $db->prepare($query);
        $stmt->execute([":src" => $id_dest, ":dest" => $id_src, ":bal" => $amount, ":type" => "Loan", ":memo" => $memo, ":total" => $e2]);
        $stmt = $db->prepare($queryUp);
        $stmt->execute([":src" => $id_dest, ":id" => $id_dest]);

        flash("Transaction Complete!", "success");
        die(header("Location: my_accounts.php"));
    }
    else
    {
        flash("Minimum $500 deposit required", "danger");
    }
    

?>



<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>