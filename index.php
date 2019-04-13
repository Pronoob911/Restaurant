<?php
  $conn= mysqli_connect('localhost','root','','restaurant');

  if(mysqli_connect_errno()){
    echo"something is wrong".mysqli_connect_error();
  }
  $query="select * from product";
  $result=mysqli_query($conn,$query);
  
  $products=mysqli_fetch_all($result,MYSQLI_ASSOC);

  

?>


<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="magnific-popup/magnific-popup.css"> -->


    <title>Restaurant</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body onload="main()">
    
    <!-- social icons -->
    <div class="container-fluid info p-3" id="top-icons">
      <div class="row">
        <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
          <div class="info-icons p-2">
            
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-snapchat fa-2x"></i>
            </a>
            

           
            
          

          </div>
          <h5> +91 8240341386</h5>
          <a href=" #"><h4 class="menu p-2  ml-10">Home</h4></a>
          <a href=" #"><h4 class="menu p-2 mr-10">Menu</h4></a>
          <a href=" #"><h4 class="menu p-2 mr-10">Gallery</h4></a>
           <a href=" #"><h4 class="menu p-2 mr-10">About Us</h4></a>
          
          

          <h4 class="primary-color p-2 text-capitalize">A-3, Saheed Nagar, Bhubaneswar, 751007</h4>

          <a href="cart/cart.html"><button class="btn" style="color: #ef4a32; background-color: #ffff; border: 1px solid #ef4a32">
          <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
            <span class="cart-info__icon mr-lg-3"><i class="fa fa-shopping-cart "></i></span>
            <p class="mb-0 text-capitalize"><span id="item-count">0 </span> items - $<span class="item-total" id="item-total">0</span></p>
          </div>
        </button></a>

         
        </div>

          
     


      </div>
       
    </div>

    
    <header id="header">
      <div class="conatiner">
        <a href="zomato api/index.html"><button class="btn btn-lg btn-success my-4 ml-2">Restaurants Near You</button></a>
      <div class="row height-90 align-items-center justify-content-center">
        <div class="col">
          <div class="banner text-center">
            <h1 class="display-1 text-capitalize w-50 mx-auto">
              <small style="color:#ffffff;">Orange</small>
              <strong class="primary-color">Wok</strong>
            </h1><br>

            <a href="cart/cart.html"><button class="btn main-btn my-4 text-capitalize">order from cart</button></a>
          </div>
        </div>
      </div>
     </div>
     <a href="#special-items"><button class="btn header-link primary-color"><i class="fa fa-arrow-down"></i>
     </button></a>
    </header> 



    <!-- menu items -->

    <section class="py-5" id="special-items">
      <div class="container my-5">
        <div class="row parent-container ">
          <div class=" shopItem mx-auto itemParent col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src="images/item1.jpeg" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item1.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3">menu item</h4>
                <h5 class="itemPrice px-3" style="float:left;">$3</h5>
                <button class="addToCart btn px-3" style="float: right;">Add to Cart</button>
              </a>
            </div>
          </div>

          <div class=" shopItem mx-auto col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src="images/item3.jpeg" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item3.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3">menu item</h4>
                <h5 class="itemPrice px-3" style="float:left;">$3</h5>
                <button class=" addToCart btn px-3" style="float: right;">Add to Cart</button>
              </a>
            </div>
          </div>


          <div class=" shopItem mx-auto col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src="images/item2.jpeg" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item2.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3">menu item</h4>
                <h5 class="itemPrice px-3" style="float:left;">$3</h5>
                <button class=" addToCart btn px-3" style="float: right;">Add to Cart</button>
              </a>
            </div>
          </div>

          <div class=" shopItem mx-auto col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src="images/item4.jpeg" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item4.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3">menu item</h4>
                <h5 class="itemPrice px-3" style="float:left;">$3</h5>
                <button class=" addToCart btn px-3" style="float: right;">Add to Cart</button>
              </a>
            </div>
          </div>

          <div class=" shopItem mx-auto col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src="images/item5.jpeg" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item5.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3">menu item</h4>
                <h5 class="itemPrice px-3" style="float:left;">$3</h5>
                <button class=" addToCart btn px-3" style="float: right;">Add to Cart</button>

              </a>
            </div>
          </div>


          <?php foreach($products as $product): ?>
          <div class=" shopItem mx-auto col-10 col-sm-6 col-lg-4 my-3">
            <div class="item-container">
              <img src=" <?php echo $product['image'];   ?>" class="img-fluid img-thumbnail item-img" alt="menu item">
              <a href="images/item6.jpeg">
                <h4 class=" itemName text-uppercase text-center item-link px-3"><?php echo $product['name'];  ?></h4>
                <h5 class="itemPrice px-3" style="float:left;"><?php echo $product['price'];   ?></h5>
                <button class=" addToCart btn px-3" style="float: right;">Add to Cart</button>
              </a>
            </div>
          </div>

        <?php endforeach; ?>

        </div>
      </div>
    </section>



