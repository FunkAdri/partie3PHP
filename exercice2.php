<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // On remplie les variables $fNumb et $sNumb avant le calcul
            $fNumb = 0;
            $sNumb = 50;

            // Tant que la valeur de $fNumb est inférieure à 20,
            while ($fNumb < 20) {
                ?>

                <!-- On affiche le résultat du calcul, -->
                <p><?php echo $fNumb * $sNumb; ?></p>

                <!-- Puis on incrémente la valeur de $fNumb -->
                <?php
                $fNumb++;
            }
            ?>
        </div>
    </body>
</html>
