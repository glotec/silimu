<?php require_once 'conf/categorie.conf.php' ?>
<div class="row">
  <div class="col-md-4">
    <h2 class="sub-header text-center">Rapport par cathégorie</h2>
  </div>
  <div class="col-md-6">
    <form action="" method="post" class="navbar-form navbar-right">
        <div class="form-group">
        <!-- <label for="password">Gender</label> -->
            <select name="matr" class="form-control item-center" id="gender">
                <option value="Actif">Actif</option>
                <option value="Détaché">Detache</option>
                <option value="Mise en disponibilité">Mise en disponibilite</option>
                <option value="Suspendu">Suspendu</option>
                <option value="Deserte">Deserte</option>
                <option value="Décedé">Decede</option>
                <option value="Retraité">Retraite</option>
            </select>
      <button type="submit" name="csearch" class="form-control btn btn-success">Search</button>
        </div>
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
        <th>Matricule</th>
        <th>Nom</th>
        <th>Post nom</th>
        <th>Affectation</th>
        <th>Lieu d'affectation</th>
        <th>Service</th>
        <!-- <th>Profession</th> -->
        <th>Position</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <tr>
          <td><?= $row['numeroordre'] ?></td>
          <td><?= $row['matricule'] ?></td>
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