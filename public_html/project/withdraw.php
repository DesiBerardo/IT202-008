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
$query = "SELECT id, account FROM Accounts WHERE user_id = :user_id AND NOT account_type = 'loan' AND isActive = true"; //TODO change table name and desired columns
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
    <h1>Withdraw</h1>
    <form method="POST" onsubmit="return validate(this);">
    <label for="account">Select Account</label>
        <select class="form-control" name="id">
            <?php foreach ($results as $index => $records) :?>
                <option name = "id" value="<?php se($records, "id", false); ?>"><?php se($records, "account", false); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="amount">Amount</label>
        <input type="number" class="form-control" name = "amount">
        <label for="memo">Memo</label>
        <input type="text" class="form-control" name = "memo">
        <button type="submit" class="btn btn-primary">Make Withdraw</button>
    </form>
</div>

<?php
if(isset($_POST["amount"]))
{
    $id = se($_POST, "id", 0, false);
    $amount = se($_POST, "amount", null, false);
    $memo = se($_POST, "memo", null, false);

    if($amount > 0)
    {
        $db = getDB();
        $queryBal = "SELECT balance FROM Accounts WHERE id = :id";
        $stmt = $db->prepare($queryBal);
        $stmt->execute([":id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $src_b =  (int)se($result,"balance",0, false);

        $stmt->execute([":id" => 1]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dest_b =  (int)se($result,"balance",0, false);
        if($src_b >= $amount)
        {
            $e1 = $src_b - $amount;
            $e2 = $dest_b + $amount;
    
            $query = "INSERT INTO Transactions(account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES(:src, :dest, :bal, :type, :memo, :total)";
    
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $id, ":dest" => 1, ":bal" => $amount * -1, ":type" => "withdraw", ":memo" => $memo, ":total" => $e1]);
    
            $queryUp = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) WHERE id = :id";
            $stmt = $db->prepare($queryUp);
            $stmt->execute([":src" => $id, ":id" => $id]);
    
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => 1, ":dest" => $id, ":bal" => $amount, ":type" => "withdraw", ":memo" => $memo, ":total" => $e2]);
            $stmt = $db->prepare($queryUp);
            $stmt->execute([":src" => 1, ":id" => 1]);
    
            flash("Transaction Complete!", "success");
        }
        else
        {
            flash("Insufficent Funds", "danger");
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