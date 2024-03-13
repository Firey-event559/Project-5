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

<form class="createaccount" onsubmit=" return validateEmail()" method="post">
    <h1 class="account">Inloggen</h1>
    <input class="create_account_input" type="Email" placeholder="Email" required name="email" id="email">
    <div id="emailError" class="error"></div>
    <input class="create_account_input" type="password" placeholder="Wachtwoord" required name="wachtwoord">


    <input class="submit_account" type="submit" value="Inloggen">
</body>
</html>
