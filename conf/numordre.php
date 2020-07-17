<?php

    require_once 'database.php';

    if (isset($_POST['bsearch']))
    {
        $search = $_POST['search'];

        $sql = "SELECT autresinfos.numeroordre,autresinfos.position,autresinfos.matricule,autresinfos.prime,autresinfos.salaire,
                    personnes.nom,personnes.postnom,personnes.photo,lieux.lieu,affectations.affectation,services.service 
                    FROM autresinfos INNER JOIN personnes ON autresinfos.personne = personnes.id INNER JOIN details 
                    ON personnes.id = details.personne INNER JOIN lieux ON details.lieuaffect = lieux.id 
                    INNER JOIN services ON details.service = services.id INNER JOIN affectations 
                    ON lieux.affectation = affectations.id WHERE CONCAT(nom,postnom,numeroordre) LIKE '%".$search."%'";
        $res = $con->query($sql);
    }
    else
    {
        $sql = "SELECT autresinfos.numeroordre,autresinfos.position,autresinfos.matricule,autresinfos.prime,autresinfos.salaire,
                    personnes.nom,personnes.postnom,personnes.photo,lieux.lieu,affectations.affectation,services.service 
                    FROM autresinfos INNER JOIN personnes ON autresinfos.personne = personnes.id INNER JOIN details 
                    ON personnes.id = details.personne INNER JOIN lieux ON details.lieuaffect = lieux.id 
                    INNER JOIN services ON details.service = services.id INNER JOIN affectations 
                    ON lieux.affectation = affectations.id";
        $res = $con->query($sql);
    }