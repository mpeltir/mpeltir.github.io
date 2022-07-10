<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "hello78") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <meta http-equiv="refresh" content="0;url=home.html" />
 
        
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>