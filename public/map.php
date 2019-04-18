<?php
require './inc_head.php';



if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
}



for ($i = 1; $i< $_SESSION['eggsCounter']; $i++ ) {
    for ($j = 1; $j <= 2; $j++) {
        if($_SESSION['eggs']['egg'.$i]['alive'] && $_SESSION['eggs']['egg'.$i]['position'][0] == $_SESSION['player'.$j]['posX'] && $_SESSION['eggs']['egg'.$i]['position'][1] == $_SESSION['player'.$j]['posY']) {
            $_SESSION['eggs']['egg'.$i]['alive'] = false;
            $_SESSION['player'.$j]['eggCount'] += 1;
            $_SESSION['eggsCounter'] -=1;
        }
    }
}

?>





<section class="bg-light">
    <div class="container-fluid py-5">
        <div class="row">
           <div class="col-sm-3 text-center px-5">
               <h3><?php echo $_SESSION['player1']['name']?></h3>
               <img class="persoImg mb-4" src="<?php echo $_SESSION['player1']['imgSrc']?>" alt="player1 img">
               <div class="playerInfo py-4">
                  <ul class="list-group">
                      <li class="list-group-item"> Nombre d'oeuf : <?= $_SESSION['player1']['eggCount']?></li>
                  </ul>
               </div>
               <?php if ($_SESSION['count'] % 2 != 0) {?>
                   <div class="alert alert-warning">A toi de jouer !</div>
               <div class="playerControl container my-5">
                   <div class="row">
                       <div class="col-sm-4 offset-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=up" class="btn btn-dark btn-control">Up</a>
                       </div>
                   </div>
                   <div class="row my-3">
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=left" class="btn btn-dark btn-control">Left</a>
                       </div>
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=down" class="btn btn-dark btn-control">Down</a>
                       </div>
                       <div class="col-sm-4">
                           <a href="/src/service/process.php?p=1&amp;d=right" class="btn btn-dark btn-control">Right</a>
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
                            for($k=1;$k < $_SESSION['eggsCounter'];$k++){
                                if ($_SESSION['eggs']['egg'.$k]['alive'] && $_SESSION['eggs']['egg'.$k]['position'][0] == $j && $_SESSION['eggs']['egg'.$k]['position'][1] == $i) { ?>
                                    <div class=" py-5  h-100 w-100">
                                        <img src="<?php echo $_SESSION['eggs']['egg'.$k]['imgSrc'] ?>" alt="egg" class="eggsImage">
                                    </div>
                            <?php
                                }
                            }
                            if($_SESSION['player1']['posX'] == $j && $_SESSION['player1']['posY'] == $i) { ?>
                                <div class="rounded-circle bg-warning py-5  h-100 w-100">
                                     <?php echo $_SESSION['player1']['name'] ?>
                                </div>
                             <?php }
                            else if  ($_SESSION['player2']['posX'] == $j && $_SESSION['player2']['posY'] == $i){ ?>
                                <div class="rounded-circle bg-danger py-5 h-100 w-100">
                                    <?php echo $_SESSION['player2']['name'] ?>
                                </div>
                             <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-3 text-center px-5">
                <h3><?php echo $_SESSION['player2']['name']?></h3>
                <img class="persoImg mb-4" src="<?php echo $_SESSION['player2']['imgSrc']?>" alt="player2 img">
                <div class="playerInfo py-4">
                    <ul class="list-group">
                        <li class="list-group-item">Nombre d'oeuf : <?= $_SESSION['player2']['eggCount']?></li>
                    </ul>
                </div>
                <?php if($_SESSION['count'] % 2 == 0) { ?>
                <div class="alert alert-danger">A toi de jouer !</div>
                <div class="playerControl container my-5">
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=up" class="btn btn-dark btn-control">Up</a>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=left" class="btn btn-dark btn-control">Left</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=down" class="btn btn-dark btn-control">Down</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/src/service/process.php?p=2&amp;d=right" class="btn btn-dark btn-control">Right</a>
                        </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php
require './inc_script.php';