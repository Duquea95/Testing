<!-- User Login & Validation -->
<?php

    class User {
        public $emailLogin;
        public $passwordLogin;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailLoginERR = $passwordLoginErr = "";
        $emailLogin = $passwordLogin = "";

        if (empty($_POST["emailLogin"])) {
            $emailLoginERR = "A last name is required";
        } elseif (!preg_match("/^[A-Za-z0-9_\p{L}]+@([A-Za-z0-9_]+\.)+[A-Za-z0-9_]{1,16}$/",$_POST["emailLogin"])){
            $emailLoginERR = "Invalid Email!";
        } else {
            $emailLogin = test_input($_POST["emailLogin"]);
        }

        if (empty($_POST["passwordLogin"])) {
            $passwordLoginErr = "A last name is required";
        } elseif(!preg_match("/^[A-Za-z0-9_@+\-@#$!%\^&*(){}[\] ]{8,36}$/", $_POST["passwordLogin"])){
            $passwordLoginErr = "Invalid Password";
        } else {
            $passwordLogin = test_input($_POST["passwordLogin"]);
        }
    }

    function test_input($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal" role="form">

    Email: <input type="text" name="emailLogin">
    <span><?php echo $emailLoginERR ?></span>
    <br><br>

    Password: <input type="text" name="passwordLogin">
    <span><?php echo $passwordLoginERR ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
    echo $emailLogin;
    echo "<br>";
    echo $passwordLogin;
?>
