<?php 
  require_once 'conf/selectall.php'; 
  require_once 'conf/select.php'; 
?>
<!-- <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> -->
<h1 class="page-header">Administration</h1>

<div class="row placeholders">
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $pers ?></h4>
    <span class="text-muted">Agents</span>
  </div>
  <div class="col-md-3 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $log ?></h4>
    <span class="text-muted">Comptes atifs</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $delog ?></h4>
    <span class="text-muted">Comptes inactifs</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $gm ?></h4>
    <span class="text-muted">Agents goma</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $bk ?></h4>
    <span class="text-muted">Agents bukavu</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $bk ?></h4>
    <span class="text-muted">Agents Uvira</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $h ?></h4>
    <span class="text-muted">Les hommes</span>
  </div>
  <div class="col-md-2 placeholder">
    <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
    <h4><?= $f ?></h4>
    <span class="text-muted">Les femmes</span>
  </div>
  <a href="index.php?page=agent" class="link">
    <div class="col-md-2 placeholder">
      <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
      <h4><?= $pers ?></h4>
      <span class="text-muted">Total agents</span>
    </div>
  </a>
</div>

<div class="row">
  <div class="col-md-6">
    <h1>Les agents actifs</h1>
    <!-- <div class="col-md-2 "> -->
      <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
      
      <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Goma</span>
        </div>
      </a>
      <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Bukavu</span>
        </div>
      </a>
      <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Uvira</span>
        </div>
      </a>
    </div>
  <!-- </div> -->
  <div class="col-md-6">
    <h1>Les agents inactifs</h1>
    <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Retraités</span>
        </div>
      </a>
      <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Congédiés</span>
        </div>
      </a>
      <a href="index.php?page=agent" class="link">
        <div class="col-md-2 placeholder">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"> -->
          <h4><?= $pers ?></h4>
          <span class="text-muted">Decès</span>
        </div>
      </a>
    <!-- <p><h3>Vous ne pouvez que changer votre mon de passe, en raison de sécurité</h3></p>
    <button type="button" class="btn btn-success">Changer</button> -->
  </div>
</div>