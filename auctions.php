<?php 


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auctions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="clockwave.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="mt-0 ">
    
    <!--navigation for duuka-->
    <nav class="navbar " style="background-color: lime;">
          <div class="container row justify-content center align-content center ">
            <a class=" col glogo"> <img class=" shoplogo rounded-circle" src="logo.JPG" alt=" our logo"> </a>
          
          <form class="d-flex search col-5 mt-2 " role="search">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
          </form>
            <div class="dukanavli nav-item col mt-2 dropdown">
            
            <button class="btn  dropdown-toggle" id="indexclient" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: aliceblue;color:darkmagenta;">
               <i class="bi bi-person h3"></i>account
               </button>
               <ul class="dropdown-menu text-center" id="indexclient">
               <li>
                  <a class="dropdown-item"  href="accountauth.php">Sign-in</a>
               </li>
               <li><a class="dropdown-item" href="#">invoices</a></li>
               <li><a class="dropdown-item" href="#">orders</a></li>
               <li><a class="dropdown-item" href="#">points</a></li>
               </ul>
            </div>
            
            <div class="dukanavli nav-item col mt-2 dropdown dukalogo">
            
              <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" id="indexclient" aria-expanded="false" style="background-color: aliceblue;color:darkmagenta;">
                <i class="bi bi-question-circle h3"></i>help
              </button>
              <ul class="dropdown-menu text-center" id="indexclient">
                <li>
                   <a class="dropdown-item"  href="#">Order Placement</a>
                </li>
                <li><a class="dropdown-item" href="#">Payments</a></li>
                <li><a class="dropdown-item" href="#">Returns/Refunds</a></li>
                <li><a class="dropdown-item" href="#">Delivery</a></li>
                <li><a class="dropdown-item" href="#">Cancellation</a></li>
                </ul>
           </div>
            <a href="" class="dukanavli nav-item col mt-2" style="color:darkmagenta;" id="indexclient"><i class="bi bi-cart4 h3"></i>Cart</a>
           </div>
    </nav>
      
    <!--searh by category section-->
    <!--small screen help button-->
    <div class="category  ">
      <div class="  m-2 dukahelp text-center "> 
      <button class="btn  dropdown-toggle fw-bold h4 helpdrop" type="button" id="indexclient" data-bs-toggle="dropdown" aria-expanded="false">
        need help <i class="bi bi-question-circle h3"></i>
      
        </button>
        <ul class="dropdown-menu text-center" id="indexclient">
        <li>
           <a class="dropdown-item"  href="#">Order Placement</a>
        </li>
        <li><a class="dropdown-item" href="#">Payments</a></li>
        <li><a class="dropdown-item" href="#">Returns/Refunds</a></li>
        <li><a class="dropdown-item" href="#">Delivery</a></li>
        <li><a class="dropdown-item" href="#">Cancellation</a></li>
        </ul>
      </div>
      <span class="m-3 fs-4" style="color:darkmagenta;"> <p id="indexlogoname">Categories:</p></span>
       <div class=" bigWcatego " id="categolist">
        <p> 
        
         <a href="#" class="catego rounded-pill">phones & tablets</a>
        
         <a href="#" class="catego rounded-pill">computers</a>
         
         <a href="#" class="catego rounded-pill">motors</a>
         
         <a href="#" class="catego rounded-pill">Furniture </a>
         
         <a href="#" class="catego rounded-pill ">Home appliances</a>
     
         <a href="#" class="catego rounded-pill ">Electronics</a>
         </p>
      </div>
    </div>
     
    <!--items in duuka-->
    <div class="grid-container m-4 " id="gridcon">

          <div class="card grid-item">
          <div class="card-body text-center">
               <img src="shop.JPG" class="cardimg row" alt="...">
               <p class="">product name</p>
               <div class="price"><p>price</p> </div>
              <a href="#" class="btn pricebtn btn-primary row">Bid</a>
          </div>
          </div>

           <div class="card grid-item" >
            <div class="card-body text-center">
                 <img src="shop.JPG" class="cardimg row" alt="...">
                 <p class="">product name</p>
                 <div class="price"><p>price</p> </div>
                <a href="#" class="btn pricebtn btn-primary row">Bid</a>
            </div>
            </div>

            <div class="card  grid-item" >
              <div class="card-body text-center">
                   <img src="shop.JPG" class="cardimg row" alt="...">
                   <p class="">product name</p>
                   <div class="price"><p>price</p> </div>
                  <a href="#" class="btn pricebtn btn-primary row">Bid</a>
              </div>
              </div>

              <div class="card grid-item">
                <div class="card-body text-center">
                     <img src="shop.JPG" class="cardimg row" alt="...">
                     <p class="">product name</p>
                     <div class="price"><p>price</p> </div>
                    <a href="#" class="btn pricebtn btn-primary row">Bid</a>
                </div>
                </div>
          
          
          
          
          

       
    </div>
   
    <!--end of items in duuka section-->
    <footer>
      <div class=" mb-0 pt-3 ps-5 container-fluid  d-flex justify-content-center " style="background-image: url(careerbgimg.JPG);"><P class="mt-3 text-light"><i class="bi bi-c-circle"></i>  2023 clockwave innovations and technical solutions ltd<br> All Rights Reserved</P> </div>
    </footer>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>