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
            $('#choose').ajaxForm(function(data) { 
				
				
				var b=data;
				if(b==1){
					alert("You must login first");
					
				}
				else if(b==2){
					alert("You have already applied this event");
					
				}
				else{
					showLayer(confirmpage,600,200);
					
			

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
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title>Events</title>
	<?php 
	require_once 'php/define.php';
	
	$result=array();
	$query="SELECT * FROM event";
	$data=mysqli_query($dbc,$query);
	$i=0;
	while($row=$data->fetch_assoc()){
		$result[$i]=array($row['img'],$row['Nombre'],$row['Lugar'],$row['Fecha'],$row['Hora'],$row['id']);
		$i=$i+1;
	}
	$page=intval((count($result)-1)/3);

	if(isset($_GET['page'])){
		
		$a=$_GET['page'];
	}
	else{
		$a=0;
	
		
	}
	
	
	
	?>

</head>

<body>
	
	
	<div id="cover">
	
	</div>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:200px">
	<ul>
    
    <li><a class="active" href="listevent(fundation).php">Inicil</a></li>
    <li><a href="profile(fundation).php">Fundation</a></li>
  
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
	
<div id="wrapper1" class="main">
	<div class="row">
<div class="col-md-12" align="center">
			<a style="font-size: 30px;">Lista de Eventos</a>
				</div></div>
	<div id="list">
		
		<div class="row" style="background-color:#CBCBCB;font-size:18px;padding:10px 0;" align="center">
			<div class="col-md-6" align="center">
				<a>DETALLES DEL EVENTOS</a>
				
				</div>
			<div class="col-md-2" align="center">
				<a>LUGAR</a>
				
				</div>
			
			<div class="col-md-1" align="center">
				<a>FECHA</a>
				
				</div>
		
			<div class="col-md-1" align="center">
				<a>HORA</a>
				
				</div>
	<div class="col-md-2" align="center">
				<a>ASISTENCIA</a>
				
				</div>
			
			
			</div>
		<form action="php/chooseevent(funda).php" method="post" name="choose" id="choose">
			<input type="hidden" value="" name="listid" id="listid">
			
		
			
			<?php 
			if(!isset($result[$a*3])){
				$result[$a*3]=null;
			}else{
				 
			print  <<<EOT
<div class="row" style="align-items: center;" align="center">
<div class="col-md-2">
<img src="{$result[$a*3][0]}" height="120px" width="100px">
</div>
<div class="col-md-4">
<a>{$result[$a*3][1]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<a>{$result[$a*3][2]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3][3]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3][4]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<button type="submit" class="button1" onclick="document.getElementById('listid').value={$result[$a*3][5]};" >Confirmar</button>
</div>			
</div>
EOT;
				
			}
			?>
						<?php 
			if(!isset($result[$a*3+1])){
				$result[$a*3+1]=null;
			}else{
				 
			print  <<<EOT
<div class="row" style="align-items: center;" align="center">
<div class="col-md-2">
<img src="{$result[$a*3+1][0]}" height="120px" width="100px">
</div>
<div class="col-md-4">
<a>{$result[$a*3+1][1]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<a>{$result[$a*3+1][2]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3+1][3]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3+1][4]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<button type="submit" class="button1" onclick="document.getElementById('listid').value={$result[$a*3+1][5]};" >Confirmar</button>
</div>			
</div>
EOT;
				
			}
			?>
						<?php 
			if(!isset($result[$a*3+2])){
				$result[$a*3+2]=null;
			}else{
				 
			print  <<<EOT
<div class="row" style="align-items: center;" align="center">
<div class="col-md-2">
<img src="{$result[$a*3+2][0]}" height="120px" width="100px">
</div>
<div class="col-md-4">
<a>{$result[$a*3+2][1]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<a>{$result[$a*3+2][2]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3+2][3]}</a>
</div>
<div class="col-md-1" style="font-size:14px">
<a>{$result[$a*3+2][4]}</a>
</div>
<div class="col-md-2" style="font-size:14px">
<button type="submit" class="button1" onclick="document.getElementById('listid').value={$result[$a*3+2][5]};" >Confirmar</button>
</div>			
</div>
EOT;
				
			}
			?>
	
			
			</div>
		</form>
		
		</div>
	<div class="row">
		<div class="col-md-8 offset-2">
			
	<?php 
			
		$pagenum=0;
		while($page+1){
			echo "<button onclick=";
			echo '"';
			echo "window.location.href=";
			echo "'";
			echo $_SERVER['PHP_SELF'];
			echo "?page=";
			echo $pagenum;
			echo "'";
			echo '"';
			echo "class='button1'>";
		
			echo $pagenum;
			$pagenum=$pagenum+1;
			$page=$page-1;
			echo"</button>";
			
		}
		
		
		?>
	
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
			<lable>Gracias por ser parte en nuestros evento.</lable>
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