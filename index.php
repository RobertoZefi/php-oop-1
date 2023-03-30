<?php  

include 'movie.php'; 

$film1 = new Movie("Transformer",["Action", "Thriller"]);
$film1 -> attori = 'Megan Fox,' .' '. 'Josh Duhamel';
$film1 -> valutazione = 3;

$film2 = new Movie("Harry Potter",["Fantasy", "Drama"]);
$film2 -> attori = 'Daniel Radcliffe,' .' '. 'Rupert Grint';
$film2 -> valutazione = 5;

// var_dump($film1, $film2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1 class="title">MOVIE</h1>

        <div class="row">
            <div class="card">
                <p class="film-title"> <strong>Titolo:</strong> <?php echo $film1 -> titolo ?> </p>
                <div class="generi">
                    <strong>Genere: </strong>
                    <?php
                        for($i = 0; $i < sizeof($film1->genere); $i++){
                            ?>
                            <p> <?php echo $film1->genere[$i]; ?> </p>
                            <?php
                        }
                    ?>
                </div>
                <p> <strong>Attori:</strong> <?php echo $film1->attori ?> </p>
                <p> <strong>Valutazione:</strong> <?php echo $film1->valutazione ?> </p>
                <p> <?php echo $film1->getVote($film1 -> valutazione) ?> </p>
            </div>

            <div class="card">
                <p class="film-title"> <strong>Titolo:</strong> <?php echo $film2 -> titolo ?> </p>
                <div class="generi">
                    <strong>Genere:</strong>
                    <?php
                        for($i = 0; $i < sizeof($film2->genere); $i++){
                            ?>
                            <p> <?php echo $film2->genere[$i]; ?> </p>
                            <?php
                        }
                    ?>
                </div>
                <p> <strong>Attori:</strong> <?php echo $film2->attori ?> </p>
                <p> <strong>Valutazione:</strong> <?php echo $film2->valutazione ?> </p>
                <p class="vote"> <?php echo $film2->getVote($film2 -> valutazione) ?> </p>
            </div>

        </div>
    </div>


</body>
</html>

