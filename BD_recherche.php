<?php

$pdo = null;
$dsn = 'mysql: host=localhost; dbname=sewcametrie';
$dbUser = 'root';
$pw = '';


   
try {

$pdo = new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['Matricule'])) {

       $Matricule = $_POST['Matricule'];

       if ($_POST['Matricule'] != ""){
                
             $res= new pdo("mysql:host=localhost;dbname=sewcametrie","root","");
             $result = $res -> prepare('SELECT * FROM note where Matricule=? ');
             $result -> execute(array($Matricule));

       }

       }

       
echo "  <br><h3>NOTES DE L'étudiant Rechercher : </h3><br/>";           
            echo "<table border=2 bordercolor=blue>"; 
                    echo "<tr>"; 
                    echo " <td> Matricule </td>";
                    echo "<td> POO </td>";   
                    echo "<td> DTIC </td>";   
                    echo "<td> TICMAG </td>";    
                    echo "<td> PWEB </td>";
                    echo "<td> CLOUD </td>";   
                    echo "<td> UML </td>";   
                    echo "<td> MERISEE </td>";    
                    echo "<td> BD </td>";
                    echo "<td> ImBD </td>";   
                    echo "<td> PROBA </td>";   
                    echo "<td> ROO </td>";    
                    echo "<td> GRAPHE </td>";
                    echo "<td> ALGEBRE </td>";   
                     
                    echo "<tr>";
    while ($data= $result->fetch()) {
                    echo "<tr>";   
                    echo "<td>".$data['Matricule']."</td>";    
                    echo "<td>".$data['POO']."</td>";    
                    echo "<td>".$data['DTIC']."</td>";    
                    echo "<td>".$data['TICMAG']."</td>";    
                    echo "<td>".$data['PWEB']."</td>"; 
                    echo "<td>".$data['CLOUD']."</td>";
                    echo "<td>".$data['UML']."</td>";    
                    echo "<td>".$data['MERISEE']."</td>";    
                    echo "<td>".$data['BD']."</td>";    
                    echo "<td>".$data['ImBD']."</td>";    
                    echo "<td>".$data['PROBA']."</td>";    
                    echo "<td>".$data['ROO']."</td>";    
                    echo "<td>".$data['GRAPHE']."</td>";
                    echo "<td>".$data['ALGEBRE']."</td>";    
                    echo "</tr>";    
                    echo "<br/><br/>";
  

    }
 
}


catch (PDOException $e)
    {
       echo 'Erreur de connexion : ' . $e->getMessage();
    }



?>