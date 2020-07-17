<?php

    require_once 'database.php';

    $sql = "SELECT lieu FROM lieux";
    $res = $con->query($sql);

    $sql1 = "SELECT fonction FROM fonctions";
    $res1 = $con->query( $sql1);

    $sql2 = "SELECT qualification FROM qualifications";
    $res2 = $con->query($sql2);

    $sql3 = "SELECT niveauetude FROM niveauetudes";
    $res3 = $con->query($sql3);

    $sql4 = "SELECT grade FROM grades";
    $res4 = $con->query($sql4);

    $sql5 = "SELECT fonction FROM fonctions";
    $res5 = $con->query($sql5);

    $sql6 = "SELECT profession FROM professions";
    $res6 = $con->query($sql6);

    $sql7 = "SELECT * FROM `personnes`";
    $res7 = $con->query($sql7);