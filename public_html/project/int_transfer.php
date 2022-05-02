<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>


<?php

$db = getDB();
$id = get_user_id();
//generally try to avoid SELECT *, but this is about being dynamic so I'm using it this time
$query = "SELECT id, account, account_type FROM Accounts WHERE user_id = :user_id AND NOT account_type = 'loan' AND isActive = true"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results_src = [];
try {
    $stmt->execute([":user_id" => $id]);
    $results_src = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}

$query = "SELECT id, account, account_type FROM Accounts WHERE user_id = :user_id AND isActive = true"; //TODO change table name and desired columns
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":user_id" => $id]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<pre>" . var_export($e, true) . "</pre>";
}

?>
<div class="container-fluid">
    <h1>Internal Transfer</h1>
    <form method="POST" onsubmit="return validate(this);">
    <label for="account">Select Source Account</label>
        <select class="form-control" name="id_src">
            <?php foreach ($results_src as $index => $records) :?>
                <option name = "id_src" value="<?php se($records, "id", false); ?>"><?php se($records, "account", false); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="account">Select Destination Account</label>
        <select class="form-control" name="id_dest">
            <?php foreach ($results as $index => $records) :?>
                <option name = "id_dest" value="<?php se($records, "id", false); ?>"><?php se($records, "account", false); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="amount">Amount</label>
        <input type="number" class="form-control" name = "amount">
        <label for="memo">Memo</label>
        <input type="text" class="form-control" name = "memo">
        <button type="submit" class="btn btn-primary">Transfer Funds</button>
    </form>
</div>

<?php
if(isset($_POST["amount"]))
{
    $id_src = se($_POST, "id_src", 0, false);
    $id_dest = se($_POST, "id_dest", 0, false);
    $amount = se($_POST, "amount", null, false);
    $memo = se($_POST, "memo", null, false);

    if($amount > 0)
    {
        if($id_src != $id_dest)
        {
            $db = getDB();
            $queryBal = "SELECT balance FROM Accounts WHERE id = :id";
            $stmt = $db->prepare($queryBal);
            $stmt->execute([":id" => $id_src]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $src_b =  (int)se($result,"balance",0, false);
    
            $stmt->execute([":id" => $id_dest]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $dest_b =  (int)se($result,"balance",0, false);
    
            if($src_b >= $amount)
            {
                $e1 = $src_b - $amount;
                $e2 = $dest_b + $amount;
        
                $query = "INSERT INTO Transactions(account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES(:src, :dest, :bal, :type, :memo, :total)";
        
                $stmt = $db->prepare($query);
                $stmt->execute([":src" => $id_src, ":dest" => $id_dest, ":bal" => $amount * -1, ":type" => "Internal Transfer", ":memo" => $memo, ":total" => $e1]);
        
                $queryUp = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) WHERE id = :id";
                $stmt = $db->prepare($queryUp);
                $stmt->execute([":src" => $id_src, ":id" => $id_src]);
        
                $stmt = $db->prepare($query);
                $stmt->execute([":src" => $id_dest, ":dest" => $id_src, ":bal" => $amount, ":type" => "Internal Transfer", ":memo" => $memo, ":total" => $e2]);
                $stmt = $db->prepare($queryUp);
                $stmt->execute([":src" => $id_dest, ":id" => $id_dest]);
        
                flash("Transaction Complete!", "success");
            }
            else
            {
                flash("Insufficent Funds", "danger");
            }
        }
        else
        {
            flash("Please select two different accounts", "warning");
        }
    }
    else
    {
        flash("Amount must be greater than 0", "danger");
    }

}

?>

<?php
require(__DIR__ . "/../../partials/flash.php");