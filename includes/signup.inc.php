<?php

    if (isset($_POST['signup']))
    {
        require '../conf/database.php';

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $post = $_POST['post'];
        $conatct = $_POST['contact'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $salaire = $_POST['salaire'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $lieunais = $_POST['lieunais'];
        $datenais = $_POST['datenais'];
        $dateang = $_POST['dateang'];
        $genre = $_POST['genre'];
        $etatcivil = $_POST['etatcivil'];
        $commune = $_POST['addresse'];
        $profession = $_POST['profession'];
        $fonction = $_POST['fonction'];
        $affect = $_POST['affect'];
        $etude = $_POST['etude'];

        $profileImage = time() . '_' . $_FILES['profileImage']['name'];

        $target = '../public/img/' . $profileImage;

        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target))
        {
            $sql = "INSERT INTO `personnes`(`id`,`nom`, `postnom`, `etatcivil`, `genre`, `lieu_naissance`, 
                        `date_naissance`, `phone`, `email`, `photo`, `niveau_etude`) VALUES ('$id','$nom','$post','$etatcivil','$genre',
                        '$lieunais','$datenais','$conatct','$email','$profileImage', '$etude');";
            // $sql .= "INSERT INTO `fontion`(`fonction`) VALUES ('$fonction');";
            $sql .= "INSERT INTO `addresses`(`addresse`, `personne`) VALUES ('$commune',
                        (SELECT MAX(id) AS person FROM personnes));";            
            $sql .= "INSERT INTO `details` (`date_engagement`,`service`,`personne`,`affectation`) VALUES ('$dateang',
                        (SELECT id AS serv FROM service WHERE fonction='$fonction'),(SELECT MAX(id) AS pers FROM personnes),
                        (SELECT id FROM affectation WHERE affectation='$affect'))";
            // $sql .= "INSERT INTO `logins`(`nomutil`,`motdepasse`,`personne`) VALUES ('$user','$password',
            //             (SELECT MAX(id) AS perso FROM personnes))";

            if ($con->multi_query($sql) === TRUE)
            {
                header("Location: ../index.php?page=agent");
            }
            else
            {
                header("Location: ../index.php?page=signup&Err=Data not saved error provide on database");
            }
        }
        else
        {
            header("Location: ../index.php?page=signup&Err=Erreur provenu dans le téléchargement de l'image");
        }
    }