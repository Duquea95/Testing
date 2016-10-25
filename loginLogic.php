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

<?php
    echo $emailLogin;
    echo "<br>";
    echo $passwordLogin;
?>
