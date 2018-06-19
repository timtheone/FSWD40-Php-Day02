<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    Name:
    <input type="text" name="name"><br>
    Surname:
    <input type="text" name="surname"><br>
    <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            if( $_POST["name"] || $_POST["surname"]) {
                echo "<p>Welcome {$_POST["name"]} {$_POST["surname"]}";
            } else {
                echo "<p>Please enter your credentials</p>";
            }
        }
    ?>

    <?php
    function calc($int1,$int2){
        $result = $int1/$int2;
        echo $result;
    }
    
    calc(10,5);
    ?>
</body>
</html>

