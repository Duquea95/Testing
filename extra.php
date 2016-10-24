<!-- Switch case over if/else when completed  -->

<!-- //  switch($_SERVER["REQUEST_METHOD"] == "POST"){
//    case "email":
//    case "confirmEmail":
 //
//     if (empty($_POST["email"])) {
//       $emailErr = "Email is required";
//     }
//     if (empty($_POST["confirmEmail"])) {
//       $confirmEmailErr = "Please confirm email";
//     } else {
//         $email = test_input($_POST["email"]);
//         $confirmEmail = test_input($_POST["confirmEmail"]);
//           if (!preg_match_all("/^[A-Za-z0-9_\p{L}]+@([A-Za-z0-9_]+\.)+[A-Za-z0-9_]{1,16}$/",$email,$confirmEmail)){
//             $emailErr = "Not a valid email!";
//             $confirmEmailErr = "Not a valid email!";
//           }
 //
//        }
//      break;
//  } -->


<!-- // Post Method
//  function httpPost($url,$params){
//   $postData = '';
//   //create name value pairs seperated by &
//   foreach($params as $k => $v){
//     $postData .= $k . '='.$v.'&';
//   }
//   $postData = rtrim($postData, '&');
//
//   $ch = curl_init();
//
//   // testing
//   if(is_callable('curl_init')){
//    echo "Enabled";
//   }
//   else{
//    echo "Not enabled";
//   }
//
//   curl_setopt($ch,CURLOPT_URL,$url);
//   curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//   curl_setopt($ch,CURLOPT_HEADER, false);
//   curl_setopt($ch, CURLOPT_POST, count($postData));
//       curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
//
//   $output=curl_exec($ch);
//
//   curl_close($ch);
//   return $output;
// }

// $params = array(
//  "newAccountEmail" => "test@gmail.com",
//  "newAccountEmailConfirm" => "test@gmail.com",
//  "newAccountFirstName" => "Test",
//  "newAccountLastName" => "Testy",
//  "newAccountPassword" => "Password",
//  "newAccountPasswordConfirm" => "Password"
// );

// echo httpPost("https://ssds.nullster.com/int/ShreadyTestStage/user/register_new_user",$params);


//   function httpGet($url){
//     $curl = curl_init();
//
//     curl_setopt($curl,CURLOPT_URL,$url);
//     curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
// //  curl_setopt($ch,CURLOPT_HEADER, false);
//
//     $output=curl_exec($curl);
//
//     curl_close($curl);
//     echo $output;
//   }
//
//   echo httpGet("https://ssds.nullster.com/int/ShreadyTestStage/user/register_new_user");

// // Connecting to MAMP DB.
// //  Set DB requirements & info
// DEFINE('DB_USERNAME', 'root');
// DEFINE('DB_PASSWORD', 'root');
// DEFINE('DB_HOST', 'localhost');
// DEFINE('DB_DATABASE', 'Test');
//
// // Connect to table
// $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//
// // Error Message if failed connection
// if (mysqli_connect_error()) {
//   die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
// }
// // End of Error
// echo 'Connected successfully.';
// $query  = "INSERT INTO users(User, Password, Email) VALUES ('Anthony', 'password','hi@hi.com')";
//   if ($mysqli->query($query) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $query . "<br>" . $mysqli->error;
// }
// echo $query;
// $mysqli->close(); -->
