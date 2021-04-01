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


      if (isset($_POST['Matricule'], $_POST['POO'], $_POST['DTIC'], $_POST['TICMAG'], $_POST['PWEB'], $_POST['CLOUD'], $_POST['UML'], $_POST['MERISEE'], $_POST['BD'], $_POST['ImBD'], $_POST['PROBA'], $_POST['ROO'], $_POST['GRAPHE'], $_POST['ALGEBRE'])) {

       $Matricule = $_POST['Matricule'];
       $POO = $_POST['POO'];
       $DTIC = $_POST['DTIC'];
       $TICMAG = $_POST['TICMAG'];
       $PWEB = $_POST['PWEB'];
       $CLOUD = $_POST['CLOUD'];
       $UML = $_POST['UML'];
       $MERISEE = $_POST['MERISEE'];
       $BD = $_POST['BD'];
       $ImBD = $_POST['ImBD'];
       $PROBA = $_POST['PROBA'];
       $ROO = $_POST['ROO'];
       $GRAPHE = $_POST['GRAPHE'];
       $ALGEBRE = $_POST['ALGEBRE'];

          if ($_POST['Matricule'] != "" && $_POST['POO'] != "" && $_POST['DTIC'] != "" && $_POST['TICMAG'] != "" && $_POST['PWEB'] != "" && $_POST['CLOUD'] != "" && $_POST['UML'] != "" && $_POST['MERISEE'] != "" && $_POST['BD'] != "" && $_POST['ImBD'] != "" && $_POST['PROBA'] != "" && $_POST['ROO'] != "" && $_POST['GRAPHE'] != "" && $_POST['ALGEBRE'] != "") {
            

             $insertion = "INSERT INTO note (Matricule, POO, DTIC, TICMAG, PWEB, CLOUD, UML, MERISEE, BD, ImBD, PROBA, ROO, GRAPHE, ALGEBRE)  VALUES('$Matricule', '$POO', '$DTIC', '$TICMAG', '$PWEB', '$CLOUD', '$UML', '$MERISEE', '$BD', '$ImBD', '$PROBA', '$ROO', '$GRAPHE', '$ALGEBRE')";
             $execute = $pdo -> query($insertion);

            echo "Note Ajouté Avec Success !!!<br/><br/><br/>";
            ?>

            
<?php
            }

          else echo "Erreur: un ou plusieurs champs vide. Veillez insérer des données dans ces champs";

       }     

   
?>
</body>
</html>