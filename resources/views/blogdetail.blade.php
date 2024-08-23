<x-layout title="{{ $blog->judul }}">


    <!-- Start Advance Pricing Area  -->
    <div class="rainbow-blog-details-area">
        <div class="post-page-banner rainbow-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content text-center">
                            <div class="page-title">
                                <h1 class="theme-gradient">{{ $blog->judul }}</h1>
                            </div>
                            <ul class="rainbow-meta-list">
                                <li>
                                    <i class="feather-user"></i>
                                    <a href="#">Agcenna</a>
                                </li>
                                <li>
                                    <i class="feather-calendar"></i>
                                    {{ \Carbon\Carbon::parse($blog['updated_at'])->translatedFormat('d F Y') }}
                                </li>
                            </ul>
                            <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="{{asset('storage/'.$blog->image)  }}" alt="Blog Images"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-details-content pt--60 rainbow-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content">

                            {!! $blog->konten !!}

                            <div class="category-meta">
                                <span class="text">Tags:</span>
                                <div class="tagcloud">
                                    @foreach ($blog->tags as $tags)
                                    <a href="{{'/blog/tag/'. $tags->slug }}">{{ $tags['name'] }}</a>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Social Default With Gradient  -->
        <div class="rainbow-social-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle "><span class="theme-gradient">Apakah blog ini bermanfaat?</span></h4>
                            <h2 class="title w-600 mb--20">Bagikan Kepada Big Circle Anda.</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <ul class="social-icon social-default with-gradient">
                            <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                <a href="https://www.instagram.com/?url={{ urlencode(url()->current()) }}" target="_blank">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="500">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" target="_blank">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Social Default With Gradient  -->
    </div>
    <!-- End Advance Pricing Area  -->


</x-layout>