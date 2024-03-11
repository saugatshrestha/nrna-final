<header id="header" class="theme-header py-6">
  <div class="container">
      <div class="row justify-content-between align-items-center">
          <div class="col-md-6">
              <div class="site-logo">
                  <a href="<?php echo home_url('/'); ?>">
                      <img src="http://nrna.local/wp-content/uploads/2024/02/cropped-site-logo@2x-1.png" alt="">
                      <div class="hidden md:block ms-3">
                          <span class="d-block en">Non-Resident Nepali Association</span>
                          <span class="d-block ne">गैरआवासीय नेपाली संघ</span>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="site-search">
                <form action="<?php echo home_url(); ?>" id="search-form" method="get" class="position-relative overflow-hidden d-flex align-items-center">
                    <input type="text" name="s" id="s" class="form-control w-100" placeholder="Type your search"/>
                    <input type="hidden" value="submit" />
                    <button type="submit" class="btn-submit bg-secondary">
                        Search
                    </button>
                </form>
              </div>
          </div>
      </div>
  </div>
</header>

<nav class="theme-navigation bg-primary">
  <div class="container">
      <div class="row">
          <div class="col-md-11">
              <div class="primary-navigation">
                <?php
                    $args = array(
                        'theme_location' => 'primary_navigation',
                        'menu_id' => 'primary_navigation',
                        'container' => '',
                        'container_class' => '',
                    );
                    wp_nav_menu($args);
                ?>
              </div>
          </div>
          <div class="col-md-1">
              <a href="#" class="toggle-menu">
                  <span></span>
                  <span></span>
                  <span></span>
              </a>
          </div>
      </div>
  </div>
</nav>


{{-- Backdrop --}}
<div class="off-backdrop"></div>


{{-- Sidebar Panel --}}
<div class="sidebar-panel py-16 px-8">
    <a href="#" class="sidebar-panel__close">
        <i class="fa-solid fa-xmark"></i>
    </a>
    <div class="sidebar-panel__menus mb-10">
        <h4>Important Links</h4>
        <ul>
            <li>
                <a href="#" target="_blank">
                    Ministry of Foreign Affairs
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Department of Foreign Employment
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    FNCCI
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Nepali Books for Kids
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    NRNA General Knowledge
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Foreign Employment Handbook
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    NRNA Vision 2020
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    NRNA Dastabej 2023
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    NRNA Card
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-panel__menus">
        <h4>Our NCC's Sites</h4>
        <ul>
            <li>
                <a href="#" target="_blank">
                    Africa
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Americas
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Asia Pacific
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Europe
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Middle East
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    Ocenia
                </a>
            </li>
        </ul>
    </div>
    <div class="social-media mt-auto pt-8">
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