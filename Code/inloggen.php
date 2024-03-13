<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="container">
    <form method="POST" action="">
        <h1>Inloggen</h1>
        <label for="user"><b>Gebruikersnaam</b></label>
        <input type="text" placeholder="gebruikersnaam" id="user" name="username" required>

        <label for="password"><b>Wachtwoord</b></label>
        <input type="password" placeholder="Wachtwoord" id="password" name="password" required>

        <button type="submit">Inloggen</button>

        <div class="options">
            <a href="#">Wachtwoord vergeten?</a>  <a href="#">Hier registreren</a>
        </div>

    </form>
</div>

</body>
</html>
