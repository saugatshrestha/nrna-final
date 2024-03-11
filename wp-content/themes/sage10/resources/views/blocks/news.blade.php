{{--
    script[]script
    style[modules/news.scss]style
    Title: News
    Description: News Description]
    Category: outside
    Icon: admin-tools
    Keywords: news
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS:
    EnqueueAssetsJS:
--}}
<!-- news html goes here -->

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
    @endphp

@endif

<section class="section-news py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-0">Latest News</h2>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="#" class="btn btn-secondary">
                        View All News <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="section-news__grid mt-10">
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae0083ae2ade_Blog%20Cover-10.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae3016ae2adf_Blog%20Cover-8.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae3316ae2add_Blog%20Cover-12.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae0083ae2ade_Blog%20Cover-10.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae3016ae2adf_Blog%20Cover-8.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
            <div class="card-news">
                <a href="#">
                    <figure class="position-relative overflow-hidden mb-4">
                        <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae3316ae2add_Blog%20Cover-12.svg" alt="" class="h-100 w-100 object-fit">
                    </figure>
                    <div class="card-news__content">
                        <span class="time text-secondary fw-medium d-block mb-2">
                            February 20, 2024
                        </span>
                        <h4 class="mb-2">
                            Is This The Next Big E-Commerce Platform?
                        </h4>
                        <p>
                            Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                            Est ea ab.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>