<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta CHARSET="utf-8">
        <title>Tp 1 test de perf PHP</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    </head>

    <body>
        <h1>MODE PHP - BDD </h1>
        <?php
        

        $bdd = new mysqli('localhost', 'root', '', 'mydb');//Connexion à la base de données avec le user boot et à la database mydb
        if ($mysqli->connect_errno) {

            echo "error mysqli";
        }
        
        //Contenu
        $result = $bdd->query('SELECT * FROM esiea_user');//Récupération de données dans la table esiea_user

        while ($donnees = $result->fetch_assoc())
        {
            //Affichage des données pour chaque user de la table esiea_user
        ?> 
            <p>
            <strong>Personne </strong> : <?php echo $donnees['name']; echo " "; echo $donnees['first_name']; ?><br />
            est en section : <?php echo $donnees['section']; ?>, dans la ville  <?php echo $donnees['city']; ?> !<br />
            <em><?php echo $donnees['other']; ?></em>
           </p>

        <?php
        }

        //Fermeture de la transaction
        //$reponse->closeCursor(); 
        ?>

        <p> Vous avez assisté à une prise de data sur bdd Maria via un script PHP</p>
    </body>
</html>
