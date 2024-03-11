{{--
    script[]script
    style[modules/team.scss]style
    Title: Team
    Description: Team Description]
    Category: outside
    Icon: admin-tools
    Keywords: team
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
<!-- team html goes here -->

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

<section class="section-team py-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-12">
                    Our Executive Committee
                </h2>
            </div>
        </div>
        <div class="team-container">
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
            <div class="team-item">
                <figure>
                    <img src="https://assets-global.website-files.com/65a97fd7dc8a3300b93d9637/65b3749f346162621f277f88_Rectangle%204369%20(1).webp" alt="" class="object-fit">
                </figure>
                <div class="team-item__details">
                    <h3 class="h4 mb-0">
                        Dr. Badri K.C.
                    </h3>
                    <p>
                        <span>President</span> | <span>IES</span> | <span>Russia</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>