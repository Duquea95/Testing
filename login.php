<form action="loginLogic.php" method="POST" class="form-horizontal" role="form">

    Email: <input type="text" name="emailLogin">
    <span><?php echo $emailLoginERR ?></span>
    <br><br>

    Password: <input type="text" name="passwordLogin">
    <span><?php echo $passwordLoginERR ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
