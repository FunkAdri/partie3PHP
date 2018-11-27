<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // On remplie les variables $fNumb et $sNumb avant le calcul
            $fNumb = 100;
            $sNumb = 7;
            //Tant que la valeur de $fNumb est supérieure ou égale à 10,
            while ($fNumb >= 10) {
                ?>
                <!-- On affiche le résultat du calcul suivant  -->
                <p><?php echo $fNumb * $sNumb; ?></p>
                <!-- Puis on la décrémente -->
                <?php
                $fNumb--;
            }
            ?>
        </div>
    </body>
</html>