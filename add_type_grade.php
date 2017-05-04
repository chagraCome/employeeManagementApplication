<!DOCTYPE html>
<html>
<head>
<title>Ma page de traitement</title>
</head>
<body>
<?php


require_once "connect_to_base.php";
if (!empty($_POST))
 {
$n=$_POST["typegrade"];


$query="INSERT INTO grade(`type_grade`)values('".$n."')" ;
		$result=mysqli_query($conn,$query);

//echo" very good";

/*$query="select * from products where timestamp_prod = (select max(timestamp_prod) from products );";
$result=mysqli_query($conn,$query);
$row_add_product=mysqli_fetch_array($result) ; 
$code_product = $row_add_product["code_prod"];


$target_dir = "images/product-details";
$target_file = $target_dir . "\\".$code_product.".jpg";
echo $target_dir;
echo $target_file;
print_r($_FILES);
move_uploaded_file($_FILES["image_prod"]["tmp_name"], $target_file);
header("location:".$_SERVER["HTTP_REFERER"]);*/

}
else {echo "error";}
?>
</body>
</html>