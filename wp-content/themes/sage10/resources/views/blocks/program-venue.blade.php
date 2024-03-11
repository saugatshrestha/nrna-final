{{--
    script[]script
    style[modules/program-venue.scss]style
    Title: Program Venue
    Description: Program Venue Description]
    Category: outside
    Icon: admin-tools
    Keywords: programvenue
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
<!-- programvenue html goes here -->

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

<section class="section-program-venue text-white py-20">
    <div class="container">
        <div class="row mb-10">
            <div class="col-md-8">
                <h2 class="mb-5">
                    Program Venue & Contact Details
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque aperiam aut necessitatibus ex eaque quis cum, dolorum modi maxime delectus minima? Recusandae, corporis magni atque quae iusto quibusdam quidem.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion pe-10" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="text-white accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Venue
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                                <p>
                                    The Soaltee Kathmandu
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="text-white accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Book Your Room
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                                <p>
                                    To book your stay at the conference venue, please contact their reservation team using the following email addresses: 
                                </p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            res.ktm@saolatee.com  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            pragya.shrestha@soaltee.com
                                        </a>
                                    </li>
                                </ul>
                                <p>
                                    When booking, please mention that you are attending the <u>11th NRN Global Conference and International General Assembly (IGA)-2023</u> to benefit from the special conference rates. Rooms are limited and will be allocated on a first-come, first-served basis, so we encourage you to book early. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="text-white accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Contact Person
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56520.6456256167!2d85.291006!3d27.700598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18609488cdb7%3A0x44edd8fc9a17af63!2sThe%20Soaltee%20Kathmandu!5e0!3m2!1sen!2sus!4v1710159167326!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
