<?php
require '../vendor/autoload.php';
include '../src/views/inc_head.php';
include '../src/views/connexionApi.php';

// content
//var_dump($test = selectAllPerso());

include '../src/views/inc_script.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Petit-Lapin</title>
    </head>
    <body>

        <h1 align=center>Eggs fighter</h1>
        </br></br>
        <p align=center>Dans ce jeu  il vous faudra rassembler 12 œufs en les ramassent. Réussir à conserver vos œufs tout en écrasant votre adversaire! Sauraiz vous y parvenir ?</p>
        </br></br>
        <p align=center>Pour ce jeu commencer par rentrer le nom des joueurs, vous pourrez ensuite choisir vos personnages. </br>
        Une fois vos personnages sélectionnés, il vous faudra ramasser des oeufs avant l'autre joueur. </br>
        Puis vous passerez à la phase de combat ou vous et vôtre adversaire allait mettre vos oeufs en </br>
        jeu, celui qui a ramasser le plus d'oeufs commence. Ce jeu est en tour par tour, alors amusé vous !</p>
        </br></br>
        <form>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Joueur 1</h5>
                        <input type="email" class="form-control" id="nom_joueur1" aria-describedby="emailHelp" placeholder="Enter le nom du joueur 1">
                    </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Joueur 2</h5>
                        <input type="email" class="form-control" id="nom_joueur2" aria-describedby="emailHelp" placeholder="Enter le nom du joueur 2">
                    </div>
                    </div>
                </div>
               </div>
               </br></br>
               <div align=center> 
            <button type="submit" class="btn btn-primary">Débuter le jeu</button>
            </div>
        </form>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
