<?php 
//require dei trait PRIMA
require_once "./Traits/DownloadLink.php";
//Poi quello delle classi
require_once "./Classes/Movie.php";
require_once "./Classes/Genre.php";
//Poi quello del db
require_once "./db/db.php";


//Primo film
//Setto il nuovo trait del link per il downlaod
$movies[0]->setDownloadLink("abcdef");
//Lo mostro in pagina Output:abcdef
echo $movies[0]->getDownloadLink();
//Mostro in pagina l'oggetto primo film
var_dump($movies[0]);
//Metodo della classe Movie per avere i film senza genere
echo $movies[0]->getInfosNoGenre();
echo "<br>";
//Metodo della classe Genre per avere il genere
echo $movies[0]->genre->getGenre();
echo "<br>";


//secondo film
//Setto il nuovo trait del link per il downlaod
$movies[1]->setDownloadLink("ghijkl");
//Lo mostro in pagina Output:ghijkl
$movies[1]->getDownloadLink();
//Mostro in pagina l'oggetto secondo film
var_dump($movies[1]);
//Metodo della classe Movie per avere i film senza genere
echo $movies[1]->getInfosNoGenre();
echo "<br>";
//Metodo della classe Genre per avere il genere
echo $movies[1]->genre->getGenre();


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