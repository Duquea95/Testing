<!-- Account recovery -->

<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

</form>

<?php
if (empty($_POST["emailLogin"])) {
    $emailLoginERR = "A last name is required";
} elseif (!preg_match("/^[A-Za-z0-9_\p{L}]+@([A-Za-z0-9_]+\.)+[A-Za-z0-9_]{1,16}$/",$_POST["emailLogin"])){
    $emailLoginERR = "Invalid Email!";
} else {
    $emailLogin = test_input($_POST["emailLogin"]);
}
?>
