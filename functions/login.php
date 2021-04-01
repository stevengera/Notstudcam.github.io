<?php
include 'db_connection.php';

if(isset($_POST['connexion'])) {

   $pseudo = $_POST['login_username'];
   
    if(empty($_POST['login_username'])) {
        echo "Le champ Username est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['login_password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $Pseudo = $_POST['login_username']; // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = $_POST['login_password'];
        
            //on vérifie que la connexion s'effectue correctement:
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE login = '".$Pseudo."' AND mdp = '".$MotDePasse."'");
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {

                   echo "Vous êtes à présent connecté !";
                    session_start();
                    $_SESSION['user'] = $Pseudo;
                    $_SESSION['is_logged_in'] = true;
                    header("location: ../etudiant.php?Pseudo=".$Pseudo."");
                }
            }
        }
    }

?>
