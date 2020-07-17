<?php

    require_once 'database.php';

    $id = $_GET['id'];

    $sql = "SELECT personnes.id,personnes.nom,personnes.postnom,personnes.etatcivil,personnes.genre,personnes.lieu_naissance,
    personnes.phone,personnes.email,personnes.photo, addresses.addresse, service.fonction, 
    details.date_engagement FROM personnes INNER JOIN addresses ON personnes.id = addresses.personne 
    INNER JOIN details ON  personnes.id = details.personne INNER JOIN service ON details.service = service.id  WHERE personnes.id = '$id'";
    $res = $con->query($sql);