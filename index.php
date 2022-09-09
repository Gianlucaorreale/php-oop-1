<?php

//create un file index.php in cui:
//- è definita una classe ‘Movie’
  // => all'interno della classe sono dichiarate delle variabili d'istanza
  // => all'interno della classe è definito un costruttore
  // => all'interno della classe è definito almeno un metodo
//- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie 
{
  public $name;
  public $year;
  public $genre;
  public $director;
  public $synopsis;
  
  public function __construct($name, $year, $genre, $director, $synopsis)
  {
    $this->name = $name;
    $this->year = $year;
    $this->genre = $genre;
    $this->director = $director;
    $this->synopsis = $synopsis;
  }

  public function getAbstract()
  {
    return substr($this->synopsis, 0, 30) . '...';
  }
}

$movie1_synopsis = "Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell'anarchia.";

$movie_1 = new Movie('The dark knight', '2008', 'superhero', 'Christopher Nolan',$movie1_synopsis);

//var_dump($movie_1->getAbstract());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>MY MOVIES</h1>
   <article>
      <p><?= $movie_1->getAbstract() ?></p>
      <h2><?= $movie_1->name ?></h2>
      <address><?= $movie_1->year ?></address>
      <address><?= $movie_1->genre ?></address>
      <address><?= $movie_1->director ?></address>
      <p><?= $movie_1->synopsis ?></p>
   </article>

</body>
</html>