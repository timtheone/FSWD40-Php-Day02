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
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel_number = mysqli_real_escape_string($conn, $_POST['tel_number']);

        $sql = "UPDATE clients SET first_name = '$first_name',
                           last_name = '$last_name',
                           email = '$email',
                           tel_number = '$tel_number' WHERE client_id = {$update_id}";

        if(mysqli_query($conn, $sql)){
            header('Location: '.ROOT_URL.'display_data.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM clients WHERE client_id =".$id;
    
    $result = mysqli_query($conn, $sql);
    
    $user = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result);
    mysqli_close($conn);
?>


<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="first_name">First name</label>
    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" value="<?php echo $user['first_name'] ?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" value="<?php echo $user['last_name'] ?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $user['email'] ?>">
  </div>
  <div class="form-group">
    <label for="tel_number">Telephone number</label>
    <input type="text" class="form-control" id="tel_number" placeholder="Last name" name="tel_number" value="<?php echo $user['tel_number'] ?>">
  </div>
  <input type="hidden" name="update_id" value="<?php echo $user['client_id'] ?>">
  <input type="submit" name="submit" class="btn btn-primary">
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>


