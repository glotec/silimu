<div class="row">
  <div class="col-md-8">
    <h2 class="sub-header text-center">Liste des agents</h2>
  </div>
  <div class="col-md-4">
    <form action="" method="post" class="navbar-form navbar-right">
      <input type="text" class="form-control" placeholder="Search...">
      <button type="submit" name="search" class="form-control btn btn-success">Search</button>
    </form>
  </div>
</div>
<hr>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Post nom</th>
        <th>Genre</th>
        <th>Nationalité</th>
        <th>Etat civil</th>
        <th>Lieu de naissance</th>
        <th>Date de naissance</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($res7)) {?>
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
          <td><?= $row['photo'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- </div> -->


<div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="service" name="service" class="form-control" placeholder="Service" required>
                </div>
                <div class="form-group">
                    <!-- <label for="last">Nationalité</label> -->
                    <input type="text" id="matricule" name="matricule" class="form-control" placeholder="Matricule" required>
                </div>
                <div class="form-group">
                    <!-- <label for="conatct">Conatct</label> -->
                    <input type="text" id="numordre" name="numordre" class="form-control" placeholder="Numéro d'ordre" required>
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="prime" name="prime" class="form-control" placeholder="Prime" required>
                </div>


                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="salaire" name="salaire" class="form-control" placeholder="Salaire" required>
                </div>
                <div class="form-group">
                    <!-- <label for="user">User Name</label> -->
                    <input type="text" id="user" name="user" class="form-control" placeholder="Entrez le nom d'utilisateur" required>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" id="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required>
                </div>
                <div class="form-group">
                    <label for="date">Date d'engagement</label>
                    <input type="date" id="dateang" name="dateang" class="form-control" required>
                </div>


            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="commune" class="form-control item-center" id="gender">
                        <option selected>Commune</option>
                        <option value="Male">Kadutu</option>
                        <option value="Female">Ibanda</option>
                        <option value="Female">Bagira</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="profession" class="form-control item-center" id="gender">
                        <option selected>Profession</option>
                        <?php while ($row = mysqli_fetch_assoc($res6)) {?>
                        <option value="<?= $row['profession'] ?>"><?= $row['profession'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="fonction" class="form-control item-center" id="gender">
                        <option selected>Fonction</option>
                        <?php while ($row = mysqli_fetch_assoc($res5)) {?>
                        <option value="<?= $row['fonction'] ?>"><?= $row['fonction'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="grade" class="form-control item-center" id="gender">
                        <option selected>Grade</option>
                        <?php while ($row = mysqli_fetch_assoc($res4)) {?>
                        <option value="<?= $row['grade'] ?>"><?= $row['grade'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="position" class="form-control item-center" id="gender">
                        <option selected>Position</option>
                        <option value="Actif">Actif</option>
                        <option value="Détaché">Detache</option>
                        <option value="Mise en disponibilité">Mise en disponibilite</option>
                        <option value="Suspendu">Suspendu</option>
                        <option value="Deserte">Deserte</option>
                        <option value="Décedé">Decede</option>
                        <option value="Retraité">Retraite</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="nivetude" class="form-control item-center" id="gender">
                        <option selected>Niveau d'étude</option>
                        <?php while ($row = mysqli_fetch_assoc($res3)) {?>
                        <option value="<?= $row['niveauetude'] ?>"><?= $row['niveauetude'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="qualification" class="form-control item-center" id="gender">
                        <option selected>Qualification</option>
                        <?php while ($row = mysqli_fetch_assoc($res2)) {?>
                        <option value="<?= $row['qualification'] ?>"><?= $row['qualification'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="password">Gender</label>
                    <select name="affectation" class="form-control item-center" id="gender">
                        <option selected>Affectation</option>
                        <option value="Male">affectation</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="lieuaff" class="form-control item-center" id="gender">
                        <option selected>Lieu d'affectation</option>
                        <?php while ($row = mysqli_fetch_assoc($res)) {?>
                        <option value="<?= $row['lieu'] ?>"><?= $row['lieu'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="dernierefonc" class="form-control item-center" id="gender">
                        <option selected>Dernière fonction</option>
                        <?php while ($row = mysqli_fetch_assoc($res1)) {?>
                        <option value="<?= $row['fonction'] ?>"><?= $row['fonction'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>