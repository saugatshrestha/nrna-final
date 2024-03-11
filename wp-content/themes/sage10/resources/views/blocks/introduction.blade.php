{{--
    script[]script
    style[modules/introduction.scss]style
    Title: Introduction
    Description: Introduction Description]
    Category: outside
    Icon: admin-tools
    Keywords: introduction
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
<!-- introduction html goes here -->

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

<section class="section-introduction py-20">
    <div class="container">
        <div class="section-introduction__top">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="position-relative">
                        <figure class="section-introduction__thumbnail overflow-hidden">
                            <img src="https://assets-global.website-files.com/65cc2f9d76ead6a81505ea44/65cc3c1aa25b5ca255c63f3c_photo-square-01_compressed.webp" alt="Section Introduction Thumbnail">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>
                        Who We Are?
                    </h2>
                    <p>
                        Non-Resident Nepali Association (NRNA) was established with the purpose of uniting and binding the Nepali Diaspora under one umbrella on 11 October, 2003. In the course of completing 18 years of its existence NRNA has developed into a non-governmental global organization and a network of Nepali origin by establishing National Coordination Council (NCC) in 86 countries to represent its interests, concerns and commitments.
                    </p>
                    <p>
                        Wherever we Nepalis may go or settle, whichever nationality we may possess, we never forget our land of origin, the land which holds our identity and soul.
                    </p>
                    <div class="mt-10">
                        <a href="#" class="btn btn-secondary d-inline-block">
                            Read More <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="stat-box pe-md-14">
                    <figure class="mb-6">
                        <svg fill="#3f80b4" viewBox="-4.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>users-alt</title> <path d="M11.24 14.76c0.88-0.8 1.44-2 1.44-3.28 0-2.48-2-4.48-4.48-4.48s-4.48 2-4.48 4.48c0 1.32 0.56 2.48 1.44 3.28-1 0.36-1.88 0.92-2.64 1.72-2.68 2.88-2.52 7.52-2.52 7.72 0.040 0.48 0.4 0.84 0.88 0.8s0.8-0.4 0.8-0.88c0-0.040-0.16-4.12 2.12-6.52 1.080-1.12 2.56-1.72 4.44-1.72 1.84 0 3.32 0.56 4.4 1.68 2.28 2.36 2.12 6.48 2.12 6.52-0.040 0.48 0.32 0.84 0.8 0.88 0 0 0.040 0 0.040 0 0.44 0 0.8-0.36 0.84-0.8 0-0.2 0.2-4.84-2.6-7.72-0.72-0.76-1.6-1.32-2.6-1.68zM5.44 11.48c0-1.52 1.24-2.8 2.8-2.8s2.8 1.24 2.8 2.8c0 1.52-1.24 2.8-2.8 2.8s-2.8-1.28-2.8-2.8zM21.4 13.36c-0.4-0.44-0.88-0.76-1.4-1 0.44-0.56 0.72-1.24 0.72-2 0-1.76-1.4-3.16-3.16-3.16s-3.16 1.4-3.16 3.16c0 0.76 0.28 1.44 0.72 2-0.4 0.2-0.8 0.44-1.12 0.76-0.36 0.32-0.36 0.84-0.080 1.2 0.32 0.36 0.84 0.36 1.2 0.080 0.64-0.56 1.44-0.84 2.44-0.84 1.12 0 1.96 0.32 2.6 1 1.36 1.44 1.28 3.92 1.28 3.96-0.040 0.48 0.32 0.84 0.8 0.88 0 0 0.040 0 0.040 0 0.44 0 0.8-0.36 0.84-0.8 0.040-0.16 0.12-3.28-1.72-5.24zM16.080 10.4c0-0.8 0.68-1.48 1.48-1.48s1.48 0.68 1.48 1.48-0.68 1.48-1.48 1.48c-0.8 0-1.48-0.68-1.48-1.48z"></path> </g></svg>
                    </figure>
                    <h4 class="stat-box__title mb-3">
                        Become A Member
                    </h4>
                    <p>
                        Our organization stands to protect the interest of Nepali Diaspora and Nepalis for Nepali Diaspora living around the world. Become a member to get engaged with the Global Diaspora download SMART NRNA app from Appstore or Playstore
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box pe-md-14">
                    <figure class="mb-6">
                        <svg fill="#3f80b4" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 16 3 C 10.486 3 6 7.486 6 13 C 6 18.514 10.486 23 16 23 C 21.514 23 26 18.514 26 13 C 26 7.486 21.514 3 16 3 z M 16 5 C 20.411 5 24 8.589 24 13 C 24 17.411 20.411 21 16 21 C 11.589 21 8 17.411 8 13 C 8 8.589 11.589 5 16 5 z M 15 7 L 15 8.1894531 C 14.855 8.2419531 14.714063 8.3061133 14.580078 8.3789062 C 14.446094 8.4516992 14.318203 8.5338281 14.197266 8.625 C 14.076328 8.7161719 13.963281 8.8161914 13.857422 8.9238281 C 13.645703 9.1391016 13.465391 9.3846484 13.326172 9.6542969 C 13.256562 9.7891211 13.196875 9.930625 13.148438 10.076172 C 13.051562 10.367266 13 10.6775 13 11 C 13 11.205 13.022109 11.405469 13.0625 11.599609 C 13.143281 11.987891 13.300547 12.350391 13.517578 12.669922 C 13.626094 12.829688 13.748516 12.978984 13.884766 13.115234 C 14.157266 13.387734 14.481719 13.608594 14.839844 13.761719 C 15.197969 13.914844 15.59 14 16 14 C 16.1425 14 16.276016 14.026953 16.396484 14.076172 C 16.516953 14.125391 16.623516 14.197734 16.712891 14.287109 C 16.802266 14.376484 16.874609 14.483047 16.923828 14.603516 C 16.973047 14.723984 17 14.8575 17 15 C 17 15.4275 16.757891 15.776172 16.396484 15.923828 C 16.276016 15.973047 16.1425 16 16 16 C 15.8575 16 15.723984 15.973047 15.603516 15.923828 C 15.483047 15.874609 15.376484 15.802266 15.287109 15.712891 C 15.108359 15.534141 15 15.285 15 15 L 13 15 C 13 15.16125 13.013828 15.320254 13.039062 15.474609 C 13.064297 15.628965 13.1 15.778281 13.148438 15.923828 C 13.196875 16.069375 13.256562 16.210879 13.326172 16.345703 C 13.395781 16.480527 13.475703 16.608281 13.564453 16.730469 C 13.653203 16.852656 13.751563 16.968535 13.857422 17.076172 C 13.963281 17.183809 14.076328 17.283828 14.197266 17.375 C 14.318203 17.466172 14.446094 17.548301 14.580078 17.621094 C 14.714062 17.693887 14.855 17.758047 15 17.810547 L 15 19 L 17 19 L 17 17.810547 C 18.015 17.443047 18.784297 16.555098 18.960938 15.474609 C 18.986172 15.320254 19 15.16125 19 15 C 19 14.795 18.977891 14.594531 18.9375 14.400391 C 18.897109 14.20625 18.838281 14.018906 18.761719 13.839844 C 18.685156 13.660781 18.590937 13.489844 18.482422 13.330078 C 18.373906 13.170312 18.251484 13.021016 18.115234 12.884766 C 17.978984 12.748516 17.829687 12.626094 17.669922 12.517578 C 17.510156 12.409063 17.339219 12.314844 17.160156 12.238281 C 16.981094 12.161719 16.79375 12.102891 16.599609 12.0625 C 16.405469 12.022109 16.205 12 16 12 C 15.8575 12 15.723984 11.973047 15.603516 11.923828 C 15.483047 11.874609 15.376484 11.802266 15.287109 11.712891 C 15.197734 11.623516 15.125391 11.516953 15.076172 11.396484 C 15.026953 11.276016 15 11.1425 15 11 C 15 10.8575 15.026953 10.723984 15.076172 10.603516 C 15.125391 10.483047 15.197734 10.376484 15.287109 10.287109 C 15.376484 10.197734 15.483047 10.125391 15.603516 10.076172 C 15.723984 10.026953 15.8575 10 16 10 C 16.57 10 17 10.43 17 11 L 19 11 C 19 10.83875 18.986172 10.679746 18.960938 10.525391 C 18.935703 10.371035 18.9 10.221719 18.851562 10.076172 C 18.560938 9.2028906 17.87 8.5044531 17 8.1894531 L 17 7 L 15 7 z M 2 21 L 2 29 L 4 29 L 4 23 L 9.3808594 23 C 8.5298594 22.435 7.7610781 21.758 7.0800781 21 L 2 21 z M 24.919922 21 C 24.238922 21.758 23.470141 22.435 22.619141 23 L 28 23 L 28 29 L 30 29 L 30 21 L 24.919922 21 z M 6 25 L 6 27 L 26 27 L 26 25 L 6 25 z"></path></g></svg>
                    </figure>
                    <h4 class="stat-box__title mb-3">
                        Contribute To NRNA & Its Projects
                    </h4>
                    <p>
                        Be the part of philanthropic and humanitarian services conducted by NRNA. NRNA conducts relief and rehabilitation programs after disasters in Nepal annually. It supports to vulnerable and supportless migrant workers for repatriation and rehabilitation
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box pe-md-14">
                    <figure class="mb-6">
                        <svg viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-blood-bag" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>675</title> <defs> </defs> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(4.000000, 0.000000)" fill="#3f80b4"> <path d="M8.958,9.221 L8.958,1.783 C8.958,1.783 9.14,0.052 6.896,0.052 L2.084,0.052 C-0.16,0.052 0.022,1.783 0.022,1.783 L0.022,9.221 C0.022,9.221 -0.124,10.969 1.084,10.969 L3.043,10.969 L3.043,11.917 L4.044,11.917 L4.044,14 L3.043,14 L3.043,15 L4.044,15 L4.044,15.917 L5,15.917 L5,15 L5.938,15 L5.938,14 L5,14 L5,11.917 L6,11.917 L6,10.969 L7.896,10.969 C9.25,10.969 8.958,9.221 8.958,9.221 L8.958,9.221 Z M6.65,10.167 L6,10.167 L6,10 L3.042,10 L3.042,10.167 L2.39,10.167 C0.844,10.167 0.912,8.811 0.912,8.811 L0.912,4.954 L2.969,4.954 L2.969,4.053 L0.912,4.053 L0.912,2.954 L2.953,2.954 L2.953,2.053 L0.965,2.053 C1.069,1.629 1.388,0.917 2.389,0.917 L6.65,0.917 C8,0.917 8.129,2.362 8.129,2.362 L8.129,8.811 C8.13,8.811 8.25,10.167 6.65,10.167 L6.65,10.167 Z" class="si-glyph-fill"> </path> <path d="M2.023,8.137 C2.023,8.833 2.726,8.944 2.726,8.944 L6.267,8.944 C6.267,8.944 6.971,8.918 6.971,8.137 L6.971,5.027 L2.023,5.027 L2.023,8.137 L2.023,8.137 Z" class="si-glyph-fill"> </path> </g> </g> </g></svg>
                    </figure>
                    <h4 class="stat-box__title mb-3">
                        NRNA Mobile Blood Bus
                    </h4>
                    <p>
                        “One Province, One Mobile Blood Bus Project” is a quality enhancement Project of NRNA for Blood Banks of all seven provinces. Each Province has a medical hub, which is facing a lot of challenges for providing quality blood service time again. 
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn-readmore">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
