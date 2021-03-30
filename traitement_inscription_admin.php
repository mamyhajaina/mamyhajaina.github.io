<?php
        //session_start();
        $nom=$_POST['nom_admin'];
        $mdp=$_POST['pass_admin'];
        $id=0;

	include("connexion.php");
  
    $sql= "INSERT INTO administrateur(id_admin,nom,mot_de_passe) VALUES ('%s','%s','%s')";


    $sqli=sprintf($sql,$id,$nom,$mdp);
    mysqli_query($connexion,$sqli);


    header('location:login_admin.php');
      
		  
?>