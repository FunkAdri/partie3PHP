<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP Partie 3</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css" />
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            // On fait une variable count que l'on met à 0
            $count = 0;

            //On lui dit que tant que la valeur de la variable $count est inférieure à 10, On l'affiche jusqu'à ce qu'il atteigne ce nombre
            //(avec une boucle while et attention, si on précise pas ce qu'on fait à la fin, le pc il est mort)
            while ($count <= 10) {
                ?>
                <p><?php echo $count; ?></p>
                <!--Puis on l'incrémente pour arriver à 10 -->
                <?php
                $count++;
            }
            ?>
        </div>
    </body>
</html>
