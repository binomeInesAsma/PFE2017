<?php
mysql_connect("localhost","root","");
mysql_select_db("immo");

if(isset($_POST['email'])||isset($_POST['nom'])||isset($_POST['message'])||isset($_POST['tele'])){
$email=$_POST['email'];
$nom=$_POST['nom'];
$idd=$_POST['id'];
$message=$_POST['message'];
$tele=$_POST['tele'];

$sql=mysql_query("insert into messagerie(email,nom,message,id,tele)values('".$email."','".$nom."','".$message."','".$idd."','".$tele."')")or die(mysql_error());
header("location:./Acceuil.php");}

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
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title> Contact</title>

</head>

<body class="page-sub-page page-contact" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>+216 54099448 / +216 20946364</figure>
                    <figure><strong>Email:</strong>CLIQUEImmo@gmail.com</figure>
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
                    <div class="navbar-brand nav" id="brand"width="300" height="70">
                    <img src=" assets/img/KK.jpg" alt="brand"width="300" height="100"></a>
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
                        
                        <li><a href="ajout.php"><b><FONT color="#4169E1">Proposer vos bien</font></b></a></li>
                        <li ><a href="contact.php"><b><FONT color="#4169E1">Guide</font></b></a>
                            
                        </li>
                        <li class="active "><a href="contact.php"><b><FONT color="#4169E1">Contact</font></b></a></li>
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
            <ol class="breadcrumb">
                <li><a href="#"></a></li>
                <li class="active"></li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
					
                        <h1>Contactez_Nous</h1>
						 <b>Téléphone : <span dir="ltr">+216 54099448 </span></b>
                        <hr class="thick">
                        <section id="form">
                            <header><h3>Envoyer un Message</h3></header>
                            <form   method="post"  class="clearfix">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-name"> Nom<em>*</em></label>
                                            <input type="text" class="form-control" id="form-contact-name" name="nom" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
									</div>
									 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-email"> Email<em>*</em></label>
											<input type="hidden" name="id"  value="<?php echo $id;?>">
                                            <input type="email" class="form-control" id="form-contact-email" name="email" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
									
                                </div><!-- /.row -->
								 <div class="row">
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-tele"> Téléphone<em>*</em></label>
											<input type="hidden" name="id"  value="<?php echo $id;?>">
                                            <input type="number" class="form-control" id="form-contact-tele" name="tele" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
									</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-contact-message"> Message<em>*</em></label>
                                            <textarea class="form-control" id="form-contact-message" rows="8" name="message" required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-default" id="form-contact-submit">Envoyer Message</button>
                                </div><!-- /.form-group -->
                                <div id="form-status"></div>
                            </form><!-- /#form-contact -->
                        </section>
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Contact -->

                <!-- sidebar --><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
                            </form><!-- /#form-map -->
                        </aside><!-- /#edit-search -->
                        
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
   
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="assets/js/tmpl.js"></script>
<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.slider.js"></script>

<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
<script>
    _latitude = 48.87;
    _longitude = 2.29;
    google.maps.event.addDomListener(window, 'load', contactUsMap(_latitude,_longitude));
</script>
</body>
</html>