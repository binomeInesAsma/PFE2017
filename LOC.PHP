<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");


$sql=mysql_query("select * from localite where id_gov='".$_GET["code"]."' and id_loc='".$_GET["mo"]."'");
$t='<select name="localite" id="localite">
											<option readonly>Localité</option>';
while($d=mysql_fetch_array($sql))
{
	
	$t=$t."<option value=".$d['Nom'].">".$d['Nom']."</option>";

}
$t=$t.'</select>';
echo $t;
?>