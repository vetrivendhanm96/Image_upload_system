<?php



define('DB_SERVER', 'localhost');



define('DB_USER', 'root');



define('DB_PASS', '');



define('DB_NAME', 'my-app');



$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// mysqli_select_db($con, "my-app");



// Check connection



if (mysqli_connect_errno()) {



    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>