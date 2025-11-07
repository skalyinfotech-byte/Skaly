<?php 
$currentPage="Contact";
include "header.php";?>
<!-- Start of Breadcrumb section
	============================================= -->
<section id="arck-breadcrumb" class="arck-breadcrumb-section-2 position-relative" data-background="assets/img/default-banner-5.webp">
    <!--
        <div class="slider-side-content position-absolute">
            <span class="archx-slider-side1 position-absolute"><a href="#">Contact@gmail.com</a></span>
        </div>
-->
    <div class="container">
        <div class="arck-breadcrumb-content position-relative text-center headline-2 ul-li">
            <h1>Contact</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Contact page content section
	============================================= -->
<section id="arck-contact-page" class="arck-contact-page-section spl-contact-section inner-page-padding" style="background-image: url(assets/img/workprocess-bg-2.webp)">
    <div class="container">
        <div class="arck-contact-page-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="arck-contact-page-cta position-relative">
                        <div class="contact-cta-inner-img position-relative">
                            <img src="assets/img/cn1.webp" alt="">
                        </div>
                        <div class="contact-cta-inner-text position-absolute headline pera-content" data-background="assets/img/cn-bg.webp">
                            <h3>Contact Details</h3>
                            <div class="arck-video-cta-wrap">
                                <div class="video-cta-item d-flex">
                                    <div class="inner-icon">
                                        <img src="assets/icon/ic8.png" alt="">
                                    </div>
                                    <div class="inner-text headline pera-content">
                                        <h3>Office Address:</h3>
                                        <p>19B, Paddapukur Ln, Chakraberia, Ballygunge,</p>
                                        <p>Kolkata, West Bengal 700020</p>
                                    </div>
                                </div>
                                <div class="video-cta-item d-flex">
                                    <div class="inner-icon">
                                        <img src="assets/icon/ic9.png" alt="">
                                    </div>
                                    <div class="inner-text headline pera-content">
                                        <h3>Mail Us:</h3>
                                        <p> info@nakshainteriors.com</p>
                                        <!--<p>info@company.com</p>-->
                                    </div>
                                </div>
                                <div class="video-cta-item d-flex">
                                    <div class="inner-icon">
                                        <img src="assets/icon/ic10.png" alt="">
                                    </div>
                                    <div class="inner-text headline pera-content">
                                        <h3>Telephone:</h3>
                                        <p>(+91) 9830105196</p>
                                        <!--<p>(+123) 5462 3257</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="arck-contact-page-form">
                        <div class="arck-appointment-form-wrap">
                            <div class="arck-section-title headline pera-content">
                                <span class="sub-title text-uppercase">Get A Quote</span>
                                <h2>Keep Get in Touch</h2>
                                <!--
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
                                    </p>
-->
                            </div>
                            <form action="contact_mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <button type="submit">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact page content section
	============================================= -->
<div class="contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3685.250525020452!2d88.3512334740855!3d22.53228622952046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a027717f210a5af%3A0x6ff3d4fd9be4f981!2sNAKSHA%20INTERIORS%2C%2019B%2C%20Paddapukur%20Ln%2C%20Chakraberia%2C%20Ballygunge%2C%20Kolkata%2C%20West%20Bengal%20700020!3m2!1d22.5321934!2d88.3535977!5e0!3m2!1sen!2sin!4v1686813590411!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include "footer.php";?>
