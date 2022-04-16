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
    </select>
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

function get_or_create_account($account_type)
{
    if (is_logged_in()) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (account_type, user_id) VALUES (:account_type, :user_id)");
        try {
            $stmt->execute([":account_type" => $account_type, ":user_id" => get_user_id()]);

            flash("Successfully created an account!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        $id = $db->lastInsertId();
        $account_num = str_pad($id, 12, "0");
        $stmt = $db->prepare("UPDATE Accounts SET account = :account_num WHERE id = :id");
        $stmt->execute([":account_num" => $account_num, ":id" => $id]);
        

    } else {
        flash("You're not logged in", "danger");
    }
    die(header("Location: dashboard.php"));
}
if(isset($_POST['account_type']))
{
    get_or_create_account(se($_POST, "account_type", "", false));
}


?>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>