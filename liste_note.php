<?php
session_start ();
if (isset($_SESSION['is_logged_in'])) {}
  else{
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>etudiant</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- Favicons -->
  <link href="assets/img/logi.png" rel="icon">
  <link href="assets/img/logi.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <MARQUEE LOOP="17"><a class="navbar-brand" href="#"><span><strong>THEME : Numérisation Du Syteme De Gestion Des Notes : cas de L'IAI CAMEROUN </strong></span></a> </MARQUEE>   
      
      </div>
      <!--logo start-->
     <div class="container-fluid">
      
              
    </div>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          
          
         
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="" class="img-circle" width="80"></a></p>
      
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>PANNEAU</span>
              </a>
            <ul class="sub">
               <li><a href="ajout_etudiant">1. Ajouter l'etudiant</a></li>
              <li><a href="supprimer.php">2. Supprimer etudiant</a></li>
              <li><a href="modifier.php">3. Modifier etudiant</a></li>
              <li><a href="inserer_note">4. Ajouter une note </a></li>
              <li><a href="supprimer_note.php">5. Supprimer une note </a></li>
              <li><a href="modifier_note.php">6. Modifier une note</a></li>
              <li><a href="liste_note.php">7. Liste des notes</a></li>
              <li><a href="recherche.php">8. Rechercher un étudiant </a></li>
            </ul>
          </li>
          
         
          <li class="sub-menu">
            <a href="functions/deconnection.php">
              <i class="fa fa-tasks"></i>
              <span>Déconnexion</span>
              </a>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
   
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
           <div class="container-lg">
    <div class="table-responsive">
        <div class="row mt">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Details Sur les <b>Etudiants</b></h2></div>
                    <div class="col-sm-4">
                        <a href="ajout_etudiant.php" class="btn btn-info"><i class="fa fa-plus"></i> Ajouter un etudiant</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>POO</th>
                        <th>DTIC</th>
                        <th>TICMAG</th>
                        <th>PWEB</th>
                        <th>CLOUD</th>
                        <th>UML</th>
                        <th>MERISEE</th>
                        <th>BD</th>
                        <th>ImBD</th>
                        <th>PROBA</th>
                        <th>ROO</th>
                        <th>GRAPHE</th>
                        <th>ALGEBRE</th>
                    </tr>
                </thead>
<?php
include 'functions/db_connection.php';
$pdo = null;
$dsn = 'mysql: host=localhost; dbname=sewcametrie';
$dbUser = 'root';
$pw = '';
   
   
   try
   {
    $pdo = new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $pdo -> query('SELECT * FROM `note`');
                while ($rows= $result->fetch()){
?> 
                <tbody>
                    <tr>
                        <td><?php echo $rows['Matricule'];?></td>
                        <td><?php echo $rows['POO'];?></td>
                        <td><?php echo $rows['DTIC'];?></td>
                         <td><?php echo $rows['TICMAG'];?></td>
                         <td><?php echo $rows['PWEB'];?></td>
                         <td><?php echo $rows['CLOUD'];?></td>
                         <td><?php echo $rows['UML'];?></td>
                         <td><?php echo $rows['MERISEE'];?></td>
                         <td><?php echo $rows['BD'];?></td>
                         <td><?php echo $rows['ImBD'];?></td>
                         <td><?php echo $rows['PROBA'];?></td>
                         <td><?php echo $rows['ROO'];?></td>
                         <td><?php echo $rows['GRAPHE'];?></td>
                         <td><?php echo $rows['ALGEBRE'];?></td>
                    </tr>
                </tbody>
<?php
 }
}
  catch (PDOException $e)
    {
       echo 'Erreur de connexion : ' . $e->getMessage();
    }
?>
            </table>
        </div>
    </div>
</div>     
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
