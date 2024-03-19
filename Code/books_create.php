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
    session_start();
    include 'footer.php';
    include 'nav.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['Titel'];
        $isbn = $_POST['isbn'];
        $writer = $_POST['schrijver'];
        $publisher = $_POST['uitgever'];
        $release_year = $_POST['Boekjaar'];
        $book_information = $_POST['informatie_boek'];
    
        $sql = "INSERT INTO boeken (Titel, isbn, schrijver, uitgever, Boekjaar, informatie_boek) VALUES (:Titel, :isbn, :schrijver, :uitgever, :Boekjaar, :informatie_boek)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":Titel", $title, PDO::PARAM_VAR);
        $stmt->bindParam(":isbn", $isbn, PDO::PARAM_VAR);
        $stmt->bindParam(":schrijver", $writer, PDO::PARAM_VAR);
        $stmt->bindParam(":uitgever", $brand, PDO::PARAM_VAR);
        $stmt->bindParam(":Boekjaar", $release_year, PDO::PARAM_VAR);
        $stmt->bindParam(":informatie_boek", $book_information, PDO::PARAM_VAR);
    
        if ($stmt->execute()) {
    
            header("Location:#");
            exit();
        } else {
            echo "Error: Er is iets misgegaan bij het toevoegen van een nieuw boek.";
        }
    }
    $conn = null;

    ?>

</body>

</html>