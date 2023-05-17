<!DOCTYPE html>
<html lang="en">
<?php
include("sections/head.php");
include("DAL/customersession.php");
?>

<body class="animsition">

    <!-- Header -->
    <?php
    include("sections/header.php");
    include("sections/slider.php");
    ?>

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>


    <!-- Shoping Cart2 -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Name</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-3">Quantity</th>
                                </tr>

                                <?php
                                    $total = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $total = $total + $value['item_price'] * $value['quantity'];

                                ?>

                                        <tr class="table_row">                      
                                            <td class="column-1"><?php echo $value['item_name'] ?></td>
                                            <td class="column-3">$ <?php echo $value['item_price'] ?></td>
                                            <td class="column-3"> <?php echo $value['quantity']?> </td>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <form action="DAL/orderdata.php" method="POST">

                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Cart Totals
                            </h4>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Subtotal:
                                    </span>
                                </div>

                                <div class="size-209">
                                    <span class="mtext-110 cl2">
                                        <?php echo $total ?>
                                    </span>
                                </div>
                            </div>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        <?php echo $total ?>
                                    </span>
                                </div>
                            </div>
                            <input type="hidden" name="total" value="<?php echo $total ?>">
                            <button type="submit" name="placeorder" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name='order'>
                                Finalize payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    include("sections/footer.php");
    ?>
</body>

</html>