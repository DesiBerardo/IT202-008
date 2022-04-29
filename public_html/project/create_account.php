<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>

<div class="container-fluid">
    <h1>Create Account</h1>
    <form method="POST" onsubmit="return validate(this);">
    <select class="form-control" name="account_type">
        <option value="checking">Checking</option>
        <option value="savings">Savings</option>
    </select>
    <label for="amount">Amount</label>
        <input type="number" class="form-control" name = "amount">
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</div>

<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>

<?php

function get_or_create_account()
{
    if (is_logged_in())
     {
        $account_type = se($_POST, "account_type", "", false);
        $amount = se($_POST, "amount", "", false);
        $apy = null;

        if($account_type == "savings")
        {
            $apy = 1;
        }

        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (account_type, user_id, apy) VALUES (:account_type, :user_id, :apy)");
        try {
            $stmt->execute([":account_type" => $account_type, ":user_id" => get_user_id(), ":apy" => $apy]);

            flash("Successfully created an account!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        $id = $db->lastInsertId();
        $account_num = str_pad($id, 12, "0", STR_PAD_LEFT);
        $stmt = $db->prepare("UPDATE Accounts SET account = :account_num WHERE id = :id");
        $stmt->execute([":account_num" => $account_num, ":id" => $id]);
        


        $queryBal = "SELECT balance FROM Accounts WHERE id = :id";
        $stmt = $db->prepare($queryBal);
        $stmt->execute([":id" => 1]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $src_b =  (int)se($result,"balance",0, false);

        $stmt->execute([":id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dest_b =  (int)se($result,"balance",0, false);

        $e1 = $src_b - $amount;
        $e2 = $dest_b + $amount;

        $query = "INSERT INTO Transactions(account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES(:src, :dest, :bal, :type, :memo, :total)";

        $stmt = $db->prepare($query);
        $stmt->execute([":src" => 1, ":dest" => $id, ":bal" => $amount * -1, ":type" => "desposit", ":memo" => "initail Deposit", ":total" => $e1]);

        $queryUp = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) from Transactions WHERE account_src = :src) WHERE id = :id";
        $stmt = $db->prepare($queryUp);
        $stmt->execute([":src" => 1, ":id" => 1]);

        $stmt = $db->prepare($query);
        $stmt->execute([":src" => $id, ":dest" => 1, ":bal" => $amount, ":type" => "desposit", ":memo" => "Initial Deposit", ":total" => $e2]);
        $stmt = $db->prepare($queryUp);
        $stmt->execute([":src" => $id, ":id" => $id]);

    } else {
        flash("You're not logged in", "danger");
    }
    die(header("Location: my_accounts.php"));
}
if(isset($_POST['account_type']) && $_POST['amount'] >= 5)
{
    get_or_create_account();
}

else
{
    flash("Minimum $5 deposit required", "danger");
}

?>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>