<?php
function check_login($con)
{
    // check if session's value exists
    if (isset($_SESSION['user_id'])) {
        // check if the value is real
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        // if it is real returns the user's data
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    // redirect to the signin page
    header("Location: signin.php");
    die;
}
