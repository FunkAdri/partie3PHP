<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // Tant que la valeur de $count est inférieure ou égale à 15, on montre ça :
            for ($count = 1; $count <= 15; $count++) {
                ?>
                <!-- On affiche la phrase -->
                <p><?= $count . ' On y arrive presque'; ?></p>
            <?php } ?>
        </div>
    </body>
</html>
