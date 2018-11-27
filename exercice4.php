<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // On remplie la variable $fNumb
            $fNumb = 1;
            //Tant que la valeur de $fNumb est inférieure à 10 :
            while ($fNumb <= 10) {
                ?>
                <!-- On affiche la valeur de $fNumb -->
                <p><?php echo $fNumb; ?></p>
                <!-- Puis, on remplace son contenu par son addition à son quotient avec $fNumb/2 -->
                <?php
                $fNumb += ($fNumb / 2);
            }
            ?>
        </div>
    </body>
</html>
