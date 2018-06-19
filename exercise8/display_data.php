<?php
    include "../exercise4/connect_to_db.php";

    $sql = "SELECT first_name,last_name,email,tel_number FROM clients";
    $result = mysqli_query($conn, $sql);
    echo "Fetched data successfully\n";


    echo "<table>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo"<th>Telephone number</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {            
    echo "<tr>";
    echo "<td>".$row["first_name"]."</td>";
    echo "<td>".$row["last_name"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["tel_number"]."</td>";
    echo "</tr>";
}

    echo "</table>";

    mysqli_free_result($result);
    mysqli_close($conn);
?>

