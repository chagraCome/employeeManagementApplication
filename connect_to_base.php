<?php
		//connect to data base 
		$user="root";
		$password="";
		$host="localhost";
		 $conn=mysqli_connect($host,$user,$password); 
		mysqli_select_db($conn,"gestemploye_stage") or die('echec lors de la selection de la base'); 
?> 