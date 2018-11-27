<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // Encore même chose que le 5 mais on augmente l'ajout :
            for ($count = 1; $count <= 100; $count += 15) {
                ?>
                <!-- On change la phrase à afficher -->
                <p><?= $count . ' On tient le bon bout'; ?></p>
            <?php } ?>
        </div>
    </body>
</html>