
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
    <link rel="stylesheet" type="text/css" href="home.css"/>
    <link rel="stylesheet" type="text/css" href="about.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>TechHive's About</title>
</head>
<body>
    
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

    <main>
	<div class="container">
            <div class="contact-info">
				<h1>Tech Hive Ltd. (helping you organise your digital life) is who we are.</h1>
				<p>Since its founding in 2023, Tech Hive Ltd. has been working to make its goods the best in their field. We are a company that cares about people and is focused on new ideas. We sell and service technology goods. Our team is made up of people who love technology and are always coming up with new ideas. They are always trying out the newest electronic goods and choosing the best ones for our customers to buy.
					We have a lot of different kinds of goods, including cell phones, computers, tablets, and more. We carefully chose each product we sell, and we are responsible for everything we sell.
					We think that technology is one of the most important things that can change the world at Tech Hive. Through our goods and services, we want everyone to be able to enjoy the ease and fun of technology.
				</p>
			</div>
	</div>
    </main>

    <footer>
        <div>
       Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>
</html>