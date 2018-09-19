<?php
session_start();

    session_destroy();
    unset($_SESSION['user_session']);
    header('Location: ../login.php');

?>