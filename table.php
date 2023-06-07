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
    <link rel="stylesheet" type="text/css" href="table.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>Table</title>
</head>

<body>

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
    <script>
        itemId = ["Lab001", "Lab002", "Lab003", "Pad001", "Pad002", "P001", "P002"];
        itemName = ["ZenBook", "ViVoBook", "Macbook air", "Ipad", "Galaxy pad", "Iphone", "Galaxy S8"];
        itemType = ["Laptop", "Laptop", "Laptop", "Pad", "Pad", "CellPhone", "CellPhone"];
        itemPrice = ["3000", "2000", "25000", "24589", "3000", "4200", "2300"];

        table = "<table border=\"1\"><tr><th>Item Id</th><th>Name</th><th>Type</th><th>Price</th></tr>";

        for (i = 0; i < itemId.length; i++) {
            table += "<tr><td>" + itemId[i] + "</td>" +
                "<td>" + itemName[i] + "</td>" +
                "<td>" + itemType[i] + "</td>" +
                "<td>" + itemPrice[i] + "</td>" +
                "</tr>";
        }
        table += "</table>";
        document.write(table);
    </script>

    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>

</html>