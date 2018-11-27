<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // Même chose que le 6 mais on augmente ce qu'on retire :
            for ($count = 200; $count >= 1; $count -= 12) {
                ?>
                <!-- On change la phrase à afficher -->
                <p><?= $count . ' Enfin !!!!'; ?></p>
            <?php } ?>
        </div>
    </body>
</html>