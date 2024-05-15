<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

    <?php

    $vars = "1111aa";

    echo "salon tog's";
    echo "<br>";
    print($vars);
    echo $vars;
    print 1;

    function send(): string
    {
        global $vars;
        return $vars . $vars;
    }

    send()

    ?>
</body>

</html>