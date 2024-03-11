{{--
    script[]script
    style[modules/titlewithimage.scss]style
    Title: Title With Image
    Description: Title With Image Description]
    Category: outside
    Icon: admin-tools
    Keywords: titlewithimage
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
<!-- titlewithimage html goes here -->

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


<section class="section-title-with-image py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="mb-16 text-center">Organizational Structure</h3>
                <figure>
                    <img src="https://nrna.org/wp-content/uploads/2023/12/nrna-structure-FINAL_21_page-0001-1024x791.jpg" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
