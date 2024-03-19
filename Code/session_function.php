<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<?php

class checkSession{

    protected $session;

    protected $header;


  function __construct($session,$header){

    $this->session = $session;
    


 function checkSession($session,$header){

    session_start();

    if(isset($_SESSION[$session])){

        echo "<div class='session'>Ingelogd als " . $_SESSION[$session] . "</div>";

    }else{
            
            header("Location: boeken.php" . $header);
            exit();

    

  }
    
}
  }

}

$session = (new checkSession())->checkSession();

        


 


?>
    
    
</body>
</html>