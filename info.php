<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Info page</title>
</head>
<body>
    <div class="text-center mt-5">
        <button type="button" class="btn btn-info"><a href="index.php" style="color : white;">Back to index</a></button>
        <div>
            <?php
                /* On teste si les paramètres existent --> isset() : fonction qui teste si une varable existe*/
                /* ET si la valeur du paramètre contient quelque chose --> !empty() */
                if(isset($_GET['langage']) && isset($_GET['serveur']) && !empty($_GET['langage']) && !empty($_GET['serveur'])){
                    /* htmlspecialchars() --> fonction qui convertit les caractères spéciaux en entités HTML
                       Si une balise HTML est entrée, elle ne sera pas interprêtée, 
                       seulement affichée avec ses < > */
                    echo 'Langage : ' . htmlspecialchars($_GET['langage']). '<br>Serveur : ' . htmlspecialchars($_GET['serveur']);
                }else{
                    echo 'Il manque des paramètres là !';
                }


                /* Méthode avec strip_tags() --> si une balise HTML est entrée, elle ne sera pas interprêtée
                   et affichée sans ses < > 
                if(isset($_GET['langage']) && isset($_GET['serveur']) && !empty($_GET['langage']) && !empty($_GET['serveur'])){
                    echo 'Langage : ' . strip_tags($_GET['langage']). '<br>Serveur : ' . strip_tags($_GET['serveur']);
                }else{
                    echo 'Il manque des paramètres là !';
                } */
            ?>
        </div>
    </div>
</body>
</html>