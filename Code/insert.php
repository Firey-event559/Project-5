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
    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

}

class Insert_data_account{

    public function insert($first_name, $last_name, $email, $password){
   

        $db = "INSERT INTO account (first_name, last_name, email, password1) VALUES (:first_name, :last_name, :email, :password1)";
        $stmt = $db->prepare();
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password1', $password);

        $stmt->execute();
    }


    


}

$insert = new insert_data_account();
$insert->insert($first_name, $last_name, $email, $password);



?>
    
</body>
</html>

