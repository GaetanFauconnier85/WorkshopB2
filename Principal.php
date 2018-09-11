<!doctype html>
<?php
session_start();
$date = date("d-m-Y");

$identifiant = $_SESSION['identifiant'];

include_once 'config/connexionbdd.php';

$reqMesSalons=$db->prepare("SELECT * from salon WHERE idProprio= '$identifiant'");
$reqMesSalons->execute();
$MesSalons = $reqMesSalons->fetchALL();
$limitSalons = count ($MesSalons);

$reqNom=$db->prepare("SELECT prenom, nom FROM client WHERE identifiant = '$identifiant'");
$reqNom->execute();
$Nom = $reqNom->fetchALL();
?>
<html lang="fr">
    <head>
        <link href="CSS/Principalcss.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div id ="header">
        <h3 id="Prenom"><?php echo $_SESSION['nom'];; ?> <?php echo $_SESSION['prenom']; ?></h3>
        <h3 id="Date"><?php echo $date; ?></h3>
        <hr>
    </div>
    <hr id="hrVertical">
</head>
<body>

    <div id="Titres">
        <h3 id="MesSalons">Mes salons</h3>
        <h3 id="LesSalons">Les salons</h3>
    </div>
    <hr>
    <div id="scrool">
        <div class="scrollinggauche">
            <?php for ($i = 0; $i < $limitSalons; $i++) { ?> 
                <div class="Salon"><a href="salleDiscution.php"><?php echo $MesSalons[$i]['nomSalon']; ?></a>
                    <a href="optionSalon.php"><img src="Annexes/edit.png" alt="lrt88" /></a>
                </div>
                <br> 
            <?php } ?>
        </div>

        <div class="scrollingdroit">
            <?php for ($i = 1; $i < 20; $i++) { ?>
            <div class="Salon"><a href="salleDiscution.php">Salon <?php echo $i ?></a>
                    <a href="listeParticipants.php"><button type="button" class="btn btn-primary btn-lg" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="20" height="20"></button></a>
                    <!--Permet de quitter le salon-->
                    <button type="button" class="btn btn-danger btn-lg" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="20" height="20"></button>
                </div>
                <br> 
            <?php } ?>
        </div>
    </div>
    <div id="footer">
        <hr>
        <div id="CréerSalon">
            <a href='temp/tempNewSalon.php'>
                <button type="button" class="btn btn-primary btn-lg">Créer salon</button>
            </a>
        </div>
        <div id="Invitation">
            <a href="listeInvitation.php">
             <button type="button" class="btn btn-primary btn-lg">Invitations</button>
            </a>
        </div>
        <div id="Déconnection">
            <a href="temp/tempDeconnect.php">
             <button type="button" class="btn btn-danger btn-lg">Déconnection</button>
            </a>
        </div>
    </div>
</body> 
</html>     