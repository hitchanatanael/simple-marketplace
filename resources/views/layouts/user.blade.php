<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Marketplace</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"
        integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('user/assets/css/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/font-awesome.min.c') }}ss">
    <link type="text/css" rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}" />

</head>

<body>
    <header>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-logo">
                            <h2 style="color: white;">
                                Simple Marketplace
                            </h2>
                        </div>
                    </div>

                    <div class="col-md-6 clearfix">
                        <div class="header-ctn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="main" class="main">
        @yield('main')
    </main>

    <footer id="footer">
        <div class="section">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">About Us</h3>
                                <p>
                                    Simple Marketplace tempat untuk berbelanja
                                </p>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fa fa-map-marker"></i>Cipta Karya</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Information</h3>
                                <ul class="footer-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Service</h3>
                                <ul class="footer-links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottom-footer" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="copyright">
                            Copyright &copy; 2025
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>
