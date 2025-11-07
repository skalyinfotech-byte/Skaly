<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NAKSHA INTERIORS</title>
    <meta name="description" content="NAKSHA INTERIORS - Architecture and Interior Design">
    <meta name="keywords" content="apartments, architect, architecture, building, clean, construction, creative, decoration, interior design, minimal, modern, portfolio, residence, studio">
    <meta name="author" content="NAKSHA INTERIORS">
    <link rel="shortcut icon" href="assets/img/logo/ficon.html" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Labrada:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rancho&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!--    owl-carousel-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--carousel-lightgallery-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/twenty.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">


</head>

<body>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!-- Start of header section
         ============================================= -->
    <header id="arck-header" class="arck-header-section header-style-one">
        <div class="arck-header-main-content d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="index.php"><h1>Logo</h1></a>
            </div>
            <div class="arck-main-navigation-wrap">
                <nav class="main-navigation clearfix ul-li">
                    <ul id="main-nav" class="nav navbar-nav clearfix">
                        <li class="dropdown <?php if($currentPage=='Home'){echo "active";}?>">
                            <a href="index.php">Home</a>
                            
                        </li>
                        <li class="<?php if($currentPage=='About'){echo "active";}?>"><a href="about-us.php">About</a></li>
                        
                        <li class="dropdown <?php if($currentPage=='Project'){echo "active";}?>">
                            <a href="project.php">Projects</a>
                            
                        </li>
                        <li class="<?php if($currentPage=='Career'){echo "active";}?>"><a href="career.php">Career</a></li>
                        
                        <li class="dropdown <?php if($currentPage=='Blog'){echo "active";}?>">
                            <a href="blog.php">Blog</a>
                            
                        </li>
                        <li class="<?php if($currentPage=='Contact'){echo "active";}?>"><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-cta-social d-flex align-items-center">
                <div class="header-cta text-uppercase">
                    call us: <a href="tel:+9999999999">( +91 ) 9999999999</a>
                </div>
                <div class="header-side-btn">
                    <button class="navSidebar-button"><i class="fal fa-bars"></i></button>
                </div>
            </div>
            <div class="mobile_menu">
                <div class="mobile_menu_button open_mobile_menu">
                    <i class="fal fa-bars"></i>
                </div>
                <div class="mobile_menu_wrap">
                    <div class="mobile_menu_overlay open_mobile_menu"></div>
                    <div class="mobile_menu_content">
                        <div class="mobile_menu_close open_mobile_menu">
                            <i class="fal fa-times"></i>
                        </div>
                        <div class="m-brand-logo">
                            <a href="index.php"><img src="assets/img/logo/naksabiglog.png" alt=""></a>
                        </div>
                        <nav class="mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="nav navbar-nav clearfix">
                                <li class="dropdown <?php if($currentPage=='Home'){echo "active";}?>">
                                    <a href="index.php">Home</a>
                                    
                                </li>
                                <li class="<?php if($currentPage=='About'){echo "active";}?>"><a href="about-us.php">About</a></li>
                                <li class="dropdown <?php if($currentPage=='Project'){echo "active";}?>">
                                    <a href="project.php">Projects</a>
                                    
                                </li>
                                <li class="<?php if($currentPage=='Career'){echo "active";}?>"><a href="career.php">Career</a></li>
                                <li class="dropdown <?php if($currentPage=='Blog'){echo "active";}?>">
                                    <a href="blog.php">Blog</a>
                                    
                                </li>
                                <li class="<?php if($currentPage=='Contact'){echo "active";}?>"><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /Mobile-Menu -->
            </div>
        </div>
    </header>
    <!-- Sidebar sidebar Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black">
            <div class="row loader-area">
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
            </div>
        </div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents headline pera-content">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/naksabiglog.png" alt=""></a>
                            </div>
                            <div class="content-box">
                                <h5>About Us</h5>
                                <p class="text"><b>Naksha</b> is an interior decoration service provider in Kolkata. We provide both office and home interior decoration services.
                                    We have a young efficient team of professionals who provide a complete solution to your interior decor needs of your property.
                                </p>
                            </div>
                            
                            <!-- Social Box -->
                            <div class="content-box">
                                <h5>Contact Us</h5>
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/profile.php?id=100063573294324"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://instagram.com/nakshainteriors?igshid=ZDc4ODBmNjlmNQ=="><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=+919830105196"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://www.youtube.com/@nakshainteriors4011/featured"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of header section
         ============================================= -->
    <!-- Start of slider section
         ============================================= -->
    
    <!-- End of Slider section
         ============================================= -->
         
         <div class="float-sm">
    <div class="fl-fl1 float-fb" style="">
        <i class="fab fa-facebook-f"></i>
        
        <a href="https://www.facebook.com/profile.php?id=100063573294324" target="_blank"> Like us!</a>
    </div>
    <div class="fl-fl3 float-rs">
        <i class="fab fa-whatsapp"></i>
        
        <a href="https://wa.me/9830105196?text=Hello" target="_blank">Chat with us!</a>
    </div>
    <div class="fl-fl float-pn">
        <i class="fa fa-phone"></i>
        
        <a href="tel:+919830105196" target="_blank">Call us!</a>
    </div>
    <div class="fl-fl4 float-ig">
        <i class="fab fa-instagram"></i>
        
        <a href="https://instagram.com/nakshainteriors?igshid=ZDc4ODBmNjlmNQ==" target="_blank">Follow us!</a>
    </div>
    <div class="fl-fl5 float-yt">
        <i class="fab fa-youtube"></i>
        
        <a href="https://www.youtube.com/@nakshainteriors4011/featured" target="_blank">Subscribe us!</a>
    </div>
</div>
