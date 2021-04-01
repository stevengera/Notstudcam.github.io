<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
    
        if(!mysqli_query($mysqli,"INSERT INTO composant SET nom='".$_POST['nom']."', num_serie='".$_POST['num_serie']."', etat='".$_POST['etat']."', localisation='".$_POST['localisation']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Ajouter avec succés";

            header("location: ../composant.php");
        }

 }



