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

    $str = "salom";
    $inte = 11;
    $float = 12.334;
    $bool = true;
    $null = null;
    $array1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $array2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    print_r($array1);


    class Car
    {
        public $color;
        public $model;
        public $year;
        public function __construct($color, $model, $year)
        {
            $this->color = $color;
            $this->model = $model;
            $this->year = $year;
        }
        public function info()
        {
            echo "color: " . $this->color . "<br>";
            echo "model: " . $this->model . "<br>";
            echo "year: " . $this->year . "<br>";
        }
    }

    $car1 = new Car("red", "bmw", 2010);
    $car2 = new Car("black", "toyota", 2015);
    echo "<br> <br>";
    $car1 -> info();


    ?>
</body>

</html>