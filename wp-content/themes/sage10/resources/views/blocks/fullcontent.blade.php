{{--
    script[]script
    style[modules/fullcontent.scss]style
    Title: Fullcontent
    Description: Fullcontent Description]
    Category: outside
    Icon: admin-tools
    Keywords: fullcontent
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
<!-- fullcontent html goes here -->

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

<section class="section-full-content py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2>ABOUT THE NON-RESIDENT NEPALI ASSOCIATION (NRNA)</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aut ipsam laborum, praesentium aspernatur quidem neque corrupti ipsa reprehenderit suscipit eius voluptatum, tenetur deleniti sed perspiciatis voluptate eligendi possimus autem. Non perspiciatis sapiente eveniet omnis ut sit libero est possimus repudiandae commodi quibusdam temporibus obcaecati ipsam, quasi repellat quia alias minima impedit provident numquam voluptas corrupti, similique facere reprehenderit. Earum, laudantium! Voluptate voluptatibus maxime iure ipsa. Facilis quasi natus quam iure, culpa vero illum mollitia itaque repellat in, sapiente consequuntur non eveniet soluta laudantium qui facere modi odio dolorum distinctio eligendi hic. Omnis illum, aspernatur molestias minus amet porro. Veritatis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aut ipsam laborum, praesentium aspernatur quidem neque corrupti ipsa reprehenderit suscipit eius voluptatum, tenetur deleniti sed perspiciatis voluptate eligendi possimus autem. Non perspiciatis sapiente eveniet omnis ut sit libero est possimus repudiandae commodi quibusdam temporibus obcaecati ipsam, quasi repellat quia alias minima impedit provident numquam voluptas corrupti, similique facere reprehenderit. Earum, laudantium! Voluptate voluptatibus maxime iure ipsa. Facilis quasi natus quam iure, culpa vero illum mollitia itaque repellat in, sapiente consequuntur non eveniet soluta laudantium qui facere modi odio dolorum distinctio eligendi hic. Omnis illum, aspernatur molestias minus amet porro. Veritatis.
                </p>
                <figure>
                    <img src="https://assets-global.website-files.com/6564129f2f4bdd2459f4260c/6582c94ca45c52849acd95da_about-page-main.jpg" alt="">
                </figure>
                <blockquote>
                    "Motto: “For Nepali by Nepali”
                </blockquote>
                <h3>
                    Strategic Goals:
                </h3>
                <p>
                    The Strategic Goals of NRNA is to unite and bring Nepali residing all over the world under one umbrella; protect and promote their interest in and outside Nepal and utilize their potentials and resources for the welfare of Nepal. To achieve these objectives the association shall conduct the following activities:
                </p>
                <ul>
                    <li>
                        Promote and protect the rights and interest of Nepalis residing outside Nepal
                    </li>
                    <li>
                        Establish a global network and a common platform for Nepalis Diaspora
                    </li>
                    <li>
                        Attract and facilitate NRNs investment including foreign direct investment (FDI) for economic and social development of Nepal
                    </li>
                    <li>
                        Promote tourism and preserve Nepali culture and heritage globally
                    </li>
                    <li>
                        Mobilize the knowledge, skills, capital and other resources within the disposal of NRNs for the socio economic development of Nepal.
                    </li>
                </ul>
                <h3>
                    Strategic Objectives:
                </h3>
                <ul>
                    <li>
                        Institutionalization and financial sustainability of NRNA
                    </li>
                    <li>
                        Continuation of Nepali Citizenship (CNC)
                    </li>
                    <li>
                        Promote and support fair and equitable rights of Nepali migrant workers
                    </li>
                    <li>
                        Promote and engage in sustainable social impact activities for the best interest of the greater communities in Nepal
                    </li>
                    <li>
                        Develop strong network of NCCs
                    </li>
                    <li>
                        Develop connectivity and network of youth diaspora
                    </li>
                    <li>
                        Identify and promote investments in Nepal that are of national interest and give social  benefits
                    </li>
                    <li>
                        Promote and mobilize investments in Nepal
                    </li>
                    <li>
                        Lobby with the Government for investment friendly policies
                    </li>
                    <li>
                        Promote Nepal internationally through NRNA networks
                    </li>
                    <li>
                        Advocate the government of Nepal to build good governance and sustainability in the area of tourism
                    </li>
                    <li>
                        Promote NRNs and foreign investment for sustainable tourism development
                    </li>
                    <li>
                        Indentify NRNA, skills, knowledge, innovation and capital
                    </li>
                    <li>
                        Develop connectivity and network of entrepreneurs within and outside Nepal.
                    </li>
                </ul>
                <blockquote>
                    Certificate of Registration of Non-Resident Nepali Association
                </blockquote>
            </div>
        </div>
    </div>
</section>
