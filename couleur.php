<?php
 
 
$c= array();
$c[0]="c0";$c[1]="c1";$c[2]="c2";$c[3]="c3";$c[4]="c4";$c[5]="c5";
$c[6]="c6";$c[7]="c7";$c[8]="c8";$c[9]="c9"; 

 function creer_name_champ($boucle)
 {
     $tab=array();
     for($i=0;$i<$boucle;$i++)
     {
        $tab[$i]="n$i";
     }
     return $tab;
 }
 
?>