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

    <title>Vacances</title>

</head>

<body class="page-sub-page page-listing page-grid page-search-results" id="page-top">
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
                    <div class="navbar-brand nav" id="brand">
                        <a href=""><img src="assets/img/KK.jpg" alt="brand"width="300" height="100"></a>
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
                        <li class="active "><a href="Vacances.php"><b><FONT color="#4169E1">Vacances</font></b></a>
                            
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
    <section id="price-drop" class="block">
            <div class="container">
                <header class="section-title">
	
                    <h2><b><FONT color="#4169E1">Proprietés de Vacances</font></b></h2>
               
                </header>
                <div class="row">
				<?php $sql=mysql_query("select * from immo where objectifs='Vacances' and etat=1")or die(mysql_error());
				while($a=mysql_fetch_array($sql)){
					$id=$a['id'];
					
					?>
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
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
                                        <div class="tag price"><?php echo $a['prix'];?> DT</div>
                                        <h3><?php echo $a['type'];?></h3>
                                        <figure><?php $del=mysql_query("select * from Gouvernorat where id_gov='".$a['ville']."'");
								            while($deleg=mysql_fetch_array($del)){?>
								           <?php  echo $deleg["Nom"]		;?>
								               <?php } ?></figure>
                                    </div>
                                    <ul class="additional-info">
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
                    </div><!-- /.col-md-3 -->
				<?php } ?>
                </div><!-- /.row-->
            </div><!-- /.container -->
        </section><!-- /#price-drop -->
		
						</html>