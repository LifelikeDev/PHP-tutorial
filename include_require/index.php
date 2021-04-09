<?php
include "partials/header.php";
?>

<main>
    <h2>Home Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsa?</p>


    <?php
    require_once "functions/math.php";

    echo multiply(4, 4);
    echo "<br>";
    echo divide(100, 5.3);

    ?>
</main>

<?php include_once "partials/footer.php" ?>

</body>

</html>