{{--
    script[]script
    style[modules/contact.scss]style
    Title: Contact
    Description: Contact Description]
    Category: outside
    Icon: admin-tools
    Keywords: contact
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
<!-- contact html goes here -->

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

<section class="section-contact py-20">
    <div class="container">
        <div class="section-contact__grid">
            <div class="section-contact__grid-left">
                <h2>
                    Contact Us
                </h2>
                <p>
                    Feel free to expand upon this heading by adding bullet points or paragraphs that highlight the unique value.
                </p>   
                <div class="mt-8">
                    <ul class="contact-info">
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <p>
                                Subarna Shamsher Marg, Baluwatar, Kathmandu
                            </p>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <p>
                                +977- 014511530 , 014526005
                            </p>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <p>
                                info@nrna.org
                            </p>
                        </li>
                    </ul>
                </div> 
                <div class="social-media mt-8 pt-8">
                    <h4 class="mb-5">Follow Us:</h4>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section-contact__grid-right">
                <div class="contact-form position-relative">
                    <figure class="contact-form__thumbnail position-absolute">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/paper-plane.png" alt="">
                    </figure>
                    <div class="mb-8">
                        <h3 class="mb-2">Contact Form</h3>
                        <p>
                            Fill out this form for booking a consultant advising session.
                        </p>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grou mb-5">
                                    <input type="text" class="form-control w-100" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <input type="text" class="form-control w-100" name="firstname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <input type="email" class="form-control w-100" name="firstname" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-5">
                                    <input type="text" class="form-control w-100" name="firstname" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-5">
                                    <textarea class="form-control w-100" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn btn-secondary">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-contact-map ratio ratio-21x9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.769026111197!2d85.32570517629709!3d27.724416876172754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1851cf303769%3A0x1bcc914cc1d45313!2sNRNA%20-%20Non%20Resident%20Nepali%20Association!5e0!3m2!1sen!2snp!4v1709965726973!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>