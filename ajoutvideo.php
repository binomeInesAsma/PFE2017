<?php
mysql_connect("localhost","root","");
mysql_select_db("immo");
$sql=mysql_query("select * from immo ");
$i=0;
while($d=mysql_fetch_array($sql)){
	$i++;
}
										  $max_file_size=1024*100;
										  $path="./uploads/";
										  $count=0;
										  foreach ($_FILES['file']['name']as $f=>$name){
											  if(move_uploaded_file($_FILES["file"]["tmp_name"][$f],$path.$name))
											  $count++;
										  
										  } 
?>
<!DOCTYPE HTML>
<html>
<body>
 
                                   <form    action="./ajoutvideo.php" method="POST" enctype="multipart/form-data"> 
                                <section class="block" >
                                    <header></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" type="file" name="file[]"  multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false"  data-browse-class="btn btn-default" data-browse-label="Télécharger images">
                                         
											<figure class="note"><strong></strong> Vous pouvez télécharger toutes les images en même temps!</figure>
                                            <figure class="note"><strong></strong></figure>
											
                                        </div>
                                    </div>
                                </section>
								<input type="submit">
								</form>
</body>
</html>	
								
								