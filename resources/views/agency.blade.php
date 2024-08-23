<x-layout title="{{$title}}">
    <!-- Start Slider Area  -->
    <div class="hero-agency">
        <div class="round" id="r1">
            <div class="tx1">
                <span id="tx1">Creative &#128075;</span>
            </div>
            <div class="tx2">
                <span id="tx2">Inovative &#9757;</span>
            </div>
            <div class="tx3">
                <span id="tx3">Solution &#128076;</span>
            </div>
        </div>
        <div class="round" id="r2">
            <div class="lg1">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/bootstrap.webp') }}">
                    <span>Bootstrap</span>
                </div>
            </div>
            <div class="lg2">
                <div class="tech">
                    <img src="{{ asset('template/assets/images/tech/thailwind.webp') }}">
                    <span>Thailwind CSS</span>
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
                    <img src="{{ asset('template/assets/images/tech/laravel.webp') }}">
                    <span>Laravel</span>
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
                        <span class="subtitle">SOLUSI DIGITAL</span>
                        <h1 class="title display-two"><span class="theme-gradient">Agcenna Agency</span> <br>
                            <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible theme-gradient">Web Development.</b>
                                        <b class="is-hidden theme-gradient">Social Media Management.</b>
                                        <b class="is-hidden theme-gradient">Design Graphic.</b>
                                    </span>
                                </span>
                            </span>
                        </h1>
                        <p class="description">Mulai dari design web kece sampai dengan kebutuhan konten keren.</p>
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
    <!-- End Slider Area  -->


    <!-- Start Service-4 Area  -->
    <div class="rainbow-service-area rainbow-section-gap ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle ">
                            <span class="theme-gradient">Apa saja yang dapat kami bantu</span>
                        </h4>
                        <h2 class="title w-600 mb--20">Temukan Layanan Kami.</h2>
                        <p class="description b1">Kami paham pentingnya strategi digital. <br> Dari desain web hingga media sosial, kami hadir untuk bisnismu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row--15 service-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{ asset('template/assets/images/services/icon-01.png') }}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title text-start p-4">
                                    <a href="/webdev">Website Development</a>
                                </h4>
                                <p class="description b1 color-gray mb--0 p-4 text-start">Bikin website keren dan responsif yang siap diakses dari semua gadget. Yuk, bikin websitemu standout bareng kami!.</p>
                                <div class="button-group mt-3 text-start p-4">
                                    <a class="btn-default btn-small" href="/webdev">Lihat detail
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{ asset('template/assets/images/services/icon-02.png') }}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title text-start p-4">
                                    <a href="/medsos">Kelola Medsos</a>
                                </h4>
                                <p class="description b1 color-gray mb--0 p-4 text-start">Bikin konten keren dan strategi mantap buat akun medsosmu. Yuk, bikin medsosmu lebih hits bareng kami!.</p>
                                <div class="button-group mt-3 text-start p-4">
                                    <a class="btn-default btn-small" href="/medsos">Lihat detail
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{ asset('template/assets/images/services/icon-03.png') }}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title text-start p-4">
                                    <a href="/design">Desain Grafis Kreatif</a>
                                </h4>
                                <p class="description b1 color-gray mb--0 p-4 text-start">Bikin desain visual yang catchy dan eye-catching buat bisnismu. <br> Yuk, percantik brand-mu bareng kami!.</p>
                                <div class="button-group mt-3 text-start p-4">
                                    <a class="btn-default btn-small" href="/design">Lihat detail
                                        <i class="feather-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service-4 Area  -->

    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->

    <!-- Start Portfolio Area  -->
    <div class="rainbow-portfolio-area rainbow-section-gap masonary-wrapper-activation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Portofolio</span></h4>
                        <h2 class="title w-600 mb--20">Intip Portofolio Kami</h2>
                        <p class="description b1">Lihat hasil karya terbaik kami dan bagaimana kami membantu klien mencapai sukses di dunia digital.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="rainbow-portfolio-filter filter-button-default messonry-button text-center mb--30">
                        <button data-filter="*" class="is-checked"><span class="filter-text">Semua</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Web</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">App</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">SMM</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">Seo</span></button>
                    </div>

                    <div class="portfolio-items grid-metro2 mesonry-list">
                        <div class="resizer"></div>
                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--1 cat--4">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port1.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Architecture</a>
                                        </h5>
                                        <span class="subtitle b2">development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--2">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port3.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Running</a>
                                        </h5>
                                        <span class="subtitle b2">App</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--3 cat--4 cat--1">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port4.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Photoshop Design</a>
                                        </h5>
                                        <span class="subtitle b2">art</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--4">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port5.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Search Console</a>
                                        </h5>
                                        <span class="subtitle b2">SEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--3">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port6.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Instagram Feeds</a>
                                        </h5>
                                        <span class="subtitle b2">SMM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="portfolio-2 cat--4 cat--2 cat--1">
                            <div class="rainbow-card portfolio">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <div class="card-image">
                                            <a href="portfolio-details.html">
                                                <img src="{{ asset('template/assets/webp/portofolio/port2.webp') }}" alt="Portfolio-01">
                                            </a>
                                        </div>
                                        <a class="rainbow-overlay" href="portfolio-details.html"></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title mb--10">
                                            <a href="portfolio-details.html">Furniture</a>
                                        </h5>
                                        <span class="subtitle b2">Photoshop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Area  -->


    <!-- Start progress style-large  -->
    <div class="rainbow-progressbar-area rainbow-section-gap">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="section-title text-start" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle ">
                            <span class="theme-gradient">Layanan selesai</span>
                        </h4>
                        <h2 class="title w-600 mb--20">Layanan selesai <br> kami kerjakan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="count-box counter-style-1 text-center">
                        <div>
                            <div class="count-number">
                                <span class="counter">198</span>
                            </div>
                        </div>
                        <h5 class="title">Klien</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                    <div class="count-box counter-style-1 text-center">
                        <div>
                            <div class="count-number">
                                <span class="counter">75</span>
                            </div>
                        </div>
                        <h5 class="title">Web Development</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="count-box counter-style-1 text-center">
                        <div>
                            <div class="count-number">
                                <span class="counter">35</span>
                            </div>
                        </div>
                        <h5 class="title">Kelola Medsos</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                    <div class="count-box counter-style-1 text-center">
                        <div>
                            <div class="count-number">
                                <span class="counter">700</span>
                            </div>
                        </div>
                        <h5 class="title">Desain Kreatif</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End progress style-large  -->

    <div class="rainbow-callto-action clltoaction-style-default style-4">
        <div class="container">
            <div class="row row--0 align-items-center content-wrapper">
                <div class="col-lg-8">
                    <div class="inner">
                        <div class="content text-left">
                            <h2 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Siap melangkahkan satu kaki ke dunia digital?</h2>
                            <h6 class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Pilihan terbaik untuk bisnis anda.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call-to-btn text-start text-lg-end" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400"><a class="btn-default" href="#">Order Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->

    <!-- Start Testimonial Style Two  -->
    <div class="rainbow-testimonial-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Masukan Orang </span></h4>
                        <h2 class="title w-600 mb--20">Masukanmu Semangatku.</h2>
                        <p class="description b1">Kami sangat senang di kritik bahkan di hujat, Karena kepuasan tetap menjadi <br> pedoman utama pelayanan agcenna kepada teman dekat kami.</p>
                    </div>
                </div>
            </div>
            <div class="row row--15">

                <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                    <div class="rainbow-box-card card-style-default testimonial-style-one style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{ asset('template/assets/webp/testi/testi1.webp') }}" alt="Corporate React Template"></div>
                            <div class=" content">
                                <p class="description">“Kami merasa sangat terbantu, dan sangat puas dengan teman dekat kami agcenna digital atas jasanya„</p>
                                <h2 class="title">Primatama</h2>
                                <h6 class="subtitle theme-gradient">Design Interior</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="rainbow-box-card card-style-default testimonial-style-one style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{ asset('template/assets/webp/testi/testi2.webp') }}" alt="Corporate React Template"></div>
                            <div class=" content">
                                <p class="description">“Berkat website yang dibantu dibuatkan oleh agcenna, sekarang bisnis saya lebih di kenal di kudus dan sekitarnya„</p>
                                <h2 class="title">Muria Interior</h2>
                                <h6 class="subtitle theme-gradient">Design Interior</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                    <div class="rainbow-box-card card-style-default testimonial-style-one style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{ asset('template/assets/webp/testi/testi3.webp') }}" alt="Corporate React Template"></div>
                            <div class=" content">
                                <p class="description">“Dulu, untuk beli tiket harus ke agen, sekarang sejak adanya apps dari agcenna jadi penumpang bisa order dari rumah„</p>
                                <h2 class="title">PO. Berlian Jaya</h2>
                                <h6 class="subtitle theme-gradient">Perusahaan Otobus</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Testimonial Style Two  -->

    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->



</x-layout>
