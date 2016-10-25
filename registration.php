<form action="registration.php" method="POST" class="form-horizontal" role="form">

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
