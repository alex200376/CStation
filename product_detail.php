<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://app.snipcart.com">
    <link rel="preconnect" href="https://cdn.snipcart.com">
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="assets/css/style3.css">
    <!-- Resource style -->
    <script src="assets/js/modernizr.js"></script>
    <!-- Modernizr -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Pre built PC Comparison Table</title>
</head>
<style>
.snipcart-add-item {
		background: linear-gradient(to right, #196BCA, #6433E0);
		background-color: #196BCA;
		color: #fff;
		font-family: Tahoma;
		font-size: 13px;
		font-weight: 800;
		font-style: normal;
		text-decoration: none;
		padding: 5px 12px;
		border: 0px solid #000;
		border-radius: 21px;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 5px;
        width:30%;
	}
.product-imgs{
    margin-right: 30px;
}
</style>
<body>
    <section id="hero" class="d-flex align-items-center" style="height:50px">

        <div class="container">

        </div>

    </section>


    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">


            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="logo"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto " href="product.php">Products</a></li>
                    <li><a class="nav-link scrollto" href="pre_built.html">Pre built PC</a></li>
                    <li><a class="nav-link scrollto" href="pc_create.html">PC builder</a></li>
                    <li><a class="nav-link scrollto" href="blog.html">Guide</a></li>
                    <li><a class="nav-link scrollto" href="about_us.html">About us</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                    <button class="snipcart-customer-signin getstarted scrollto" style="background-color: rgba(240, 255, 255, 0);"><i class="ri-login-box-line" style="font-size: 20px;"></i>My account</button>
                    <button class="snipcart-checkout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1
                        .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5
                        0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61
                        2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313
                        7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0
                        0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1
                        0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="white"></path>
                        </svg>
                        <span class="snipcart-total-price" class="snipcart-checkout">$0.00</span>
                    </button>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <main id="main" style="margin-top: 30px;">
    <a class="back" href="product.php" style="margin-right: 5%;margin-bottom:2%;">Back</a>
        <div class="card-wrapper" style="box-shadow: 12px 4px 73px -15px rgba(99, 99, 99, 0.75);
    -webkit-box-shadow: 12px 4px 73px -15px rgba(99, 99, 99, 0.75);
    -moz-box-shadow: 12px 4px 73px -15px rgba(99, 99, 99, 0.75);">
      
            <div class="cardxd">
           
                <?php
                // Connect to the database
                $conn = mysqli_connect('localhost', 'root', '', 'product');

                // Check if the database connection was successful
                if (!$conn) {
                    die("Database connection failed: " . mysqli_connect_error());
                }

                // Retrieve the product ID from the URL
                $product_id = $_GET['id'];

                // Retrieve product information from the database
                $sql = "SELECT * FROM product WHERE product_id = $product_id";
                $result = mysqli_query($conn, $sql);

                // Display product information
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo " <div class='product-imgs'><div class='img-display'><div class='img-showcase'><img src='" . $row['product_image'] . "' alt='" . $row['product_name'] . "'></div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='product-content'>";
                        echo "<h2 class='product-title'>" . $row['product_name'] . "</h2>";
                        echo "<p class='product-detail'>" . $row['product_description'] . "</p>";
                        echo " <div class='product-price'><p class='new-price'>Price: $" . $row['product_price'] . "</p>";
                        echo "</div>";
                        echo "<p>Quantity Available: " . $row['product_quantity'] . "</p>";
                        echo "<div class='purchase-info'>";
                        echo "<button type='submit' class='snipcart-add-item' data-item-id='" . $row['product_id'] . "' data-item-price='" . $row['product_price'] . "' data-item-description='" . $row['product_name'] . "' data-item-image='" . $row['product_image'] . "' data-item-name='" . $row['product_name'] . "'><span></span>Add to cart</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No products found.";
                }
                // Close the database connection
                mysqli_close($conn);
                ?>

            </div>
        </div>


    </main>
    <!-- .cd-products-comparison-table -->
    <script src="assets/js/jquery-2.1.4.js"></script>
    <script src="assets/js/main2.js"></script>
    <!-- Resource jQuery -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>CStation</h3>
                        <h5>Contact us</h5>
                        <p>
                            <strong>Phone:</strong> +852 3762 6262<br>
                            <strong>Email:</strong> ccdfs@hkuspace.hku.hk<br>
                            <li>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScUtwUw1Wk0iIMSkA1GfuUbYXO1dZWQcWLemcd-z3ya3x5U6g/viewform?embedded=true">Feedback</a>
                            </li>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Company</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="about_us.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#client">Partnered Company</a>
                            </li>


                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Customer Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="FAQ.html#deliver">Delivery service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="TAC.html#term">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="TAC.html#privacypolicy2">Privacy policy</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="pc_create.html">PC customization</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="FAQ.html">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Repair service</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>My Account</h4>
                        <p>manage your CStation account</p>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a href="login.html">Login</a></li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="sign_up.html">Register</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>CStation</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script>
        ! function(e, t, a) {
            var c = e.head || e.getElementsByTagName("head")[0],
                n = e.createElement("script");
            n.async = !0, n.defer = !0, n.type = "text/javascript", n.src = t + "/static/js/widget.js?config=" + JSON
                .stringify(a), c.appendChild(n)
        }(document, "https://app.engati.com", {
            bot_key: "5bfba005c8f2476b",
            welcome_msg: true,
            branding_key: "default",
            server: "https://app.engati.com",
            e: "p"
        });
    </script>
    <!-- Template Main JS File -->
    <script>
        if (!window.jQuery) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');


        window.SnipcartSettings = {
            publicApiKey: "NTM3NDYyOTAtYjMxOC00YTU4LThmYTQtZjMwZDhlNGU4OTU1NjM4MTM1Mjk2OTg0MjU2NjY5",
            loadStrategy: "on-user-interaction",
            addProductBehavior: "none",
        };

        (() => {
            var c, d;
            (d = (c = window.SnipcartSettings).version) != null || (c.version = "3.0");
            var s, S;
            (S = (s = window.SnipcartSettings).timeoutDuration) != null || (s.timeoutDuration = 2750);
            var l, p;
            (p = (l = window.SnipcartSettings).domain) != null || (l.domain = "cdn.snipcart.com");
            var w, u;
            (u = (w = window.SnipcartSettings).protocol) != null || (w.protocol = "https");
            var f = window.SnipcartSettings.version.includes("v3.0.0-ci") || window.SnipcartSettings.version != "3.0" &&
                window.SnipcartSettings.version.localeCompare("3.4.0", void 0, {
                    numeric: !0,
                    sensitivity: "base"
                }) === -1,
                m = ["focus", "mouseover", "touchmove", "scroll", "keydown"];
            window.LoadSnipcart = o;
            document.readyState === "loading" ? document.addEventListener("DOMContentLoaded", r) : r();

            function r() {
                window.SnipcartSettings.loadStrategy ? window.SnipcartSettings.loadStrategy === "on-user-interaction" &&
                    (m.forEach(t => document.addEventListener(t, o)), setTimeout(o, window.SnipcartSettings
                        .timeoutDuration)) : o()
            }
            var a = !1;

            function o() {
                if (a) return;
                a = !0;
                let t = document.getElementsByTagName("head")[0],
                    e = document.querySelector("#snipcart"),
                    i = document.querySelector(
                        `src[src^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][src$="snipcart.js"]`
                    ),
                    n = document.querySelector(
                        `link[href^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][href$="snipcart.css"]`
                    );
                e || (e = document.createElement("div"), e.id = "snipcart", e.setAttribute("hidden", "true"), document
                    .body.appendChild(e)), v(e), i || (i = document.createElement("script"), i.src =
                    `${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.js`,
                    i.async = !0, t.appendChild(i)), n || (n = document.createElement("link"), n.rel = "stylesheet",
                    n.type = "text/css", n.href =
                    `${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.css`,
                    t.prepend(n)), m.forEach(g => document.removeEventListener(g, o))
            }

            function v(t) {
                !f || (t.dataset.apiKey = window.SnipcartSettings.publicApiKey, window.SnipcartSettings
                    .addProductBehavior && (t.dataset.configAddProductBehavior = window.SnipcartSettings
                        .addProductBehavior), window.SnipcartSettings.modalStyle && (t.dataset.configModalStyle =
                        window.SnipcartSettings.modalStyle), window.SnipcartSettings.currency && (t.dataset
                        .currency = window.SnipcartSettings.currency), window.SnipcartSettings.templatesUrl && (t
                        .dataset.templatesUrl = window.SnipcartSettings.templatesUrl))
            }
        })();
        document.addEventListener('snipcart.ready', function() {
            Snipcart.api.session.setLanguage('en', {
                "payment": {
                    "form": {
                        "deferred_payment_title": "Pay at delivery",
                        "deferred_payment_instructions": "Payment will be made with a credit card at the delivery of your order."
                    }
                }
            });
        });
    </script>
    <script async src="https://cdn.snipcart.com/themes/v3.3.0/default/snipcart.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
</body>

</html>