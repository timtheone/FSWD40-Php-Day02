<?php 
    $servername = "localhost";
    $username = "timuralmamedov";
    $password = "fkvfvtljd__93";
    $dbname = "exer3_db";

    define('ROOT_URL', 'http://localhost/php_exercises/fswd40-php-day2/exercise9/');

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
?>  