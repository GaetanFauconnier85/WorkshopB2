<?php
//connection a la base de donnée
        //connection a la base de donnée
        $bdd = new PDO('mysql:dbname=projetphp; host=localhost', 'root', '');

        //etAttributecréation d'un attribut
        //PDO::ATTR_ERRMODE permet d'accèder à la constante ATTR_ERRMODE qui se situe dans PDO
        //PDO::ERRMODE_EXCEPTION lorque qu'on n'a une erreur je veux que tu renvoie une exeptions

        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Par défault quand on récupere des infos d'une table il stock les données dans une table associatif
        // Permet de récupérer les infos sous forme d'objet

        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        //definis la limite de temps pour ren
        //definis la limite de temps pour ren                                                                                                          trer les données
        set_time_limit(100000);

        //ouverture du fichier bbdtilisateur.csv
        $fp = file_get_contents("utilisateurs.csv");

        //separation des lignes
        $ligne = explode("\n", $fp);

        //pour chaque ligne:
        for ($i = 1; $i < sizeof($ligne); $i++) {


            //separe les éléments séparé par un point virgule
            $liste = explode(";", $ligne[$i]);
            $liste[5] = hash('sha512', $liste[5]);
            //encrypte les données du password
            //prepare la table a recevoir les données contenu dans $liste
            $sql = $bdd->prepare("INSERT INTO client(civilite,nom,prenom,email,identifiant,mdp,actif)  VALUES( ?, ?, ?, ?, ?, ?,?)");
            $sql->execute($liste);
        }