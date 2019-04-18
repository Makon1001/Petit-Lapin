<?php
require './inc_head.php';

if (!isset($_SESSION['player1']['posX']) && !isset($_SESSION['player1']['posY'])) {
    $_SESSION['player1']['posX'] = rand(0, 5);
    $_SESSION['player1']['posY'] = rand(0, 5);
}
if (!isset($_SESSION['player2']['posX']) && !isset($_SESSION['player2']['posY'])) {
    $_SESSION['player2']['posX'] = rand(0, 5);
    $_SESSION['player2']['posY'] = rand(0, 5);
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
}

// récupérer les images des oeufs return en array
$api = new \perso\ApiController();
$arrayEggs = $api->selectFiveRandomEggs();
for($i=0;$i<5;$i++){
    $eggs[$i]=get_object_vars($arrayEggs[$i]);
    $eggsImg[$i] = $eggs[$i]['image'];

}

// init position eggs et set imgEggs
for ($i= 1; $i <=5; $i++) {
    if (isset($_SESSION['egg'.$i]) && empty($_SESSION['egg'.$i]['position'])) {
        $_SESSION['egg'.$i]['position'] = [rand(0, 5), rand(0, 5)];
        $_SESSION['eggs'.$i]['imgSrc'] = $eggsImg[$i-1];
    }
}

?>





<section class="bg-light">
    <div class="container-fluid py-5">
        <div class="row">
           <div class="col-sm-3 text-center">
               <h3><?php echo $_SESSION['player1']['name']?></h3>
               <?php if ($_SESSION['count'] % 2 != 0) {?>
                    <div class="alert alert-warning">A toi de jouer !</div>
                    <?php } ?>
               <img class="persoImg mb-4" src="<?php echo $_SESSION['player1']['imgSrc']?>" alt="player1 img">
               <div class="playerInfo">
                  <ul class="list-group">
                      <li class="list-group-item"> Nombre d'oeuf : <?= $_SESSION['player1']['eggCount']?></li>
                  </ul>
               </div>
               <?php if ($_SESSION['count'] % 2 != 0) {?>
               <div class="playerControl container my-5">
                   <div class="row">
                       <div class="col-sm-4 offset-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=up" class="btn btn-dark">Up</a>
                       </div>
                   </div>
                   <div class="row my-3">
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=left" class="btn btn-dark">Left</a>
                       </div>
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=down" class="btn btn-dark">Down</a>
                       </div>
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=right" class="btn btn-dark">Right</a>
                       </div>
                   </div>
               </div>
               <?php } ?>
           </div>
            <div class="col-sm-6 gameMap">
                <?php
                for ($i = 0; $i < 6; $i++) { ?>
                    <div class="row" id="row-<?= $i?>">
                        <?php
                        for ($j = 0 ; $j < 6; $j++) {?>
                        <div class="col-sm-2 border border-white bg-dark text-center p-0" id="col-<?= $j?>">
                            <?php
                             if ($_SESSION['player1']['posX'] == $j && $_SESSION['player1']['posY'] == $i) { ?>
                            <div class="rounded-circle bg-warning py-5  h-100 w-100">
                                 <?php echo $_SESSION['player1']['name'] ?>
                            </div>
                             <?php } else if  ($_SESSION['player2']['posX'] == $j && $_SESSION['player2']['posY'] == $i){ ?>
                                <div class="rounded-circle bg-danger py-5 h-100 w-100">
                                 <?php echo $_SESSION['player2']['name'] ?>
                                </div>
                             <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-3 text-center">
                <h3><?php echo $_SESSION['player2']['name']?></h3>
                <?php if ($_SESSION['count'] % 2 == 0) {?>
                    <div class="alert alert-danger">A toi de jouer !</div>
                <?php } ?>
                <img class="persoImg mb-4" src="<?php echo $_SESSION['player2']['imgSrc']?>" alt="player2 img">
                <div class="playerInfo">
                    <ul class="list-group">
                        <li class="list-group-item">Nombre d'oeuf : <?= $_SESSION['player2']['eggCount']?></li>
                    </ul>
                </div>
                <?php if($_SESSION['count'] % 2 == 0) { ?>
                <div class="playerControl container my-5">
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=up" class="btn btn-dark">Up</a>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=left" class="btn btn-dark">Left</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=down" class="btn btn-dark">Down</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=right" class="btn btn-dark">Right</a>
                        </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</section>


<?php
require './inc_script.php';