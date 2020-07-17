<?php require_once 'conf/agent.conf.php'; ?>
<div class="row">
  <div class="col-md-8">
    <h2 class="sub-header text-center">Liste des agents</h2>
<div class="">
    <?php   if (@$_GET['Msg'] == true)   {    ?>
    <div class="alert-light text-success m-auto text-center">
            <?= $_GET['Msg'] ?>
    </div>
    <?php     } ?>
</div>
  </div>
  <div class="col-md-4">
    <form action="" method="post" class="navbar-form navbar-right">
      <input type="text" class="form-control" name="research" placeholder="Search...">
      <button type="submit" name="search" class="form-control btn btn-success">Search</button>
    </form>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>NOM</th>
        <th>POST NOM</th>
        <th>GENRE</th>
        <th>ETAT CIVIL</th>
        <th>DATE ENGAGENENT</th>
        <th>FONCTION</th>
        <th>ADDRESSE</th>
        <th>PHOTO</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <tr>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['postnom'] ?></td>
          <td><?= $row['genre'] ?></td>
          <td><?= $row['etatcivil'] ?></td>
          <td><?= $row['date_engagement'] ?></td>
          <td><?= $row['fonction'] ?></td>
          <td><?= $row['addresse'] ?></td>
          <td><img src="public/img/<?=$row['photo']?>" alt="" style="wdth:20px;height:20px"></td>
          <!-- <td><a href="index.php?page=editagent&id=<?=$row['id']?>" class="btn btn-success">Edition</a></td> -->
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>