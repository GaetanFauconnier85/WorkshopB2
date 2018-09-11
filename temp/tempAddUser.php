<?php
session_start();
$identifiant = $_SESSION['identifiant'];

include_once '../config/connexionbdd.php';

$adduser = filter_input(INPUT_POST, 'adduser');
var_dump($adduser);
var_dump($identifiant);

$reqGetSalon = $db->prepare("SELECT idSalon FROM salon WHERE idProprio='$identifiant' AND Fini='0'");
$reqGetSalon->execute();
$tempFetGetSalon = $reqGetSalon->fetchAll();
$idSalon = $tempFetGetSalon[0]['idSalon'];
var_dump($idSalon);

$reqAddUser = $db->prepare("INSERT INTO participant(id_Salon, id_Participant) VALUES ('$idSalon', '$adduser')");
$reqAddUser->execute();

header('Location: ../creationSalon.php');