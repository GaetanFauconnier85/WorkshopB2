<?php
$NomUser = filter_input(INPUT_POST, 'NomUser');
var_dump($NomUser);

session_start();
$identifiant = $_SESSION['identifiant'];

include_once '../config/connexionbdd.php';

$reqGetSalon = $db->prepare("SELECT idSalon FROM salon WHERE idProprio='$identifiant' AND Fini='0'");
$reqGetSalon->execute();
$tempFetGetSalon = $reqGetSalon->fetchAll();
$idSalon = $tempFetGetSalon[0]['idSalon'];

$reqDeleteUser = $db->prepare("DELETE FROM participant WHERE id_Salon='$idSalon' AND id_Participant='$NomUser'");
$reqDeleteUser->execute();

header('Location: ../creationSalon.php');
