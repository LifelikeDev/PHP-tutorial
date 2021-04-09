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

    $randFig = 1;

    # while loop
    // while ($randFig < 15) {
    //     print_r("$randFig <hr>");

    //     $randFig++;
    // }

    # for loop
    $myArray = ["Joe", "Noella", "Pat", "Bee", "Gregory"];

    for ($i = 0; $i < sizeof($myArray); $i++) {
        print_r("<p> $myArray[$i] </p>");
    }

    # for each 
    $myCars = ["Lamborghini", "Rolls-Royce", "Mercedes-Benz", "Honda", "Toyota", "Ford"];

    foreach ($myCars as $car) {
        print_r("<li> $car </li>");
    }

    $personColor = [
        "Joana" => "blue",
        "Kate" => "grey",
        "Jon" => "green",
        "Kyle" => "black"
    ];

    foreach ($personColor as $key => $value) {
        echo "<div> $key's favourite color is $value </div>";
    }


    ?>

</body>

</html>