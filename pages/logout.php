<?php

    unset($_SESSION['sess_user']);
    session_destroy();
    header("Location: index.php?page=home");