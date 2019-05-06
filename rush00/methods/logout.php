<?php
session_start();
if ($_SESSION) {
    unset($_SESSION['info_user']);
    unset($_SESSION['basket']);
}

header('Location: ../index.php');
?>