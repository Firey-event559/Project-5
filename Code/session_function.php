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
    $this->header = $header;




  }
    
}
        

//function checkSession(){
    
   // session_start();

   // if(isset($_SESSION['email'])){
       // echo "<div class='session'>Ingelogd als " . $_SESSION['email'] . "</div>";
   // } else {
     //   header('Location: login.php');
        
        
        
        //exit();
  //  }
//}


//$session = checkSession()

 


?>
    
    
</body>
</html>