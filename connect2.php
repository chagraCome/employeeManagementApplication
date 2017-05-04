<?php  
	session_start() ;
	if(isset($_SESSION["login"])) { header("location:/stage2/dashbord.php");}

		if((!empty($_POST["login"]))&&(!empty($_POST["password"]))){
			require "connect_to_base.php";
			$name=$_POST["login"];
			$pass=$_POST["password"];

			$query="select * from employe where login='".$name."'  and password = '".$pass."'; ";
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result)==1) {
				//Identification effectuer avec success 
				$_SESSION["login"] = $name;
				$_SESSION["user_info"]=mysqli_fetch_array($result);
				if($_SESSION["user_info"]["privilege"]==1) $_SESSION["user_is_admin"]=1;
				header("location:/stage2/dashbord.php");
			}

		}
		else{
		//include_once "html-header.php";
		//include_once "header.php";
		 header("location:/dashbord.php");
	}
	?>