<x-layout title="{{ $title }}">
    <!-- Start Breadcarumb area  -->
    <div class="breadcrumb-area breadcarumb-style-1 ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title theme-gradient h2">Blog terkini</h1>
                        <ul class="page-list">
                            <li class="rainbow-breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="rainbow-breadcrumb-item active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcarumb area  -->
    <!-- Start Theme Style  -->
    <div>
        <div class="rainbow-gradient-circle"></div>
        <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->




    <!-- Start Blog-Grid Sidebar  -->
    <div class="main-content">
        <div class="rainbow-blog-area rainbow-section-gap">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="row mt_dec--30">
                            <div class="col-lg-12">
                                <div class="row row--15">
                                    @foreach ($blogs as $blog )
                                    <div class="col-lg-6 col-md-6 col-12 mt--30">
                                        <div class="rainbow-card undefined">
                                            <div class="inner">
                                                <div class="thumbnail" style="height: 288px;">
                                                    <a href="{{'/blog/'.$blog->slug}}" class="image" style="object-fit: cover; object-position: center center; height: 100%; width:auto;" href="/blog-details/1"><img src="{{ asset('/storage/' . $blog['image']) }}" alt="Blog Image"></a>
                                                </div>
                                                <div class="content">
                                                    <ul class="rainbow-meta-list">
                                                        <li><a href="#">Agcenna</a></li>
                                                        <li class="separator">/</li>
                                                        <li>{{ \Carbon\Carbon::parse($blog['updated_at'])->translatedFormat('d F Y') }}</li>
                                                    </ul>
                                                    <h4 class="title" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;"><a href="{{'/blog/'.$blog->slug}}">{{ $blog['judul'] }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Menampilkan link pagination -->
                            </div>
                            <div class="container my-5">
                                <nav aria-label="Page navigation" class="d-flex justify-content-center align-items-center my-5">
                                    <ul class="pagination w-100 h-100 d-flex align-items-center">
                                        {{ $blogs->links('pagination::bootstrap-5') }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt_md--40 mt_sm--40">
                        <aside class="rainbow-sidebar">
                            <div class="rbt-single-widget widget_search mt--40">
                                <div class="inner">
                                    <form class="blog-search" action="#"><input type="text" placeholder="Search ...">
                                        <button class="search-button">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="rbt-single-widget widget_categories mt--40">
                                <h3 class="title">Categories</h3>
                                <div class="inner">
                                    <ul class="category-list ">
                                        <li>
                                            <a href="/blog">
                                                <span class="left-content">All</span>
                                                <span class="count-text">{{ $total }}</span>
                                            </a>
                                        </li>
                                        @foreach ($categories as $cat)
                                        <li>
                                            <a href="{{'/blog/category/'. $cat->slug }}">
                                                <span class="left-content">{{ $cat->nama_category }}</span>
                                                <span class="count-text">{{ $cat->blogs_count }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="rbt-single-widget widget_recent_entries mt--40">
                                <h3 class="title">Post</h3>
                                <div class="inner">
                                    <ul>
                                        <li><a class="d-block" href="blog-details.html">Best Corporate Tips You Will
                                                Read This Year.</a><span class="cate">Development</span></li>
                                        <li><a class="d-block" href="blog-details.html">Should Fixing Corporate Take
                                                100 Steps.</a><span class="cate">UX Design</span></li>
                                        <li><a class="d-block" href="blog-details.html">The Next 100 Things To
                                                Immediately Do About.</a><span class="cate">Development</span></li>
                                        <li><a class="d-block" href="blog-details.html">Top 5 Lessons About
                                                Corporate
                                                To Learn Before.</a><span class="cate">Marketing</span></li>
                                    </ul>
                                </div>
                            </div> -->

                            <div class="rbt-single-widget widget_tag_cloud mt--40">
                                <h3 class="title">Tags</h3>
                                <div class="inner mt--20">
                                    <div class="tagcloud">
                                        @foreach ($tags as $tag)
                                        <a href="{{'/blog/tag/'. $tag->slug }}">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog-Grid Sidebar  -->
</x-layout>