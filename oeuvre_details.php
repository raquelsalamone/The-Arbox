<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

<!-- j'inclu mon header avec ma fonction "include" en php -->
    <?php include_once('header.php'); ?>

<!--recuperer le details de chaque oeuvre -->
<main>
<?php include_once('oeuvres.php')?>

<?php 
        //récupérer l'identifiant de l'œuvre à partir de la chaîne de requête de l'URL
        if (isset($_GET['oeuvre']) ) { // isset fonction qui permet de vérifier si une variable est définie et si elle n'est pas nulle
            $key = (int)$_GET['oeuvre'];// convertit en un nombre ENTIER (integer) en utilisant la conversion (int)
            if (array_key_exists($key, $oeuvres)) /* array_key_exists($key, $oeuvres): Cette fonction PHP permet de vérifier 
            si une clé donnée ($key) existe dans un tableau donné ($oeuvres) */
            {
    ?>
        <!-- afficher le detail de chaque oeuvre -->
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?= $oeuvres[$key]['image']; ?>" alt="<?= $oeuvres[$key]['title'];?>">
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvres[$key]['title'];?></h1>
                    <p class="description"><?php echo $oeuvres[$key]['author'];?></p>
                    <p class="description-complete">
                        <?php echo $oeuvres[$key]['description'];?>
                    </p>
                </div>
            </article>

<!--Après le bloc if précédent, si la condition est évaluée comme false
(c'est-à-dire si la clé $key n'existe pas dans le tableau $oeuvres), 
le code entre les accolades du bloc else sera exécuté.  -->
<?php 
            } 
        else {
            echo "ID d'oeuvre invalide.";
        }
    }
?>
</main>
    <!-- j'inclu mon footer avec ma fonction "include" en php -->
<?php include_once('footer.php'); ?>

</body>
</html>