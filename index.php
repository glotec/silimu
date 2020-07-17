<?php
  session_start();

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page']))
    {
        if (in_array($_GET['page'].'.php', $pages))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = "err";
        }
    }
    else
    {
        $page = "home";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500"
         rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="public/img/log.jpg" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/default.css">
    </head>

    <body>

        <?php include 'body/header.php'; ?>
        <div class="container-fluid content-page">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <?php if (isset($_SESSION['user'])){ ?>
                            <li class="active"><a href="index.php?page=agent">Agents <span class="sr-only">(current)</span></a></li>
                        <?php } if (isset($_SESSION['admin'])){ ?>
                            <li><a href="index.php?page=rapport">Rapport</a></li>
                            <li><a href="index.php?page=recherche">Recherche</a></li>
                            <!-- <li><a href="#">Santé</a></li> -->
                            <li class="active"><a href="index.php?page=agent">Agents <span class="sr-only">(current)</span></a></li>
                            <li><a href="index.php?page=print">Cartes</a></li>
                        <?php }  ?>
                    </ul>
                </div>
                <div class="col-sm-9 col-md-10">
                    <?php include 'pages/'.$page.'.php'; ?>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="content">
                <p>Ets SILIMUS</p>
                <em>Le garant du transport lacuste</em>
            </div>
        </div>
        <script src="public/js/script.js"></script>
    </body>
</html>