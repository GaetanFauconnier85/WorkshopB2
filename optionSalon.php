<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="css/bootstrap.min.css"/>
        <link href="CSS/optionSalonCSS.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <style>
            body{
                background-color: rgb(204, 221, 214);
            }
        </style>
        <br>
        <div class="top">
            <div class='title'>Nom de l'utilisateur : Nom du salon</div>
            <hr size='2' noshade>
        </div>
        <div class="form-group">
            <div class="input-group input-group-lg icon-addon addon-lg">
                <input type="text" placeholder="Rechercher un utilisateur" id="schbox" class="form-control input-lg">
                <i class="icon icon-search"></i>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-inverse btn-lg">Ajouter</button>
                </span>
            </div>
        </div>
        <br>
        <div>Liste des participants</div>
        <hr width='50%' size='3' noshade><br>
        <div class="scrolling">
            <?php for ($i = 1; $i < 20; $i++) { ?>
                <div>Utilisateur <?php echo $i ?> <button type="button" class=" btn btn-danger">Expulser</button></div><br> 
            <?php } ?>
        </div>
        <br>
        <div class="bottom">
            <hr size='2' noshade>
            <a href="Principal.php"><button type="button" class=" btn btn-danger suppSalon">Supprimer le salon</button></a>
            <a href="Principal.php"><button type="button" class=" btn btn-danger annuler">Annuler</button></a>
            <br>
        </div>
    </body>
</html>
