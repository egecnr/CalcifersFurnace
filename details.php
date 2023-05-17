<!DOCTYPE html>
<html lang="en">
<?php
include("sections/head.php");
?>

<body class="animsition">

	<!-- Header -->
	<?php
	include("sections/header.php");
	include("sections/slider.php");
	?>

	<!-- breadcrumb -->
	<div class="container">
	</div>


	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">

				<?php
				include("DAL/connection.php");
				$id = $_GET['details_id'];
				//doesn't need injection since user can not input that value.
				//Select the chosen product and display the specific information about it.
				$query = "SELECT * FROM  products WHERE id='$id'";
				$con = Database::getInstance()->getConnection();
				$results = $con->query($query);

				$row = $results->fetch_assoc();

				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="<?php echo $row['picture'] ?>">
									<div class="wrap-pic-w pos-relative" style="height:600px">
										<img src="<?php echo $row['picture'] ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $row['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							"<?php echo $row['name'] ?>"
						</h4>

						<span class="mtext-106 cl2">
							"<?php echo "$" . $row['price'] ?>"
						</span>

						<p class="stext-102 cl3 p-t-23">
							"<?php echo $row['description'] ?>"
						</p>

						<!--  -->
						<div class="p-t-33">



							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
										<!-- sends the data to carddata file -->
									<button onclick="location.href='DAL/cartdata.php?cart_id=<?php echo $row['id'] ?> &cart_name=<?php echo $row['name'] ?> & cart_price=<?php echo $row['price'] ?>'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" >
										Add to cart
									</button>
								</div>
							</div>
						</div>

						<!-- wishlist / add cookie  -->

						<div class="flex-m bor9 p-r-10 m-r-11">
							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
								<i class="zmdi zmdi-favorite"></i>
							</a>

						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			
			<span class="stext-107 cl6 p-lr-25">
				Egehan Cinarli | Calcifer's Furnace
			</span>
		</div>
	</section>
	<?php
	include("sections/footer.php");
	?>
</body>

</html>