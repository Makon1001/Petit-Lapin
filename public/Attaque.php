<?php
include "./inc_head.php";
function change(){
    if($_SESSION['player3']['pv']===50){
        echo $_SESSION['player3']['name'];
    }else{
        echo $_SESSION['playerFinal']['name'];
    }
}
function ok(){
    if($_SESSION['player3']['pv']===50){
        echo '<div class="col-md-12 text-center"><h2>Yavuz perd 50 pv!!</h2></div>';
    }
}

if(isset($_GET['a']) && $_GET['a']==='@'){
    header('location: /public/victoire.php');
}
?>
                    <!-- Joueurs -->

<div class="container-fluid jumbotron py-5 bg-dark text-white">
    <div class="row  d-flex justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Prèt pour la bagarre ?</h1>
        </div>
        <?php ok(); ?>
        <div class="col-md-12 text-center">
            <h2><?php change() ?> à toi de jouer !!!</h2>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="row d-flex justify-content-center">
        <div class="card text-center col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="py-2 pb-2 black"><?php  echo $_SESSION['playerFinal']['name']?></h1>
                </div>
                <div class="col-md-6">
                    <h1 class="py-2 pb-2 black">100 PV</h1>
                </div>
            </div>
            <div>
                <img class="py-2 mb-2" src="<?php echo $_SESSION['playerFinal']['imgSrc'] ?>" alt="1">
            </div>
            <div>
                <a href="/src/controller/attaqueController.php" class="btn btn-info py-2 pb-2 mb-2" role="button">Attaquer</a>
            </div>
        </div>
        <div class="card text-center col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="py-2 pb-2 black"><?php  echo $_SESSION['player3']['name']?></h1>
                </div>
                <div class="col-md-6">
                    <h1 class="py-2 pb-2 black"><?php echo $_SESSION['player3']['pv'];?> PV</h1>
                </div>
            </div>
            <div>
                <img class="py-2 mb-2 img" src=<?php echo $_SESSION['player3']['imgSrc'] ?> alt="27">
            </div>
            <div>
                <a href="defaite.php" class="btn btn-info mb-2" role="button">Attaque</a>
            </div>
        </div>
    </div>
</div>

    <?php
include "./inc_script.php";
?>
