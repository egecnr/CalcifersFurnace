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
		
<br><br><br><br>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="height:300px;background-image: url('images/ponyo3.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			CONTACT US
		</h2>
	</section>		
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116 ">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="DAL/contactdata.php" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>
			</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>
<?php
include("sections/footer.php");
?>

</body>
</html>