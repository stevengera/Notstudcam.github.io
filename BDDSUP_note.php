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


      if (isset($_POST['Matricule'])) {

       $nom = $_POST['Matricule'];
       

          if ( $_POST['Matricule'] != "" ) {
            

             $supprimer = 'DELETE  FROM `note` WHERE Matricule = "'.$_POST['Matricule'].'"';
             $execute = $pdo->query($supprimer);
             
            echo 'Note supprimer Avec Success !!!<br/><br/><br/>';
            ?>

<?php
            }

          else echo "Erreur: un ou plusieurs champs vide. Veillez insérer des données dans ces champs";

       }     

?>

</body>
</html>