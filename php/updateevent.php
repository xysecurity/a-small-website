<?php 
	require_once 'define.php';
	
    $name1=$_POST["Nombre"];
	$name2=$_POST["Responsable"];
	

	$name3=$_POST["Lugar"];
	$name4=$_POST["Fecha"];
	session_start();
	if(!empty($_SESSION['username'])){
		$username=$_SESSION['username'];
	}
	elseif(!empty($_COOKIE['username'])){
		$username=$_COOKIE['username'];
	}
	else{
		$username=null;
	}

	


	if(empty($name1)||empty($name3)||empty($name4)||empty($_POST["Hora"])||empty($_POST["Valor"])) 
	{
		
	echo 1;	
		
		
		
	}
	elseif(empty($username)||(empty($_COOKIE['password']))){
		echo 2;

	}

	else{
		
		$img_file_path="/1/upload/";

		$path=$_SERVER['DOCUMENT_ROOT'].$img_file_path;
		 if($_FILES['img1']['error'] > 0){
            $resultCode = 0;
            $resultMsg  = 'errorcode：'.$_FILES['img1']['error'];
            echo $resultMsg;
        }
      
        $uploadsrc="upload/".$_FILES['img1']['name'];

	    $savepath=$path.$_FILES['img1']['name'];
	    echo $savepath; 
		move_uploaded_file($_FILES["img1"]["tmp_name"], $savepath);
		$query="UPDATE event set Nombre='{$_POST["Nombre"]}',Responsable='{$_POST['Responsable']}',Lugar='{$_POST['Lugar']}',Fecha='{$_POST['Fecha']}',Hora='{$_POST['Hora']}',Valor='{$_POST['Valor']}',img='$uploadsrc' WHERE Nombre='{$_POST["eventname"]}'";

		$data=mysqli_query($dbc,$query);
		
		}
	mysqli_close($dbc);
	
	
	?>