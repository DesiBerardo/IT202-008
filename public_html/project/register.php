<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]))
 {
     $email =  $_POST["email"];
     $password = $_POST["password"];
     $confirm = $_POST["confirm"];

     $hasError = false;
     if(empty($email))
     {
         echo "email must be set <br>";
         $hasError = true;
     }
     //sanatize
     $email = filter_var($email, FILTER_VALIDATE_EMAIL);
     if(!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
         echo "email is invalid <br>";
         $hasError = true;
     }
     if(empty($confirm))
     {
         echo "password must be set <br>";
         $hasError = true;
     }
     if(empty($confirm))
     {
         echo "Confirm password must be set <br>";
         $hasError = true;
     }
     if(strlen($password) < 8)
     {
         echo "passwords must be longer than 8 characters <br>";
         $hasError = true;
     }
     if(strlen($password) > 0 && $password !== $confirm)
     {
        echo "passwords must match <br>";
        $hasError = true;
     }
     if(!$hasError)
     {
         echo "Welcome, $email";
         $hash = password_hash($password, PASSWORD_BCRYPT);
         $db = getDB();
         $stmt = $db->prepare("INSERT INTO Users (email, password) VALUES(:email, :password)");
         try {
             $stmt->execute([":email" => $email, ":password" => $hash]);
             echo "Successfully registered!";
         } catch (Exception $e) {
             echo "There was a problem registering";
             echo "<pre>" . var_export($e, true) . "</pre>";
         }
     }
 }

 
?>