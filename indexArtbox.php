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
    <?php 
    // inclusion du header 
    require_once(__DIR__. '/header.php');?>
    </header>
    <main>
        <?php //Inclusion du tableau d'oeuvres
        require_once(__DIR__. '/oeuvres.php'); ?>
        <div id="liste-oeuvres">
            <?php //Commence la boucle de parcourir mon tableau d'oeuvres et afficher chaque oeuvre, son image, son titre, et son artiste
            foreach ($oeuvres as $oeuvre): ?>
                <article class='oeuvre'>
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        <h2><?php echo $oeuvre['titre']; ?></h2>
                        <p class='description'><?php echo $oeuvre['artiste']; ?></p>
                    </a>
                </article>
            <?php endforeach; //ferme la boucle dès qu'elle a terminé de parcourir le tableau pour ces éléments ?> 
        </div>
    </main>
    <footer>
        <?php 
        // inclusion du footer
        require_once(__DIR__. '/footer.php'); ?>
    </footer>
</body>
</html>