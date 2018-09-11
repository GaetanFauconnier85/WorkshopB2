<?php
$NomSalon = filter_input(INPUT_POST, 'NomSalon');
var_dump($NomSalon);

include '../config/connexionbdd.php';

$reqChangeName = $db->prepare("update salon set nomSalon = '$NomSalon' where Fini = 0");
$reqChangeName->execute();

header('Location: ../creationSalon.php');