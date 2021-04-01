<!DOCTYPE html>
<html>
<head>
  <title>affiche</title>
</head>
<body>


<?php

$pdo = null;
$dsn = 'mysql: host=localhost; dbname=sewcametrie';
$dbUser = 'root';
$pw = '';
   
   
   try
   {

    $pdo = new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }

    catch (PDOException $e)
    {
       echo 'Erreur de connexion : ' . $e->getMessage();
    }


      if (isset($_POST['Nom'])) {

       $nom = $_POST['Nom'];
       

          if ( $_POST['Nom'] != "" ) {
            

             $supprimer = 'DELETE  FROM `etudiant` WHERE Nom = "'.$_POST['Nom'].'"';
             $execute = $pdo->query($supprimer);
             
            echo 'Etudiant supprimer Avec Success !!!<br/><br/><br/>';
            ?>

<?php
            }

          else echo "Erreur: un ou plusieurs champs vide. Veillez insérer des données dans ces champs";

       }     

?>

</body>
</html>