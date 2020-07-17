<?php

    require_once 'database.php';

    if (isset($_POST['bsearch']))
    {
        $search = $_POST['research'];
        $sql = "SELECT autresinfos.position,autresinfos.matricule,autresinfos.numeroordre,autresinfos.salaire,autresinfos.prime,
        personnes.id,personnes.nom,personnes.postnom,personnes.nationalite,personnes.etatcivil,personnes.genre,
        personnes.lieunaissance,personnes.datenaissance,personnes.contact,personnes.email,personnes.photo,
        addresses.commune,lieux.lieu,affectations.affectation,services.service,detailspers.datengange,
        detailspers.numeroref,detailspers.dernierefonction,fonctions.fonction,grades.grade,qualifications.qualification, 
        professions.profession,niveauetudes.niveauetude FROM autresinfos INNER JOIN personnes 
        ON autresinfos.personne = personnes.id INNER JOIN addresses ON personnes.id = addresses.personne 
        INNER JOIN details ON personnes.id = details.personne INNER JOIN lieux ON details.lieuaffect = lieux.id 
        INNER JOIN affectations ON lieux.affectation = affectations.id INNER JOIN services ON details.service = services.id 
        INNER JOIN detailspers ON personnes.id = detailspers.personne INNER JOIN fonctions 
        ON detailspers.fonction = fonctions.id INNER JOIN grades ON detailspers.grade = grades.id 
        INNER JOIN qualifications ON detailspers.qualification = qualifications.id INNER JOIN professions 
        ON detailspers.profession = professions.id INNER JOIN niveauetudes ON detailspers.nivetude = niveauetudes.id 
        WHERE CONCAT(nom,postnom) LIKE '%".$search."%'";
        $res = $con->query($sql);
    }
    else
    {
        $sql = "SELECT autresinfos.position,autresinfos.matricule,autresinfos.numeroordre,autresinfos.salaire,autresinfos.prime,
                    personnes.id,personnes.nom,personnes.postnom,personnes.nationalite,personnes.etatcivil,personnes.genre,
                    personnes.lieunaissance,personnes.datenaissance,personnes.contact,personnes.email,personnes.photo,
                    addresses.commune,lieux.lieu,affectations.affectation,services.service,detailspers.datengange,
                    detailspers.numeroref,detailspers.dernierefonction,fonctions.fonction,grades.grade,qualifications.qualification, 
                    professions.profession,niveauetudes.niveauetude FROM autresinfos INNER JOIN personnes 
                    ON autresinfos.personne = personnes.id INNER JOIN addresses ON personnes.id = addresses.personne 
                    INNER JOIN details ON personnes.id = details.personne INNER JOIN lieux ON details.lieuaffect = lieux.id 
                    INNER JOIN affectations ON lieux.affectation = affectations.id INNER JOIN services ON details.service = services.id 
                    INNER JOIN detailspers ON personnes.id = detailspers.personne INNER JOIN fonctions 
                    ON detailspers.fonction = fonctions.id INNER JOIN grades ON detailspers.grade = grades.id 
                    INNER JOIN qualifications ON detailspers.qualification = qualifications.id INNER JOIN professions 
                    ON detailspers.profession = professions.id INNER JOIN niveauetudes ON detailspers.nivetude = niveauetudes.id";
        $res = $con->query($sql);
    }