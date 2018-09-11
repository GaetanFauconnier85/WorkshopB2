<?php
session_start();
$identifiant = $_SESSION['identifiant'];

include_once '../config/connexionbdd.php';

$reqGetSalon = $db->prepare("SELECT idSalon FROM salon WHERE idProprio='$identifiant' AND Fini='0'");
$reqGetSalon->execute();
$tempFetGetSalon = $reqGetSalon->fetchAll();
$idSalon = $tempFetGetSalon[0]['idSalon'];
var_dump($idSalon);

$reqDeleteUser = $db->prepare("DELETE FROM participant WHERE id_Salon='$idSalon'");
$reqDeleteUser->execute();

$reqDeleteSalon = $db->prepare("DELETE FROM salon WHERE idSalon='$idSalon'");
$reqDeleteSalon->execute();

header('Location: ../Principal.php');