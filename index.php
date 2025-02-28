<?php 
require_once "./Classes/Movie.php";

$nataleInIndia = new Movie("Natale in india", "Neri Parenti", "Comico", 2003);
$shutterIsland = new Movie("Shutter Island", "Martin Scorsese", "Thriller", 2010);

echo $nataleInIndia->getInfos();
echo "<br>";
echo $shutterIsland->getInfos();

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