<?php
session_start();
include("connection.php");
include("functions.php");
$user_name = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link rel="stylesheet" type="text/css" href="contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>TechHive's Contact</title>
</head>

<body>
    <header></header>
    <div>
        <nav>
            <a href="home.php"><img class="logo" src="images/HomeLogo-removebg-preview.png" alt="TechHive's logo" /></a>

            <ul>
                <li><a href="home.php">Home</a></li>

                <div class="dropdown">
                    <li><a href="#">Products</a>
                        <div class="dropdown-content">
                            <a href="#">Desktop</a>
                            <a href="#">Laptop</a>
                            <a href="#">Mobile</a>
                            <a href="#">Tablet</a>
                            <a href="table.php">Products table</a>

                        </div>
                    </li>
                </div>

                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>

            <!-- Sign in -->

            <a href="signin.php" id="signin" onmouseover="register_show()" onmouseout="register_hide()">Sign in</a>
            <div id="register" style="display: none;">
                <p>New customer?<a href="register.php">Start here!</a></p>
            </div>

            <img id="cart" scr="" alt="cart" />
        </nav>
    </div>
    <div class="container">
        <div class="contact-info">
            <h1>Tech Hive Ltd.</h1>
            <p>9527 Tech Road</p>
            <p>Abbotsford, BC, Canada A2B 3C4</p>
            <p>1-778-666-2333</p>
        </div>

        <div class="contact-form">
            <form action="YOUR_SERVER_ENDPOINT" method="POST">
                <h2>Submit a Question</h2>
                <textarea name="question" id="question" rows="4" placeholder="Enter your question here..."></textarea>

                <h3>Select a contact email:</h3>
                <select name="contact-email" id="contact-email">
                    <option value="info@techhive.com">info@techhive.com</option>
                    <option value="support@techhive.com">support@techhive.com</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>


    </div>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>

</html>