<?php

session_start();
// Connecting to MAMP DB.
 // Set DB requirements & info
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'Test');

// Connect to table
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Error Message if failed connection
if (mysqli_connect_error()) {
 die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
// End of Error
// echo 'Connected successfully.';

include_once 'class.user.php';
$user = new USER($mysqli);

// Query for DB
// $query  = "SELECT Email, Password, firstName, lastName FROM user";

// While there are rows, try to retrieve data & echo
// $result = $mysqli->query($query);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "Email: " . $row['Email']." Password: ". $row['Password']."<br>"." First Name: ". $row['firstName']."<br>"." Last Name: ". $row['lastName']."<br>";
//     }
// } else {
//     echo "0 results";
// }

// Query for DB, for inserting data
// $query  = "INSERT INTO users(User, Password, Email) VALUES ('Anthony', 'password','hi@hi.com')";
 // if ($mysqli->query($query) === TRUE) {
   // echo "New record created successfully";
 // } else {
//    echo "Error: " . $query . "<br>" . $mysqli->error;
// }
// echo $query;

// $mysqli->close();
?>
