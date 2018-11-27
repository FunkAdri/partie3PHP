<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // Même chose qu'avant mais on inverse tout :
            for ($count = 20; $count >= 1; $count--) {
                ?>
                <!-- On change la phrase à afficher -->
                <p><?= $count . ' C\'est presque bon'; ?></p>
            <?php } ?>
        </div>
    </body>
</html>