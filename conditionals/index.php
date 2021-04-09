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

    #if statements 

    $myFig = 33300;
    $someLoan = 200;

    // if ($myFig >= 3000) {
    //     echo "<p> limit reached ... </p>";
    // }
    // OR

    // if ($myFig >= 3000)
    //     echo "<p> limit reached 2 ... </p>";
    // OR

    if ($myFig >= 3000) echo "<p> limit reached 3... </p>";

    if ($myFig == 33300 && $someLoan >= 30) {
        echo "<p> exact match here... </p>";
    } else {
        echo "<h3>not the truest type here...</h3>";
    }

    # Ternary operator
    // echo $someLoan >= 1180 ? "<p> Match </p>" : "<pre> No match </pre>";

    # Short Ternary operator
    // $someNewLoan = $someLoan ?: 300;

    // print_r($someNewLoan);

    # switch examples

    $newBoss = "Mary Captan";

    switch ($newBoss) {
        case "Mary Captan":
            echo "Young Female Boss";
            break;
        case "Charles Arth":
            echo "Another Young Male Boss";
            break;
        case "Jon Lee":
            echo "The Main Boss";
            break;
        default:
            echo "None be boss";
    }


    ?>

</body>

</html>