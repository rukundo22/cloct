<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>www.clockwaveits.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="clockwave.css" rel="stylesheet">
    <link href="clockwave22.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  
  <body class="mt-4 ">
     
   <!-- back to afterlogin home page-->
   <div class="text-center h2"><a href="afterlogin.php" class=" links"><i class="bi bi-arrow-left-circle-fill "></i> back </a></div>

   <!-- orders-->
    <div class="easyview text-center m-3">Your latest Orders</div>
  
   <!-- table showing your orders-->
   <div class=" container ">
    <div class="row">
   <form name="orderReview" action="afteroders.php" method="POST" target="_self" accept-charset="utf-8" autocomplete="on" class="text-start col" enctype="multipart/form-data">

   <input type="submit" class=" view m-1 rounded " placeholder=" " aria-label=" view your orders" name="orderView" value="View" required>


   </form>

   <form name="orderDeletion" action="afteroders.php" method="POST" target="_self" accept-charset="utf-8" autocomplete="on" class="text-end col" enctype="multipart/form-data">

   <input type="submit" class=" cancel m-1 rounded " placeholder=" " aria-label=" deleting an order" name="orderDelete" value="cancel" required>


   </form>
   </div>

  <table class="my-2">
    <tr>
    <th>Order Id</th>
    <th> Product name</th>
    <th>Amount</th>
    <th>Due-date</th>
   </tr>
   <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    </tr>
  </table>
    </div>

<div class="m-5">.</div>
<div class="m-5">.</div>
<div class="m-5">.</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  <footer>
    <div class=" mb-0 pt-3 ps-5 container-fluid  d-flex justify-content-center " style="background-image: url(careerbgimg.JPG);"><P class="mt-3 text-light"><i class="bi bi-c-circle"></i>  2023 clockwave innovations and technical solutions ltd<br> All Rights Reserved</P> </div>
   
  </footer>
  </html>