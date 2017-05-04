<?php
session_start();
require "connect_to_base.php";
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //reccuperation des données
 if (!empty($_POST))
 {
                        $heure_entre=$_POST['heure_	enter'];
                        $heure_sortie=$_POST['heure_sortie'];
						$date_pointage=
						$req=" insert into pointage(`Date_pointage`,`heure_entre`,`heure_sortie`,`id`) values (CURRENT_DATE(),'".$heure_entre."','".$heure_sortie."','".$id."');";
						$result = mysqli_query($conn,$req);
						
						
					}	
						
						?>