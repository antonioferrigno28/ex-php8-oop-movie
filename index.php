<?php 
require_once "./Classes/Movie.php";
require_once "./Classes/Genre.php";
require_once "./db/db.php";



echo $movies[0]->getInfosNoGenre();
echo "<br>";
echo $movies[0]->getGenre();
echo "<br>";
echo $movies[1]->getInfosNoGenre();
echo "<br>";
echo $movies[1]->getGenre();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>