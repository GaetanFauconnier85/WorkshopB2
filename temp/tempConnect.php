<!DOCTYPE html>
<?php
/////////////////////////////////////
$Identifiant = filter_input(INPUT_POST, 'Identifiant');
// $MDP= hash('sha512', filter_input(INPUT_POST, 'MDP'));
$MDP = hash('sha512', filter_input(INPUT_POST, 'MDP'));
include_once '../config/connexionbdd.php';
/////////////////////////////////////

$req2 = $db->prepare("SELECT email FROM client WHERE email = '$Identifiant' AND mdp = '$MDP'");
$req2->execute();
$result2 = $req2->fetchALL();
// $nb2 = count($result);
if (count($result2) == 0) {//si 0 alors le mot de passe est éronné
    header('Location: ../Acceuil.php');
} else {// sinon on veut que la page redirige vers accueil.php avec un identifiant de session( pour faciliter la partie envoi de message)
    $reqGetConnect = $db->prepare("SELECT * FROM client WHERE email = '$Identifiant'");
    $reqGetConnect->execute();
    $Connect = $reqGetConnect->fetchALL();
    session_start();
    $_SESSION['email'] = $Connect[0]['email'];
    $_SESSION['identifiant'] = $Connect[0]['identifiant'];
    $_SESSION['idUtilisateur'] = $Connect[0]['idUtilisateur'];
    $_SESSION['nom'] = $Connect[0]['nom'];
    $_SESSION['prenom'] = $Connect[0]['prenom'];

    header('Location: ../Principal.php');

    exit();
}
