<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>The ArtBox</title>
    </head>
    <body>
        <header>
            <?php // inclusion de l'en-tête (header)
            require_once(__DIR__. '/header.php');?> 
        </header>
        <main>
            <?php  
            require_once(__DIR__. '/oeuvres.php'); // On inclus le tableau des œuvres
            $id = $_GET['id']; // On veut récupérer l'id qui s'affiche quand l'utilisateur clique sur un œuvre
                foreach ($oeuvres as $oeuvre): // On commence la boucle à parcourir le tableau
                    if ($oeuvre['id'] == $id): //On mets la condition ?>
                    <article id='detail-oeuvre'> 
                    <div id='img-oeuvre'>
                        <img src="<?php echo $oeuvre['image']; ?>." alt="<?php echo $oeuvre['titre']; ?>">
                    </div>
                    <div id='contenu-oeuvre'>
                        <h1><?php echo $oeuvre['titre'] ; ?></h1>
                        <p class='description'><?php echo $oeuvre['artiste']; ?></p>
                        <p class='description-complete'><?php echo $oeuvre['description']; ?></p>
                    </div>
                    </article> 
                    <?php endif; ?>
                <?php endforeach; ?>
        </main>
        <footer>
            <?php // inclusion du pied du page (footer)
            require_once(__DIR__. '/footer.php');?>
        </footer>
    </body>
</html>
