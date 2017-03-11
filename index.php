<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");
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
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Immo</title>

</head>

<body class="page-homepage navigation-fixed-top page-slider horizontal-search-float" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">

    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>+216 12345678</figure>
                    <figure><strong>Email:</strong>Immo@example.com</figure>
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
                        <a href="index-google-map-fullscreen.html"><img src="assets/img/logo.png" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active "><a href="index.php"><b>Acheter</b></a>
                            
                        </li>	
                        <li ><a href="index.php"><b>Louer</b></a>
                            
                        </li>
                        <li ><a href="index.php"><b>Vacances</b></a>
                            
                        </li>
                        <li 
                        </li>
                        <li><a href="ajout.php"><b>Proposer vos bien</b></a></li>
                        <li ><a href="contact.html"><b>Guide</b></a>
                            
                        </li>
                        <li><a href="contact.html"><b>Contact</b></a></li>
                    </ul>
                </nav><!-- /.navbar collapse-->
                <div class="add-your-property">
                    <a href="ajout.php" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Ajouter votre proprieté</span></a>
                </div>
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->

    <!-- Slider -->
    <div id="slider" class="loading has-parallax">
        <div id="loading-icon"><i class="fa fa-cog fa-spin"></i></div>
        <div class="owl-carousel homepage-slider carousel-full-width">
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                            
                            <h3></h3>
                            <figure></figure>
                        </div>
                        <hr>
                        
                    </div>
                </div>
                <img alt="" src="assets/img/a672423842a272c8df44444e946aff68.jpg">
            </div>
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                           
                            <h3></h3>
                            <figure></figure>
                        </div>
                        <hr>
                        
                    </div>
                </div>
                <img alt="" src="assets/img/dc2b63dd7c510437611988b6f179f2c0.jpg" >
            </div>
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                            
                        </div>
                        <hr>
                        
                    </div>
                </div>
                <img alt="" src="assets/img/villa-luxe-super-cannes-06-6.jpg" style="width:8000 px;height:4000 px"; >
            </div>
        </div>
    </div>
    <!-- end Slider -->

    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="search-box map">
                    <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-country">
											<option readonly>Type</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="form-sale-city">
											<option readonly>Ville</option>
											<?php $ville=mysql_query("select * from ville");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['NomVille'];?>"><?php echo $v['NomVille'];?></option>
                                                <?php } ?>
                                                
                                                
												
												
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-district">
											<option readonly>Prix</option>
											<?php $prix=mysql_query("select * from prix");
											
											while($p=mysql_fetch_array($prix)){?>
                                                
                                                <option value="<?php echo $p['Nomp'];?>"><?php echo $p['Nomp'];?> TND</option>
                                                <?php } ?>
                                                
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-property-type">
											<option readonly>Piéce</option>
											<?php $m=mysql_query("select * from piece");
											
											while($pi=mysql_fetch_array($m)){?>
                                                
                                                <option value="<?php echo $pi['NomPe'];?>"> <?php echo  $pi['NomPe'];?></option>
                                                <?php } ?>
                                               
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-price">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m² </option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
                        </div>
                    </form><!-- /#form-map -->
                </div><!-- /.search-box -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
    </div>
    <!-- end Search Box -->

    <!-- Page Content -->
    <div id="page-content">
        <section id="banner">
            <div class="block has-dark-background background-color-default-darker center text-banner">
                <div class="container">
                    <h1 class="no-bottom-margin no-border"> <a href="#" class="text-underline"></a></h1>
                </div>
            </div>
        </section><!-- /#banner -->
		<section id="price-drop" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Proprietés Récentes</h2>
                    <a href="properties-listing.html" class="link-arrow"></a>
                </header>
                <div class="row">
				<?php $sql=mysql_query("select * from immo where etat=1")or die(mysql_error());
				while($a=mysql_fetch_array($sql)){
					$id=$a['id'];
					echo $id;
					?>
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="det.php?id=<?php echo $id ;?>">
                                <div class="property-image">
                                    <img alt="" src="assets/img/<?php echo $a['file'];?>" width="440" height="330">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price"><?php echo $a['prix'];?> DT</div>
                                        <h3><?php echo $a['type'];?></h3>
                                        <figure><?php echo $a['ville'];?></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure><?php echo $a['area'];?>m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure><?php echo $a['beds'];?></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure><?php echo $a['baths'];?></figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure><?php echo $a['garages'];?></figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
				<?php } ?>
                </div><!-- /.row-->
            </div><!-- /.container -->
        </section><!-- /#price-drop -->
        
        
        <aside id="advertising" class="block">
            <div class="container">
                <a href="ajout.php">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Voulez-vous que votre propriété soit énumérée ici?</span>
                            <span class="submit"> Envoyez-le maintenant! <i class="fa fa-plus-square"></i></span>
                        </div>
                    </div><!-- /.banner-->
                </a>
            </div>
        </aside><!-- /#adveritsing-->
        <section id="new-properties" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Nouvelles propriétés pour vous</h2>
                    <a href="properties-listing.html" class="link-arrow">Toutes les propriétés</a>
                </header>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-09.jpg">
                                </div>
								
								
								
								
                                
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-03.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">350 000 TND</div>
                                        <h3>Terrain</h3>
                                        <figure>Doral, FL 33178 </figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-06.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">42 000 TND</div>
                                        <h3>Appartement</h3>
                                        <figure></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-01.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">580 000 TND</div>
                                        <h3>Grand-Villa</h3>
                                        <figure></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure>10</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>2</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-02.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">150 000 TND</div>
                                        <h3>Maison</h3>
                                        <figure></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>280m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-12.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">125 000 TND</div>
                                        <h3>Terrain</h3>
                                        <figure></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>30m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure></figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>0</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-05.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">58 000 TND</div>
                                        <h3>Bureau</h3>
                                        <figure> </figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-10.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">120 000 TND</div>
                                        <h3>Terrain</h3>
                                        <figure></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Surface:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Chambre:</header>
                                            <figure>0</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>0</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
            </div><!-- /.container-->
        </section><!-- /#new-properties-->
        
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

<div id="overlay"></div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="assets/js/tmpl.js"></script>
<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
<script>
    $(window).load(function(){
        initializeOwl(false);
    });
</script>
</body>
</html>