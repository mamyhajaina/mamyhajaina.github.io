<?php
include("connexion.php");
$sql="DELETE FROM panier_voiture WHERE id_client IS NULL";

mysqli_query($connexion,$sql);
header('Location: shop.php');

?>