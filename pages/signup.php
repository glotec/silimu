<?php require_once 'conf/selectall.php'; ?>
<?php require_once 'conf/incrementation.conf.php'; ?>
<h1 class="text-center">Ajouter un nouvel agent</h1>
<div class="">
    <?php 
        if (@$_GET['Err'] == true)
        {
    ?>
    <div class="alert-light text-danger m-auto text-center">
            <?= $_GET['Err'] ?>
    </div>
    <?php     }        ?>
</div>
<hr>
<div class="form">

    <form action="includes/signup.inc.php" method="post" enctype="multipart/form-data">
        <!-- <div class="row"> -->
            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="first">Nom</label> -->
                    <input type="text" id="id" name="id" class="form-control" value="<?= $pers ?>" style="display:none">
                </div>
                <div class="form-group">
                    <!-- <label for="first">Nom</label> -->
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <!-- <label for="last">Post nom</label> -->
                    <input type="text" id="post" name="post" class="form-control" placeholder="Post nom" required>
                </div>
                <!-- <div class="form-group"> -->
                    <!-- <label for="last">Nationalité</label> -->
                    <!-- <input type="text" id="nationalite" name="nationalite" class="form-control" value="Congolaise" required>
                </div> -->
                <div class="form-group">
                    <!-- <label for="conatct">Conatct</label> -->
                    <input type="text" id="contact" name="contact" class="form-control" placeholder="Contact" required>
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <!-- <label for="last">Nationalité</label> -->
                    <input type="text" id="addresse" name="addresse" class="form-control" placeholder="addresse" required>
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="lieunais" name="lieunais" class="form-control" placeholder="Lieu de naissance" required>
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="text" id="etude" name="etude" class="form-control" placeholder="Niveau d'études" required>
                </div>
                <!-- <div class="form-group"> -->
                    <!-- <label for="user">User Name</label> -->
                    <!-- <input type="text" id="user" name="user" class="form-control" placeholder="Entrez le nom d'utilisateur" required>
                </div>
                <div class="form-group"> -->
                    <!-- <label for="password">Password</label> -->
                    <!-- <input type="password" id="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required>
                </div> -->
                <!-- <div class="form-group"> -->
                    <!-- <label for="email">Email</label> -->
                    <!-- <input type="text" id="service" name="service" class="form-control" placeholder="Service" required>
                </div>
                <div class="form-group"> -->
                    <!-- <label for="conatct">Conatct</label> -->
                    <!-- <input type="text" id="fonction" name="fonction" class="form-control" placeholder="fonction" required>
                </div> -->
            </div>
            <div class="col-md-3">
                <!-- <div class="form-group"> -->
                    <!-- <label for="email">Email</label> -->
                    <!-- <input type="text" id="salaire" name="salaire" class="form-control" placeholder="Salaire" required>
                </div> -->
                <div class="form-group">
                    <label for="date">Date de naissance</label>
                    <input type="date" id="datenais" name="datenais" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">Date d'engagement</label>
                    <input type="date" id="dateang" name="dateang" class="form-control" required>
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
                        <option value="Célibataire">Celibataire</option>
                        <option value="Marié">Marie</option>
                        <option value="Veuve">Veuve</option>
                        <option value="Veuf">Veuf</option>
                        <option value="Divorcé">Divorcé</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Etat civil</label> -->
                    <select name="fonction" class="form-control" id="gender">
                        <option selected>Fonction</option>
                    <?php while ($row = mysqli_fetch_assoc($res1)) {?>
                        <option value="<?= $row['fonction'] ?>"><?= $row['fonction'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Etat civil</label> -->
                    <select name="affect" class="form-control" id="gender">
                        <option selected>Lieu d'affectation</option>
                        <option value="Goma">Goma</option>
                        <option value="Bukavu">Bukavu</option>
                        <option value="Uvira">Uvira</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
            <!-- </div>
            <div class="col-md-3"> -->
                <div class="form-group text-center" style="cursor:pointer">
                    <img src="public/img/icon.jpg" onClick="triggerClick()" style="width:200px; height:200px;" id="profileDisplay">
                    <label for="profileImage">Ajouter Image</label>
                    <input type="file" onChange="displayImage(this)" class="form-control" name="profileImage" id="profileImage" 
                        style="display:none;">
                </div>
                <div class="for-group">
                    <button type="submit" name="signup" class="btn btn-primary btn-block">Ajouter</button>
                </div>
            </div>
            <!-- </div>
            </div> -->
        </div>
    </form>
</div>