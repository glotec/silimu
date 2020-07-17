<?php
  if (isset($_POST['signin']))
  {
    require '../conf/database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password))
    {
      header ("location: ../index.php?page=home&Empty= Empty fields, full fill it please ):");
      exit();
    }
    else
    {
      $sql = "SELECT `nomutil`, `motdepasse`, `type`, `active` FROM `logins` WHERE nomutil = '".$username."' 
                AND motdepasse = '".$password."' AND active = 1";        
      $select=$con->query($sql);
      $row=mysqli_fetch_array($select);
      if(is_array($row))
      {
        session_start();
        if ($row['type'] == 'user')
        {
          $_SESSION['user']=$row['type'];
          $_SESSION['id'] = $row['user'];
          header("Location: ../index.php?page=signup");
        }
        else if ($row['type'] == 'admin')
        {
          $_SESSION['admin'] = $row['type'];
          $_SESSION['id'] = $row['admin'];
          header("Location: ../index.php?page=dashboard");
        }
      }
      else
      {
        // print"<script>window.alert('incorrect Username or Password');window.location='index.php';</script>";
        header("Location: ../index.php?page=home&Empty=Username or Password incorrect ): ");
      }
    }
  }