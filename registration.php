<?php
    // define empty variables to store user registration
    $emailErr = $confirmEmailErr = $firstNameErr = $lastNameErr = $passwordErr = $confirmPasswordErr = $profilePicErr = "";
    $email = $confirmEmail = $firstName = $lastName = $password = $confirmPassword = $profilePic = "";

    // User Info registration validation for all fields
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!preg_match("/^[A-Za-z0-9_\p{L}]+@([A-Za-z0-9_]+\.)+[A-Za-z0-9_]{1,16}$/",$_POST["email"])){
            $emailErr = "Not a valid email!";
        } elseif ($_POST["email"] !== $_POST["confirmEmail"]){
            $emailErr = "Emails do not match!";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["confirmEmail"])) {
            $confirmEmailErr = "Please confirm email";
        } elseif (!preg_match("/^[A-Za-z0-9_\p{L}]+@([A-Za-z0-9_]+\.)+[A-Za-z0-9_]{1,16}$/",$_POST["confirmEmail"])) {
            $confirmEmailErr = "Not a valid email";
        } elseif ($_POST["confirmEmail"] !== $_POST["email"]){
            $confirmEmailErr = "Emails do not match!";
        } else {
            $confirmEmail = test_input($_POST["confirmEmail"]);
        }

        if (empty($_POST["firstName"])) {
            $firstNameErr = "A first name is required";
        } else {
            $firstName = test_input($_POST["firstName"]);
        }

        if (empty($_POST["lastName"])) {
            $lastNameErr = "A last name is required";
        } else {
            $lastName = test_input($_POST["lastName"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "A password is required";
        } elseif (!preg_match("/^[A-Za-z0-9_@+\-@#$!%\^&*(){}[\] ]{8,36}$/",$_POST["password"])){
            $passwordErr = "Invalid password!";
        } elseif ($_POST["password"] !== $_POST["confirmPassword"]) {
            $passwordErr = "Passwords do not match!";
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Please confirm password!";
        } elseif (!preg_match("/^[A-Za-z0-9_@+\-@#$!%\^&*(){}[\] ]{8,36}$/",$_POST["confirmPassword"])) {
            $confirmPasswordErr = "Invalid password!";
        } elseif ($_POST["confirmPassword"] !== $_POST["password"]){
            $confirmPasswordErr = "Passwords do not match!";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
        }

        if (empty($_POST["profilePic"])) {
        } else {
            $profilePic = test_input($_POST["profilePic"]);
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

    Email: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>

    <br><br>

    Confirm Email: <input type="text" name="confirmEmail">
    <span class="error">* <?php echo $confirmEmailErr;?></span>

    <br><br>

    First Name: <input type="text" name="firstName">
    <span class="error">* <?php echo $firstNameErr;?></span>

    <br><br>

    Last Name: <input type="text" name="lastName">
    <span class="error">* <?php echo $lastNameErr;?></span>

    <br><br>

    Password: <input type="password" name="password">
    <span class="error">* <?php echo $passwordErr;?></span>

    <br><br>

    Confirm Password: <input type="password" name="confirmPassword">
    <span class="error">* <?php echo $confirmPasswordErr;?></span>
    <br><br>

    Profile Picture: <input type="file" name="profilePic">
    <span>Optional*</span>

    <br><br>
    <input type="submit" value="Submit">

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $email;
echo "<br>";
echo $confirmEmail;
echo "<br>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $password;
echo "<br>";
echo $confirmPassword;
echo "<br>";
echo "<img>";
?>
