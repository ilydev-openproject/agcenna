<x-layout title="Contact">


    <!-- Start Contact Area  -->
    <div class="main-content">

        <div class="rainbow-contact-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--40">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Contact Form</span></h4>
                            <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-lg-12">
                        <div class="rainbow-contact-address mt_dec--30">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rainbow-address">
                                        <div class="icon">
                                            <i class="feather-headphones"></i>
                                        </div>
                                        <div class="inner">
                                            <h4 class="title">Contact Phone Number</h4>
                                            <p><a href="tel:+6282221128605">+6282221128605</a></p>
                                            <p><a href="tel:+6285972597122">+6285972597122</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rainbow-address">
                                        <div class="icon">
                                            <i class="feather-mail"></i>
                                        </div>
                                        <div class="inner">
                                            <h4 class="title">Our Email Address</h4>
                                            <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                                            <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rainbow-address">
                                        <div class="icon">
                                            <i class="feather-map-pin"></i>
                                        </div>
                                        <div class="inner">
                                            <h4 class="title">Our Location</h4>
                                            <p>Karanganyar<br>Demak, Jawa Tengah 59582</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt--40 row--15">
                    <div class="col-lg-7">
                        <form class="contact-form-1 rainbow-dynamic-form" id="contact-form" method="POST" action="mail.php">
                            <div class="form-group">
                                <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                            </div>

                            <div class="form-group">
                                <input type="text" id="subject" name="subject" placeholder="Your Subject">
                            </div>

                            <div class="form-group">
                                <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button name="submit" type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                    <span>Submit Now</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 mt_md--30 mt_sm--30">
                        <div class="google-map-style-1">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1020.0716393599869!2d110.8077882240416!3d-6.847553879088864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1724387499166!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1020.0716393599869!2d110.8077882240416!3d-6.847553879088864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1724387499166!5m2!1sid!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Contact Area  -->


</x-layout>