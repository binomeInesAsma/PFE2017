<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");
if(isset($_POST['ville'])){
	echo "hhhh";
$ville=$_POST['ville'];
$type=$_POST['type'];
$objectifs=$_POST['objectifs'];
$beds=$_POST['beds'];
$bath=$_POST['bath'];
$area=$_POST['area'];
$garages=$_POST['garage'];
$address=$_POST['address'];
$sql=mysql_query("insert into immo(ville,type,objectifs,beds,bath,area,garages,address)
values('".$ville."','".$type."','".$objectifs."','".$beds."','".$bath."','".$area."','".$garages."','".$address."')")or die(mysql_error());
header("location:./index.php");}
else{
	echo "nnn";
}
?>