<?php session_start();?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/leanevent.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	
	
	<script>
		$(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#update').ajaxForm(function(data) { 
				
				
				var b=data;
				if(b==1){
					alert("you should input all required information");
					
				}
				else if(b==2){
					alert("you should login first");
				}
				else if(b==3){
					alert("This Nombre has already exist");
				}
				else{
					alert("You have successfully added an event");
					window.location.href="listevent(agent).php"	;			
			

				}

					
                
            }); 
        }); 
		
	function showLayer(id,width, height){
		
		var a=id;
        var winWidth=document.documentElement.clientWidth;
        var winHeight=document.documentElement.clientHeight;
        var offsetTop=document.documentElement.scrollTop;
		
        var left=(winWidth-width)/2;
		
        var top=(winHeight-height)/2+offsetTop;
        a.style.top=top+"px";
        a.style.left=left+"px";
		
        a.style.display="block";
		
		cover.style.display="block";
		
	}
		
		
		function hideLayer(id) {
			
    var obj = id;
    obj.style.display = "none";
			cover.style.display="none";
}
		function showpic(mypic,upfile){
			
			if(upfile.files && upfile.files[0]){
			
				mypic.src=window.URL.createObjectURL(upfile.files[0]);
				mypic.border=1;
			}
			else{
				alert("Please upload  correct img");
			}
		}
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title>Addevent</title>
	
	

</head>

<body>
	
	
	<div id="cover">
	
	</div>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:100px">
	<ul>
   <li><a href="HomeAge.php">Inicil</a></li>
    <li><a href="listindivi(agent).php">Lista de Voluntarios</a></li>
    <li><a href="listfundation(agent).php">Listade Fundaciones</a></li>
    <li><a href="listevent(agent).php">Eventos</a></li>
  
		<li>
		<a style="color:white"><?php 
			
			
			if(isset($_SESSION['username'])){
					echo "welcome,".$_SESSION['username']."<a href='logout.php'>logout</a>";}
					else{
						if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
							echo "welcome back, ".$_COOKIE['username']."<a href='logout.php'>logout</a>";}
						else{
						echo "please login first,<a href='Login.html'>login</a>";}
					}
						
						
			
			 ?>
			
			 </a></li>
						
					
    
  </ul>
	</div>


</div>


</div>
	
<div id="wrapper" class="main">
	
	<div class="container" style="background:#D7D7D7;">
			<form id="update" action="php/addevent.php" method="post" enctype="multipart/form-data">
				
				
				<div class="row">
				<div class="col-md-12" style="width=100px;font-size:30px; "><lable>Registro de Evento</lable>
					<hr />
					</div>
					</div>
				<div class="row">
				<div class="col-md-8">
					
					<lable for"text1">Nombre</lable>
					<input class="form-control" name="Nombre" type="text" placeholder="Nombre del Evento"/>
					
					
					<lable>Responsable</lable>
				<input class="form-control" name="Responsable" type="text" placeholder="Nombre del Responsable"/>
						
					</div>
				<div class="col-md-4">
					<div class="row offset-2">
					<img name="showimg" id="showimg" src="img/imagenes/imagensubir.png"width="120px" height="120px"></div>
			<div class="row offset-2">
					<input style="display: none;visibility: hidden;padding-top: 10px;" name="img1" id="img1" type="file" accept="image/*"  onchange="showpic(showimg,this.form.img1);" />
					
					
					
                    <label class="button1" style="padding-top:10px;" for="img1">Seleccionar Imagen</label>
				</div>
					</div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Lugar</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input type="text" name="Lugar" class="form-control" placeholder="Direccion del Lugar Eventos"></div></div>
				
				<div class="row">
					<div class="col-md-4">
						<lable>Fecha</lable>
						<input type="text" name="Fecha" class="form-control" placeholder="00/00/0000"></div>
					<div class="col-md-4">
						<lable>Hora</lable>
						<input type="text" name="Hora" class="form-control" placeholder="00:00"></div>
					<div class="col-md-4">
						<lable>Valor de Boleto</lable>
						<input type="text" name="Valor" class="form-control" placeholder="$000.00"></div>
				
				
				
				</div>
				
						
		
				
				<div class="row">
				<div class="col-md-12" align="center"><button type="submit" class="button1">Guardar</button></div></div>
				<div class="row"></div>

			
			
			
			
			</form>
			
			</div>
	<div class="row">
		<div class="col-md-8 offset-2">
			
			

	
	</div>

	<div id="confirmpage">
		<div class="row" align="center">
			<div class="col-md-12">
			<lable>Bienvenido</lable>
				</div>
			</div>
		<hr />
		<div class="row" align="center">
			<div class="col-md-12">
			<lable>Gracias por ser un Voluntario en nuestros evento.</lable>
				</div>
			</div>
		<hr />
		<div class="row" align="center">
			<div class="col-md-1 offset-10">
			<button type="button" class="button2" onClick="hideLayer(confirmpage)">Close</button>
				</div>
			</div>
		</div>
	
</div>
	

	
	

<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>

</div>
</body>
</html>