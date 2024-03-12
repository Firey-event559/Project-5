<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Account aanmaken</title>
</head>
<body>
    <?php

    include 'nav.php';

    ?>
   <form class="createaccount">
    <h1 class="account">Maak een account</h1>
    <input class="create_account_input" type="text" placeholder="Voornaam" required name="voornaam">
    <input class="create_account_input" type="text" placeholder="Achternaam" required name="achternaam">
    <input class="create_account_input" type="Email" placeholder="Email" required name="Email">
    <input class="create_account_input" type="password" placeholder="Wachtwoord" required name="wachtwoord">

    <input class="submit_account" type="submit" value="Account aanmaken">
    
</form>
    
</body>
</html>




