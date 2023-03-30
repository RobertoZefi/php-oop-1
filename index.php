<?php  

include 'movie.php'; 

$film1 = new Movie("Transformer","Action");
$film1 -> attori = 'Megan Fox,' .' '. 'Josh Duhamel';
$film1 -> valutazione = 4;

$film2 = new Movie("Harry Potter","Fantasy");
$film2 -> attori = 'Daniel Radcliffe,' .' '. 'Rupert Grint';
$film2 -> valutazione = 5;

var_dump($film1, $film2);

?>

