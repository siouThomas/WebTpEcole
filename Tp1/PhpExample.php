<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta CHARSET="utf-8">
        <title>UX Etape 1,2,3</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    </head>

    <body>

        <?php
        try
        {
            // Bdd Connexion
            $bdd = new PDO('mysql:host=localhost;dbname=LABDDNAMEANTOINEICI;charset=utf8', 'USERICIIII', 'LEMDPANTOINE');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        
        //Contenu
        $reponse = $bdd->query('SELECT * FROM esiea_user');

        while ($donnees = $reponse->fetch())
        {
        ?>
            <p>
            <strong>Personne </strong> : <?php echo $donnees['name']; echo $donnees['firstname']; ?><br />
            est en section : <?php echo $donnees['section']; ?>, dans la ville  <?php echo $donnees['city']; ?> !<br />
            <em><?php echo $donnees['other']; ?></em>
           </p>

        <?php
        }

        //Fermeture de la transction
        $reponse->closeCursor(); 
        ?>

        <h1> Vous avez assisté à une prise de data sur bdd </h1>
    </body>
</html>