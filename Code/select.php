<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    

    if(empty(trim($_POST["wachtwoord"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["wachtwoord"]);
    }
    
    if(empty($email_err) && empty($password_err)){
        $sql = "SELECT * FROM account WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
        
            $param_email = trim($_POST["email"]);
            
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["wachtwoord"];
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            header("location: welcome.php");
                        } else{
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid email or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    
    unset($pdo);
}
?>

</body>
</html>