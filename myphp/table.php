<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="home.css" /> -->
    <link rel="stylesheet" type="text/css" href="table.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>Table</title>
</head>

<body>
    <!-- navigation bar -->
    <?php include("navbar.php"); ?>
    <main>
        <!-- product table search -->
        <!-- search tool -->
        <form action="table.php" method="post">
            <input id="search-form" type="text" name="search_txt">
            <input id="search-submit" type="submit" value="Search">
        </form>
        <?php
        if (!empty($_POST['search_txt'])) {
            $search = $_POST['search_txt']; //get the search text into a variable
            $CSVfp = fopen("products.csv", "r");
            if ($CSVfp !== FALSE) { //file exists?
                $data = fgetcsv($CSVfp, 1000, ","); //first row
                if (!empty($data)) //is the line read empty
                    echo <<<_HTML1
    
    <table>
     <tr>
        <th>$data[0]</th><th>$data[1]</th><th>$data[2]</th><th>$data[3] </th>
    </tr>
_HTML1;
                //read the second row onwards    
                while (($data = fgetcsv($CSVfp, 1000, ",")) !== false) {
                    //read the next row
                    $search_lower = strtolower($search);
                    $prd_id = $data[0];
                    $prd_name = $data[1];
                    //convert the strings to lowercase
                    $prod_id_lower = strtolower($prd_id);
                    $prod_name_lower = strtolower($prd_name);
                    if (str_contains($prod_name_lower, $search_lower) || str_contains($prod_id_lower, $search_lower)) {
                        echo <<<_HTML2
    <tr>
    <td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$$data[3]</td>
_HTML2;
                    }
                } // close while
            }
            fclose($CSVfp);
            echo "</table>";
        } //close if

        // no input
        else {
            echo "<p style=\"color:red;\">Input some information to search</p>";

            // display the full table
            $CSVfp = fopen("products.csv", "r");
            if ($CSVfp !== FALSE) { //file exists?
                $data = fgetcsv($CSVfp, 1000, ","); //first row
                if (!empty($data)) //is the line read empty
                    echo <<<_HTML1
    <table >
     <tr>
        <th>$data[0]</th><th>$data[1]</th><th>$data[2]</th><th>$data[3]</th>
    </tr>
_HTML1;
                //read the next row
                while (($data = fgetcsv($CSVfp, 1000, ",")) !== false) {
                    echo <<<_HTML
                <tr>
                    <td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$$data[3]</td>
                </tr>
            _HTML;
                }
            }
            fclose($CSVfp);
            echo "</table>";
        }
        ?>
    </main>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>

</html>