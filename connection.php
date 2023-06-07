<!-- connection to the database -->
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user_login";

// create connect to the SQL database using mysqli procedural method
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// check if the connection succeed or not
if (!$connection) {
    die("Connection failed! :((");
}
echo "Connected successfully!";


?>