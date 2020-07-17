<?php require_once 'conf/editagent.conf.php'; ?>
<h1 class="text-center">Imprimer carte de service</h1>
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

<div class="row">
    <?php while ($row = mysqli_fetch_assoc($res)) {?>
        <div class="col-md-3 card" id="recto" style="background:#fff; color:gold">
            <h2 class="text-center">CARTE DE SERVICE</h2>
            <hr>
            <h3 class="text-center">ID : <?= $row['id'] ?></h3>
            <img src="public/img/<?=$row['photo']?>" alt="" style="wdth:100px;height:160px;">
            
            
            <h3 class="text-center"><?= $row['nom'] ?> <?= $row['postnom'] ?></h3>
            <h4 class="text-center"><?= $row['genre'] ?></h4> 
            <h4 class="text-center"><?= $row['fonction'] ?></h4>
        </div>
            <button class="btn bnt-primary" onClick="printCard('recto')">Imprimer</button>
        <!-- <div class="col-md-4 card">
            <p>Ets Silimu</p>

            <p class="carte">Les autorités tant militaires que civils sont priés d'apporter assistance au porteur de celle ci en cas de besoin</p>
        </div> -->
    <?php } ?>
</div>

<script>
    function printCard(divName)
    {
        var printContent = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        
        document.body.innerHTML = printContent;
        window.print()

        document.body.innerHTML = originalContents;
    }
</script>