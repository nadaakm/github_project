<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    <title>page d'affichage de msg</title>
    </head>
    <body>
    <?php 
    try  {
        $bdd=new PDO('mysql:host=localhost;dbname=test_nada','root','');/// se  connecter a la base de donnèes 
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());//// verifier si y a pas d'erreur de mdp ou pseudo
    }

    $req = $bdd->prepare('INSERT INTO mini_chat_tab (psd, texte) VALUES(?, ?)');
    $req->execute(array($_POST['psd'], $_POST['texte']));


    // Redirection du visiteur vers la page du minichat 
    header('Location: minichat.php');
    ?>
    </body> 


</html>
