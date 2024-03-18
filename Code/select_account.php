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




require_once 'db.php';



class Select_data_account{

    private $email;
    private $wachtwoord;
    private $conn;

    function __construct($email, $wachtwoord){
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
        $this->conn = (new Database_connect())->Connect_database();
        
    }

    public function Select(){
        $query = "SELECT * FROM account WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row){
            if(password_verify($this->wachtwoord, $row['wachtwoord'])){
                $_SESSION['email'] = $row['email'];
                $_SESSION['voornaam'] = $row['voornaam'];
                $_SESSION['achternaam'] = $row['achternaam'];
                $_SESSION['id'] = $row['id'];
            
            }else{
                echo "Wachtwoord is onjuist";
                
              
            }
        }else{  
           echo "email is onjuist";
           
            
            
        }
    }
}

if(isset($_POST['submit'])){
    $email = strip_tags($_POST['email']);
    $wachtwoord = strip_tags($_POST['wachtwoord']);

    $select = new Select_data_account($email, $wachtwoord);
    $select->Select();

}

session_start();
if(isset($_SESSION['email'])){
        
    echo "<div class='session'>Ingelogd als " . $_SESSION['email'] . "</div>";

}

header("Location: boeken.php");
exit();



?>
</body>

</html>