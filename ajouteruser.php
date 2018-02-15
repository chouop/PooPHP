<?php
//$bdd = new PDO('mysql:host=localhost;dbname=gallery_db;charset=utf8', 'root', '');
require_once("config.php");
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$requete = 'INSERT INTO users (id, username, password, first_name, last_name) 
                VALUE("3", "pierre", "non", "ndie", "franck")'; // insertion des informations saisies dans la base de donnée
     //cette fonction permet d'interoger la base de donnée dans notre cas il permet d'ajouter les nouvelles utilisateur
      mysqli_query($connection, $requete);

//ici nous verifions que la requete a ete bien effectuer
      $_SESSION['success'] = 'nouvelle user enregistre avec success';
      if ( isset($_SESSION['success'])) {
      echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
      unset($_SESSION['success']);
      }
?>