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

    # regular function declaration

    function saySomething($myName)
    {
        $mySecondName = "John C. Maxwell";
        echo "<p> I've got to say say something. Erm... my name is $mySecondName <p>";
        echo "<article> I've got to say say something. Erm... my name is $myName <p>";
    }

    saySomething("Theodore R. Burgenz");

    // function math($a, $b, $c)
    // {
    //     return $a * $b / $c;
    // }

    // print_r(math(2, 5, 1.2));

    function performMath(...$nums)
    {
        $newArr = [...$nums];
        $total = 0;

        for ($i = 0; $i < sizeof($newArr); $i++) {
            $total += $newArr[$i];
        }

        return $total;
    }

    echo performMath(1, 2, 4, 5, 3, 7, 9);


    # reduce function (method)

    function doMath(...$nums)
    {

        return array_reduce($nums, fn ($carry, $n) => $carry + $n);
    }

    echo "<br>";
    echo doMath(5, 5, 2, 9, 4, 7, 1, 6);

    // echo "<br>";

    ?>

</body>

</html>