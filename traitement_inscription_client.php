<?php
        //session_start();
        $nom=$_POST['nom_inscript'];
        $mdp=$_POST['mdp_inscript'];
        $mail=$_POST['mail_inscript'];
        $id=0;

	include("connexion.php");
  
    $sql= "INSERT INTO clients(id_client,nom,mot_de_passe,email) VALUES ('%s','%s','%s','%s')";


    $sqli=sprintf($sql,$id,$nom,$mdp,$mail);
    mysqli_query($connexion,$sqli);


    header('location:login-register.php');
      
		  
?>