<?php
include("connexion.php");
session_start();

$sql="select *  from panier_voiture where id_client is null";
$result=mysqli_query($connexion, $sql);

$mail=$_SESSION['name_client'];
$a=0;
$id_client="select * from clients where email='$mail'";
$resultat=mysqli_query($connexion, $id_client);
while ($ligne = mysqli_fetch_assoc($resultat))
{
  $id_c= $ligne['id_client'];
}

while ($row = mysqli_fetch_assoc($result))
{
  $marques= $row['marques'];
  $voiture=$row['nom'];
  $price=$row['prix'];
  $qte=$row['quantite'];
}

if(isset($_SESSION['name_client'])) {
     $sql="update panier_voiture set id_client='$id_c'";

     $sqlt= "INSERT INTO panier_voiture(id_panier_voiture,id_client,marques,nom,prix,quantite) VALUES ('%s','%s','%s','%s','%','%')";


     $sqli=sprintf($sqlt,$a,$id_c,$marques,$voiture,$price,$qte);
     mysqli_query($connexion,$sqli);
     header('location:shop.php');
    }
}
else{

    header('location:login-register.php');
}
?>