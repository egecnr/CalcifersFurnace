<?php
session_start();
//updating the quantity of a chosen item in the cart session.
$quantity= $_POST['quantity'];
if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['item_name']== $_POST['item_name']){
          $_SESSION['cart'][$key]['quantity']=$quantity;
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo "<script> 
             alert('Item updated');
             window.location.href='shoppingcart.php'; 
             </script>
          ";

      }
    }
}
else{
    echo "so sad";
}