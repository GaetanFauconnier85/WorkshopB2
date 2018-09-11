<?php
session_start();
$identifiant = $_SESSION['identifiant'];

include_once '../config/connexionbdd.php';
$reqNewChat = $db->prepare("INSERT INTO salon (idProprio, nomSalon, Fini) VALUES ('$identifiant', 'tempNom', '0')");
$reqNewChat->execute();

header('Location: ../creationSalon.php');