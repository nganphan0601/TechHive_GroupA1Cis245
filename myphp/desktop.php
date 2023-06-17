<!-- connect to the database -->
<?php
$database = "e_commerce";
$connection = mysqli_connect("localhost", "root", "", $database); // connect to the database
$query = "SELECT * FROM products WHERE category = 'desktop'";    // SQL to retrieve the items
$featured = mysqli_query($connection, $query);      // send the query to the database, this variable holds the returned table
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link rel="stylesheet" type="text/css" href="products_style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>TechHive's Homepage</title>
</head>

<body>
    <style>
        main {
            padding: 60px;
        }

        h1 {
            text-align: center;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 50px;
        }
    </style>
    <?php include("navbar.php"); ?>

    <main>
        <h1>Desktop World</h1>
        <div class="product-grid">
            <!-- while loop to fetch each record in the returned table -->
            <?php
            while ($product = mysqli_fetch_assoc($featured)) :
            ?>
                <!-- html code to display each product -->
                <?php
                include("display-product.php");
                ?>
            <?php
            endwhile;
            ?>
        </div>
    </main>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>


</script>

</html>