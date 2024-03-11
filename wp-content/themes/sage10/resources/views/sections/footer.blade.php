<footer class="theme-footer pt-14 pb-10">
  <div class="container">
      <div class="row justify-content-between">
          <div class="col-md-5">
              <div class="site-logo">
                  <a href="#">
                      <img src="http://nrna.local/wp-content/uploads/2024/02/cropped-site-logo@2x-1.png" alt="">
                      <div class="hidden md:block ms-3">
                          <span class="d-block en">Non-Resident Nepali Association</span>
                          <span class="d-block ne">गैरआवासीय नेपाली संघ</span>
                      </div>
                  </a>
              </div>
              <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                  if($logo):
              ?>
              <div class="nrna__logo mb-3">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center text-white text-lg xl:text-xl">
                      <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="max-w-20">
                      <?php
                          function custom_dynamic_title_tagline_footer() {
                              $site_title = get_bloginfo( 'name' );
                              $tagline = get_bloginfo( 'description' );
                              echo '<div class="block ms-3">';
                              echo '<span class="text-lg leading-[24px] block en font-semibold mb-1">' . $site_title . '</span>';
                              echo '<span class="text-base leading-[24px] block ne">' . $tagline . '</span>';
                              echo '</div>';
                          }
                      ?>
                      <?php custom_dynamic_title_tagline_footer(); ?>
                  </a>
              </div>
              <?php endif; ?>
              <?php
                  $footer_content = get_theme_mod( 'footer_textarea_setting', '' );
                  if ( $footer_content ) {
                      echo '<div class="mb-6 text-[15px] md:text-base max-w-[400px]">' . wpautop( $footer_content ) . '</div>';
                  }
              ?>
              <?php
                  $show_newsletter_form = get_theme_mod( 'show_newsletter_form_setting', false );
                  if ( $show_newsletter_form ):
              ?>   
              <div>
                  <h3 class="font-semibold text-lg text-white mb-2 md:mb-3">
                      Subscribe to Newsletter
                  </h3>
                  <form action="#">
                      <div class="form-group relative w-[300px] md:w-[380px]">
                          <input type="text" class="form-control h-[50px] rounded-full bg-gray-800 ps-6 pe-20 text-[15px] focus:outline-none text-white w-full" placeholder="Your Email Address">
                          <button type="submit" class="bg-secondary">
                            <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow-right-square</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-466.000000, -985.000000)" fill="#3f80b4"> <path d="M489.535,1001.879 L483.879,1007.54 C483.488,1007.93 482.855,1007.93 482.465,1007.54 C482.074,1007.14 482.074,1006.51 482.465,1006.12 L486.586,1002 L476,1002 C475.447,1002 475,1001.552 475,1001 C475,1000.447 475.447,1000 476,1000 L486.586,1000 L482.465,995.879 C482.074,995.488 482.074,994.854 482.465,994.465 C482.855,994.074 483.488,994.074 483.879,994.465 L489.535,1000.121 C489.775,1000.361 489.85,1000.689 489.795,1001 C489.85,1001.311 489.775,1001.639 489.535,1001.879 L489.535,1001.879 Z M494,985 L470,985 C467.791,985 466,986.791 466,989 L466,1013 C466,1015.21 467.791,1017 470,1017 L494,1017 C496.209,1017 498,1015.21 498,1013 L498,989 C498,986.791 496.209,985 494,985 L494,985 Z" id="arrow-right-square" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                          </button>
                      </div>
                  </form>
              </div>
              <?php
                  endif;
              ?>
              <div class="subscribe-form mt-8">
                <h5 class="mb-2">Subscribe to our newsletter</h5>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control w-100" placeholder="Enter your email">
                        <button type="submit" class="btn-submit">
                            <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow-right-square</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-466.000000, -985.000000)" fill="#3f80b4"> <path d="M489.535,1001.879 L483.879,1007.54 C483.488,1007.93 482.855,1007.93 482.465,1007.54 C482.074,1007.14 482.074,1006.51 482.465,1006.12 L486.586,1002 L476,1002 C475.447,1002 475,1001.552 475,1001 C475,1000.447 475.447,1000 476,1000 L486.586,1000 L482.465,995.879 C482.074,995.488 482.074,994.854 482.465,994.465 C482.855,994.074 483.488,994.074 483.879,994.465 L489.535,1000.121 C489.775,1000.361 489.85,1000.689 489.795,1001 C489.85,1001.311 489.775,1001.639 489.535,1001.879 L489.535,1001.879 Z M494,985 L470,985 C467.791,985 466,986.791 466,989 L466,1013 C466,1015.21 467.791,1017 470,1017 L494,1017 C496.209,1017 498,1015.21 498,1013 L498,989 C498,986.791 496.209,985 494,985 L494,985 Z" id="arrow-right-square" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                        </button>
                    </div>
                </form>
              </div>
          </div>
          <div class="col-md-7">
              <div class="row justify-content-end">
                  <div class="col-md-5">
                      <h4>Contact Us</h4>
                      <ul class="contact-list flex flex-col gap-4">
                          <li class="position-relative ps-6">
                              <i class="fa-solid fa-phone position-absolute start-0 text-warning"></i>
                              <span class="fw-normal">Phone:</span> +977- 014511530 , 014526005
                          </li>
                          <li class="position-relative ps-6">
                              <i class="fa-solid fa-envelope position-absolute start-0 text-warning"></i>
                              <span class="fw-normal">Email:</span> info@nrna.org
                          </li>
                          <li class="position-relative ps-6">
                              <i class="fa-solid fa-location-dot position-absolute start-0 text-warning"></i>
                              <span class="fw-normal">Address:</span> Subarna Shamsher Marg, Baluwatar, Kathmandu
                          </li>
                      </ul>
                      <?php
                          $phone = get_theme_mod( 'footer_phone_setting', '' );   
                          $email = get_theme_mod( 'footer_email_setting', '' );
                          $address = get_theme_mod( 'footer_address_setting', '' );
                      ?>
                      <ul class="flex flex-col">
                          <?php
                              if ( $phone ) {
                                  echo '<li class="relative ps-6"><i class="fa-solid fa-phone position-absolute start-0"></i>Phone: ' . esc_html( $phone ) . '</li>';
                              }
                          ?>
                          <?php
                              if ( $email ) {
                                  echo '<li class="relative ps-6"><i class="fa-solid fa-envelope position-absolute start-0"></i>Email: <a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a></li>';
                              }
                          ?>
                          <?php
                              if ( $address ) {
                                  echo '<li class="relative ps-6"><<i class="fa-solid fa-location-dot position-absolute start-0"></i>Address:<br>' . wpautop( wp_kses_post( $address ) ) . '</li>';
                              }
                          ?>
                      </ul>
                  </div>
                  <div class="col-md-5">
                      <h4>Resources</h4>
                      <ul class="footer-menu">
                          <li>
                              <a href="#">Downloads</a>
                          </li>
                          <li>
                              <a href="#">Youtube Videos</a>
                          </li>   
                      </ul>   
                      <?php
                          if (has_nav_menu('footermenu')):
                      ?>
                      <?php
                          wp_nav_menu(array(
                              'theme_location' => 'footermenu',
                              'container' => 'nav',
                              'menu_class' => 'text-[15px] md:text-base flex flex-col md:gap-1.5'
                          ));
                      ?>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="copyright mt-5 pt-5">
          <div class="row">
              <div class="col-md-6">
                  <p>
                      @ <?php echo date('Y'); ?> Copyright Inficare. All Rights Reserved by <a href="https://nrna.org/">NRNA</a>
                  </p>
              </div>
              <div class="col-md-6">
                  <ul class="terms-menu">
                      <li>
                          <a href="#">
                              Terms & Conditions
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              Privacy Policy
                          </a>
                      </li>
                  </ul>
                  <?php
                      $facebook_url = get_theme_mod( 'footer_facebook_setting', '' );
                      $twitter_url = get_theme_mod( 'footer_twitter_setting', '' );
                      $youtube_url = get_theme_mod( 'footer_youtube_setting', '' );
                  ?>
                  <ul class="d-flex flex-wrap">
                      <?php
                          if ( $facebook_url ) {
                              echo '<a target="_blank" href="' . esc_url( $facebook_url ) . '"    ><i class="fa-brands fa-facebook-f"></i></a>';
                              echo '<span class="sr-only">Facebook page</span>';
                          }
                      ?>
                      <?php
                          if ( $twitter_url ) {
                              echo '<a target="_blank" href="' . esc_url( $twitter_url ) . '" class="transition-all duration-400 ease-in-out text-tertiary"><i class="fa-brands fa-x-twitter"></i></a>';
                              echo '<span class="sr-only">Twitter page</span>';
                          }
                      ?>
                      <?php
                          if ( $youtube_url ) {
                              echo '<a target="_blank" href="' . esc_url( $youtube_url ) . '" class="transition-all duration-400 ease-in-out text-tertiary"><i class="fa-brands fa-youtube"></i></a>';
                              echo '<span class="sr-only">Youtube page</span>';
                          }
                      ?>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</footer>

