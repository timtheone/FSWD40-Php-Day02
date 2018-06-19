<?php
    include '../exercise4/connect_to_db.php';

    $sql = "INSERT INTO clients(first_name,last_name,email,tel_number)
            VALUES
                    ('John', 'Doe', 'john@doe.com', 1231235134)";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created.\n";
     } else {
        echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>