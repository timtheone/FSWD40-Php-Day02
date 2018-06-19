<?php

$servername = "localhost";
$username = "timuralmamedov";
$password = "fkvfvtljd__93";
$dbname = "exer3_db";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}

$sql = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
    echo "Database $dbname has been successfully created";
} else {
    echo "Error creating database $dbname" . mysqli_connect_error($conn);
}

mysqli_close($conn);

?>