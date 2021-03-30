<?php

session_start();
include("couleur.php");
include("connexion.php");
$tableau=array();
$tableau=creer_name_champ($_SESSION['nb_choix']);

$ii=0;

for($i=0;$i<$_SESSION['nb_choix']; $i++)
{
    $_SESSION['quantite'.$i]=$_POST[$tableau[$i]];
     echo  $_SESSION['quantite'.$i];
    //echo '.$tableau[$i].';

    $sql= "INSERT INTO panier_voiture(id_panier_voiture,marques,nom,prix,quantite)VALUES ('%s','%s','%s','%s','%s')";

      $sqli=sprintf($sql,$ii,$_SESSION['marque'.$i],$_SESSION['nom'.$i],$_SESSION['prix'.$i],$_SESSION['quantite'.$i]);
      mysqli_query($connexion,$sqli);

      header('location:panier.php');
}
?>