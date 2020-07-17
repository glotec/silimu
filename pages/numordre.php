<?php require_once 'conf/numordre.php' ?>
<div class="row">
  <div class="col-md-8">
    <h2 class="sub-header text-center">Rapport par numéro d’ordre</h2>
  </div>
  <div class="col-md-4">
    <form action="" method="post" class="navbar-form navbar-right">
      <input type="text" class="form-control" name="search" id="search" placeholder="Search...">
      <button type="submit" name="bsearch" class="form-control btn btn-success">Search</button>
    </form>
  </div>
</div>
<hr>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Numéro d'ordre</th>
        <th>Nom</th>
        <th>Post nom</th>
        <th>Affectation</th>
        <th>Lieu d'affectation</th>
        <th>Service</th>
        <th>Position</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <tr>
          <td><?= $row['numeroordre'] ?></td>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['postnom'] ?></td>
          <td><?= $row['affectation'] ?></td>
          <td><?= $row['lieu'] ?></td>
          <td><?= $row['service'] ?></td>
          <td><?= $row['position'] ?></td>
          <td><?= $row['photo'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- </div> -->