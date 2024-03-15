<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once 'db.php';

if(isset($_POST['submit'])){
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $email = strip_tags($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

}

class Insert_data_account{

    public function insert($first_name, $last_name, $email, $password){

        $db = new Database_connect();
        $conn = $db->Dbconnection();

        $sql = "INSERT INTO account (voornaam, achternaam, email, wachtwoord) VALUES (:voornaam, :achternaam, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':voornaam', $first_name);
        $stmt->bindParam(':achternaam', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

      


        
    }

}

$account = new Insert_data_account();
$account->insert($first_name, $last_name, $email, $password);


header('Location: inloggen.php');





?>
    
</body>
</html>

