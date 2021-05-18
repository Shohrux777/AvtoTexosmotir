@extends('bootstrap')
<!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('csstemp/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('csstemp/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('csstemp/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('csstemp/jquery.mCustomScrollbar.min.css')}}">
      <!-- awesome fontfamily -->
    <div>


    <div class="">
                <!-- loader  -->
            <div class="loader_bg">
                <div class="loader"><img src="images/loading.gif" alt="" /></div>
            </div>
            <!-- end loader -->

        <div class="wrapper">

            <div class="sidebar">
                <!-- Sidebar  -->
                <nav id="sidebar">

                    <div id="dismiss" >
                        <i class="fa fa-arrow-left" style="margin-top: 10px;"></i>
                    </div>

                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#why_choose_us">why Choose Us</a>
                        </li>
                        <li>
                            <a href="#testimonial">Testimonial</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>

                </nav>
            </div>


            <div id="content">


            <!-- section -->
            <section id="home" class="top_section">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- header -->
            <header>
                <!-- header inner -->
                <div class="container">
                    <div class="row">
                    <div class="col-lg-3 logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="right_header_info">
                            <ul class="d-flex">
                                <li class="d-flex"><img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" /><a href="#">987-654-3210</a></li>
                                <li class="d-flex"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" /><a href="#">demo@gmail.com</a></li>
                                <li class="d-flex"><img src="images/search_icon.png" alt="#" /></li>
                                <li>
                                <button type="button" id="sidebarCollapse">
                                    <img src="images/menu_icon.png" alt="#" />
                                </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <section>
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-5">
                        <div class="full slider_cont_section">
                            <h4>Welcome</h4>
                            <h3>Avto Nazorat</h3>
                            <p>Avtomobillar texnik sozligini nazorat qilish bo'yicha klientlar bazasiga xush kelibsiz!</p>
                            <div class="button_section">
                                <a href="#">Book Now</a>
                                <a href="#">About Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div id="slider_main" class="carousel slide" data-ride="carousel">
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="images/slider_1.png" alt="#" />
                                </div>
                                <div class="carousel-item">
                                <img src="images/slider_2.png" alt="#" />
                                </div>
                            </div>
                            <div class="full center">
                                <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#slider_main" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- end header -->
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- section -->
            <div id="about" class="section layout_padding">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 margin_top_30">
                    <div class="full margin_top_30">
                        <h3 class="main_heading _left_side margin_top_30">About Us</h3>
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    </div>
                    <div class="full button_section margin_top_30">
                                <a href="#">Read More</a>
                            </div>
                    </div>

                    <div class="col-lg-8">
                    <div class="full margin_top_50_rs">
                        <img class="img-responsive" src="images/about_us.png" alt="#" />
                    </div>
                    </div>

                    </div>

                </div>
            </div>
            <!-- end section -->

            <!-- section -->
            <div class="section layout_padding padding_top_0">
                <div class="container">

                    <div class="row">

                    <div class="col-lg-8">
                    <div class="full text_align_right r-img">
                        <img class="img-responsive" src="images/about_us_2.png" alt="#" />
                    </div>
                    </div>

                        <div class="col-lg-4 margin_top_30">
                    <div class="full margin_top_30">
                        <h3 class="main_heading _left_side margin_top_30">Our Cars</h3>
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..</p>
                    </div>
                    <div class="full button_section margin_top_30">
                            <a href="#">See More</a>
                        </div>
                    </div>

                    </div>

                </div>
            </div>
            <!-- end section -->

            <!-- section -->
            <section id="why_choose_us" class="dark_bg_blue layout_padding cross_layout padding_top_0">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="full center">
                        <h2 class="heading_main orange_heading">Why Choose Us</h2>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="full">
                            <div class="choose_blog text_align_center text-center">
                                <div class="d-flex justify-content-center">
                                    <img src="images/c1_icon.png" />
                                </div>
                                <h4>FINANCING MADE EASY</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="full">
                            <div class="choose_blog text_align_center">
                                <div class="d-flex justify-content-center">
                                    <img src="images/c2_icon.png" />
                                </div>
                                <h4>WIDE RANGE OF BRANDS</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="full">
                            <div class="choose_blog text_align_center">
                                <div class="d-flex justify-content-center">
                                    <img src="images/c3_icon.png" />
                                </div>
                                <h4>TRUSTED BY THOUSANDS</h4>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 margin_top_30">
                        <div class="full center button_section margin_top_30">
                            <a class="margin_top_30" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- end section -->

            <!-- section -->

            <!-- end section -->

            <!-- section -->
            <section id="contact" class="dark_bg_blue layout_padding cross_layout padding_top_0 margin_top_0">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="full center">
                        <h2 class="heading_main orange_heading">Contact Us</h2>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="contact_form">
                                <form>
                                <fieldset class="row">
                                    <div class="col-md-12">
                                    <div class="full field">
                                    <input type="text" placeholder="Your Name" name="name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="full field">
                                    <input type="email" placeholder="Email" name="email" />
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                    <div class="full field">
                                    <input type="text" placeholder="Phone" name="number" />
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                    <div class="full field">
                                    <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="full center">
                                    <button class="submit_bt">Send</button>
                                    </div>
                                </div>
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full map_section">
                            <div id="map">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- footer -->
            <footer>
                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                        <h3>AVTO NAZOROT</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="full">
                        <ul class="social_links d-flex justify-content-center align-items-center">
                            <li class="d-flex justify-content-center align-items-center"><a href="#"><i class="fab fa-facebook-f" style="margin-top: 12px;"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center"><a href="#"><i class="fab fa-twitter" style="margin-top: 12px;"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center"><a href="#"><i class="fab fa-instagram" style="margin-top: 12px;"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <h4 class="widget_heading">SUBSCRIBE</h4>
                        </div>
                        <div class="full subribe_form">
                            <form>
                            <fieldset>
                                <div class="field">
                                <input type="email" name="mail" placeholder="Enter your email" />
                                </div>
                                <div class="field">
                                <button class="submit_bt">Sumbit</button>
                                </div>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                        <h4 class="widget_heading">Usefull Links</h4>
                        </div>
                        <div class="full f_menu">
                            <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Our Cars</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                        <h4 class="widget_heading">Contact Details</h4>
                        <div class="full cont_footer">
                            <p><strong>AVALON Car : Adderess</strong><br><br>Newyork 10012, USA<br>Phone: +987 654 3210<br>demo@gmail.com</p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>
            <!-- end footer -->

            <!-- copyright -->

            <div class="cpy_right">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <p>© 2019 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right copyright -->

        </div>
        </div>

        <div class="overlay"></div>

            <!-- Javascript files-->
            <script src="{{url('jstemp/jquery.min.js')}}"></script>
            <script src="{{url('jstemp/popper.min.js')}}"></script>
            <script src="{{url('jstemp/bootstrap.bundle.min.js')}}"></script>
            <!-- Scrollbar Js Files -->
            <script src="{{url('jstemp/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <script src="{{url('jstemp/custom.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#sidebar").mCustomScrollbar({
                        theme: "minimal"
                    });

                    $('#dismiss, .overlay').on('click', function () {
                        $('#sidebar').removeClass('active');
                        $('.overlay').removeClass('active');
                    });

                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').addClass('active');
                        $('.overlay').addClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
            </script>

            <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {lat: 40.645037, lng: -73.880224},
                });

                var image = 'images/location_point.png';
                var beachMarker = new google.maps.Marker({
                    position: {lat: 40.645037, lng: -73.880224},
                    map: map,
                    icon: image
                });
                }
                </script>
                <!-- google map js -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
                <!-- end google map js -->

    </div>
    <style>
        .logo_avto{
            margin-top: 15px;
            color: #457ceb;
        }
    </style>
</div>
