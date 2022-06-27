<?php
include 'settings.php';
    session_start();
    $_SESSION['PcNKwZlg_username'] = null;
    $_SESSION['PcNKwZlg_password'] = null;
    unset($_SESSION['PcNKwZlg_username']);
    unset($_SESSION['PcNKwZlg_password']);
    header('Location: ' . settings::$ON_LOGOUT_GO_TO);
?>