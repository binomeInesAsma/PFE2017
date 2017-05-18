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

<script>
function Louerd() {
    
        var str=document.getElementById("villel").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegationl").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","delelouer.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function Louerl() {
    
        var str=document.getElementById("delel").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("local").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function Vacancesd() {
    
        var str=document.getElementById("villev").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegationv").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","deleVac.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function vacancesl() {
    
        var str=document.getElementById("delev").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("locav").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function terraind() {
    
        var str=document.getElementById("villet").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegationt").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","deleTer.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function terrainl() {
    
        var str=document.getElementById("delet").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("locat").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function commerced() {
    
        var str=document.getElementById("villec").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegationc").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","delecom.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function commercel() {
    
        var str=document.getElementById("delec").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("locac").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function bureaud() {
    
        var str=document.getElementById("villeb").value;
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("delegationb").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","delebur.php?code="+str,true);
        xmlhttp.send();
    
}
</script>
<script>
function bureaul() {
    
        var str=document.getElementById("deleb").value;
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
                document.getElementById("locab").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","loca.php?code="+str,true);
        xmlhttp.send();
    
}
</script>


        
<meta charset="utf-8" />
        <style>	
	
	/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}


        </style>



<script language="javascript">
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}




</script>
	
    <title>Immo</title>

</head>

<body onload="openCity(event, 'Acheter')"class="page-homepage navigation-fixed-top page-slider horizontal-search-float" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">

    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>+216 54099448</figure>
                    <figure><strong>Email:</strong>Immo@gmail.com</figure>
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
                        <img src="assets/img/images (13).jpg" alt="brand" width="300" height="70"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
					<li class="active "><a href="Acceuil.php"><b><FONT color="#4169E1">Acceuil</font></b></a>
                            
                        </li>
                        <li><a href="Acheter.php"><b><FONT color="#4169E1">Acheter</font></b></a>
                            
                        </li>	
                        <li ><a href="Louer.php"><b><FONT color="#4169E1">Louer</font></b></a>
                            
                        </li>
                        <li ><a href="Vacances.php"><b><FONT color="#4169E1">Vacances</font></b></a>
                            
                        </li>
                        <li 
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
	
 
   
   <!-- Slider -->
    <div id="slider" class="loading has-parallax" >
        <div id="loading-icon"><i class="fa fa-cog fa-spin"></i></div>
        <div class="owl-carousel homepage-slider carousel-full-width">
   
    <div id="slider"  >
	<div class="container">
     <div class="overlay"></div></div><img alt="" src="assets/img/b.jpg" width="1500" height="1000" ></div>
	 
	<div id="slider"  >
	<div class="container">
    <div class="overlay"></div></div><img alt="" src="assets/img/a.jpg" width="1500" height="1000" ></div>
	
	<div id="slider"  >
	<div class="container">
     <div class="overlay"></div></div><img alt="" src="assets/img/c.jpg" width="1500" height="1000" ></div>
                
       </div></div>
    <!-- end Slider -->
	


    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="search-box map">
                    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Acheter')"><b><FONT size="4"color="#4169E1">Acheter</font></b></button>
  <button class="tablinks" onclick="openCity(event, 'Louer')"><b><FONT size="4"color="#4169E1">Louer</font></b></button>
  <button class="tablinks" onclick="openCity(event, 'Vacances')"><b><FONT size="4"color="#4169E1">Vacances</font></b></button>
  <button class="tablinks" onclick="openCity(event, 'Terrain')"><b><FONT size="4"color="#4169E1">Terrain</font></b></button>
  <button class="tablinks" onclick="openCity(event, 'Commerce')"><b><FONT size="4"color="#4169E1">Commerce</font></b></button>
  <button class="tablinks" onclick="openCity(event, 'Bureau')"><b><FONT size="4"color="#4169E1">Bureau</font></b></button>
</div>

<div id="Acheter" class="tabcontent" >
 
 <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option readonly>Type</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="Acheter">
                                </div><!-- /.form-group -->
                            </div>
                            
                                
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="prix">
											<option readonly>Prix</option>
											<?php $prix=mysql_query("select * from prix");
											
											while($p=mysql_fetch_array($prix)){?>
                                                
                                                <option value="<?php echo $p['Nomp'];?>"><?php echo $p['Nomp'];?> TND+</option>
                                                <?php } ?>
                                                
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="beds">
											<option readonly>Piéce</option>
											<?php $m=mysql_query("select * from piece");
											
											while($pi=mysql_fetch_array($m)){?>
                                                
                                                <option value="<?php echo $pi['NomPe'];?>"> <?php echo  $pi['NomPe'];?>+</option>
                                                <?php } ?>
                                               
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="area">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m² +</option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                           
							
                        </div>
						<div class="row">
						
						<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="ville" id="ville" onchange="showUser();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
							
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegation">
                                     <select name="dele" id="dele" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="loca">
                                     <select name="localite" id="localite">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											 <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
					</div>


<div id="Louer" class="tabcontent">
 
   <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option readonly>Type</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="Louer">
                                </div><!-- /.form-group -->
                            </div>
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="prix">
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
                                    <select name="beds">
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
                                    <select name="area">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m² </option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                            
                        </div>
						<div class="row">
						
						<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="ville" id="villel" onchange="Louerd();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegationl">
                                     <select name="dele" id="delel" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="local">
                                     <select name="localite" id="localitel">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
					</div>


<div id="Vacances" class="tabcontent">
  
  


				  <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option readonly>Type</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="Vacances">
                                </div><!-- /.form-group -->
                            </div>
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="prix">
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
                                    <select name="beds">
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
                                    <select name="area">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m² </option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                           
                        </div>
						<div class="row">
						
						<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="ville" id="villev" onchange="Vacancesd();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegationv">
                                     <select name="dele" id="delev" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="locav">
                                     <select name="localite" id="localitev">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											 <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
					</div>
					
					<div id="Terrain" class="tabcontent">
   <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option selected>Terrain</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="sale">
                                </div><!-- /.form-group -->
                            </div>
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="prix">
											<option readonly>Prix</option>
											<?php $prix=mysql_query("select * from prix");
											
											while($p=mysql_fetch_array($prix)){?>
                                                
                                                <option value="<?php echo $p['Nomp'];?>"><?php echo $p['Nomp'];?> +TND</option>
                                                <?php } ?>
                                                
                                            </select>
                                </div><!-- /.form-group -->
                            </div>
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="area">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m² </option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                           
                        </div>
						<div class="row">
						
						<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="ville" id="villet" onchange="terraind();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegationt">
                                     <select name="dele" id="delet" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="locat">
                                     <select name="localite" id="localitet">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											 <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
  
</div>
<div id="Commerce" class="tabcontent">
  <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option readonly>Commerce</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="Commerce">
                                </div><!-- /.form-group -->
                            </div>
                            
                            
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="area">
											<option readonly>Surface</option>
											<?php $s=mysql_query("select * from surface");
											
											while($sr=mysql_fetch_array($s)){?>
                                                
                                                <option value="<?php echo $sr['Noms'];?>"><?php echo  $sr['Noms'];?>m²+ </option>
                                                <?php } ?>
                                                
                                            </select>
                                </div>
                            </div>
                            
                        
						
						<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                     <select name="ville" id="villec" onchange="commerced();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegationc">
                                     <select name="dele" id="delec" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="locac">
                                     <select name="localite" id="localitec">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
  
</div>

		<div id="Bureau" class="tabcontent">
 <form  class="form-map form-search clearfix" action="./search.php" method="post">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="type">
											<option selected>Bureau</option>
											<?php $type=mysql_query("select * from type");
											
											while($t=mysql_fetch_array($type)){?>
                                                
                                                <option value="<?php echo $t['NomT'];?>"><?php echo $t['NomT'];?></option>
                                                <?php } ?>
											</select>
											<input type="hidden" name="obj" value="Bureau">
                                </div><!-- /.form-group -->
                            </div>
                            
                            
                            
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="area">
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
                                     <select name="ville" id="villeb" onchange="bureaud();">
											<option readonly>Gouvernorat</option>
											<?php $ville=mysql_query("select * from Gouvernorat ");
											
											while($v=mysql_fetch_array($ville)){?>
                                                
                                                <option value="<?php echo $v['id_gov'];?>"><?php echo $v['Nom'];?></option>
                                                <?php } ?>
                                           
                                            </select>
								</div>
							</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="delegationb">
                                     <select name="dele" id="deleb" >
											<option >Délégation</option>

                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
											<div class="form-group" id="locab">
                                     <select name="localite" id="localiteb">
											<option readonly>Localité</option>
										
                                            </select></div>
											</div>
											
											<div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Rechercher </button>
                                </div><!-- /.form-group -->
                            </div>
											</div>
                    </form><!-- /#form-map -->
  
</div>
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
            <div class="container"><br><br><br>
                <header class="section-title">
                    <h2>Proprietés Récentes</h2>
                   
                </header>
                <div class="row">
				<?php $sql=mysql_query("select * from immo where etat=1")or die(mysql_error());
				while($a=mysql_fetch_array($sql)){
					$id=$a['id'];
					
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
                                        <h3><?php echo $a['Gouvernorat'];?></h3>
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