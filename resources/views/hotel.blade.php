<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gia Linh SBH</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('faviconhoa.ico') }}" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/main.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{ asset('assests/images/flag.jpg') }}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="/login" class="bk-btn">Login Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0123456789 </li>
            <li><i class="fa fa-envelope"></i> adelaide@gmail.com </li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 0123456789 </li>
                            <li><i class="fa fa-envelope"></i> adelaide@gmail.com </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="/login" class="bk-btn">Login Now</a>
                            <div class="language-option">
                                <img src="{{ asset('assests/images/flag.jpg') }}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2" style="margin-top: 20px;">
                        <a href="/" style="font-family:monospace;">
                            <h4 class="text-black mb-3" style="font-size: 40px;">Adelaide</h4>
                        </a>
                    </div>

                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <li class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"><a
                                        href="/">Home</a></li>
                                <li class="nav-item nav-link {{ Request::is('/hotel') ? 'active' : '' }}"><a
                                        href="/hotel">Hotel</a></li>
                                {{-- <li class="nav-item nav-link {{ Request::is('/review') ? 'active' : '' }}"><a
                                        href="/review">Review</a> --}}
                                <li class="nav-item nav-link {{ Request::is('/service') ? 'active' : '' }}"><a
                                        href="/service">Service</a>
                                <li class="nav-item nav-link {{ Request::is('/contact') ? 'active' : '' }}"><a
                                        href="/contact">Contact</a></li>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Hotels</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <span>Hotels</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <!-- Filter Form -->
           <!-- Filter Form -->
<form action="{{ route('hotel.index') }}" method="GET" class="filter-form mb-4">
    <div class="row align-items-center">
        <div class="col-md-3 mb-2">
            <input type="text" name="name" class="form-control" placeholder="Hotel Name" value="{{ request('name') }}">
        </div>
        <div class="col-md-2 mb-2">
            <select name="rating" class="form-control">
                <option value="">Rating</option>
                <option value="1" {{ request('rating') == 1 ? 'selected' : '' }}>1 star</option>
                <option value="2" {{ request('rating') == 2 ? 'selected' : '' }}>2 star</option>
                <option value="3" {{ request('rating') == 3 ? 'selected' : '' }}>3 star</option>
                <option value="4" {{ request('rating') == 4 ? 'selected' : '' }}>4 star</option>
                <option value="5" {{ request('rating') == 5 ? 'selected' : '' }}>5 star</option>
            </select>
        </div>
        <div class="col-md-2 mb-2">
            <input type="number" name="price_min" class="form-control" placeholder="lowest price" value="{{ request('price_min') }}">
        </div>
        <div class="col-md-2 mb-2">
            <input type="number" name="price_max" class="form-control" placeholder="highest price" value="{{ request('price_max') }}">
        </div>
        <div class="col-md-2 mb-2">
            <input type="text" name="amenities" class="form-control" placeholder="convenience" value="{{ request('amenities') }}">
        </div>
        <div class="col-md-1 mb-2">
            <button type="submit" class="btn btn-primary w-100">refine</button>
        </div>
    </div>
</form>


            <div class="row">
                @foreach ($hotels as $hotel)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="{{ asset('assests/images/' . $hotel->hotel_images) }}" alt="hotel img">
                            <div class="ri-text">
                                <h4>{{ $hotel->name }}</h4>
                                <h3 class="">{{ $hotel->price }}$<span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Rating:</td>
                                            <td>{{ $hotel->rating }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>{{ $hotel->amenities }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Address:</td>
                                            <td>{{ $hotel->address }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="room-pagination">
                        {{ $hotels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local hotels</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>0123456789</li>
                                <li>adelaide@gmail.com</li>
                                <li>New York</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank">Adelaide</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('assests/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assests/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assests/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assests/js/main.js') }}"></script>
</body>

</html>
