<?php
session_start();
require "connect_to_base.php";
requete_pointage="select * from pointage where `id`='".$id;
 $resultat_pointaget=mysqli_query($conn,$requete_pointage)or die("error");
// echo mysqli_num_rows($resultat_pointage);
while ($row2 = mysqli_fetch_assoc($resultat_pointage))
 {
 echo $row2["Date_pointage"];
echo $row2["heure_entre"];
echo $row2["heure_sortie"];
}
?>