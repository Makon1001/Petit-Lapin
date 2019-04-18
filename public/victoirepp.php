<?php
include './inc_head.php';
include './connexionApi.php';
include './inc_script.php';
?>
<header class="jumbotron text-center text-white bg-dark">
    <h2>Petits Lapins Prod vous à présenté</h2>
</header>
<section>
    <div class="container py-5">
        <div class="row py-5 text-center">
            <div class="col-sm-12">
                <h1>EGGS FIGHTERS</h1>
                <h2><?= $_SESSION['playerFinal']['name']?></h2>
                <p class="youWin">Vous avez gagne!</p>
                <p>Vous allez pouvoir affronter le boss final!</p>
            </div>
            <div class="col-md-12">
                <a href="Attaque.php" class="btn btn-info mb-2" role="button">Fight!!!</a>
            </div>
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
?>