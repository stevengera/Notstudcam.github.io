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
            

             $insertion = "INSERT INTO etudiant (Matricule, Nom, Prenom, Age, Sexe, Pays, filiere, Classe)  VALUES('$Matricule', '$Nom', '$Prenom', '$Age', '$Sexe', '$Pays', '$filiere', '$Classe')";
             $execute = $pdo -> query($insertion);

            echo "Etudiant Ajouté Avec Success !!!<br/><br/><br/>";
            ?>

            
<?php
            }

          else echo "Erreur: un ou plusieurs champs vide. Veillez insérer des données dans ces champs";

       }     

   
?>
</body>
</html>