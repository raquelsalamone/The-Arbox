<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <!-- j'inclu mon fichier header avec ma fonction "include"  -->
    <?php include_once('header.php'); ?>
    
    <main>
        <div id="liste-oeuvres">

            <!-- j'inclu mon tableau de toutes les oeuvres -->
            <?php include_once('oeuvres.php');?>   

            <!-- j'insère mon tableau de toutes les oeuvres
            - $oeuvres = le nom de mon tableau ;
            - $key = c'est le numéro de mes oeuvres 
            - $value: les differentes valeurs attribuées a chaque oeuvre  
            - echo Pour afficher du contenu  --> 
            <?php
                foreach ($oeuvres as $key => $value)  
                //  boucle "foreach" Instructions à exécuter pour chaque élément du tableau
            {
                    echo '<article class="oeuvre">';
                    echo '<a href="oeuvre_details.php?oeuvre='.$key.'">'; 
                    echo '<img src="'.$value['image'].'" alt="'.$value['title'].'">';
                    echo '<h2>'.$value['title'].'</h2>';
                    echo '<p class="description">'.$value['author'].'</p>';
                    echo '</a>';
                    echo '</article>';
                
                } 
            ?>
        </div>
    </main>
<!-- j'inclu mon fichier footer avec ma fonction "include"  -->
    <?php include_once('footer.php'); ?>
</body>
</html>