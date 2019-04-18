<?php
include './inc_head.php';
include './connexionApi.php';
?>
<header class="jumbotron text-center text-white bg-dark">
    <h2>Petits Lapins Prod présente</h2>
</header>
<section>
    <div class="container py-5">
        <div class="row py-5 text-center">
            <div class="col-sm-12">
                <h1>EGGS FIGHTERS</h1>
                <p>Bienvenue dans Eggs Figther ! Le but du jeu est d'affronter un autre joueur dans un combat (pas du tout) à mort.
                    Pourquoi ? Récupérer les oeufs bien sûr !</p>
                <h3>Instructions</h3>
                <p>Pour jouer, selectionne un personnage et prépare toi à la bagarre ! La suite est simple, castagne ou soit castagné. <br/>
                    Ce jeu étant un jeu de bagarre, il faut logiquement être 2 joueurs. Trouve un copain et installe toi.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark pb-5 text-white" id="form-div">
    <div class="container">
        <div class="row" >
            <form method="POST" action="../src/service/process.php" class="col-sm-12 text-center">
                <button class="btn btn-primary" value="submit" type="submit" id="index-btn">Let's go</button>
                <div class="form-row">
                    <div class="col-sm-5 form-group">
                        <label for="player1_name">Joueur 1</label>
                        <input class="form-control" type="text" name="player1_name" id="player1_name">
                    </div>
                    <div class="col-sm-5 offset-sm-2 form-group">
                        <label for="player2_name">Joueur 2</label>
                        <input class="form-control" type="text" name="player2_name" id="player2_name">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    <hr class="m-0">
<footer class="text-center py-5">
    <div class="container ">
        <p>Hackathon 1</p>
    </div>

</footer>

<?php
include './inc_script.php';
