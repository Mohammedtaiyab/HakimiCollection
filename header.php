<?php require('functions.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hakimi Collection</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" type="image/png" href="images/miscellaneous/favicon.png">

    <!-- Fontawesome CSS Files -->
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
   
   <style type="text/css">
        @media only screen and (min-width: 360px){

.cart-table .quantity {
    margin-bottom: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 40px;
}.quantity .pro-qty .qtybtn {
    width: 15px;
    display: block;
    float: left;
    line-height: 36px;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    color: #404040;
}.quantity .pro-qty input {
    width: 28px;
    float: left;
    border: none;
    height: 36px;
    line-height: 40px;
    padding: 0;
    font-size: 14px;
    text-align: center;
    background-color: transparent;
}

.cart-table .quantity {
    margin-bottom: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
input[type="text"] {
    font: 15px/24px "Lato", Arial, sans-serif;
    color: #333;
    width: 100%;
    box-sizing: border-box;
    letter-spacing: 1px;
}
.quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 40px;
}
.item-quantity input {
    background-color: #e9ecef;
    font-size: 1rem;
    font-weight: 800;
     height: fit-content;
         width: 76px;
     }
.item-quantity .input-group-btn .btn {
    float: left;
    display: flex;
    align-items: center;
    height: 19px;
    padding: 0 10px;
    /* margin-bottom: 0; */
    background-color: #dadfe4;
    color: #000;
    font-size: 10px;
    border: none;
    margin-left: 84px;
    margin-top: -21px;
    width: 24px;
}
.cart-qty-plus{
      margin-bottom: -18px;
    margin-top: 0px;
}

        }
        .nav-link{
          display: flex;
    flex-direction: column;
    align-items: center;
        }
        .product article .pro-thumb .img-fluid {
    display: inherit;
    width: inherit;
    margin-left: auto;
    /*margin-top: 20%;*/
/*  object-fit: none; */
    margin-right: auto;
    /* justify-content: center;*/
  }
  .float{
  position:fixed;
  width:60px;
  height:60px;
     bottom: 11px;
    left: 15px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
.cart-table .quantity {
    margin-bottom: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 40px;
}.quantity .pro-qty .qtybtn {
    width: 15px;
    display: block;
    float: left;
    line-height: 36px;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    color: #404040;
}.quantity .pro-qty input {
    width: 28px;
    float: left;
    border: none;
    height: 36px;
    line-height: 40px;
    padding: 0;
    font-size: 14px;
    text-align: center;
    background-color: transparent;
}

.cart-table .quantity {
    margin-bottom: 0;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
input[type="text"] {
    font: 15px/24px "Lato", Arial, sans-serif;
    color: #333;
    width: 100%;
    box-sizing: border-box;
    letter-spacing: 1px;
}
.quantity {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 40px;
}
.item-quantity input {
    background-color: #e9ecef;
    font-size: 1rem;
    font-weight: 800;
     height: fit-content;
         width: 76px;
     }
.item-quantity .input-group-btn .btn {
      float: left;
    display: flex;
    align-items: center;
    height: 19px;
    padding: 0 10px;
    /* margin-bottom: 0; */
    background-color: #dadfe4;
    color: #000;
    font-size: 10px;
    border: none;
    margin-left: 84px;
    margin-top: -21px;
    width: 24px;
}
.cart-qty-plus{
      margin-bottom: -18px;
    margin-top: 0px;
}
.logo{
  width: 95%;
}

.control-group {
  margin: 10px 0px;
  position: relative;
}

.control-group input[type="text"] + label {
  background: #fff;
  border-left: 5px solid #f0f0f0;
  color: #8c8c8c;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  left: 0;
  padding: 2px 11px 3px 6px;
  position: absolute;
  top: 5px;
  transition-duration: 500ms;
  transition-property: background, border-color, color, padding, top, left;
}

.control-group input[type="text"] {
  -webkit-appearance: none;
  appearance: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  border: 5px solid #f0f0f0;
  background: #fff;
  border-radius: 0;
  color: #222;
  font-family: "Open Sans", sans-serif;
  font-size: 20px;
  font-weight: 600;
  outline: none;
  padding: 22px 12px 7px 12px;
  transition-duration: 500ms;
  transition-property: border-color, padding-top, padding-bottom;
  width: 100%;
}

.control-group input[type="text"]::placeholder {
  color: #9c9c9c;
  font-weight: 400;
}

.control-group input[type="text"]:focus {
  border-color: #2d9ae3;
  padding-top: 13px;
  padding-bottom: 16px;
}

.control-group input[type="text"]:focus + label {
  background: #2d9ae3;
  border-color: #2d9ae3;
  color: #fff;
  top: -21px;
}
select {
  /* Reset Select */
  appearance: none;
  outline: 0;
  border: 0;
  box-shadow: none;
  /* Personalize */
  flex: 1;
  padding: 0 1em;
  color: #fff;
  background-color: var(--darkgray);
  background-image: none;
  cursor: pointer;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select wrapper */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  border-radius: .25em;
  overflow: hidden;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  background-color: #34495e;
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
      </style>

    <!--   <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'ar',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }
</script> -->

<!-- <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element'); //remove the layout
  }
</script> -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </head>
    
    <body>  
<!--Div where the WhatsApp will be rendered-->


<a href="https://api.whatsapp.com/send?phone=919660877053" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
      <!-- //Header Style One -->
      <header id="headerOne" class="header-area header-one header-desktop">

      <div class="header-mini bg-top-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-5">
            
       <div class="navbar-lang">



<!-- Use CSS to replace link text with flag icons -->

<!-- Code provided by Google -->

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element'); //remove the layout
  }
</script>

















         
                    
                    <div class="dropdown" >
                   
                        <a href="javascript:void(0);" class="dropdown-toggle">
                          English
                        </a>
                        <div class="dropdown-menu translation-links" data-width="fit" onchange="translateLanguage(this.value);">
                          <a class="dropdown-item english"  data-lang="English"href="#">English</a>
                          <a class="dropdown-item arabic"  data-lang="Arabic" href="#">Arabic</a>
                          
                        </div>
                     

                      </div> 
                       <div id="google_translate_element" style="display: none;"></div>
                      </div>
                     
            </div>

            <div class="col-12 col-md-7">
                <div class="pro-header-options">
                  <div class="dropdown">
                      
                      <a class="pro-avatar">Welcome&nbsp;User</a>
                  </div>
                  <div class="dropdown">

                    <?php
                     $data= 0;
                      if(isset($_SESSION['login'])){
                        $cartnum=$product->fatchcart($_SESSION['userId']);
                        if ( is_array( $cartnum) ) {
                        $data = count( $cartnum);
                        } else {  
                        $data= 0;
                          }?>
                      <a href="javascript:void(0);" class="dropdown-toggle">
                          My Account
                      </a>
                        <div class="dropdown-menu" >
                          <a class="dropdown-item" href="profile.php">Profile</a>
                          <a class="dropdown-item" href="cart.php">cart(<?php echo $data;?>)</a>
                          <a class="dropdown-item" href="checkout.php">Checkout&nbsp;(<?php echo $data;?>)</a>
                          <a class="dropdown-item" href="orders.php">Orders</a>
                          <a class="dropdown-item" href="shipping-address.php">Shipping Address</a>
                          <a class="dropdown-item" href="logging.php?logout=true">Logout</a>
                        </div>
                        <?php 
}else{
  if(isset($_SESSION['error'])){?>
<div class="warning-msg">
  <i class="fa fa-warning"></i>
  <?php echo $_SESSION['error'];
  unset($_SESSION['error']); ?>
</div>
<?php }?>
 <div class="dropdown">
                      
                      <a href="signup.php" class="pro-avatar">SignIn or Create Account</a>
                  </div>

<?php } ?>
                  </div>
                </div>
                
            </div>
          </div>
        </div> 
      </div>
      <div class="header-maxi bg-header-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-2">
              <a href="index.php" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                <img class="img-fluid" src="images/logo/logo.png" alt="logo here">                                            
              </a>
            </div>
            
            <div class="col-12 col-sm-8">      
              <form class="form-inline" >
                <div class="search-field-module">                           
                  <div class="search-field-select" >
                      <select class="selectpicker">
                          <option selected>All Categories</option>
                          <?php 
                          $categories=$category->getData();
                           foreach($categories as $cat){?>
                          <option value='<?php echo $cat['id']; ?>'><?php echo $cat['name']; ?>&nbsp;</option>
                       <?php } ?>
                          </select>
                  </div>
                  <div class="search-field-wrap">
                      <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                      <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="Search Products">
                      <i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
              <ul class="pro-header-right-options">
                <li>
                  <a href="#" class="btn" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                      <i class="far fa-heart"></i>
                      <span class="badge badge-secondary">0</span>
                  </a>
                </li>
               <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="cart">
             <a href="cart.php">   <button class="btn" id="headerOneCartButton"  > 
                       <i class="fas fa-shopping-cart"></i>
                      <span class="badge badge-secondary"><?php 
  $data= 0;
  if(isset($_SESSION["login"])){
  $cartnum=$product->fatchcart($_SESSION['userId']);
  if ( is_array( $cartnum) ) {
    $data = count( $cartnum);
  } else {  
    $data= 0;
  }
}else if(isset($_SESSION["shopping_cart"])){
if ( is_array( $_SESSION["shopping_cart"]) ) {
    $data = count( $_SESSION["shopping_cart"]);
  } else {  
    $data= 0;
  }
}
echo $data; ?></span>
                  </button>   </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <div class="header-navbar bg-menu-bar">
        <div class="container">
          <nav id="headerOneNavbar" class="navbar navbar-expand-lg bg-nav-bar">
            
            <div class="navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item">

                  <a class="nav-link" href="index.php">
                     <img src="fonts/home.png" width="24px">
                    Home
                  </a>
                </li>
                       <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/settings.png" width="24px">
                   Category
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?categoryid=<?php echo $sub['id']; ?>'><?php echo $sub['name']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="products.php" >
                     <img src="fonts/shipping.png" width="24px">
                   Products
                  </a>
                </li>        
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/Country.png" width="24px">
                   Made In
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?countryid=<?php echo $sub['Id']; ?>'><?php echo $sub['Country']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/brand.png" width="24px">
                   Company
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?brandid=<?php echo $sub['Id']; ?>'><?php echo $sub['Company']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      </header>  
          
      <!-- //Sticky Header -->
      <header id="stickyHeader" class="header-area header-sticky d-none" >
        <div class="header-maxi bg-sticky-bar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-sm-12 col-lg-2">
            <a href="index.php" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                  <img class="img-fluid" src="images/logo/logo.png"  alt="logo here">                                            
                </a>
              </div>
              
              <div class="col-12 col-sm-8" style="position:static;">      
                <nav id="stickyNavbar" class="navbar navbar-expand-lg navbar-fixed-top">
              
                  <div class="navbar-collapse">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">
                     <img src="fonts/home.png" width="24px">
                    Home
                  </a>
                    
                      </li>
                          
                    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/settings.png" width="24px">
                   Category
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?categoryid=<?php echo $sub['id']; ?>'><?php echo $sub['name']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="products.php" >
                     <img src="fonts/shipping.png" width="24px">
                   Products
                  </a>
                </li>        
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/Country.png" width="24px">
                   Made In
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?countryid=<?php echo $sub['Id']; ?>'><?php echo $sub['Country']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/brand.png" width="24px">
                   Company
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?brandid=<?php echo $sub['Id']; ?>'><?php echo $sub['Company']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <ul class="pro-header-right-options">

                  <li class="dropdown">
                      
                    <button type="button" id="dropdownSearch" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                      <i class="fas fa-search"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                        <form>
                            <div class="search-field-module">
                                <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                          </form>
                    </div>

                  </li>
                  <li>
                    <a href="#" class="btn" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                        <i class="far fa-heart"></i>
                        <span class="badge badge-secondary">0</span>
                    </a>
                  </li>
                  <li class="cart-header dropdown" data-toggle="tooltip" data-placement="bottom" title="cart">
                    <a href="cart.php">   <button class="btn" id="headerOneCartButton"  > 
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-secondary"><?php 
  $data= 0;
  if(isset($_SESSION["login"])){
  $cartnum=$product->fatchcart($_SESSION['userId']);
  if ( is_array( $cartnum) ) {
    $data = count( $cartnum);
  } else {  
    $data= 0;
  }
}else if(isset($_SESSION["shopping_cart"])){
if ( is_array( $_SESSION["shopping_cart"]) ) {
    $data = count( $_SESSION["shopping_cart"]);
  } else {  
    $data= 0;
  }
}
echo $data; ?></span>
                    </button> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </header>
 <!-- //Mobile Header -->
      <header id="headerMobile" class="header-area header-mobile">
        <div class="header-mini bg-top-bar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="translator">
     <div id="google_translate_element"></div>
</div>
                    <div class="navbar-lang">
                                 
                    <div class="dropdown" >
                   
                        <a href="javascript:void(0);" class="dropdown-toggle">
                          English
                        </a>
                        <div class="dropdown-menu translation-links" data-width="fit" onchange="translateLanguage(this.value);">
                          <a class="dropdown-item english"  data-lang="English"href="#">English</a>
                          <a class="dropdown-item arabic"  data-lang="Arabic" href="#">Arabic</a>
                          
                        </div>
                     

                      </div> 
                    
                    </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="header-maxi bg-header-bar ">
          <div class="container">
              
            <div class="row align-items-center">
              <div class="col-2 pr-0">
                  <div class="navigation-mobile-container">
                      <a href="javascript:void(0)" class="navigation-mobile-toggler">
                          <span class="fas fa-bars"></span>
                      </a>
                      <nav id="navigation-mobile">
                          <div class="logout-main">
                              <div class="welcome">
                                
                                  <span>Welcome&nbsp;User !</span>
                              </div>
                              <div class="logout">
                                   <?php if(isset($_SESSION['login'])){?>
                                  <a href="logging.php?logout=true" class="">Logout</a> 
                                <?php }else{
                                  echo "<a href='signup.php'>LogIn</a>"; }?>
                              </div>
                                
                          </div> 

         <a href="index.php" class="main-manu btn ">
                            <img src="fonts/home.png" width="16px">
                              Home
                           
                            </a>
                           <a class="main-manu btn" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/settings.png" width="16px">
                    category
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="category">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?categoryid=<?php echo $sub['id']; ?>'>  <?php echo $sub['name']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                         <a href="products.php" class="main-manu btn ">
                            <img src="fonts/shipping.png" width="16px"> Products
                         
                          </a>
  <a class="main-manu btn" data-toggle="collapse" href="#country" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/country.png" width="16px">
                    MadeIn
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="country">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?countryid=<?php echo $sub['Id']; ?>'>  <?php echo $sub['Country']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                                      <a class="main-manu btn" data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/brand.png" width="16px">
                    category
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="brand">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?brandid=<?php echo $sub['Id']; ?>'>  <?php echo $sub['Company']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                                    <?php if(isset($_SESSION['login'])){?>

                    <a class="main-manu btn" data-toggle="collapse" href="#staticlogin" role="button" aria-expanded="false" aria-controls="staticlogin">
                          <img src="fonts/user.png" width="16px">
                                 Account
                                      
                                    </a>
                                    <div class="sub-manu1 collapse multi-collapse" id="staticlogin">
                                      <ul class="unorder-list">
                                          <li class="">
                                             <a class="btn main-manu" href="profile.php">Profile</a></li>
                                             <li> <a class="btn main-manu" href="#">Wishlist&nbsp;</a>
                                          </li><li>
                                            <a class="btn main-manu" href="orders.php">Orders</a>
                                           </li><li> <a class="btn main-manu" href="shipping-address.php">Shipping Address</a>
                                           </li><li> <a class="btn main-manu" href="logging.php?logout=true">Logout</a>
                                           
                                          </li>
                                      </ul>    
                                    </div>
                                  <?php }?>
                      </nav>
                  </div>
                  
              </div>
              <div class="col-8">
                  <a href="" class="logo" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="logo">
                      <img class="img-fluid" src="images/logo/logo.png" alt="logo here">                                            
                    </a>
              </div>
              
              <div class="col-2 pl-0">
                  <div class="cart-dropdown dropdown">
                    <a class="" href="cart.php" role="button" >
                      <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                      <span class="badge badge-secondary"><?php 
  $data= 0;
  if(isset($_SESSION["login"])){
  $cartnum=$product->fatchcart($_SESSION['userId']);
  if ( is_array( $cartnum) ) {
    $data = count( $cartnum);
  } else {  
    $data= 0;
  }
}else if(isset($_SESSION["shopping_cart"])){
if ( is_array( $_SESSION["shopping_cart"]) ) {
    $data = count( $_SESSION["shopping_cart"]);
  } else {  
    $data= 0;
  }
}
echo $data; ?></span>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="header-navbar bg-menu-bar">
          <div class="container">
            <form class="form-inline">
                <div class="search-field-module">                           
                    <div class="search-field-select" >
                        <select class="form-control">
                          <option selected>All Categories</option>
                         <option selected>All Categories</option>
                          <?php 
                          $categories=$category->getData();
                           foreach($categories as $cat){?>
                          <option value='<?php echo $cat['id']; ?>'><?php echo $cat['name']; ?>&nbsp;</option>
                       <?php } ?>
                            </select>
                    </div>
                    <div class="search-field-wrap">
                        <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                        <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="Search Products">
                        <i class="fa fa-search"></i></button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </header> 