{{--
    script[]script
    style[modules/gridview.scss]style
    Title: Gridview
    Description: Gridview Description]
    Category: outside
    Icon: admin-tools
    Keywords: gridview
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
<!-- gridview html goes here -->

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

    <!-- @include('blocks.modules.leadspace', [
        'blockId' => $blockId,
        'class' => '',
        'leadspaceTitle' => $leadspaceTitle
    ]) -->

@endif

<section class="section-grid-view py-20">
    <div class="container">
        <div class="section-grid-view__grid">
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-view__item">
                <figure>
                    <a href="#" class="ratio ratio-16x9">
                        <img src="https://cache.marriott.com/marriottassets/marriott/Stock/stock-drink-307463-hor-clsc.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=600px:*" alt="" class="w-100 object-fit">
                    </a>
                </figure>
                <div class="grid-view__item--content">
                    <h4 class="mb-1 fw-semibold">
                        <a href="#">
                            एनआरएनएद्वारा जाजरकोटमा न्यानो पोशाक वितरण
                        </a>
                    </h4>
                    <span class="d-block time mb-3">
                        <i class="fa-regular fa-clock text-secondary"></i> Posted Date: March 1,2024
                    </span>
                    <p>
                        काठमाण्डौं । गैरआवासीय नेपाली संघ (एनआरएनए) ले जाजरकोटका भूकम्प पीडितको लागि न्यानो कपडा वितरण गरेको छ । 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-transparent">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
