<?php
session_start();
$_SESSION['utilisateur']=NULL;
unset($_SESSION['utlilisateur']);
header("location:login.php");
?> 