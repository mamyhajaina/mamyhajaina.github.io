<?php 
   /* include('connexion.php');
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
  
    $sql="select * from utilisateur where Email='%s' and motdepasse='%s'";
    $sql=sprintf($sql,$email,sha1($mdp));
    $resultat=mysqli_query($connexion,$sql);
    $donnees= mysqli_fetch_assoc($resultat);
  
    if (isset($donnees['Email'])) {
            header('location:accueil.php');
        }
    else{
          header('location:index.php?error=1');
    }
     */      

?>
 <?php
        session_start();
        include('connexion.php');
        $_SESSION['login']=$_POST['email'];
        $_SESSION['pass']=$_POST['mdp'];
        $log=  mysqli_query($connexion,'select*from administrateur');

       while($resultat= mysqli_fetch_assoc($log))
      {
        if ($_SESSION['login']==$resultat['nom'] && $_SESSION['pass']==$resultat['mot_de_passe'])
            {
                header('location:Back_off/index.php');
                break;
            }
        else
        {
              header('location:login_admin.php?error=1');
        }   
      }  
 ?>   