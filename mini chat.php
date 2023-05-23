<?php
setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true);
session_start()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    <title>Mini chat</title>
    </head>
    <body>
        <p><?php echo $_SESSION['prenom']; ?> ici vous pouvez discuter </p> </br>
    <form  action="mn.php" method="post"> 
<p>
    Pseudo <input type="pseudo" name="psd"/></br>
    Message <input type="message" name="texte" />
    <input type="submit" value="Valider" /> 
    </p>   
</form> 

<?php
try  {
    $bdd=new PDO('mysql:host=localhost;dbname=test_nada','root','');/// se  connecter a la base de donnèes 
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());//// verifier si y a pas d'erreur de mdp ou pseudo
}



$response=$bdd->query('SELECT psd,texte FROM  mini chat ORDER BY ID DESC LIMIT 0, 10'); ///envoyer la requette a mysql

while ($donnees = $response->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['psd']) .
    '</strong> : ' . htmlspecialchars($donnees['texte']) . '</p>';
}
?>



    </body>


</html>