<!-- menu section -->
<section id="menu" class="py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- title -->

<div class="row">
  <div class="col">
    <h1 class="primary-color text-uppercase">Starters</h1>
    
  </div> 
</div>  

<!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$6</h2>
    </div>

  </div>



  <!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$6</h2>
    </div>
      <!-- <h3 class="special-text text-capitalize">Good selection</h3> -->
  </div>



  <!-- title -->

<div class="row">
  <div class="col">
    <h1 class="primary-color text-uppercase">Soups</h1>
    
  </div> 
</div>  

<!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken soup</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$3</h2>
    </div>

  </div>



  <!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$6</h2>
    </div>
      <!-- <h3 class="special-text text-capitalize">Good selection</h3> -->
  </div>


<!-- title -->

<div class="row">
  <div class="col">
    <h1 class="primary-color text-uppercase">Rolls</h1>
    
  </div> 
</div>  

<!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken Roll</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$3</h2>
    </div>

  </div>



  <!-- single item -->
<div class="single-item d-flex justify-content-between my-3 p-3 special">
  
  <div class="single-item-text ">
    <h3 class="text-uppercase text-dark">Chicken</h3>
    <h4 class="text-muted">Very tasty my frannds</h4>
    
    </div>
    <div class="single-item-price align-self-end">
      <h2 class="text-uppercase text-dark">$6</h2>
    </div>
      <!-- <h3 class="special-text text-capitalize">Good selection</h3> -->
  </div>
</div>        
      </div>
    </div>
  </div>
</section>
 
 <!-- about us -->

 <section id="about" class="py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-6 my-4">
         <h6 class=" display-3">About Us</h6>
          <h4 class="text-muted">For us, sustainability is not a lofty idea but a fundamental, and necessary, endeavor. Our concept is about the food and drink of course, but it’s also about our team, our facilities, our practices, and the hundreds of decisions we make each day that affect the world around us. We believe it’s about finding a balance, which allows us to sustain our quest of making quality, accessible food, while also giving back to our community and the environment.</h4>

          <button class="btn main-btn my-4">Learn More</button>
       </div>
     </div>
   </div>

 </section>


<!-- contact section  -->
<section id="section">
  <div class="container-fluid no-padding">
    <div class="row">
      <div class="col-md-6 my-3 align-left-center">
        <div class="embed-responsive embed-responsive-21by9 height-60">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239487.13212572568!2d85.68036576553352!3d20.300828423554087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C+Odisha!5e0!3m2!1sen!2sin!4v1554560097682!5m2!1sen!2sin" width="100%" frameborder="0" style="border:2px solid black; padding: 10px;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="card text-center">
          <div class="card-header text-uppercase">
            <h1 >Contact list</h1>
          </div> 
          <div class="card-body">
            <form>
              <div class="input-group my-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="input-text">
                    <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="text" id="text" class="form-control form-control-lg" placeholder="Enter your name here" name="">
              </div>

              <div class="input-group my-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="input-phone">
                    <i class="fa fa-phone"></i>
                  </span>
                </div>
                <input type="text" id="phone" class="form-control form-control-lg" placeholder="Enter your phone number" name="">
              </div>

              <div class="input-group my-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="input-email">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email here" name="">
              </div>

              <button type="submit" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="fa fa-hand-point-right mr-2"></i>Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<div class="container-fluid info p-3" id="top-icons">
      <div class="row">
        <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
          <div class="info-icons p-2">
            
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="mr-3 primary-color">
              <i class="fa fa-snapchat fa-2x"></i>
            </a>
            

           
            
          

          </div>
          <h5 class="primary-color p-2 ">&copy;Copyright 2019</h5>
          
          

          <h4 class="primary-color p-2 text-capitalize">A-3, Saheed Nagar, Bhubaneswar, 751007</h4>
         
        </div>

          
     


      </div>
       
    </div>








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="magnific-popup/jquery.magnific-popup.js"></script> -->
    <script type="text/javascript" src="script.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script> -->

    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

        <script type="text/javascript" src="cart/script.js"></script>
  </body>
</html>