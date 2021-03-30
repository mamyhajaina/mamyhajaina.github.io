<?php
        session_start();
        include("connexion.php");
       $_SESSION['name_client']=$_POST['nom_client'];
       $nom= $_SESSION['name_client'];
        $_SESSION['pass_client']=$_POST['pass_client'];
        $mdp=$_SESSION['pass_client'];

        $log=  mysqli_query($connexion,'SELECT * from clients');

        $request="select * from clients where nom_client='$nom' AND mot_de_passe='$mdp' ";
        $result=mysqli_query($connexion, $request);

        while ($ligne = mysqli_fetch_assoc($result))
        {
           $_SESSION['id']= $ligne['id_client'];
           $_SESSION['anarana']=$ligne['nom_client'];
        }
       $anarana= $_SESSION['anarana'];

        while($resultat= mysqli_fetch_assoc($log))
        {
          if ($_SESSION['name_client']==$resultat['email'] &&  $_SESSION['pass_client']==$resultat['mot_de_passe'])
              {

                $sql= "INSERT INTO panier_voiture(id_client ) VALUES ('%s')";
                $sqli=sprintf($sql,$_SESSION['id']);
                mysqli_query($connexion,$sqli);

                  header('location:shop.php');
                  break;
              }
          else
          {
                header('location:login-register.php?error=1');
          }   
        }  

?>