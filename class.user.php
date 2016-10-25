<?php
class USER{
    private $db;

    function __construct($mysqli)
    {
      $this->mysqli = $mysqli;
    }

    public function register($email,$firstName,$lastName,$password, $image)
    {
       try
       {
           $new_password = password_hash($password, PASSWORD_DEFAULT);

           $stmt = $this->mysqli->prepare("INSERT INTO user(Email,Password,firstName, lastName, profilePicture) VALUES(:email, :password, :firstName, :lastName, :image)");

           $stmt->bindparam(":email", $email);
           $stmt->bindparam(":password", $password);
           $stmt->bindparam(":firstName", $firstName);
           $stmt->bindparam(":lastName", $lastName);
           $stmt->bindparam(":image", $image);
           $stmt->execute();

           return $stmt;
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }

    public function login($email,$password)
    {
       try {
          $stmt = $this->mysqli->prepare("SELECT * FROM user WHERE email=:email LIMIT 1");
          $stmt->execute(array(':email'=>$email));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['Password']))
             {
                $_SESSION['user_session'] = $userRow['Email'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }

   public function redirect($url)
   {
       header("Location: $url");

   }

   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>
