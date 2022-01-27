<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<!-- CREO UNA CLASSE MOVIE -->

<?php

class Movie {
    public $title;

}
// CREO LE ISTANZE DELLA CLASSE MOVIE
$terminator = new Movie();
$rambo = new Movie();
var_dump($terminator);

?>
</body>
</html>