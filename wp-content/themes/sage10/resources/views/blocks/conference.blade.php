{{--
    script[]script
    style[modules/conference.scss]style
    Title: Conference
    Description: Conference Description]
    Category: outside
    Icon: admin-tools
    Keywords: conference
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
<!-- conference html goes here -->

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/conference.webp')->uri();
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

<section class="section-conference py-20">
    <div class="container">
        <div class="section-conference__grid">
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="conference-item">
                <figure class="conference-item__thumbnail">
                    <img src="https://nrna.org/wp-content/uploads/sites/1/nggallery/1st-global-conference/cache/1st-Global-Conference.jpg-nggid03218-ngg0dyn-240x160x100-00f0w010c011r110f110r010t010.jpg" alt="" class="w-100 object-fit">
                </figure>
                <div class="conference-item__details">
                    <a href="#">
                        4th Global Conference <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>