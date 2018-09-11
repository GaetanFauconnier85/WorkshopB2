<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="CSS/register.css">
    </head>
    <body>
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center" id="title">EPSI Student</h2>
            <p class="text-center">
                <small id="passwordHelpInline" class="text-muted"> Merci de bien vouloir remplir ce formulaire d'incription afin de pouvoir accèder au site web</a>.</small>
            </p>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <form role="form" method="post" action="">
                        <fieldset>

                            <div class="form-group">
                                <label for = "firstname">Votre prénom :</label>
                                <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="Bourget">
                            </div>

                            <div class="form-group">
                                <label for = "lastname">Votre nom :</label>
                                <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Camille">
                            </div>

                            <div class="form-group">
                                <label for = "identification">Votre identifiant :</label>
                                <input type="text" name="identification" id="identification" class="form-control input-lg" placeholder="kikou44">
                            </div>

                            <div class="form-group">
                                <label for = "password">Votre mot de passe :</label>
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="p@ssw0rd">
                            </div>

                            <div class="form-group">
                                <label for = "password2">Confirmer Votre mot de passe :</label>
                                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="p@ssw0rd">
                            </div>

                            <div class="form-group">
                                <label for = "phone">Votre numéro de téléphone :</label>
                                <input type="tel" min = "10" max = "10" name="phone" id="phone" class="form-control input-lg" placeholder="0604419012">
                            </div>
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-5">

                            <div class="form-group">
                                <label for = "mail">Votre adresse email</label>
                                <input type="email" name="mail" id="mail" class="form-control input-lg" placeholder="exemple@exemple.fr">
                            </div>

                            <div class="form-group">
                                <label for = "classroom">Votre promo :</label>
                                <input type="text" name="classroom" id="classroom" class="form-control input-lg" placeholder="B2">
                            </div>

                            <div class="form-group">
                                <label for = "status">Votre status :</label>
                                <input type="text" name="status" id="status" class="form-control input-lg" placeholder="étudiant">
                            </div>

                            <div class="form-group">
                                <label for = "likesport">Les sports que vous aimer :</label>
                                <input type="text" name="likesport" id="likesport" class="form-control input-lg" placeholder="Course à pied">
                            </div>

                            <div class="form-group">
                                <label for = "music">Votre style de musique :</label>
                                <input type="text" name="music" id="music" class="form-control input-lg" placeholder="électro">
                            </div>

                            <div class="form-group">
                                <label for = "meat">votre plâts préféré :</label>
                                <input type="text" name="meat" id="meat" class="form-control input-lg" placeholder="risotto">
                            </div>

                            <div>
                                <input type="submit" class="btn btn-secondary" value="Inscrivez-vous">
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>