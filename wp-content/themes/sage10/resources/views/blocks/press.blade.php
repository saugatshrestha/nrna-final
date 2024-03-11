{{--
    script[]script
    style[modules/press.scss]style
    Title: Press
    Description: Press Description]
    Category: outside
    Icon: admin-tools
    Keywords: press
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
<!-- press html goes here -->

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

<section class="section-press py-24">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-0 text-white">Press Releases</h2>
            </div>
        </div>
        <div class="section-press__grid mt-10">
            <div class="grid-left">
                <div class="card-press text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden mb-4">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae3316ae2add_Blog%20Cover-12.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-news__content pe-10">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h3 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h3>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi. Provident ad sed velit.
                                Est ea ab.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-right d-flex flex-column gap-5">
                <div class="card-press card-press__style1 text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae05cbae2ad8_Blog%20Cover-3.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-press__content">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h4 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h4>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card-press card-press__style1 text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002aeec59ae2ad4_Blog%20Cover.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-press__content">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h4 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h4>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card-press card-press__style1 text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae9ab7ae2ad5_Blog%20Cover-2.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-press__content">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h4 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h4>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card-press card-press__style1 text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002aeec59ae2ad4_Blog%20Cover.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-press__content">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h4 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h4>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card-press card-press__style1 text-white">
                    <a href="#">
                        <figure class="position-relative overflow-hidden">
                            <img src="https://assets-global.website-files.com/62833e53f002aeddacae2a25/62833e53f002ae7625ae2ad6_Blog%20Cover-5.svg" alt="" class="h-100 w-100 object-fit">
                        </figure>
                        <div class="card-press__content">
                            <span class="time fw-medium d-block mb-2">
                                February 20, 2024
                            </span>
                            <h4 class="mb-2">
                                Is This The Next Big E-Commerce Platform?
                            </h4>
                            <p>
                                Dicta nihil ratione corrupti. Aut dolorem dolores omnis laboriosam ratione sequi.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>