<?php require_once 'conf/editagent.conf.php'; ?>
<h1 class="text-center">Edition agent</h1>
<div class="">
    <?php 
        if (@$_GET['Err'] == true)
        {
    ?>
    <div class="alert-light text-danger m-auto text-center">
        <h1><?= $_GET['Err'] ?></h1>
    </div>
    <?php     }        ?>
</div>
<hr>
<div class="form">

    <form action="includes/editionagent.inc.php" method="post" enctype="multipart/form-data">
        <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <!-- <div class="row"> -->
            <div class="col-md-3">
                    <input type="text" id="id" name="id" class="form-control" value="<?= $row['id'] ?>" style="display:none">
                <div class="form-group">
                    <!-- <label for="first">Nom</label> -->
                    <input type="text" id="nom" name="nom" class="form-control" value="<?= $row['nom'] ?>" required>
                </div>
                <div class="form-group">
                    <!-- <label for="last">Post nom</label> -->
                    <input type="text" id="post" name="post" class="form-control" value="<?= $row['postnom'] ?>" required>
                </div>
                <div class="form-group">
                    <!-- <label for="last">Nationalité</label> -->
                    <input type="text" id="nationalite" name="nationalite" class="form-control" value="Congolaise" required>
                </div>
                <div class="form-group">
                    <!-- <label for="conatct">Conatct</label> -->
                    <input type="text" id="conatct" name="conatct" class="form-control" value="<?= $row['contact'] ?>" required>
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="lieunais" name="lieunais" class="form-control" value="<?= $row['lieunaissance'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="date">Date de naissance</label>
                    <input type="date" id="datenais" name="datenais" class="form-control" value="<?= $row['datenaissance'] ?>" required>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Gender</label> -->
                    <select name="genre" class="form-control item-center" id="gender">
                        <option selected>Genre</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Féminin">Feminin</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Etat civil</label> -->
                    <select name="etatcivil" class="form-control" id="gender">
                        <option selected>Etat civil</option>
                        <option value="Celibataire">Célibataire</option>
                        <option value="Marie">Marié</option>
                        <option value="Veuve">Veuve</option>
                        <option value="Veuf">Veuf</option>
                        <option value="Divorce">Divorcé</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group text-center" style="cursor:pointer">
                    <img src="public/img/<?= $row['photo'] ?>" onClick="triggerClick()" style="width:200px; height:200px;" id="profileDisplay">
                    <label for="profileImage">Ajouter Image</label>
                    <input type="file" onChange="displayImage(this)" class="form-control" name="profileImage" id="profileImage" 
                        style="display:none;">
                </div>
            </div>
            <div class="col-md-3">
            <br>
            <br>
            <br>
            <br><br>
                <div class="for-group">
                    <button type="submit" name="signup" class="btn btn-success btn-block">Modifier</button>
                </div>
            </div>
            <!-- </div>
            </div> -->
        </div>
        <?php } ?>
    </form>
</div>