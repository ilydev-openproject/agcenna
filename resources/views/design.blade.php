<x-layout title="{{ $title }}">

    <!-- Start Slider Area  -->
    <div class="hero-agency">
        <div class="round" id="r1">
            <div class="tx1">
                <span id="tx1">Logo &#128075;</span>
            </div>
            <div class="tx2">
                <span id="tx2">Desain Packaging &#9757;</span>
            </div>
            <div class="tx3">
                <span id="tx3">Konten &#128076;</span>
            </div>
        </div>
        <div class="round" id="r2">
            <div class="lg1">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/photoshop.webp') }}">
                    <span>Photoshop</span>
                </div>
            </div>
            <div class="lg2">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/illustrator.webp') }}">
                    <span>Illustrator</span>
                </div>
            </div>
            <div class="lg3">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/figma.webp') }}">
                    <span>Figma</span>
                </div>
            </div>
            <div class="lg4">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/notionLine.webp') }}">
                    <span>Notion</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('scroll', function() {
            var heroAgency = document.querySelector('.hero-agency');
            if (window.scrollY >= 300) {
                heroAgency.classList.add('scroll-transition');
            } else {
                heroAgency.classList.remove('scroll-transition');
            }
        });
    </script>
    <div class="slider-area slider-style-1 bg-transparent height-850">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <h1 class="title display-two"><span class="theme-gradient">Desain Kreatif</span></h1>
                        <div class="button-group"><a class="btn-default btn-medium round btn-icon" target="_blank" href="#">Order Sekarang <i class="icon feather-arrow-right">
                                </i>
                            </a>
                            <a class="btn-default btn-medium btn-border round btn-icon" href="business-consulting-2.html">Ngobrol Dulu <i class="icon feather-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Main Counter up-5 Area  -->
    <div class="rainbow-counterup-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thumbnail"><img class="radius w-100" src="{{ asset('template/assets/images/bg/bg-image-22.webp') }}" style="filter:brightness(50%)" alt="Images"></div>
                </div>
            </div>
            <div class="row ptb--60">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <div class="count-number"><span class="counter">399</span></div>
                        </div>
                        <h5 class="counter-title">Projects.</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <div class="count-number"><span class="counter">57</span></div>
                        </div>
                        <h5 class="counter-title">Logo</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <div class="count-number"><span class="counter">69</span></div>
                        </div>
                        <h5 class="counter-title">UI/UX</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                    <div class="count-box counter-style-4 text-center">
                        <div>
                            <div class="count-number"><span class="counter">25</span></div>
                        </div>
                        <h5 class="counter-title">Office Kit</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Counter up-5 Area  -->


    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->



    <!-- Start Service-5 Area  -->
    <div class="rainbow-service-area rainbow-section-gapBottom rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle ">
                            <span class="theme-gradient">Desain Kreatif</span>
                        </h4>
                        <h2 class="title w-600 mb--20">Jenis-jenis Design.</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15 service-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                    <div class="service service__style--1 icon-circle-style text-center">
                        <div class="icon">
                            <i class="feather-activity"></i>
                        </div>
                        <div class="content">
                            <h4 class="title w-600"><a href="#">UI Design</a></h4>
                            <p class="description b1 color-gray mb--0">Segala bentuk website seperti e-commerce, blog, Portofolio dan sejenisnya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="service service__style--1 icon-circle-style text-center">
                        <div class="icon">
                            <i class="feather-map"></i>
                        </div>
                        <div class="content">
                            <h4 class="title w-600"><a href="#">Logo</a></h4>
                            <p class="description b1 color-gray mb--0">Design logo anti mainstream dan kekinian cocok untuk perusahaan startup.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="service service__style--1 icon-circle-style text-center">
                        <div class="icon">
                            <i class="feather-cast"></i>
                        </div>
                        <div class="content">
                            <h4 class="title w-600"><a href="#">Social Media</a></h4>
                            <p class="description b1 color-gray mb--0">Dari mulai feeds sampai dengan konten video atau reels kami sediakan untuk anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Service-5 Area  -->


    <!-- Srart About Area  -->
    <div class="about-area about-style-4 rainbow-section-gapBottom rainbow-section-gap">
        <div class="container">
            <div class="row row--40 align-items-center">
                <div class="col-lg-6">
                    <div class="video-btn">
                        <div class="video-popup icon-center">
                            <div class="overlay-content">
                                <div class="thumbnail"><img class="radius-small" src="{{ asset('template/assets/images/about/contact-image.webp') }}" alt="Corporate Image"></div>
                                <div class="video-icon">
                                    <a class="btn-default rounded-player popup-video" href="https://www.youtube.com/watch?v=tj9-MGHCs38">
                                        <span><i class="feather-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="video-lightbox-wrapper"></div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--40 mt_sm--40">
                    <div class="content">
                        <div class="inner">
                            <h3 class="title">Tingkatkan Merek Anda dengan <strong>Desain Kreatif</strong> yang Memukau!.</strong>
                            </h3>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Tampil Menarik dengan Sentuhan Profesional</h4>
                                        <p class="text">Layanan desain kreatif kami akan memastikan merek Anda tampil menawan dan profesional, memikat perhatian serta meninggalkan kesan yang mendalam.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="feather-check"></i>
                                    </div>
                                    <div class="title-wrapper">
                                        <h4 class="title">Perluas Jangkauan dengan Solusi Inovatif</h4>
                                        <p class="text">Tarik perhatian audiens yang lebih luas dengan desain yang memikat dan fungsional, membuat merek Anda dapat diakses kapan saja dan dari mana saja.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <div class="rainbow-pricingtable-area rainbow-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h4 class="subtitle "><span class="theme-gradient">Harga Layanan</span></h4>
                        <h2 class="title w-600 mb--20">Berapa Harga Jasa Desain.</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-8 offset-lg-2">
                    <div class="advance-pricing">
                        <div class="inner">
                            <div class="row row--0">
                                <div class="col-lg-6">
                                    <div class="pricing-left">
                                        <h3 class="main-title">Paket Reguler.</h3>
                                        <p class="description">Anda bisa mendapatkan full paket feeds 1 bulan yang keren hanya dengan</p>
                                        <div class="price-wrapper">
                                            <span class="price-amount">Rp. 499k<sup>/Bln</sup></span>
                                        </div>
                                        <div class="pricing-btn-group">
                                            <button class="btn-default">Ayo, Beli Sekarang! 🚀</button>
                                            <button class="btn-default btn-border">Konsultasi</button>
                                        </div>
                                        <div class="rating">
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <span class="subtitle">Nilai 4.5/5 Bintang di 300+ ulasan.</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pricing-right">
                                        <div class="pricing-offer">
                                            <div class="single-list">
                                                <h4 class="price-title">Keuntungan.</h4>
                                                <ul class="plan-offer-list">
                                                    <li>
                                                        <i class="feather-check"></i> 15 design feeds
                                                    </li>
                                                    <li>
                                                        <i class="feather-check"></i> Hemat waktu kamu
                                                    </li>
                                                    <li>
                                                        <i class="feather-check"></i> Analisis Performa akun
                                                    </li>
                                                    <li>
                                                        <i class="feather-check"></i> Increase Brand image
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="single-list mt--40">
                                                <h4 class="price-title">Bonus.</h4>
                                                <ul class="plan-offer-list">
                                                    <li>
                                                        <i class="feather-check"></i> Free Konsultasi
                                                    </li>
                                                    <li>
                                                        <i class="feather-check"></i> Free Design Highlight
                                                    </li>
                                                    <li>
                                                        <i class="feather-check"></i> Source File
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Brand Area  -->
    <div class="rainbow-brand-area pb--80 rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Klien kami</span></h4>
                        <h2 class="title w-600 mb--20">Bertumbuh besar bersama Agcenna</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h3 class="title"></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="brand-list brand-style-2">
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-02.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-03.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-04.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-05.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-06.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-07.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-08.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-02.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-03.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-04.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-05.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-06.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-07.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-08.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-07.png') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('template/assets/images/brand/brand-08.png') }}" alt="Brand Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->



</x-layout>
