<?php
$request=$_POST;
var_dump($request);
echo  "this is a test request";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><?php echo $request['use_name'] ?></li>
    <li></li>
    <li></li>
</ul>
</body>
</html>