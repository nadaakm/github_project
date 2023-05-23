<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<?php
try  {
    $bdd=new PDO('mysql:host=localhost;dbname=test_nada','root','');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//$bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires)
 //VALUES (\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')'); 

 //$bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');
//echo 'Le jeu a bien été ajouté !';
//$bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE ID = 51');
//echo ' entrées ont été modifiées !' ;'<br/>';


//$response=$bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');
//while ($donnes =$response->fetch()) {
  //  echo $donnes ['nom_maj'].'<br/>';
//}
//$response->closeCursor();

$rep=$bdd->query('SELECT AVG(prix) AS prix_moy FROM jeux_video');
$don=$rep->fetch();
echo $don['prix_moy'];

$rep1=$bdd->query('SELECT AVG(prix) AS prix_moy,console FROM jeux_video GROUP BY console HAVING prix_moy<= 10');
 while ($don1=$rep1->fetch());{
?>

<p> le prix moyen pour chaque console est </p> <?php  echo $don1 ['prix_moy'];
 } 
 $rep1->closeCursor();
?>
 
    </head>
    <body>
    </body>
</html>

