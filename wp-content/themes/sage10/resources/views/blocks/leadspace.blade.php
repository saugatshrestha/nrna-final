{{--
    script[leadspace.js]script
    style[modules/leadspace.scss]style
    Title: Leadspace
    Description: Leadspace Description]
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
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
<!-- leadspace html goes here -->

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

<section class="section-leadspace position-relative">
    <div class="leadspace-slider position-relative overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="https://nrna.org/wp-content/uploads/resized/21253244b04adf772e2bcf949fdade36/IMG_1351-scaled.jpg" alt="" class="w-100 object-fit">
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="https://nrna.org/wp-content/uploads/resized/119cb3eef4e15c04ba9f0ff6c2ea3a39/donate-banner-.jpg" alt="" class="w-100 object-fit">
                </figure>
            </div>
        </div>
        <!-- Add navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- Add pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>