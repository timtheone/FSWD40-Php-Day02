<?php
include "../exercise4/connect_to_db.php";

$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tel_number = mysqli_real_escape_string($conn, $_POST['tel_number']);

$sql = "INSERT INTO clients(first_name,last_name,email,tel_number)
            VALUES
                    ('$first_name', '$last_name', '$email', '$tel_number')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created.<h1>";
 } else {
    echo "<h1>Record creation error for: </h1>" . 
          "<p>" . $sql . "</p>" . 
          mysqli_error($conn);
 }
 mysqli_close($conn);
//  echo "</body></html>";                    
?>