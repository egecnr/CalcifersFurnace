<!DOCTYPE html>

<?php


?>
<html lang="en">
<?php
include("sections/head.php");
?>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<body class="animsition">

    <!-- Header -->
    <?php
    include("sections/header.php");
    include("sections/slider.php");
    ?>


    <!-- Title page -->
    <br><br>
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style=" height:400px;background-image: url('images/totorologin.jpg');">
        <h2 class="ltext-105 cl0 txt-center" style="color:black">
            LOGIN | REGISTER
        </h2>
    </section>

<!-- Login and register forms -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="DAL/customerlogin.php" method="post">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Login
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                        </div>

                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Your password">
                        </div>

                    

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="login">
                            Login
                        </button>

                        <a href="passwordResetform.php" style="margin:60px"> Forgot Password? Get a new one from here!</a>
                    </form>
                </div>

                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="DAL/customerregister.php" method="post">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Register
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                        </div>

                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Your password">
                        </div>
                        <div class="bor8 m-b-30">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="passwordverify" placeholder="Verify password">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfMLEIaAAAAAF7IJdajGFjwxCHS4UjS7rJegnfg"></div>
                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="register">
                            Register
                        </button>
                    </form>
                </div>
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