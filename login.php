<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal" role="form">

    Email: <input type="text" name="email">
    <br><br>
    Email: <input type="password" name="password">
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php

    Class User {

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailLogin = $passwordLogin = "";
        $email =

        if (empty($_POST["email"])) {
            $emailErr = "A last name is required";
        } else {
            $emailLogin = test_input($_POST["email"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "A last name is required";
        } else {
            $passwordLogin = test_input($_POST["password"]);
        }
    }

    function test_input($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
