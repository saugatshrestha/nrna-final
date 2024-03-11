{{--
    script[]script
    style[modules/projects.scss]style
    Title: Projects
    Description: Projects Description]
    Category: outside
    Icon: admin-tools
    Keywords: projects
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
<!-- projects html goes here -->

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

<section class="section-projects py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2>
                    Explore Our Projects
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias reprehenderit excepturi, voluptas nulla veniam aperiam odio ullam, qui repellendus fugit porro.
                </p>
            </div>
            <div class="col-md-5">
                <div class="text-end">
                    <a href="#" class="btn btn-secondary">
                        View All Projects <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-projects__grid mt-14">
        <div class="project-grid-item">
            <a href="#" class="d-block">
                <figure class="project-grid-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/2021/08/smart-NRNA-e1628663195850-1-e1659416686428.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="project-grid-item__details">
                    <h4>
                        NRNA Appeal- Nepal Flood & Landslide
                    </h4>
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-grid-item">
            <a href="#" class="d-block">
                <figure class="project-grid-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/2021/08/smart-NRNA-e1628663195850-1-e1659416686428.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="project-grid-item__details">
                    <h4>
                        NRNA Covid-19 Response
                    </h4>
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-grid-item">
            <a href="#" class="d-block">
                <figure class="project-grid-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/2021/08/smart-NRNA-e1628663195850-1-e1659416686428.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="project-grid-item__details">
                    <h4>
                        NRNA Covid-19 Response
                    </h4>
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="project-grid-item">
            <a href="#" class="d-block">
                <figure class="project-grid-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/2021/08/smart-NRNA-e1628663195850-1-e1659416686428.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="project-grid-item__details">
                    <h4>
                        NRNA Covid-19 Response
                    </h4>
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>