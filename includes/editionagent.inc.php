<?php

    if (isset($_POST['signup']))
    {
        require '../conf/database.php';

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $post = $_POST['post'];
        $nationalite = $_POST['nationalite'];
        $conatct = $_POST['conatct'];
        $email = $_POST['email'];
        $lieunais = $_POST['lieunais'];
        $datenais = $_POST['datenais'];
        $dateang = $_POST['dateang'];
        $genre = $_POST['genre'];
        $etatcivil = $_POST['etatcivil'];
        // $commune = $_POST['commune'];

        $profileImage = time() . '_' . $_FILES['profileImage']['name'];

        $target = '../public/img/' . $profileImage;

        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target))
        {
            $sql = "UPDATE `personnes` SET `nom`='$nom',`postnom`='$post',`nationalite`='$nationalite',`etatcivil`='$etatcivil',
                        `genre`='$genre',`lieunaissance`='$lieunais',`datenaissance`='$datenais',`contact`='$conatct',
                        `email`='$email',`photo`='$profileImage' WHERE `id`='$id'";
            

            if ($con->query($sql) === TRUE)
            {
                header("Location: ../index.php?page=agent&Msg=Modifier avec succes");
            }
            else
            {
                header("Location: ../index.php?page=editagent&Err=Echec de modification");
            }
        }
        else
        {
            header("Location: ../index.php?page=editagent&Err=Erreur provenu dans le téléchargement de l'image");
        }
    }