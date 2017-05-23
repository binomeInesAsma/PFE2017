
 <?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");

 if(isset($_POST['id'])){
										  $path="./uploads/";
										  $count=0;
										  foreach ($_FILES['file']['name']as $f=>$name){
											  if(move_uploaded_file($_FILES["file"]["tmp_name"][$f],$path.$name))
											  $sql=mysql_query("insert into video(idimmo,vid)values('".$_POST['id']."','".$name."')")or die(mysql_error());
 $count++;}}
											  ?>
											  <html>
											  <body>
											  <section class="block" id="gallery">
                                    <header></header>
									<form action="ajoutvid.php" method="post" enctype="multipart/form-data">
                                    <div class="center">
                                        <div class="form-group">
										<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                            <input id="file-upload" type="file" name="file[]"  class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false"  data-browse-class="btn btn-default" data-browse-label="Télécharger Video">
                                         
                                        </div>
                                    </div>
                                </section>
								 <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">> Envoyer</button>
                                </div><!-- /.form-group -->
                                <figure class="note block">En cliquant sur le bouton "Envoyer"  vous acceptez </figure>
                            </div>
                        </div></form>
								</body>
								</html>