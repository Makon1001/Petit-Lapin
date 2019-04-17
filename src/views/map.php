<?php
require './inc_head.php';
?>

<section>
    <div class="container-fluid py-5">
        <div class="row">
           <div class="col-sm-3 text-center">
               <h3>Player 1</h3>
               <img src="<?php echo $_SESSION['player1']['imgSrc']?>" alt="player1 img">
           </div>
            <div class="col-sm-6 gameMap">
                <?php
                for ($i = 0; $i < 6; $i++) { ?>
                    <div class="row" id="row-<?= $i?>">
                        <?php
                        for ($j = 0 ; $j < 6; $j++) {?>
                        <div class="col-sm-2 border border-white bg-dark" id="col-<?= $j?>">
                            <?php
                             if (isset($_SESSION['player1']) && $_SESSION['player1']['position'] == [$j, $i]) { ?>
                                 <img class="gameImage" src="<?php echo $_SESSION['player1']['imgSrc'] ?>" alt="player1">
                             <?php } else if  (isset($_SESSION['player2']) && $_SESSION['player2']['position'] == [$j, $i]){ ?>
                                 <img class="gameImage" src="<?php echo $_SESSION['player2']['imgSrc'] ?>" alt="player2">
                             <?php } ?>
                            <p>test</p>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-3 text-center">
                <h3>Player 2</h3>
                <img src="<?php echo $_SESSION['player2']['imgSrc']?>" alt="player2 img">

            </div>
        </div>
    </div>
</section>












<?php
require './inc_script.php';
