<?php
session_start();
//removing a specific item from the cart session.
if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['item_name']== $_POST['item_name']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);

          echo "<script> 
             alert('Item removed');
             window.location.href='shoppingcart.php'; 
             </script>
          ";

      }
    }
}