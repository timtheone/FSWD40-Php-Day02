<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
    include "../exercise4/connect_to_db.php";

    if(isset($_POST['submit'])){
        $client_id = mysqli_real_escape_string($conn, $_POST['client_id']);
        $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
        $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel_number = mysqli_real_escape_string($conn, $_POST['tel_number']);

        $sql = "UPDATE clients SET first_name = '$first_name',
                           last_name = '$last_name',
                           email = '$email',
                           tel_number = ''$tel_number' WHERE client_id = $client_id";
    }
    
    $sql = "SELECT client_id,first_name,last_name,email,tel_number FROM clients";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>

<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Telephone Number</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $key => $value) {
            echo "<tr>";
            echo "<td>".$value["first_name"]."</td>";
            echo "<td>".$value["last_name"]."</td>";
            echo "<td>".$value["email"]."</td>";
            echo "<td>".$value["tel_number"]."</td>";
            echo "<td><button class=\"btn btn-primary updateBtn\">
            <a href=\"".ROOT_URL."update_data.php?id=".$value["client_id"]."\">Update</a>
            </button</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
    // let btn = $(".updateBtn")
    // for (let i = 0; i < btn.length; i++) {
    //     let form_wrapper = $(".form-wrapper").hide();
    //     $(`.updateBtn:eq(${i})`).on("click", function(){
    //         $(".form-wrapper").toggle();
    //     });
    // }
</script>
</body>
</html>


