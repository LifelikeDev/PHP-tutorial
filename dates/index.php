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

    $currDate = date("Y/d/m H:i:s");
    $structuredDate = date_parse_from_format("F j Y H:i:s", $currDate);
    $currTime = time();

    echo "<p> $currDate </p>";
    echo "<pre>";
    print_r($structuredDate);
    echo "</pre>";
    echo "<p> $currTime </p>";

    ?>

</body>

</html>