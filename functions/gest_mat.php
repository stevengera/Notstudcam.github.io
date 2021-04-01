<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
    
        if(!mysqli_query($mysqli,"INSERT INTO materiel SET nom='".$_POST['nom']."', marque='".$_POST['marque']."', etat='".$_POST['etat']."', localisation='".$_POST['localisation']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Ajouter avec succés";

            header("location: ../materiel.php");
        }

 }



