<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP tutorials</title>
</head>

<body>

    <?php
    //----------      PHP code here....      ------------//

    // ### Class
    // class Regular
    // {
    //     public $hair;
    //     public $color;
    //     private $bloodGroup;
    // }

    // ### Instance of class
    // $regular = new Regular();

    // // Defining variables...
    // $regular->hair = "brown";
    // $regular->color = "white";
    // // $regular->bloodGroup = false;

    // echo "<pre>";
    // var_dump($regular);
    // echo "</pre>";

    require_once "Cars.php";
    require_once "Model.php";

    // $oddCar = new Cars("Hilux", "Toyota");
    // $oddCar->setLikes(1030);    // calling them uniquely... 

    // echo "<pre>";
    // var_dump($oddCar);
    // echo "</pre>";

    // echo "<p> The number of likes this car has is " . $oddCar->getLikes() . " </p>";

    // echo Cars::$counter . "<br>"; 
    echo Cars::getCounter();

    ### Inheriting class from Model.php
    $ranModel = new Model("Accord", "Honda", 2014);

    echo "<pre>";
    var_dump($ranModel);
    echo "</pre>";



    ?>

</body>

</html>