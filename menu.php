<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- For navbar -->
<link rel="stylesheet" href="css/menu.css">
<link href="css/Bebas.Neue.css" rel="stylesheet"> <!-- Font(orange letters) -->

<link href="css/Oswald.css" rel="stylesheet"><!-- Write your comments here -->
<title>Menu</title>
<link rel="shortcut icon" href="img/pizza_title.png" type="image/png">

</head>
<body>
<div class="container">

    <?php include("header.php"); ?>


<div class="ordering">

<p style="font-family: 'Bebas Neue',cursive;font-size:65px;color:#FF6347;margin-left:50px;margin-top:50px;">--------START YOUR ORDER</p>

  <div class="btn-group ordering-buttons" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary ordering-button1" style="font-family: 'Bebas Neue',cursive;font-size:20px;">DELIVERY</button>

  <p style="font-family: 'Bebas Neue',cursive;font-size:25px;color:#FF6347;margin-left:650px;margin-top:-80px;;">OR</p>

  <button type="button" class="btn btn-secondary ordering-button2" style="font-family: 'Bebas Neue',cursive;font-size:20px;">CARRY OUT
  </button>
</div>

</div>
<div class="body-cards">
<?php
         $dbc = mysqli_connect('localhost', 'root', 'root', 'Pizza2go');
         $query=mysqli_query($dbc, "SELECT * FROM pizzas where IsActive = true");
         $counter = 1;
                while ($row = mysqli_fetch_assoc($query)) { 

                  echo "<div class='card$counter'  style='width: 18rem;'>";
                  ?>
                  <?php 
                  if($row['PizzaId'] == 4) {
                   echo "<img class='card-img-top' src='img/card1.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 6) {
                   echo "<img class='card-img-top' src='img/card2.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 7) {
                   echo "<img class='card-img-top' src='img/card3.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 8) {
                   echo "<img class='card-img-top' src='img/card4.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 9) {
                   echo "<img class='card-img-top' src='img/card5.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 10) {
                   echo "<img class='card-img-top' src='img/card6.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 11) {
                   echo "<img class='card-img-top' src='img/card7.jpg' alt='Card image cap'>";
                  }
                  else if($row['PizzaId'] == 12) {
                   echo "<img class='card-img-top' src='img/card8.jpg' alt='Card image cap'>";
                  }
                  else {
                   echo "<img class='card-img-top' src='img/card9.jpg' alt='Card image cap'>";
                  }
                  ?>
                   <div class="card-body">
                <?php

                    echo "<h5 class='card-title'>" . $row['Name'] . "</h5>";
                    $ing = mysqli_query($dbc, "SELECT  ingrediants.Name AS IngName
                                                FROM pizzaingrediants 
                                                left OUTER join ingrediants on ingrediants.IngrediantId = pizzaingrediants.IngrediantId
                                                WHERE pizzaingrediants.PizzaId = " . $row['PizzaId'] ." ");
                    echo "<p class='card-text'>";
                    while ($ings = mysqli_fetch_assoc($ing)) {
                    echo "<span>" . $ings['IngName'] . ', ' . "</span>";
                    }
                    echo "</p>";
                    echo "<a style='text-decoration:none;' class='card-button' href='insertTempPizza.php?id=".$row['PizzaId']."'>ORDER NOW</a>";

                 $counter++;
                 ?>
                
</div>
                <?php
                 echo "</div>";
                  }
                 ?>
                 </div>














<div class="CCA">

<div class="coca-cola">
<div class="coca1">
<img src="img/coca1.jpg" width="200px" height="110px" >
</div>

<div class="coca2">
<img src="img/coca2.jpg" width="200px" height="110px" >
</div>

<div class="coca3">
<img src="img/coca3.jpg" width="200px" height="110px" >
</div>

<div class="coca4">
<img src="img/coca4.jpg" width="160px" height="110px" >
</div>
<div class="coca5">
<img src="img/coca5.jpg" width="200px" height="110px" >
</div>

<div class="coca6">
<img src="img/coca6.jpg" width="200px" height="110px" >
</div>






</div>





<div class="contact-d" id="contact" style="margin-top: 950px !important;">

<div class="phone-text">

 <pre style="color:black">           Call Us at Number:
           +387 (0)33 000 111 
  </pre> 
</div>

<div class="number">

</div>

<div class="location-text">
<pre style="color:black">               Our Main Location:
               128 Lakewood Blvd., Lakewood, CA 90712
               located between Target and Macy's
  </pre> 
</div>

<div class="location">
</div>

<div class="email-text">
<pre style="color:black">              Our E-Mail is:
              info@pizza2go_onlineorder.com
  </pre> 

</div>

<div class="email">
</div>

</div>

<div class="about-cover" id ="about">

<div class="about">
<pre style="font-family: 'Oswald', sans-serif;;font-size:14px;color:#848484">
  By placing an order with Pizza 2go, you agree to be bound by  the terms set out here.Please note that (a) a minimum purchase 
  of Rs. 500 is required for delivery; (b) all our prices include VAT; (c) Our drivers carry less than Rs. 500 in cash. Please 
  ensure that the amount that you remit to him does not require change in excess of Rs. 500; (d) service is available only in 
  the areas of Home Delivery of Pizza 2go,Monday to Sunday (including public holidays) from 09h00 to 22h00;(e) the hours of 
  operation may however vary from store to store;(f) Pizza 2go reserves the right to make unannounce price changes at any time;
  (g) cheques are not accepted as payment method;  and (h) the data provided by customers will be included in the user and 
  promotional database,owned by DOMC Ltd, which endeavours to comply with the Data Protection Act 2017.
</pre>


</div>
</div>
</div>



</div> 
</body>





</html>