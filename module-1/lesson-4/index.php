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

        .box{
            background-color: lime;
            color:black;
            padding: 12px 19px;
            width: 32px;
            border-radius: 23px;
        }
    </style>
</head>

<body>
    <?php

   define('DOCUMENT', 'nimadurlar.docx');
   define('favourite_number', 'black');
   const app="Telegram";
   const app2="Whatsapp";
   

//    define('DOCUMENT', 'topshiriq.txt'); qayta DOCUMENT e'lon qila olmaysiz Janob 

   echo DOCUMENT;
   echo "<br>|-------------------------|<br>";
   echo favourite_number;
   echo "<br>|-------------------------|<br>";
   echo app;
   echo "<br>|-------------------------|<br>";
   echo app2;

   $arr=['a','b','c','d','e','f','g','h','i'];

   foreach($arr as $val){
    echo "<div class='box'>".$val."</div>";
    echo "<br>";
   }

   die("salom , Hayr");
   echo "<br>|-------------------------|<br>";

    ?>

   

</body>

</html>