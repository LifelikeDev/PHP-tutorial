<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP tutorial</title>
</head>

<body>

    <?php

    // $myArray = ["he", "she", "they", "herre"];
    // $myArray2 = array("Greg", "Matt", "The Blues", "Liuew");

    // # first array

    // echo "<pre>";
    // var_dump($myArray);
    // echo "</pre>";

    // $myArray[] = ["Mr. Do-It-All", "Gellian"];

    # altered array

    // array_unshift($myArray, ...$myArray2);
    // echo count($myArray);

    // $newStr = "Section One,Section Two,Class Three,Stage Four,Level 500";

    // # split a string into an array
    // $altArray = explode(",", $newStr);

    // echo "<pre>";
    // var_dump($altArray);
    // echo "</pre>";

    // # join an array into a string
    // $altStr = implode(",", $altArray);
    // echo "<p> $altStr </p>";

    // #sort an array
    // sort($altArray);

    // echo "<pre>";
    // var_dump($altArray);
    // echo "</pre>";

    // associative array 
    $assoArray = [
        "name" => "Meghan",
        "age" => 30,
        "height" => 4.5
    ];

    $assoArray["colors"] = ["blue", "red", "green"];
    $assoArray["address"] = "233-3344-5555";

    echo "<pre>";
    echo "<p>";
    print_r($assoArray);
    echo "</p>";
    echo "</pre>";

    # null coalescing operator
    // if (!isset($assoArray["address"])) {
    //     $assoArray["address"] = "not stated";
    // }

    $assoArray["address"] ??= "unknown";

    echo "<pre>";
    print_r($assoArray);
    echo "</pre>";

    # two dimensional arrays
    $twoArray = [
        ["movie" => "The Unknown", "likes" => 300, "category" => "sci-fi"],
        ["movie" => "Brokenhearted", "likes" => 20, "category" => "love"],
        ["movie" => "Joy in Earth", "likes" => 340, "category" => "nature"]
    ];

    echo "<pre>";
    print_r($twoArray);
    echo "</pre>";


    ?>

</body>

</html>