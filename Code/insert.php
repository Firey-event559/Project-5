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

class Insert_data{

    public function insert($first_name, $last_name, $email, $password){
        $db = new Database_connect();
        $conn = $db->Dbconnection();

        $sql = "INSERT INTO account (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
    }


    


}

$insert = new insert_data();


?>
    
</body>
</html>

