<?php
session_start();

if (isset($_SESSION['patient'])) {
	unset($_SESSION['patient']);
	header("Loaction:../index.php");
}

?>