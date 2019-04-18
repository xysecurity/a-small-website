<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Registration 2</title>

   <link href="css/reset.css" rel="stylesheet">
   <link href="css/assign1.css" rel="stylesheet">
	<script>
	function val(){
		var pattern=/^\w+@\w+\.\w+$/;
		var pattern2=/^\w{7,16}$/;
		var pattern3=/^([0-9]{3})?[-]([0-9]{3})?[-]([0-9]{4})$/;	
		var email=document.getElementsByName("email")[0].value;
		var password1=document.getElementsByName("pass1")[0].value;
		var password2=document.getElementsByName("pass2")[0].value;
		var phone=document.getElementsByName("phone")[0].value;
		if (email==""||password1==""||password2==""||phone==""){
			alert("information should be completed");
		}
		console.log(email);
		console.log(password1);
		console.log(pattern2.test(password1));
		console.log(pattern.test(email));
		if(!pattern.test(email)){
			alert("email wrong");
			return false;
		}
		if(!pattern2.test(password1)||!pattern2.test(password2)){
		   alert("password wrong");
			return false;
		   }
		if(!pattern2.test(password1)||!pattern2.test(password2)){
		   alert("password wrong");
			return false;
		   }
		if(!pattern3.test(phone)){
		   alert("phone wrong");
			return false;
		   }
		if(password1!=password2){
		alert("password not equal")
		return false;
		}
		
		
		
	}
	
	
	</script>

</head>
<body>

<header>
    <div id="topHeaderRow" >
        <nav >
            <ul >
                <li><a href="pageLogin.html"> Login</a></li>
                <li><a href="#"> Wish List</a></li>
                <li><a href="#"> Shopping Cart</a></li>
                <li><a href="#"> Checkout</a></li>                  
            </ul>
        </nav>
   </div>   <!-- end topHeaderRow -->
   
   <div id="logoRow" >
        <h1>Art Store</h1> 
   </div>  <!-- end logoRow -->
   
   <div id="mainNavigationRow" >
         <nav >
             <ul >
               <li ><a href="pageOne.html">Home</a></li>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Art Works</a></li>
               <li><a href="#">Artists</a></li>
             </ul>              

         </nav>
   </div>  <!-- end mainNavigationRow -->
   
</header>

<main>
   <h2>Artist Registration</h2>
   <form method="post" action="validateform.php">
   
      <h3>1. User Info</h3>
      <table class="userform">
         <tr>
            <td><label>First Name</label><br><input required type="text" name="first" size="20"></td>
            <td><label>Last Name</label><br><input required type="text" name="last" size="22"></td>
         </tr>
         <tr>
            <td colspan="3">
               <label>Email</label><br><input required type="email" name="email" size="60" placeholder="format for email is xxx@yyy.zzz">
            </td>
         </tr>
         <tr>
            <td><label>Password</label><br><input required type="password" name="pass1" size="20" placeholder="at least 8 characters"></td>
            <td><label>Password Repeat</label><br><input required type="password" name="pass2" size="20" placeholder="at least 8 characters"></td>
         </tr>         
      </table>
      
      <h3>2. Location</h3>
      <table class="userform">
         <tr>
            <td colspan="3">
               <label>Address</label><br><input required type="text" name="address" size="60">
            </td>
         </tr>
         <tr>
            <td><label>City</label><br><input required type="text" name="city" size="20"></td>
            <td><label>State</label><br><input required type="text" name="state" size="4"></td>
            <td><label>Zip</label><br><input required type="text" name="zip" size="10"></td>
         </tr>   
         <tr>
            <td>
               <label>Phone</label><br><input required type="tel" name="phone" size="20" placeholder="NNN-NNN-NNNN">
            </td>
            <td colspan="2">
               <label>Country</label><br>
               <select name="country">
                  <option>Canada</option>
                  <option>Denmark</option>
                  <option>France</option>
                  <option>United States</option>
               </select>
            </td>
         </tr>
         <tr>
            <td>
               <label>Continent</label><br>
               <input type="radio" name="continent" value="1">North America<br>
               <input type="radio" name="continent" value="2">Europe<br>
               <input type="radio" name="continent" value="3">South America<br>
            </td>
         </tr>
      </table>    

      <h3>3. Personal Details</h3>
      <table class="userform">
         <tr>
          <td><label>Nationality</label><br><input required type="text" name="nationality" size="20"></td>
           
            <td><label>Death Date</label><br><input type="date" name="birthdate" ></td>
            <td><label>Details</label><br><textarea required rows="10" cols="30" name="details">Be always Nice</textarea></td>
         </tr>
         <tr>
            <td colspan="3">
               <label>Link</label><input type="url" name="link" required >Love it!
            </td>
         </tr>
      </table>
      
      <h3>4. All Done</h3>
      <table class="userform">
         <tr>
            <td colspan="3">
               <input type="checkbox" name="accept">
               <label>I agree to the <a href="#">Terms of the Site</a></label>               
            </td>
         </tr>
         <tr>
            <td colspan="3">
               <button type="submit" class="fancyBtn" onClick="val()">
                  <img src="images/button_ok.png"> Sign me up!
               </button>
            </td>
         </tr>       
      </table>      
   </form>
</main>
<footer>
       <p>All images are copyright to their owners. This is just a hypothetical site
       <span >&copy; 2019 Copyright Art Store</span></p>
</footer>


  </body>
</html>
