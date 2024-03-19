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
   include 'nav.php';
   include 'session_function.php';

   class Books {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function Selectallbooks() {
        $query = "SELECT * FROM boeken";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$boekenmanager = new Books($conn);
$books = $boekenmanager->selectallBooks();

foreach ($books as $book) {
    echo $book['titel'] . "<br>";
    echo $book['isbn'] . "<br>";
    echo $book['schrijver'] . "<br>";
    echo $book['uitgever'] . "<br>";
    echo $book['boekjaar'] . "<br>";
    echo $book['informatie_boek'] . "<br>";
    if (!empty($book['img'])) {
        echo '<img src="data:image/png;base64,' . base64_encode($book['img']) . '"><br>';
    } else {
        echo "No image available<br>";
    }
}
  
  

?>




</body>
</html>