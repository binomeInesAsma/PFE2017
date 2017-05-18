<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");


$sql=mysql_query("select * from Delegation where id_gov='".$_GET["code"]."'");
$t='<select name="delegation" id="delet" onchange="terrainl();">
											<option readonly>Délégation</option>';
while($d=mysql_fetch_array($sql))
{
	
	$t=$t."<option value=".$d['id_del'].">".$d['Nom']."</option>";

}
$t=$t.'</select>';
echo $t;
?>