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
		<br>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
		<div class="p-b-10">
				<h3 class="ltext-103 cl5" style="margin: 80px">
					Product Overview
				</h3>
			</div>

			
			<div class="row isotope-grid">
			<?php
			//Showing the current products in the product table.
				include("DAL/connection.php");
				$query="SELECT * FROM products";
				$con=Database::getInstance()->getConnection();
				$results=$con->query($query);
				while($row=$results->fetch_assoc()){?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $row['picture']?> " alt="IMG-PRODUCT" style="min-height:400px; max-height:400px;">

							<a href="details.php?details_id=<?php echo $row['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['name']?>
								</a>

								<span class="stext-105 cl3">
									<?php "$".$row['price']?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				
			</div>
		</div>
	</div>
		
<?php
include("sections/footer.php");
?>
</body>
</html>