<?php 
    include '../exercise4/connect_to_db.php';

    $sql = "CREATE TABLE clients (
        client_id int PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        tel_number int(14)
        )";

    if (mysqli_query($conn, $sql)) {
        echo "Table Users created successfully" . "\n";
    } else {
        echo "Error creating table: " . mysqli_error($conn) . "\n";
    }
    mysqli_close($conn);
?>  