<?php
include './inc_head.php';
include './connexionApi.php';
$_SESSION['player3']['pv'] = 100;
?>
<header class="jumbotron text-center text-white bg-dark">
    <h2>Petits Lapins Prod vous à présenté</h2>
</header>
<section>
    <div class="container py-5">
        <div class="row py-5 text-center">
            <div class="col-sm-12">
                <h1>EGGS FIGHTERS</h1></br></br>
                <h3 class="damage">Yavuz vous a infligé <span class="dmgNb">6000</span> de dégats!</h3>
                <p>vous avez perdu!</p>
                <p>Il ne vous reste plus que vos yeux pour pleurer...</p>
                <img src ="https://cdn.discordapp.com/attachments/568117769548333067/568348557447528451/Photo_-_02019-13-18-10-13-46.jpg">
                <p>vous ferez mieux la prochaine fois! OU PAS!!!</p></br>
            </div>
            <div class="col-md-12">
                <a href="Attaque.php" class="btn btn-info mb-2" role="button">Réessayer</a>
            </div>
        </div>
    </div>
</section>
<footer class="text-center py-5">
    <div class="container ">
        <p>Vive les lapins !</p>
    </div>
</footer>

<?php
include './inc_script.php';
?>