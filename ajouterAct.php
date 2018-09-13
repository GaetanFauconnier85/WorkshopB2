<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsb2;charset=utf8', 'root', '');
$idAct = $_POST['idAct'];

$reqNewChat = $bdd->prepare("INSERT INTO participeact (idClient, idAct) VALUES ('1',:idAct)");
$reqNewChat->execute(array(
    :idAct => $idAct
));

?>