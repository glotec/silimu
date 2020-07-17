<div class="row log">
    <div class="col-md-6 m-auto">
        <div class="card card-body">
            <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"> Login</i></h1>
            <div class="">
                <?php 
                    if (@$_GET['Empty'] == true)
                    {
                ?>
                <div class="alert-light text-danger m-auto text-center">
                        <?= $_GET['Empty'] ?>
                </div>
                <?php     }        ?>
            </div>
            <hr>
            <form action="includes/signin.inc.php" method="POST">
                <div class="for-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Nom d'utilisateur" 
                        autocomplete="off">
                </div>
                <div class="for-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe">
                </div><br>
                <div class="for-group">     
                    <button type="submit" name="signin" class="btn btn-success btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>