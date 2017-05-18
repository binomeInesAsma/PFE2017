<!DOCTYPE html>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("immo");
?>
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

    <title>Recherche</title>

</head>

<body class="page-sub-page page-listing page-grid page-search-results" id="page-top">
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
                        <a href=""><img src="assets/img/bbb.jpg" alt="brand"width="300" height="100"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
					
					<li ><a href="Acceuil.php"><b><FONT color="#4169E1">Acceuil</font></b></a>
                            
                        </li>
                        <li  ><a href="Acheter.php"><b><FONT color="#4169E1">Acheter</font></b></a>
                            
                        </li>
                        <li ><a href="Louer.php"><b><FONT color="#4169E1">Louer</font></b></a>
                            
                        </li>
                        <li ><a href="Vacances.php"><b><FONT color="#4169E1">Vacances</font></b></a>
                            
                        </li>
                        <li><a href="ajout.php"><b><FONT color="#4169E1">Proposer vos bien</font></b></a></li>
                        <li ><a href="contact.php"><b><FONT color="#4169E1">Guide</font></b></a>
                            
                        </li>
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
            <ol class="breadcrumb">
                <li><a href="#"></a></li>
                
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Results -->
                <div class="col-md-9 col-sm-9">
                    <section id="results">
                        <header><h1>Liste de propriété </h1></header>
                        <section id="search-filter">
                            <figure><h3><i class="fa fa-search"></i>Chercher:</h3>
                                <span class="search-count"></span>
                                
                            </figure>
                        </section>
                        <section id="properties">
                        <div class="row">
						<?php 
				
				
				$type=$_POST['type'];
				$Gouvernorat=$_POST['ville'];
				$Delegation=$_POST['delegation'];
				$Localite=$_POST['localite'];
				$prix=$_POST['prix'];
			    $area=$_POST['area'];
				
				
				$sql=mysql_query("select * from immo where type='".$type."'and ville='".$Gouvernorat."' and dele='".$Delegation."' and localite='".$Localite."' and prix>='".$prix."'and  area>='".$area."'")
				or die(mysql_error());
				
				while($a=mysql_fetch_array($sql)){
					$id=$a['id'];?>
                            <div class="col-md-4 col-sm-4">
                                <div class="property equal-height">
                                    <figure class="tag status"> <?php echo $a['objectifs'];?></figure>
                                        <a href="det.php?id=<?php echo $id ;?>">
                                        <div class="property-image">
                                            <?php
								$sqll=mysql_query("select * from im where idimmo='".$id."'  ");
								$i=1;
								while($aa=mysql_fetch_array($sqll)){ 
								if($i==1)
								{
								
								?>
					              
                                    <img alt="" src="./uploads/<?php echo $aa['file'];;?>" width="440" height="330">
								<?php }$i++;} ?>
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price"><?php echo $a['prix'];?>DT</div>
                                                
                                                <figure><?php $del=mysql_query("select * from Gouvernorat where id_gov='".$a['ville']."'");
								            while($deleg=mysql_fetch_array($del)){?>
								           <?php  echo $deleg["Nom"]		;?>
								               <?php } ?></figure>
                                            </div>
                                            <ul class="additional-info">
											 <li>
                                                    <header>Gouvernorat:</header>
                                                    <figure><?php $del=mysql_query("select * from Gouvernorat where id_gov='".$a['ville']."'");
								            while($deleg=mysql_fetch_array($del)){?>
								           <?php  echo $deleg["Nom"]		;?>
								               <?php } ?></figure>
                                                </li>
												 <li>
                                                    <header>Délégation:</header>
                                                    <figure><?php $del=mysql_query("select * from delegation where id_del='".$a['dele']."'");
								while($deleg=mysql_fetch_array($del)){?>
								<?php echo $deleg["Nom"]		;?>
								<?php } ?></figure>
                                                </li>
												 <li>
                                                    <header>Localité:</header>
                                                    <figure><?php $del=mysql_query("select * from localite where id='".$a['Localite']."'");
								while($deleg=mysql_fetch_array($del)){?>
								<?php echo $deleg["Nom"]		;?>
								<?php } ?></figure>
                                                </li>
                                                <li>
                                                    <header>Surface:</header>
                                                    <figure><?php echo $a['area'];?>m<sup>2</sup></figure>
                                                </li>
                                                <li>
                                                    <header>Chambre:</header>
                                                    <figure><?php echo $a['beds'];?></figure>
                                                </li>
                                                <li>
                                                    <header>Sale de bain:</header>
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
                            </div><!-- /.col-md-3 --><?php } ?>
                            
                        </div><!-- /.row-->
                        
                       
                        

                        <!-- Pagination -->
                        

                        </section><!-- /#properties-->
                    </section><!-- /#results -->
                </div><!-- /.col-md-9 -->
                <!-- end Results -->

                <!-- sidebar -->
                
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
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
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


</body>
</html>