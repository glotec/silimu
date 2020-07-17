<?php require_once 'conf/selectagent.php'; ?>
<div class="row">
  <div class="col-md-8">
    <h2 class="sub-header text-center">Tous les agents</h2>
  </div>
  <div class="col-md-4">
    <form action="" method="post" class="navbar-form navbar-right">
      <input type="text" class="form-control" name="research" id="research" placeholder="Search..." required>
      <button type="submit" name="bsearch" class="form-control btn btn-success">Search</button>
    </form>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>POST NOM</th>
        <th>GENRE</th>
        <th>NATIONALITE</th>
        <th>ETAT CIVIL</th>
        <th>LIEU DE NAISSANCE</th>
        <th>DATE DE NAISSANCE</th>
        <th>CONTACT</th>
        <th>EMAIL</th>
        <th>COMMUNE</th>
        <th>MATRICULE</th>
        <th>NUMERO D'ORDRE</th>
        <th>NUMERO REFERENCE</th>
        <th>DATE ENGAGENENT</th>
        <th>DERNIERE FONCTION</th>
        <th>AFFECTATION</th>
        <th>LIEU D'AFFECTATION</th>
        <th>NIEAU D'ETUDE</th>
        <th>GRADE</th>
        <th>QUALIFICATION</th>
        <th>PROFESSION</th>
        <th>SERVICE</th>
        <th>FONCTION</th>
        <th>PRIME</th>
        <th>SALAIRE</th>
        <th>POSITION</th>
        <th>PHOTO</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nom'] ?></td>
          <td><?= $row['postnom'] ?></td>
          <td><?= $row['genre'] ?></td>
          <td><?= $row['nationalite'] ?></td>
          <td><?= $row['etatcivil'] ?></td>
          <td><?= $row['lieunaissance'] ?></td>
          <td><?= $row['datenaissance'] ?></td>
          <td><?= $row['contact'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['commune'] ?></td>
          <td><?= $row['matricule'] ?></td>
          <td><?= $row['numeroordre'] ?></td>
          <td><?= $row['numeroref'] ?></td>
          <td><?= $row['datengange'] ?></td>
          <td><?= $row['lieu'] ?></td>
          <td><?= $row['position'] ?></td>
          <td><?= $row['position'] ?></td>
          <td><?= $row['position'] ?></td>
          <td><?= $row['grade'] ?></td>
          <td><?= $row['qualification'] ?></td>
          <td><?= $row['profession'] ?></td>
          <td><?= $row['service'] ?></td>
          <td><?= $row['fonction'] ?></td>
          <td><?= $row['prime'] ?></td>
          <td><?= $row['salaire'] ?></td>
          <td><?= $row['position'] ?></td>
          <td><img src="public/img/<?=$row['photo']?>" alt="" style="wdth:20px;height:20px"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>