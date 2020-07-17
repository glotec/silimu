<?php

    require_once 'database.php';

    $y = date("Y");

    $sql = "SELECT COUNT(id) AS pe FROM personnes";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res))
    {
        $pers = $y . $row['pe'];
    }

    $sql1 ="SELECT fonction FROM service";
    $res1 = $con->query($sql1);