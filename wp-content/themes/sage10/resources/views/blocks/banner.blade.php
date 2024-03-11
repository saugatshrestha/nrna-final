{{--
    script[]script
    style[modules/banner.scss]style
    Title: Banner
    Description: Banner Description]
    Category: outside
    Icon: admin-tools
    Keywords: banner
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
<!-- banner html goes here -->

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


<section class="section-banner section-banner__hasthumbnail bg-secondary position-relative overflow-hidden py-20">
    {{-- If Thumbnail class(section-banner__hasthumbnail) --}}
    <figure class="section-banner__thumbnail position-absolute start-0 top-0 w-100 h-100">
        <img src="https://nrna.org/wp-content/uploads/resized/21253244b04adf772e2bcf949fdade36/IMG_1351-scaled.jpg" alt="">
    </figure>
    {{-- If Thumbnail --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="position-relative z-1">
                    <h1 class="h2 text-center text-white mb-4">
                        <?php the_title(); ?>   
                    </h1>
                    <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                        <ol class="breadcrumb mb-0 text-white">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-white fw-medium" aria-current="page">
                                <a href="#"><?php the_title(); ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <figure class="breadcrumb-shape-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/banner-shape-thumbnail.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>  
