<?php
	include 'settings.php';
	session_start();
	if (!(isset($_SESSION['PcNKwZlg_username'])) || !(isset($_SESSION['PcNKwZlg_password'])) || !($_SESSION['PcNKwZlg_username'] == settings::$USERNAME) || !($_SESSION['PcNKwZlg_password'] == settings::$PASSWORD)) {
		header('Location: ' . settings::$ON_LOGIN_GO_TO);
	}
    echo "sikeresen beléptél, daddy";
?>