<?php
    $servername = "localhost";
    $username = "root";
    $password = "Gl0t&cod2";
    $dbname = "silimudb";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        // die("Connection failed: " . $con->connect_error);
        header("Location: ../index.php?page=err&404=". $con->connect_error . " ): ");
    }