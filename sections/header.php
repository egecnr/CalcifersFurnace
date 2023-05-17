<header>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Warm up by the Calcifer's furnace
				</div>
				<div class="right-top-bar flex ">
					<?php
					//if user is logged in, show log off and edit account buttons, else show log in 
					if (session_status() == PHP_SESSION_NONE) {
						session_start();
					}
					if (!empty($_SESSION['email']) AND !empty($_SESSION['password'])) { ?>
						<a href="DAL/customerlogout.php" class="flex-c-m trans-04 p-lr-25">Log out</a>
						<a href="editaccount.php" class="flex-c-m trans-04 p-lr-25">Edit Account</a>

					<?php } else { ?>
						<a href="customerforms.php" class="flex-c-m trans-04 p-lr-25">Log in</a>
						
					<?php }


					?>

				</div>

			</div>
		</div>
		<!-- Topbar -->
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop container">

				<!-- Logo desktop -->
				<a href="#" class="logo">
					<img src="images/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li>
							<a href="index.php" style="color:crimson">Home</a>
						</li>

						<li>
							<a href="product.php"style="color:crimson">Shop</a>
						</li>
						<li>
							<a href="about.php"style="color:crimson">About</a>
						</li>

						<li>
							<a href="contact.php"style="color:crimson">Contact</a>
						</li>
						<li>
							<a href="admin/adminIndex.php"style="color:crimson">Admin</a>
						</li>
					</ul>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" onclick="location.href='shoppingcart.php'">
						<i style="color:crimson" class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">


			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" onclick="location.href='shoppingcart.php'">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>

		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m">
			<li>
				<a href="index.php">Home</a>
			</li>

			<li>
				<a href="shop.php">Shop</a>
			</li>

			<li>
				<a href="about.php">About</a>
			</li>

			<li>
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Search...">
			</form>
		</div>
	</div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<span class="mtext-103 cl2">
				Your Cart
			</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="header-cart-content flex-w js-pscroll">
			<ul class="header-cart-wrapitem w-full">
				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="images/item-cart-01.jpg" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							White Shirt Pleat
						</a>

						<span class="header-cart-item-info">
							1 x $19.00
						</span>
					</div>
				</li>

				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="images/item-cart-02.jpg" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							Converse All Star
						</a>

						<span class="header-cart-item-info">
							1 x $39.00
						</span>
					</div>
				</li>

				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="images/item-cart-03.jpg" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							Nixon Porter Leather
						</a>

						<span class="header-cart-item-info">
							1 x $17.00
						</span>
					</div>
				</li>
			</ul>

			<div class="w-full">
				<div class="header-cart-total w-full p-tb-40">
					Total: $75.00
				</div>

				<div class="header-cart-buttons flex-w w-full">
					<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						View Cart
					</a>

					<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						Check Out
					</a>
				</div>
			</div>
		</div>
	</div>
</div>