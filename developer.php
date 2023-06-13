<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>Developer Tool</title>
    <?php
    $ID = "";
    $title = "";
    $category = "";
    $price = "";
    $img = "";
    $desc = "";
    //Put this code at the beginning of php
    //call the connect.php
    //4) Create function get_post
    require_once 'connect.php';
    function get_post($pdo, $var) //$var is the HTML element name
    {
        return $pdo->quote($_POST[$var]);
    } //5) PHP to search/select
    if (isset($_POST['search']) && (isset($_POST['ID'])   || isset($_POST['title']))) {
        $ID   = get_post($pdo, 'ID');
        $title    = get_post($pdo, 'title');
        $category   = get_post($pdo, 'category');
        $img   = get_post($pdo, 'img');
        $price   = get_post($pdo, 'price');
        $desc   = get_post($pdo, 'description');

        $query  = "SELECT * FROM products where locate($title, title)>0";
        $result = $pdo->query($query);
        $records = $result->rowCount(); //returns number of records extracted
        $records = $records . " record(s) affected"; //this variable is used in HTML form
        if ($row = $result->fetch()) {  //get the first matched row from SELECT into an array $row    
            $ID = $row['ID'];
            $title = $row['title'];
            $category = $row['category'];
            $price = $row['price'];
            $img = $row['img'];
            $desc = $row['description'];
        }
    } //6) Insert code follows
    if (isset($_POST['insert']) && (isset($_POST['ID'])  && isset($_POST['category'])  && isset($_POST['title']))) {
        $ID   = get_post($pdo, 'ID');
        $title    = get_post($pdo, 'title');
        $category   = get_post($pdo, 'category');
        $img   = get_post($pdo, 'img');
        $price   = get_post($pdo, 'price');
        $desc   = get_post($pdo, 'description');

        $query  = "INSERT INTO products VALUES " . "($ID,$title,$category,$price,$img,$desc)";
        $result = $pdo->query($query);
        $records = $result->rowCount();
        $records = $records . " record(s) inserted";
    } //7) Update code follows
    if (isset($_POST['update']) && (isset($_POST['ID']))) {
        $ID   = get_post($pdo, 'ID');
        $title    = get_post($pdo, 'title');
        $category   = get_post($pdo, 'category');
        $img   = get_post($pdo, 'img');
        $price   = get_post($pdo, 'price');
        $desc   = get_post($pdo, 'description');

        $query  = "UPDATE products SET title=$title, category=$category, img=$img,
                    price=$price, description=$desc WHERE ID=$ID";
        $result = $pdo->query($query);
        $records = $result->rowCount();
        $records = $records . " record(s) updated";
    } //8) Delete code follows
    if (isset($_POST['delete']) && (isset($_POST['ID']))) {
        $ID   = get_post($pdo, 'ID');
        $title    = get_post($pdo, 'title');
        $category   = get_post($pdo, 'category');
        $img   = get_post($pdo, 'img');
        $price   = get_post($pdo, 'price');
        $desc   = get_post($pdo, 'description');

        $query  = "DELETE FROM products WHERE ID=$ID";

        $result = $pdo->query($query);
        $records = $result->rowCount();
        $records = $records . " record(s) deleted";
    } //3) HTML table code follows

    ?>
</head>

<body>
    <style>
        main {
            display: flex;
            position: absolute;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            background-image: url("images/dev_background.jpg");
            background-position: center;
            background-repeat: no-repeat ;
            background-size: cover;

        }

        .button {
            padding: 7px 15px;
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
        }

        .button:hover {
            color: white;
            background-color: black;
            cursor: pointer;
        }

        .tool-form {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            height: 300px;
            width: 550px;
            opacity: 0.8;
        }

        footer div{
            position: absolute;
            color:black;
            background-color: transparent;
            bottom: 0;
        }
    </style>
    <!-- navigation bar -->
    <?php include("navbar.php"); ?>

    <!-- developer tool -->
    <main>

        <div class="tool-form">
            <?php
            echo "<table>";
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php
                echo <<<_END
<tr><th colspan="5" style="text-align:center;">Dev's Tool</th></tr>
<tr><td>ID</td><td colspan="4"> <input type="text" name="ID" value='$ID' size="50"></td> </tr>
<tr><td>Title</td><td colspan="4"><input type="text" name="title" value='$title' size="50"></td> </tr>
<tr><td>Category</td><td colspan="4"><input type="text" name="category" value='$category' size="50"></td> </tr>
<tr><td>Image</td><td colspan="4"><input type="text" name="img" value='$img' size="50"></td> </tr>  
<tr><td>Price</td><td colspan="4"><input type="text" name="price" value='$price' size="50"></td> </tr>
<tr><td>Description</td><td colspan="4"><input type="text" name="description" value='$desc' size="50"></td> </tr>


<tr>
    <td><input class="button" type="submit" name= "search" value="Search"></td>
    <td><input class="button" type="submit" name= "reset" value="Reset"></td>
    <td><input class="button" type="submit" name= "insert" value="Insert"></td>
    <td><input class="button" type="submit" name= "delete" value="Delete"></td>
    <td><input class="button" type="submit" name= "update" value="Update"></td>  
</tr>
</tr>    
</form>
</table>
_END;
                ?>
        </div>
    </main>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>

</html>