<?php
    $viewer = getenv("HTTP_USER_AGENT");
    $browser = "An unindentified broweser";

    if(preg_match('/Chrome/i', "$viewer"))
    {
        $browser = "Chrome";
        $cssFileName = "chrome.css";
    } else if (preg_match('/Safari/i',"$viewer")) {
        $browser = "Safari";
        $cssFileName = "safari.css";
    }
    echo "$browser"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssFileName; ?>">
</head>
<body>
    <h1>Test 1</h1>
</body>
</html>


