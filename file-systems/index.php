<?php
###       Magic constants

echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

###       Create a directory
// mkdir("random-mo");

###     Rename a directory
// rename("random-mo", "news");

###     Delete a directory
// rmdir("news");

// ###     Read content of a file
// echo "<pre>";
// echo file_get_contents("some.txt");
// echo "</pre>";

###     Write content of a file
// echo "<pre>";
// echo file_put_contents("ignore.ts", "Some random ignore text here...");
// echo "</pre>";

###     Scan the content of a directory
$dirContent = scandir("./");
echo "<pre>";
var_dump($dirContent);
echo "</pre>";
