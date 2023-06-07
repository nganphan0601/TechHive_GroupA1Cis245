<?php
session_start();
include("connection.php");
include("functions.php");

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>Sign up</title>
</head>

<body>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; font-family:'Poppins', sans-serif;"> Signup </div>
            <input type="text" name="username"><br><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Login"><br><br>
            <p>Already had an account? <a href="signin.php">Login </a> </p>
        </form>
    </div>
</body>

</html>