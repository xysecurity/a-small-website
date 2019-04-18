<?php
define('DBhost','localhost');
	define('DBuser','root');
	define('DBpass','WANG123456');
	define('DBname','art');
	$dbc=mysqli_connect(DBhost,DBuser,DBpass,DBname);

$pattern ='/^\w+@\w+\.\w+$/';
$pattern2='/^\w{7,16}$/';
$pattern3='/^([0-9]{3})?[-]([0-9]{3})?[-]([0-9]{4})$/';
	
preg_match($pattern, $_POST["email"] ,$match1);
preg_match($pattern, $_POST["pass1"] ,$match2);
			  
			  preg_match($pattern3, $_POST["phone"] ,$match3);
if(empty($_POST["first"])||empty($_POST["last"])||empty($_POST["address"])||empty($_POST["city"])||empty($_POST["state"])||empty($_POST["country"])||empty($_POST["zip"])||empty($_POST["phone"])||empty($_POST["email"])||empty($_POST["accept"])) 
	{
		
	echo "information not completed, insert failed";	
		
		
		
	}
else{
	if(!$match1||!$match3||!$match2){
		echo "information format wrong";

	}
	else{
		if($_POST["pass1"]!=$_POST["pass2"]){
		echo "password not same";}
		else{
			$query="INSERT INTO customers (FirstName,LastName, Address,City,Region,Country,Postal,Phone,Email,Privacy) VALUES ('{$_POST["first"]}', '{$_POST["last"]}', '{$_POST["address"]}', '{$_POST["city"]}', '{$_POST["state"]}', '{$_POST["country"]}', '{$_POST["zip"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '1')";

$result=mysqli_query($dbc,$query);

		}	
	

		
		
	}
	
	
}






?>