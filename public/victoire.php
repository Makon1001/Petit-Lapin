<?php
include './inc_head.php';
include './connexionApi.php';
include './inc_script.php';
session_destroy ();
?>
<header class="jumbotron text-center text-white bg-dark">
    <h2>Petits Lapins Prod vous à présenté</h2>
</header>
<body class =fun-color>
    <section>
        <div class="container py-5">
            <div class="row py-5 text-center">
                <div class="col-sm-12">
                    <h1>EGGS FIGHTERS</h1>
                    <p class="damage">Vous avez gagné face a Yavuz grace au pouvoir du <span class="dmgNb">@</span>!</p>
                    <p>le jeu est terminé!</p>
                    <img src ="https://www.assoedc.com/wp-content/uploads/2015/09/EDC-Victoire-EnR.jpg">
                    <p>Merci d'avoir joué!</p>
                </div>
                <div class="col-md-12">
                    <a href="index.php" class="btn btn-info mb-2" role="button">Réessayer</a>
                </div>
            </div>
        </div>
    </section>
</body>
    <hr class="m-0">
<footer class="text-center py-5">
    <div class="container ">
        <p>Merci à tous !</p>
    </div>

</footer>
<?php 
include './inc_script.php'; 
?>