<!doctype html>
<html lang="fr">
    <head>

inscription a rajouter
<a href="Acceuil.php">Acceuill</a>

        <link href="Acceuilcss.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Ecran de connection</title>

    </head>
    <body class="text-center">
        <div class="form-signin">

            <h1 class="text-light">Marcassin</h1>

                  <form method="post" action="temp/tempConnect.php" class="input_connexion">

                   <input type="email" name="Identifiant"  required placeholder="E-mail" class="input_connexion">   <br>

                  <input type="password"
                                      name="MDP"
                                      required placeholder="mot de passe"
                                      class="input_connexion">
                                      <br>

                                     <input  type="submit" class="btn-lg"value="OK">
                  </form>
            
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </div>
    </body> 
</html>