<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam 2 - Page 1</title>

   <link href="css/reset.css" rel="stylesheet">
   <link href="css/assign1.css" rel="stylesheet">

</head>
<body>

<header>
    <div id="topHeaderRow" >
        <nav >
            <ul >
                <li><a href="PageLogin.html"> Login</a></li>
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
               <li ><a href="pageOne.php">Home</a></li>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Art Works</a></li>
               <li><a href="PageTwo.php">Artists</a></li>
             </ul>              

         </nav>
   </div>  <!-- end mainNavigationRow -->
   
</header>

<main>
   <h2>Self-portrait in a Straw Hat</h2>
   <p>By <a href="#">Louise Elisabeth Lebrun</a></p>
   <figure>
      <img src="images/113010-m.jpg" alt="Self-portrait in a Straw Hat"/>
   </figure>

   <div id="info">
      <p>
      The painting appears, after cleaning, to be an autograph replica of a picture, the original of which was painted in Brussels in 1782 in free imitation of Rubens's 'Chapeau de Paille', which LeBrun had seen in Antwerp. It was exhibited in Paris in 1782 at the Salon de la Correspondance. LeBrun's original is recorded in a private collection in France. 
      </p>
      <p class="price">$700</p>
      <div id="buttons">
        <button type="button" >
         <a href="#"> Add to Wish List</a>  
        </button>
        <button type="button" >
         <a href="#"> Add to Shopping Cart</a>
        </button>
      </div>               
      <div >
        <h3>Product Details</h3>
        <table >
            <tr>
                <th>Date:</th>
                <td>1782</td>
            </tr>
            <tr>
                <th>Medium:</th>
                <td>Oil on canvas</td>
            </tr>  
            <tr>
                <th>Dimensions:</th>
                <td>98cm x 71cm</td>
            </tr> 
            <tr>
                <th>Home:</th>
                <td><a href="#">National Gallery, London</a></td>
            </tr>  
            <tr>
                <th>Genres:</th>
                <td><a href="#">Realism</a>, <a href="#">Rococo</a></td>
            </tr> 
            <tr>
                <th>Subjects:</th>
                <td><a href="#">People</a>, <a href="#">Arts</a></td>
            </tr>     
        </table>
      </div>                              
   </div>
 
   <div id="similar">
      <h3>Similar Products </h3>  
      <div class="box">
         <img src="images/thumbs/116010.jpg" alt="..." class="centeredInside">
         <div >
                <p class="similarTitle"><a href="#">Artist Holding a Thistle</a></p>
                <button type="button" > View</button>
                <button type="button" > Wish</button>
                <button type="button" > Cart</button>
         </div>  
      </div>

      <div class="box">
         <img src="images/thumbs/120010.jpg" alt="..." class="centeredInside">
         <div >
                <p class="similarTitle"><a href="#">Portrait of Eleanor of Toledo</a></p>
                <button type="button" > View</button>
                <button type="button" > Wish</button>
                <button type="button" > Cart</button>
         </div>
      </div>                   
      <div class="box">
        <img src="images/thumbs/107010.jpg" alt="..." class="centeredInside">
        <div >
             <p class="similarTitle"><a href="#">Madame de Pompadour</a></p>
             <button type="button" > View</button>
             <button type="button" > Wish</button>
             <button type="button"> Cart</button>
        </div>
      </div>                   
      <div class="box">
        <img src="images/thumbs/106020.jpg" alt="..." class="centeredInside">
        <div >
             <p class="similarTitle"><a href="#">Girl with a Pearl Earring</a></p>
             <button type="button" > View</button>
             <button type="button" > Wish</button>
             <button type="button" > Cart</button>
        </div>
      </div>  
   </div>
</main>
<footer>
       <p>All images are copyright to their owners. This is just a hypothetical site
       <span >&copy; Your Exam 2019 Copyright Art Store</span></p>
</footer>


  </body>
</html>
