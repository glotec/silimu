<?php 
  require_once 'conf/selectall.php'; 
  require_once 'conf/select.php'; 
?>
<!-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> -->
<h1 class="page-header">Statistiques</h1>

<div class="row text-center" style="color:#0CB96E;">
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $pers ?></h2>
            <p>Tous les agents</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $f ?></h2>
            <p>Agents actifs</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $f ?></h2>
            <p>Agents retraités</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $f ?></h2>
            <p>Agents suspendus</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $h ?></h2>
            <p>Agents en disponibilité</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $h ?></h2>
            <p>Agents en détachement</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $h ?></h2>
            <p>Agents abandonnés</p>
        </div>        
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <h2><?= $h ?></h2>
            <p>Agents Décédés</p>
        </div>        
    </div>
</div>