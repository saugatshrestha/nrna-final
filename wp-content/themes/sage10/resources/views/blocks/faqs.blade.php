{{--
    script[]script
    style[modules/faqs.scss]style
    Title: Faqs
    Description: Faqs Description]
    Category: outside
    Icon: admin-tools
    Keywords: faqs
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
<!-- faqs html goes here -->

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

<section class="section-faqs position-relative py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div>
                    <h2 class="mb-12">Frequently Asked Questions?</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Who is NRN?
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    The term ‘  Non Resident Nepali’ (NRN) defined by the law made by the Parliament of the Nepal. This term is used to indicate two types of People. It is used for persons of Nepali origin holding citizenship of countries other than member states of South Asian Association for Regional Cooperation (SAARC) and Nepali nationals residing outside of SAARC member states.
                                </p>
                                <p>
                                    The term ‘Non Resident Nepali’ (NRN) defined by the law made by the Parliament of the Nepal. This term is used to indicate two types of People. It is used for persons of Nepali origin holding citizenship of countries other than member states of South Asian Association for Regional Cooperation (SAARC) and Nepali nationals residing outside of SAARC member states.
                                </p>
                                <h4>List of Documents</h4>
                                <ul>
                                    <li>
                                        Identity of the status of the person as NRN
                                    </li>
                                    <li>
                                        Free Visa to enter and stay in Nepal (for persons having citizenship of countries other than SAARC Countries)
                                    </li>
                                    <li>
                                        Right to open a bank account in convertible foreign currency
                                    </li>
                                    <li>
                                        Eligibility to make investment in convertible foreign currency
                                    </li>
                                    <li>
                                        Provision to repatriate proceeds of the investment out of Nepal in convertible Foreign currency if investment made in the same currency
                                    </li>
                                    <li>
                                        Purchase and sale of land (area as referred in NRNA bylaws) to limited extent Inheritance of ancestral property and ownership of that property in Nepal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Why was NRNA established?
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                How was NRNA Established?
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                What is an NRN Card?
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    NRN Card is an identity card issued to a Non-Resident Nepali by the Government of Nepal. NRNcard entitles card holder various benefits as listed in the NRN Act and bylaws. It is issued to those who approach the concerned government body.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header mb-0">
                            <button class="accordion-button w-100 text-start d-flex align-items-center justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Which agency issues the NRN Card?
                                <span class="icon-toggle">
                                    <i class="fa-thin fa-plus"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    NRN Card is an identity card issued to a Non-Resident Nepali by the Government of Nepal. NRNcard entitles card holder various benefits as listed in the NRN Act and bylaws. It is issued to those who approach the concerned government body.
                                </p>
                                <p>
                                    NRN Card is an identity card issued to a Non-Resident Nepali by the Government of Nepal. NRNcard entitles card holder various benefits as listed in the NRN Act and bylaws. It is issued to those who approach the concerned government body.
                                </p>
                                <p>
                                    NRN Card is an identity card issued to a Non-Resident Nepali by the Government of Nepal. NRNcard entitles card holder various benefits as listed in the NRN Act and bylaws. It is issued to those who approach the concerned government body.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>