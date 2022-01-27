<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
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
    // definisco le variabili generiche delle istanze
    public $title;
    public $author;
    public $year;
    // assegno anche una variabile comune a tutte le istanze
    public $production = 'Metro goldwyn mayer';

    // DEFINISCO UN METODO (che mi restituirà la stringa completa con tutte le caratteristiche dell'istanza)

    public function getMovieComplete() {
        return $this->title . ' - ' . $this->author . ' - ' . $this->year . ' - ' . $this->production;
    }


}
// CREO LE ISTANZE DELLA CLASSE MOVIE
$terminator = new Movie();
// ad ogni istanza assegno il proprio attributo
$terminator->title = 'TERMINATOR';
$terminator->author = 'James Cameron';
$terminator->year = '1984';

$rambo = new Movie();
// ad ogni istanza assegno il proprio attributo
$rambo->title = 'RAMBO (first blood)';
$rambo->author = 'Ted Kotcheff';
$rambo->year = '1982';

$rocky = new Movie();
// ad ogni istanza assegno il proprio attributo
$rocky->title = 'ROCKY';
$rocky->author = 'John Avildsen';
$rocky->year = '1976';

var_dump($terminator);
var_dump($rambo);
var_dump($rocky);
var_dump($terminator->getMovieComplete());


?>

<div class="container">
    <div class="movie">
        <h2 class="info"> <?php echo $terminator->getMovieComplete(); ?> </h2>
        <h2> <?php echo $terminator->title; ?> </h2>
        <h3> <?php echo $terminator->author; ?> </h3>
        <h4> <?php echo $terminator->year; ?> </h4>
        <h5> <?php echo $terminator->production ?> </h5>
    </div>
    <div class="movie">
    <h2 class="info"> <?php echo $rambo->getMovieComplete(); ?> </h2>
        <h2> <?php echo $rambo->title; ?> </h2>
        <h3> <?php echo $rambo->author; ?> </h3>
        <h4> <?php echo $rambo->year; ?> </h4>
        <h5> <?php echo $rambo->production; ?> </h5>
    </div>
    <div class="movie">
    <h2 class="info"> <?php echo $rocky->getMovieComplete(); ?></h2>
        <h2> <?php echo $rocky->title ?> </h2>
        <h3> <?php echo $rocky->author ?> </h3>
        <h4> <?php echo $rocky->year ?> </h4>
        <h5> <?php echo $rocky->production ?> </h5>
    </div>
</div>

</body>
</html>