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

    $str = "Assalamu alaykum Jonginam ";

    echo strlen($str);
    echo str_word_count($str); // count words in a string
    echo strrev($str); // reverse a string
    echo strpos($str, "Jonginam"); // find the position of a string
    echo str_replace("Jonginam", "Asalim", $str); // replace a string
    echo str_shuffle($str); // shuffle a string
    echo str_repeat($str, 3); // repeat a string
    print_r(str_split($str, 3)); // split a string into an array
    echo substr($str, 0, 10); // extract a part of a string
    echo str_pad($str, 20, "0", STR_PAD_LEFT); // pad a string with another string
    echo str_pad($str, 20, "0", STR_PAD_RIGHT); // pad a string with another string
    echo str_pad($str, 20, "0", STR_PAD_BOTH); // pad a string with another string
    echo str_pad($str, 20, "0", STR_PAD_BOTH); // pad a string with another string

    // ashnaqa : ) Jonginam endi Number metodlarini qareymiz

    $a = 5;
    $b = 5.34;
    $c = "25";

    var_dump($a);
    var_dump($b);
    var_dump($c);

    // bu yerda var_dump() js degi typeOfdek ishlab beradi : )

    echo is_float($a);
    echo is_float($b);

    // type conversion kak )

    $strs = "salom";
    $strs = (array) $strs;

    echo "<br><br><br><br>";
    echo gettype($strs);
    var_dump($strs);

    // Math operatorlarni ko'rib chiqamiz 

    $pi =pi();
    $min=min(12,33,1,22,-34,999);
    $max=max(12,33,1,22,-34,999);
    $rand=rand(1,100);
    echo "<br><br><br><br>";
    echo $pi;
    echo "<br><br><br><br>";
    echo $min;
    echo "<br><br><br><br>";
    echo $max;
    echo "<br><br><br><br>";
    echo $rand;


    ?>

</body>

</html>