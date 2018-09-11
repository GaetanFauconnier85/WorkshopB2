<?php
session_start();
$identifiant = $_SESSION['identifiant'];
include_once ('../config/connexionbdd.php');

$reqFinishSalon = $db->prepare("update salon set Fini = '1' where idProprio='$identifiant'");
$reqFinishSalon->execute();

header('Location: ../Principal.php');
