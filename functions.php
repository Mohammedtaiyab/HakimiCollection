<?php
session_start();
require ('database/DBcontroller.php');
require ('database/Banner.php');
$db= new DBcontroller;
require ('database/Product.php');
require ('database/Category.php');
require ('database/Users.php');
require ('database/Order.php');
$order=new Order($db);
$category=new Category($db);
$product=new Product($db);
$product->getData();
$banner= new Banner($db);
$banner->getData($table='banner');
$user=new Users($db);
$succuss='';
$error='';
/////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET["action"])){  
  if($_GET['action']=='add'){
    if(isset($_GET['pid'])){
  
          $id=$_GET['pid'];
          $productitem=$product->singleProduct($id);
          $size=preg_split("/\,/", $productitem[0]['Size'])[0];
          $color=preg_split("/\,/", $productitem[0]['Color'])[0];
          if(isset($_POST['size']) && isset($_POST['color'])){
            $size=$_POST['size'];
            $color=$_POST['color'];
          }
            $quanlity=1;
          if(isset($_POST['quantity'])){
              $quanlity=$_POST['quantity'];
          }
          $imgs=preg_split("/\,/", $productitem[0]['Image']); 
            if(isset($_SESSION["login"])){
              $addcart=$product->singlecart($_SESSION["userId"],$productitem[0]['ID'],$quanlity);
            }
              if(isset($_SESSION["shopping_cart"])) {
                     $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                      if(!in_array($_GET["pid"], $item_array_id)){

                         $count = count($_SESSION["shopping_cart"]); 
                         
                  $item_array = array(  
                     'item_id'               =>    $productitem[0]['ID'],  
                     'item_name'               =>    $productitem[0]['Name'],  
                     'item_price'          =>    $productitem[0]['Price'],  
                      'item_image'              =>$imgs[0],
                     'item_quantity'          =>     $quanlity,
                     'item_size'          =>     $size,
                     'item_color'          =>     $color 
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                          } else   {  
                             
                echo '<script>alert("Item Already Added")</script>';  }    
              } else  {  
           $item_array = array(  
                'item_id'               =>      $productitem[0]['ID'],  
                'item_name'               =>    $productitem[0]['Name'], 
                'item_price'          =>     $productitem[0]['Price'],  
                'item_image'              =>$imgs[0],
                'item_quantity'          =>   $quanlity,
                'item_size'          =>     $size,
                'item_color'          =>     $color
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
            }  
       
    }
  }else if($_GET['action']=='delete'){
    if(isset($_GET['pid'])){
      $id=$_GET['pid'];
      if(isset($_SESSION["login"])){
        $userId=$_SESSION['userId'];
      $cart=$product->removeitem($userId,$id);
    }
     foreach ($_SESSION["shopping_cart"] as $select => $val) {
        if($val["item_id"] == $id)
        {
            unset($_SESSION["shopping_cart"][$select]);
        }
      }
    }

 }else if($_GET['action']=='update'){
  if ($_SESSION["item_id"] = $_GET["id"])
             { 
          $_SESSION['item_quantity'] = $_POST['quantity'];
             }
 }

}
if(isset($_POST["update"]))
    {    $in=0;
 foreach ($_SESSION["shopping_cart"] as $select => $val) {

        if($val["item_id"] == $_GET["id"])
        {  

             $_SESSION["shopping_cart"][$in]["item_quantity"] = $_POST['quantity'];
         
        }
         
           $in++; }

 
    }
///if(isset($_GET["action"])){ ////////////////////////////////////////USER LOGIN////////////////////////////////////////////////////////////


?>
