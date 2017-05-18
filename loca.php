<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");


$sql=mysql_query("select * from localite where id_del='".$_GET["code"]."'");
$t='<select name="localite" id="loca">
											<option readonly>localite</option>';
while($d=mysql_fetch_array($sql))
{
	
	$t=$t."<option value=".$d['id'].">".$d['Nom']."</option>";

}
$t=$t.'</select>';
echo $t;
?>