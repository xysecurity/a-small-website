<?php
require_once 'php/define.php';
$queryid="SELECT * FROM books";
$data=mysqli_query($dbc,$queryid);
$result=array();
$i=0;
while($row=$data->fetch_assoc()){
	$result[$i]=array($row['id'],$row['image'],$row['price'],$row['description'],$row['number'],$row['title']);
	$i++;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/leanevent.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>

<body>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:140px">
	<ul>
     <li><a href="Home.html">Inicil</a></li>
    <li><a href="Aboutus.html">Quienes Somos</a></li>
    <li><a href="http://anakin.uta.cloud/">Blog</a></li>
    <li><a href="Registrate.html">Registrate</a></li>
    <li><a href="Contact.html">Contacto</a></li>
    <li><a href="Login.html">Iniciar Sesion</a></li>
    <li><a class="active" href="buyfromus.html">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="img/imagenes/bannercboleto.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>COMPARA BOLETOS</a></div>
	
</div>
	
	<div id=wrapper>
	<div style="text-align:center"><a style="color:yellowgreen;font-size:20px">————</a><a style="font-size:30px">NUESTROS EVENTOSdaa</a><a style="color:yellowgreen;font-size:20px">————</a>
		<p>Tu asssiaskljdklasjdklasjd</p>
	</div>
		
	
		
		
	</div>
	<div class="container">
			<div class="row">
				<div class="col-md-3" align="center">
					
					<a href="buyfromus(1).php"><img href="buyfromus(1).html" src="<?php echo $result[0][1]; ?>"  width="200px" height="250px" >
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[0][5]; ?></lable>
					<p id="price">$<?php echo $result[0][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus(2).php"><img src="<?php echo $result[1][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[1][5]; ?><lable>
					<p id="price">$<?php echo $result[1][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus(3).php"><img src="<?php echo $result[2][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[2][5]; ?></lable>
					<p id="price">$<?php echo $result[2][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus(4).php"><img src="<?php echo $result[3][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[3][5]; ?></lable>
					<p id="price">$<?php echo $result[3][2]; ?></p>
						</div></a>
					
					</div>
				
				
				
				</div>
			
			</div>
	
	<div class="middle" >
	 <div class="row">
		 <div class="col-md-4 offset-2" align="center">
			 <img src="img/imagenes/plant.png" />
 <strong> Registrese para recibir unboletin</strong></div> 
		 <div class="col-md-6" align="center">
	<form><input  class="form-control-sm" type="text" /><button class="button4">Suscribir</button></form></div>
  
	</div>
	</div>

<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>

</div>
	
</body>
</html>
