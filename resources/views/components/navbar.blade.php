<div class="container position-relative">
    <div class="row align-items-center">
        <div class="col-lg-9 col-md-6 col-4 position-static">
            <div class="header-left d-flex">
                <div class="logo">
                    <a href="beranda">
                        <img class="logo-light img-fluid" style="height: 50px !important;" src="{{ asset('template/assets/webp/logo/logo.webp') }} " alt="Corporate Logo">
                        <img class="logo-dark img-fluid" style="height: 50px !important;" src="{{ asset('template/assets/webp/logo/logo-light.webp') }} " alt="Corporate Logo">
                    </a>
                </div>
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu">
                        <li class="with-megamenu has-menu-child-item position-relative {{ request()->is('/') ? 'active' : '' }}"><a href="/">Beranda</a>

                        </li>
                        <li class="has-droupdown has-menu-child-item {{ request()->is('/') ? 'active' : '' }}"><a href="/tentang">Tentang Kami</a>
                            <div class="rainbow-megamenu with-mega-item-2">
                                <ul class="submenu">
                                    <li><a href="/agency">Agency </a></li>
                                    <li><a href="index-application.html">Academy <span class="rainbow-badge-card">New</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-droupdown has-menu-child-item"><a href="/blog">Blog</a>
                            <!-- <ul class="submenu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                <li><a href="blog-list-view.html">Blog List View</a></li>
                                <li><a href="blog-list-sidebar.html">Blog List View Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul> -->
                        </li>

                        <!-- <li class="has-droupdown has-menu-child-item"><a href="#">Portfolio</a>
                            <ul class="submenu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
                                <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                <li><a href="portfolio-grid-layout.html">Portfolio Grid Layout</a></li>
                                <li><a href="portfolio-box-layout.html">Portfolio Box Layout</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-8">
            <div class="header-right">
                <div class="header-btn">
                    <a class="btn-default btn-small" target="_blank" href="https://themeforest.net/checkout/from_item/34133466?license=regular">Chat Now</a>
                </div>

                <!-- Start Mobile-Menu-Bar -->
                <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                    <div class="hamberger">
                        <button class="hamberger-button">
                            <i class="feather-menu"></i>
                        </button>
                    </div>
                </div>
                <!-- Start Mobile-Menu-Bar -->

                <!-- Start Switcher Area  -->
                <div id="my_switcher" class="my_switcher">
                    <ul>
                        <li>
                            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                <img class="sun-image" src="{{ asset('template/assets/images/icons/sun-01.svg') }} " alt="Sun images">
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                <img class="Victor Image" src="{{ asset('template/assets/images/icons/vector.svg') }} " alt="Vector Images">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Start Switcher Area  -->
            </div>
        </div>
    </div>
</div>