<?php include('header.php'); ?>


<main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb">
        <div class="site-breadcrumb-bg" style="background: url(assets/img/product/contact-b.jpg)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <h4 class="breadcrumb-title">Contact Us</h4>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- contact area -->
    <div class="contact-area pt-100 pb-80">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-map-location-dot"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5> Address</h5>
                                            <p>B1/12, Suryam Plaza,
                                                Kathwada
                                                Ahmedabad 382415</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-alarm-clock"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Open Time</h5>
                                            <p>Mon - Sat (10AM - 05PM)</p>
                                            <p>Sunday - <span class="text-danger">Closed</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Call Us</h5>
                                            <p>+91 97147 81239</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-envelopes"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Email Us</h5>
                                            <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e28b8c848da2879a838f928e87cc818d8f">digiwebsolution20@gmail.com</a>
                                            </p>
                                            <!-- <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="ed9e989d9d829f99ad88958c809d8188c38e8280">[email&#160;protected]</a>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page words which even slightly when looking at its layout. </p>
                            </div>
                            <form method="post" action="https://live.themewild.com/fameo/assets/php/contact.php"
                                id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="Your Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="4" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">Send
                                    Message <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 my-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->


    <!-- map -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- end map -->

</main>


<?php include('footer.php'); ?>