    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
     require "db.php";
     if(isset($_POST['submit'])){
        $email = strip_tags($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    }

     class select_data_account {

        public function select_account(){

        }
     }

     ?>

    </body>
    </html>