<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");


$sql=mysql_query("select * from delegation where id_gov='".$_GET["code"]."'");
$t='<select name="delegation" id="delegation">
											<option readonly>Délégation</option>';
while($d=mysql_fetch_array($sql))
{
	
	$t=$t."<option value=".$d['Nom'].">".$d['Nom']."</option>";

}
$t=$t.'</select>';
echo $t;
?>
