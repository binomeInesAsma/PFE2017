<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");
if(isset($_POST['file'])){
if(isset($_POST['ville'])){
	$Gouvernorat=$_POST['ville'];
$Delegation=$_POST['delegation'];
$Localite=$_POST['localite'];
$type=$_POST['type'];
$objectifs=$_POST['objectifs'];
$beds=$_POST['beds'];
$bath=$_POST['baths'];
$area=$_POST['area'];
$garages=$_POST['garages'];
$email=$_POST['email'];
$tele=$_POST['tele'];
$prix=$_POST['prix'];
$sql=mysql_query("insert into immo(ville,dele,Localite,type,objectifs,beds,baths,area,garages,email,tele,prix)
values('".$Gouvernorat."','".$Delegation."','".$Localite."','".$type."','".$objectifs."','".$beds."','".$bath."','".$area."','".$garages."','".$email."','".$tele."','".$prix."')")or die(mysql_error());
$sql=mysql_query("select * from immo ");
$i=0;
while($d=mysql_fetch_array($sql)){
	$i++;
}
	$valid_formats=array("jpg","png","gif","bmp");
										  $max_file_size=1024*100;
										  $path="./uploads/";
										  $count=0;
										  foreach ($_FILES['file']['name']as $f=>$name){
											  if(move_uploaded_file($_FILES["file"]["tmp_name"][$f],$path.$name))
											  $sql=mysql_query("insert into im(idimmo,file)values('".$i."','".$name."')");
											  $count++;
										  
										  } 
										


header("location:./Acceuil.php");

	
	
	
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>


<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/fileinput.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
	
	<script>
function showUser() {
    
        var str=document.getElementById("ville").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegation").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","dele.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function h() {
    
        var str=document.getElementById("loca").value;
       
       alert(str);
    
}
</script>
<script>
function showU() {
    
        var str=document.getElementById("dele").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("loca").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>


    <title>Ajouter votre proprieté</title>

</head>

<body class="page-sub-page page-submit" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    figure><strong>Phone:</strong>+216 54099448</figure>
                    <figure><strong>Email:</strong>KRAIEM Immo@gmail.com</figure>
                </div>
                <div class="user-area">
                    
                </div>
            </div>
        </div>
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="#"><img src="assets/img/bbb.jpg" alt="brand"width="300" height="100"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
					
					<li ><a href="Acceuil.php"><b><FONT color="#4169E1">Acceuil</font></b></a>
                            
                        </li>
                        <li ><a href="Acheter.php"><b><FONT color="#4169E1">Acheter</font></b></a>
                            
                        </li>
                        <li ><a href="Louer.php"><b><FONT color="#4169E1">Louer</font></b></a>
                           
                        </li>
                        <li ><a href="Vacances.php"><b><FONT color="#4169E1">Vacances</font></b></a>
                            
                                
                        </li>
                        <li class="active "><a href="ajout.php"><b><FONT color="#4169E1">Proposer vos bien</font></b></a>
                            
                        </li>
                        <li><a href="contact.php"><b><FONT color="#4169E1">Guide</font></b></a></li>
                        
                        <li><a href="contact.php"><b><FONT color="#4169E1">Contact</font></b></a></li>
                    </ul>
                </nav><!-- /.navbar collapse-->
                <div class="add-your-property">
				
                    <a href="ajout.php" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Ajouter votre proprieté</span></a>
                </div>
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            
              
                
            
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Ajouter votre proprieté</h1></header>
            <div class="row">
                <!-- Submit-->
               
                
            </div><!-- /.row -->
            <form    action="./ajout.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <section id="submit-form">


                                <section>
                                    <div class="row">
                                        <div class="block clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <section id="summary">
                                                    <header></header>
													<div class="row">
                                                        
													<div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="submit-location" ><FONT color="#4169E1">Gouvernorat</font></label>
                                                       <select name="ville" id="ville" onchange="showUser();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
                                                    </div>
													
                                                    
                                                        <label for="submit-location"><FONT color="#4169E1">Localité</font></label>
														<div class="form-group"id="loca">
                                                        <select name="localite" id="localite">
											<option >Localité</option>
										
                                            </select>
                                                    </div>
													
                                                            <div class="form-group">
                                                                <label for="submit-status"><FONT color="#4169E1">Status</font></label>
                                                                <select name="objectifs" id="objectifs">
																<option readonly>Status</option>
                                                                    <option value="Vente">Vente</option>
                                                                    <option value="Location">Location</option>
																	<option value="Vacances">Vacances</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        <!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
													
													<div class="col-md-6 col-sm-6">
                                                 
                                                        <label ><FONT color="#4169E1">Délegation</font></label>
														<div class="form-group"id="delegation"maxlength="29">
                                                        <select name="dele" id="dele" >
											            <option >Délégation</option>

                                            </select>
                                                    </div></div>
													
                                           
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type"><FONT color="#4169E1">Type</font></label>
                                                               <select name="type">
											<option readonly>Type</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
                                                            </div><!-- /.form-group -->
                                                        
														</div>
														
														
                                                       
													 <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages"><FONT color="#4169E1">Prix</font></label>
                                                                <input type="number" class="form-control" id="prix" name="prix" pattern="\d*" required>
                                                           
														   </div><!-- /.form-group -->
                                                        <!-- /.col-md-6 -->
                                                    
                                                        </div>
														<div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Beds"><FONT color="#4169E1">Chambre</font></label>
                                                                <input type="number" class="form-control" id="beds" name="beds" pattern="\d*" required>
                                                            <!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
														
														
                                                        
                                                            <div class="form-group">
                                                                <label for="submit-Baths"><FONT color="#4169E1">Sale de bain</font></label>
                                                                <input type="number" class="form-control" id="baths" name="baths" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    <!-- /.row -->
                                                    
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-area"><FONT color="#4169E1">Surface</font></label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" id="area" name="area" pattern="\d*" required>
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        <!-- /.col-md-6 -->
														
                                                        
                                                            <div class="form-group">
                                                                <label for="submit-garages"><FONT color="#4169E1">Garages</font></label>
                                                                <input type="number" class="form-control" id="garages" name="garages" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    <!-- /.row --></div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                
                                                                <div class="input-group">
                                                                     <label for="submit-garages"><FONT color="#4169E1">Email</font></label>
                                                                <input type="email" class="form-control" id="submit-garages" name="email"  required>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages"><FONT color="#4169E1">Mobile</font></label>
                                                                <input type="number" class="form-control" id="submit-garages" name="tele" pattern="\d*" required>
                                                           
														   </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
														
                                                    </div><!-- /.row -->
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                       
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>

                                <section class="block" id="gallery">
                                    <header></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" type="file" name="file[]"  class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png,image/jpg" data-browse-class="btn btn-default" data-browse-label="Télécharger images">
                                         
											<figure class="note"><strong></strong> Vous pouvez télécharger toutes les images en même temps!</figure>
                                            <figure class="note"><strong></strong></figure>
                                        </div>
                                    </div>
                                </section>

                                
                        </div><!-- /.col-md-9 -->
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">1</figure>
                                <div class="description">
                                    <h1>Entrez les informations sur la propriété</h1>
                                    <p>apez des informations sur votre propriété. Soyez descriptif.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">Envoyer</button>
                                </div><!-- /.form-group -->
                                <figure class="note block">En cliquant sur le bouton "Envoyer"  vous acceptez </figure>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">2</figure>
                                <div class="description">
                                    <h1>Réexaminer l'information et envoyer</h1>
                                    <p>Vérifiez soigneusement les informations saisies et cliquez sur le bouton pour les soumettre.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    
    <!-- end Page Content -->
    <!-- Page Footer -->
   
             <aside id="footer-thumbnails" class="footer-thumbnails"></aside><!-- /#footer-thumbnails -->
            <aside id="footer-copyright">
                <div class="container">
                    <span>Copyright © 2013. All Rights Reserved.</span>
                    <span class="pull-right"><a href="#page-top" class="roll">Haut de page</a></span>
                </div>
            </aside>
			</div>
        </div><!-- /.inner -->
    </footer>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

<script>
    var _latitude = 48.87;
    var _longitude = 2.29;

    google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
    function initSubmitMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            disableDefaultUI: false,
            //scrollwheel: false,
            styles: mapStyles
        };
        var mapElement = document.getElementById('submit-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new MarkerWithLabel({
            position: mapCenter,
            map: map,
            icon: 'assets/img/marker.png',
            labelAnchor: new google.maps.Point(50, 0),
            draggable: true
        });
        $('#submit-map').removeClass('fade-map');
        google.maps.event.addListener(marker, "mouseup", function (event) {
            var latitude = this.position.lat();
            var longitude = this.position.lng();
            $('#latitude').val( this.position.lat() );
            $('#longitude').val( this.position.lng() );
        });

//      Autocomplete
        var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
            $('#latitude').val( marker.getPosition().lat() );
            $('#longitude').val( marker.getPosition().lng() );
            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
        });

    }

    function success(position) {
        initSubmitMap(position.coords.latitude, position.coords.longitude);
        $('#latitude').val( position.coords.latitude );
        $('#longitude').val( position.coords.longitude );
    }

    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            $('#submit-map').addClass('fade-map');
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Location is not supported');
        }
    });











</script>

</body>
</html>