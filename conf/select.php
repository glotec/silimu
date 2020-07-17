<?php

    require_once 'database.php';

    $sql = "SELECT COUNT(id) AS pe FROM personnes";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $pers = $row['pe'];
    }

    $sql = "SELECT COUNT(id) AS pe FROM personnes WHERE lieu_naissance = 'Goma'";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $gm = $row['pe'];
    }

    $sql = "SELECT COUNT(id) AS pe FROM personnes WHERE lieu_naissance = 'Bukavu'";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $bk = $row['pe'];
    }

    $sql = "SELECT COUNT(id) AS pe FROM personnes WHERE genre = 'Masculin'";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $h = $row['pe'];
    }

    $sql = "SELECT COUNT(id) AS pe FROM personnes WHERE genre = 'Féminin'";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $f = $row['pe'];
    }

    $sql1 = "SELECT COUNT(id) AS log FROM logins WHERE active = 1";
    $res1 = $con->query($sql1);
    while ($row = mysqli_fetch_assoc($res1))
    {
        $log = $row['log'];
    }

    $sql1 = "SELECT COUNT(id) AS delog FROM logins WHERE active = 0";
    $res1 = $con->query($sql1);
    while ($row = mysqli_fetch_assoc($res1))
    {
        $delog = $row['delog'];
    }

    // $sql9 = "SELECT COUNT(id) AS pos FROM autresinfos WHERE position = 'Retraite'";
    // $res9 = $con->query($sql9);
    // while ($row = mysqli_fetch_assoc($res8))
    // {
    //     $ret = $row['pos'];
    // }