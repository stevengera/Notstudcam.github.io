<!DOCTYPE html>
<html>
<head>
	<title>modifier</title>
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


      if (isset($_POST['Matricule'], $_POST['Nom'], $_POST['Prenom'], $_POST['Age'], $_POST['Sexe'], $_POST['Pays'], $_POST['filiere'], $_POST['Classe'])) {

       $Matricule = $_POST['Matricule'];
       $Nom = $_POST['Nom'];
       $Prenom = $_POST['Prenom'];
       $Age = $_POST['Age'];
       $Sexe = $_POST['Sexe'];
       $Pays = $_POST['Pays'];
       $filiere = $_POST['filiere'];
       $Classe = $_POST['Classe'];

          if ($_POST['Matricule'] != "" && $_POST['Nom'] != "" && $_POST['Prenom'] != "" && $_POST['Age'] != "" && $_POST['Sexe'] != "" && $_POST['Pays'] != "" && $_POST['filiere'] != "" && $_POST['Classe'] != "") {
            

             $modifier = 'UPDATE  etudiant SET Matricule = "'.$_POST['Matricule'].'" , Nom = "'.$_POST['Nom'].'", Prenom = "'.$_POST['Prenom'].'", Age = "'.$_POST['Age'].'", Sexe = "'.$_POST['Sexe'].'", Pays = "'.$_POST['Pays'].'", filiere = "'.$_POST['filiere'].'", Classe = "'.$_POST['Classe'].'" WHERE Matricule = "'.$_POST['Matricule'].'"';  
             $execute = $pdo->query($modifier);
             
            echo 'Les Identifiants De l\'Etudiant modifier Avec Success !!!<br/><br/><br/>';
            ?>

            
<?php
            }

          else echo "Erreur: un ou plusieurs champs vide. Veillez insérer des données dans ces champs";

       }     

   
?>

</body>
</html>