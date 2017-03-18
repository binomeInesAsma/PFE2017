<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");
if(isset($_POST['ville'])){
	$target_dir = "./assets/img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		$gov=$_POST['details'];

$image=basename($_FILES["file"]["name"]);
$ville=$_POST['ville'];
$type=$_POST['type'];
$objectifs=$_POST['objectifs'];
$beds=$_POST['beds'];
$bath=$_POST['baths'];
$area=$_POST['area'];
$garages=$_POST['garages'];
$address=$_POST['address'];
$email=$_POST['email'];
$tele=$_POST['tele'];
$prix=$_POST['prix'];
$sql=mysql_query("insert into immo(ville,type,objectifs,beds,baths,area,garages,address,file,email,tele,prix)
values('".$ville."','".$type."','".$objectifs."','".$beds."','".$bath."','".$area."','".$garages."','".$address."','".basename($_FILES["file"]["name"])."','".$email."','".$tele."','".$prix."')")or die(mysql_error());
header("location:./index.php");
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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
                    <figure><strong>Phone:</strong>+216 12345678</figure>
                    <figure><strong>Email:</strong>Immo@example.com</figure>
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
                        <a href="#"><img src="assets/img/" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
					
					<li class="active "><a href="index.php"><b><FONT color="#4169E1">Acceuil</font></b></a>
                            
                        </li>
                        <li ><a href="Acheter.php"><b><FONT color="#4169E1">Acheter</font></b></a>
                            
                        </li>
                        <li ><a href="Louer.php"><b><FONT color="#4169E1">Louer</font></b></a>
                           
                        </li>
                        <li ><a href="Vacances.php"><b><FONT color="#4169E1">Vacances</font></b></a>
                            
                                
                        </li>
                        <li ><a href="ajout.php"><b><FONT color="#4169E1">Proposer vos bien</font></b></a>
                            
                        </li>
                        <li><a href="contact.html"><b><FONT color="#4169E1">Guide</font></b></a></li>
                        
                        <li><a href="contact.html"><b><FONT color="#4169E1">Contact</font></b></a></li>
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
            
                <img alt="" src="assets/img/is.jpg" width="1200" height="300" >
                
            
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
                                                        <label for="submit-location">Ville</label>
                                                        <select  id="submit-location" name="ville">
                                                            <option value="Tunis">Tunis</option>
                                                            <option value="Bizert">Bizert</option>
                                                            <option value="Nabeul">Nabeul</option>
                                                            <option value="sousse">sousse</option>
                                                            <option value="Mahdia">Mahdia</option>
															 <option value="Zaghouan">Zaghouan</option>
																 <option value="Ben Arrous">Ben Arrous</option>
															 <option value="Monastir">Monastir</option>
															  <option value="Beja">Beja</option>
															   <option value="El kef">El kef</option>
															    <option value="Siliana">Siliana</option>
																 <option value="Jandouba">Jandouba</option>
																 <option value="Kassrine">Kassrine</option>
																 <option value="Kairouan">Kairaouan</option>
																 <option value="Sidi bou zid">Sidi bou zid</option>
																 <option value="Sfax">Sfax</option>
																 <option value="Gabes">Gabes</option>
																 <option value="Gafsa">Gafsa</option>
																 <option value="Kbeli">Kbeli</option>
																 <option value="Touzer">Touzer</option>
																 <option value="Djerba">Djerba</option>
																 <option value="Mednine">Mednine</option>
																 <option value="Tataouin">Tataouin</option>
																
																 
				
																 
																 
                                                        </select>
                                                    </div></div>
                                                    
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type">Type</label>
                                                               <select name="type" id="submit-property-type">
                                                                    <option value="Apartment">Appartment</option>
                                                                    <option value="Maison">Maison</option>
                                                                    <option value="Terrain">Terrain</option>
                                                                    <option value="Bureau">Bureau</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
														</div>
														<div class="row">
														
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-status">Status</label>
                                                                <select name="objectifs" id="objectifs">
                                                                    <option value="Sale">Vente</option>
                                                                    <option value="Location">Location</option>
																	<option value="Vacances">Vacances</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        <!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
													 <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages">Prix</label>
                                                                <input type="number" class="form-control" id="prix" name="prix" pattern="\d*" required>
                                                           
														   </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Beds">Chambre</label>
                                                                <input type="number" class="form-control" id="beds" name="beds" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Baths">Baths</label>
                                                                <input type="number" class="form-control" id="baths" name="baths" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-area">Surface</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" id="area" name="area" pattern="\d*" required>
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages">Garages</label>
                                                                <input type="number" class="form-control" id="garages" name="garages" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                
                                                                <div class="input-group">
                                                                     <label for="submit-garages">Email</label>
                                                                <input type="email" class="form-control" id="submit-garages" name="tele"  required>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages">Mobile</label>
                                                                <input type="number" class="form-control" id="submit-garages" name="tele" pattern="\d*" required>
                                                           
														   </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
														
                                                    </div><!-- /.row -->
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                        <h2>Placer sur la carte</h2>
                                                        <span class="link-arrow geo-location">Obtenir Ma Position</span>
                                                    </header>
                                                    <div class="form-group">
                                                        <label for="address-map">Address</label>
                                                        <input type="text" class="form-control" id="address-map" name="address">
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Ou faites glisser le marqueur à la position de la propriété</label>
                                                    <div id="map" style="width:100%;height:350px;"></div>  <script type='text/javascript'>
													//<![CDATA[
      
  var map = null;
  //  Call this function when the page has been loaded
  function initialize()
  {
    var mapOptions = {
      center: new google.maps.LatLng(36.8321, 10.23047),
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      panControl: false,
      zoomControlOptions: { position: google.maps.ControlPosition.RIGHT_CENTER },
      streetViewControl: 1
    };
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    marker_809 = new google.maps.Marker({
      position: new google.maps.LatLng(36.8321, 10.23047),
      map: map
    });  }
window.onload = function(){initialize()};
    //]]>
  </script>
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>

                                <section class="block" id="gallery">
                                    <header><h2>Gallery</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" type="file" name="file"class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Télécharger images">
                                            <figure class="note"><strong>Hint:</strong> Vous pouvez télécharger toutes les images en même temps!</figure>
                                        </div>
                                    </div>
                                </section>

                                
                        </div><!-- /.col-md-9 -->
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">1</figure>
                                <div class="description">
                                    <h4>Entrez les informations sur la propriété</h4>
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
                                <figure class="note block">En cliquant sur le bouton "Envoyer"  vous acceptez <a href="terms-conditions.html">Termes et conditions</a></figure>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">2</figure>
                                <div class="description">
                                    <h4>Réexaminer l'information et envoyer</h4>
                                    <p>Vérifiez soigneusement les informations saisies et cliquez sur le bouton pour les soumettre.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <footer id="page-footer">
        <div class="inner">
            <aside id="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>A propos</h3>
                                <p>
                                </p>
                                <hr>
                                <a href="#" class="link-arrow">Lire la suite</a>
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>Propriétés récentes</h3>
                                <div class="property small">
                                    <a href="property-detail.html">
                                        <div class="property-image">
                                            <img alt="" src="assets/img/properties/property-06.jpg">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <a href="property-detail.html"><h4></h4></a>
                                        <figure> </figure>
                                        <div class="tag price"></div>
                                    </div>
                                </div><!-- /.property -->
                                <div class="property small">
                                    <a href="property-detail.html">
                                        <div class="property-image">
                                            <img alt="" src="assets/img/properties/property-09.jpg">
                                        </div>
                                    </a>
                                    <div class="info">
                                        <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
                                        <figure>Minneapolis, MN 55402</figure>
                                        <div class="tag price">$ 36,000</div>
                                    </div>
                                </div><!-- /.property -->
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>Contact</h3>
                                <address>
                                    <strong>Your Company</strong><br>
                                    4877 Spruce Drive<br>
                                    West Newton, PA 15089
                                </address>
                                +1 (734) 123-4567<br>
                                <a href="#">hello@example.com</a>
                            </article>
                        </div><!-- /.col-sm-3 -->
                        <div class="col-md-3 col-sm-3">
                            <article>
                                <h3>Useful Links</h3>
                                <ul class="list-unstyled list-links">
                                    <li><a href="#">All Properties</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Login and Register Account</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                </ul>
                            </article>
                        </div><!-- /.col-sm-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </aside><!-- /#footer-main -->
            <aside id="footer-thumbnails" class="footer-thumbnails"></aside><!-- /#footer-thumbnails -->
            <aside id="footer-copyright">
                <div class="container">
                    <span>Copyright © 2013. All Rights Reserved.</span>
                    <span class="pull-right"><a href="#page-top" class="roll">Haut de page</a></span>
                </div>
            </aside>
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