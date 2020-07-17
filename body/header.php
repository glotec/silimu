<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Ets Silimu</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php  if(empty($_SESSION['admin']) && empty($_SESSION['user'])) {?>
                <li><a href="index.php?page=about">A propos</a></li>
            <li><a href="index.php?page=home">Connexion</a></li>
            <?php } if (isset($_SESSION['user'])){ ?>
                <li><a href="index.php?page=signup">Ajouter</a></li>
                <li><a href="index.php?page=logout">Déconnexion</a></li>
            <?php } if (isset($_SESSION['admin'])){ ?>
                <li><a href="index.php?page=signup">Ajouter</a></li>
                <li><a href="index.php?page=dashboard">Parametre</a></li>
                <li><a href="index.php?page=logout">Déconnexion</a></li>
            <?php }  ?>
        </ul>
        <!-- <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
        </form> -->
    </div>
    </div>
</nav>
<br>
<br><br><br>
