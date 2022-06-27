<?php
    include 'settings.php';
    session_start();
    if ($_POST['username'] && isset($_POST['password'])) {
        $usr = $_POST['username'];
        $pass = $_POST['password'];
        if ($usr == settings::$USERNAME && $pass == settings::$PASSWORD) {
            $_SESSION['PcNKwZlg_username'] = $usr;
            $_SESSION['PcNKwZlg_password'] = $pass;
            header('Location: ' . settings::$ON_LOGIN_GO_TO);
        } else {
            echo settings::$USR_OR_PASS_INCORRECT;
        }
    }
?>