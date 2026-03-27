<?php require_once __DIR__ . '/includes/functions.php'; $current_page = 'portfolios'; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <!-- Site Title -->
  <title>Rovix - Business Consulting HTML Template</title>

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/pxn-icons.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/nice-select.min.css">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
  <link rel="stylesheet" href="assets/css/glightbox.min.css">
  <link rel="stylesheet" href="assets/css/leaflet.min.css">

  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="absolute-header">

  <!-- Magic Cursor -->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>
  <!-- Magic Cursor -->

  <!-- Preloader Start -->
  <div class="preloader" id="pxn-preloader">
    <div class="loader_content">
      <div class="loading"></div>
      <div class="loader_image"><img src="assets/images/loader.svg" alt="Loader"></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- back to top start -->
  <div class="pxn_back-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- back to top end -->

  <!-- start: Search Popup -->
  <div class="pxn_search_popup_overlay"></div>
  <div class="pxn_search_popup">
    <div class="search_close">
      <button type="button" class="search_close_btn">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          </path>
          <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          </path>
        </svg>
      </button>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <form action="#" class="search_form">
            <h2 class="search_title">Search portfolios, services or blogs...</h2>
            <div class="search_box">
              <input class="search-input-field" type="search" placeholder="Search here..." required>
              <button type="submit">
                <i class="pxni-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end: Search Popup -->

  <!-- start: Offcanvas -->
  <div class="pxn_offcanvas_overlay"></div>
  <div class="pxn_offcanvas">
    <div class="offcanvas_bg"></div>
    <div class="offcanvas_wrapper">

      <!-- top -->
      <div class="offcanvas_top d-flex flex-wrap align-items-center justify-content-between gap-3">
        <div class="offcanvas_logo">
          <a href="index.php" class="logo"><img src="./assets/images/logos/secondary-logo.png" alt="LOGO"></a>
        </div>

        <button class="offcanvas_close">
          <span class="text">Close</span>
          <span class="icon"><i class="pxni-close"></i></span>
        </button>
      </div>

      <div class="offcanvas_desc  d-none d-lg-block">
        Developing personalize our customer journeys to increase satisfaction &amp; loyalty of our expansion recognized
        by industry leaders.
      </div>

      <div class="offcanvas_search d-none d-lg-block">
        <div class="search_title">Search Now!</div>

        <form method="get" action="index.php">
          <button type="submit"><i class="pxni-search"></i></button>
          <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
        </form>
      </div>

      <!-- mobile menu -->
      <div class="pxn_offcanvas_menu mobile_menu d-lg-none mean-container"></div>

      <div class="offcanvas_contact pxn_contact">
        <div class="contact_title">Location</div>

        <div class="contact_info">Seattle (major city in the state Washington).</div>
      </div>

      <div class="offcanvas_contact pxn_contact">
        <div class="contact_title">Contact</div>

        <a href="tel:+880123456789" class="contact_info">+880 (123) 456 789</a>
        <a href="mailto:support@rovix.com" class="contact_info">support@rovix.com</a>
      </div>

      <ul class="offcanvas_socials pxn_socials_3">
        <li>
          <a class="icon" href="https://facebook.com" target="_blank"><i class="pxni-facebook"></i></a>
        </li>
        <li>
          <a class="icon" href="https://linkedin.com" target="_blank"><i class="pxni-linkedin"></i></a>
        </li>
        <li>
          <a class="icon" href="https://instagram.com" target="_blank"><i class="pxni-instagram"></i></a>
        </li>
        <li>
          <a class="icon" href="https://twitter.com" target="_blank"><i class="pxni-x-twitter"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- end: Offcanvas -->

  <!-- start: Header Area -->
  <header class="pxn-header pxn-header-2 header-absolute">
    <div class="pxn_header_main">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="pxn_header_main_wrap d-flex flex-wrap align-items-center">
              <!-- logo -->
              <a class="pxn_site_logo" href="index.php">
                <img src="assets/images/logos/primary-logo.png" alt="Logo">
              </a>

              <div class="pxn_header_main_inner d-none d-lg-inline-flex flex-wrap align-items-center">
                <!-- navigation -->
                <nav class="pxn_main_navigation" id="mobile-menu">
                  <ul>
                    <li class="has-dropdown"><a href="#">Home</a>
                      <ul class="sub-menu">
                        <li><a href="index.php">Home One</a></li>
                        <li><a href="index-2.php">Home Two</a></li>
                        <li><a href="index-3.php">Home Three</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Services</a>
                      <ul class="sub-menu">
                        <li><a href="services.php">Services</a></li>
                        <li><a href="service-details.php">Services Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Pages</a>
                      <ul class="sub-menu">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="pricing.php">Pricing Page</a></li>
                        <li><a href="faq.php">FAQ Page</a></li>
                        <li><a href="error.php">Error 404</a></li>
                        <li><a href="coming-soon.php">Coming Soon</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="portfolios.php">Portfolios</a></li>
                        <li><a href="portfolio-details.php">Portfolio Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Blog</a>
                      <ul class="sub-menu">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="blog-details.php">Blog Details</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>

                <!-- search -->
                <button class="pxn_header_search d-none d-xl-inline-flex">
                  <span>Explore</span>
                  <i class="pxni-search"></i>
                </button>
              </div>


              <!-- right info -->
              <div class="pxn_header_right d-inline-flex flex-wrap align-items-center">
                <!-- contact -->
                <div class="pxn_header_contact d-none d-xxl-inline-flex">
                  <a href="+880123456789" class="contact_icon">
                    <i class="pxni-phone"></i>
                  </a>
                  <a href="+880123456789" class="contact_no">+880 (123) 456 789</a>
                </div>

                <!-- offcanvas toggle -->
                <button class="pxn_offcanvas_toggle">
                  <span class="text">Menu</span>
                  <span class="icon"><i class="pxni-menu"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <header class="pxn-header header-duplicate pxn-header-2 header-sticky">
    <div class="pxn_header_main">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="pxn_header_main_wrap d-flex flex-wrap align-items-center">
              <!-- logo -->
              <a class="pxn_site_logo" href="index.php">
                <img src="assets/images/logos/primary-logo.png" alt="Logo">
              </a>

              <div class="pxn_header_main_inner d-none d-lg-inline-flex flex-wrap align-items-center">
                <!-- navigation -->
                <nav class="pxn_main_navigation">
                  <ul>
                    <li class="has-dropdown"><a href="#">Home</a>
                      <ul class="sub-menu">
                        <li><a href="index.php">Home One</a></li>
                        <li><a href="index-2.php">Home Two</a></li>
                        <li><a href="index-3.php">Home Three</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Services</a>
                      <ul class="sub-menu">
                        <li><a href="services.php">Services</a></li>
                        <li><a href="service-details.php">Services Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Pages</a>
                      <ul class="sub-menu">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="pricing.php">Pricing Page</a></li>
                        <li><a href="faq.php">FAQ Page</a></li>
                        <li><a href="error.php">Error 404</a></li>
                        <li><a href="coming-soon.php">Coming Soon</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="portfolios.php">Portfolios</a></li>
                        <li><a href="portfolio-details.php">Portfolio Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Blog</a>
                      <ul class="sub-menu">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="blog-details.php">Blog Details</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>

                <!-- search -->
                <button class="pxn_header_search d-none d-xl-inline-flex">
                  <span>Explore</span>
                  <i class="pxni-search"></i>
                </button>
              </div>


              <!-- right info -->
              <div class="pxn_header_right d-inline-flex flex-wrap align-items-center">
                <!-- contact -->
                <div class="pxn_header_contact d-none d-xxl-inline-flex">
                  <a href="+880123456789" class="contact_icon">
                    <i class="pxni-phone"></i>
                  </a>
                  <a href="+880123456789" class="contact_no">+880 (123) 456 789</a>
                </div>

                <!-- offcanvas toggle -->
                <button class="pxn_offcanvas_toggle">
                  <span class="text">Menu</span>
                  <span class="icon"><i class="pxni-menu"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end: Header Area -->

  <div id="smooth-wrapper">
    <div id="smooth-content">

      <?php if (section_visible($current_page, 'page-header')): ?>
<!-- start: Page Header -->
      <div class="pxn-page-header" data-bg-image="./assets/images/page-header/page-header-bg.jpg">

        <img src="./assets/images/page-header/page-header-shape.png" alt="Shape" class="left_shape">

        <div class="container">
          <div class="row">
            <div class="col">
              <div class="pxn_page_header_content">
                <h1 class="page_title"><?= c('page_title', 'Our Portfolio') ?></h1>
                <div class="pxn_breadcrumb">
                  <span><a href="index.php">Home</a></span>
                  /
                  <span class="current">Our Portfolio</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end: Page Header -->
<?php endif; /* page-header */ ?>

      <main id="content" class="site-main pxn-conetnt">

        <?php if (section_visible($current_page, 'projects')): ?>
<!-- start: Projects Section -->
        <section class="pxn-projects-page section-padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn_page_projects_wrap">
                  <div class="pxn_page_projects">
                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-1.jpg" alt="Project"></a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title">
                            <a href="portfolio-details.php">Business Analytics & Reporting</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-2.jpg" alt="Project">
                        </a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title"><a href="portfolio-details.php">Sales and Marketing Strategy</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-3.jpg" alt="Project">
                        </a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title"><a href="portfolio-details.php">Business Process Optimization</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-4.jpg" alt="Project"></a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title">
                            <a href="portfolio-details.php">Business Analytics & Reporting</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-5.jpg" alt="Project">
                        </a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title"><a href="portfolio-details.php">Sales and Marketing Strategy</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="pxn-h3_project_item">
                      <div class="project_img">
                        <a href="portfolio-details.php">
                          <img src="./assets/images/projects/h3-project-img-6.jpg" alt="Project">
                        </a>

                        <div class="project_content">
                          <div class="project_cat">
                            <a class="category" href="portfolio-details.php">Strategy</a>,
                            <a class="category" href="portfolio-details.php">Growth</a>
                          </div>
                          <h3 class="project_title"><a href="portfolio-details.php">Business Process Optimization</a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pxn_pagination">
                    <span class="page-numbers current">01</span>
                    <a href="#" class="page-numbers">02</a>
                    <a href="#" class="page-numbers">03</a>
                    <a href="#" class="next page-numbers"><i class="pxni-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Projects Section -->
<?php endif; /* projects */ ?>

      </main>

      <?php if (section_visible('global', 'footer')): ?>
<!-- start: Footer -->
      <footer class="pxn-footer pxn-footer-1 overflow-hidden" data-bg-image="./assets/images/footer/h1-footer-bg.png">
        <div class="footer_top">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="pxn_footer_marquee">
                  <div class="pxn_marquee_scroll">
                    <div class="pxn_marquee_scroll_wrapper">
                      <div class="footer_marquee_text">
                        <a href="tel:+880123456789">call for project +880 (123) 456 789</a>
                      </div>
                    </div>
                    <div class="pxn_marquee_scroll_wrapper">
                      <div class="footer_marquee_text">
                        <a href="tel:+880123456789">call for project +880 (123) 456 789</a>
                      </div>
                    </div>
                    <div class="pxn_marquee_scroll_wrapper">
                      <div class="footer_marquee_text">
                        <a href="tel:+880123456789">call for project +880 (123) 456 789</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer_widgets">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="footer_widgets_wrap">
                  <div class="pxn_footer_widget footer_info_widget">
                    <div class="footer_logo">
                      <a href="index.php" class="logo"><img src="./assets/images/logos/primary-logo.png"
                          alt="LOGO"></a>
                    </div>
                    <div class="footer_desc">Refresh your skills, our team of experienced
                      instructors will guide you every step the
                      way. Our comprehensive...</div>

                    <div class="pxn_footer_subscription">
                      <input type="email" name="s_email" id="s_email" placeholder="Enter your email">
                      <button type="submit"><i class="pxni-send"></i></button>
                    </div>
                  </div>

                  <div class="footer_widgets_inner">
                    <div class="pxn_footer_widget widget-nav-menu">
                      <h2 class="footer_title">Our Services</h2>

                      <ul>
                        <li><a href="service-details.php">Business Process</a></li>
                        <li><a href="service-details.php">Financial Management</a></li>
                        <li><a href="service-details.php">Market Research</a></li>
                        <li><a href="service-details.php">Change Management</a></li>
                        <li><a href="service-details.php">Market Research</a></li>
                      </ul>
                    </div>

                    <div class="pxn_footer_widget widget-nav-menu">
                      <h2 class="footer_title">Resources</h2>

                      <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="portfolios.php">Our Portfolio</a></li>
                        <li><a href="blog.php">Blog Post</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="pricing.php">Pricing Page</a></li>
                      </ul>
                    </div>

                    <div class="pxn_footer_widget footer_contact_info">
                      <h2 class="footer_title">Our Offices</h2>

                      <ul>
                        <li>
                          <span class="label">Headquarters- USA</span>
                          <div class="text">Seattle (major city in the state Washington).</div>
                        </li>
                        <li>
                          <span class="label">Operations - China</span>
                          <div class="text">Shanghai (major global financial hub & China's largest cities)</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer_bottom">
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  class="footer_bottom_wrap d-flex column-gap-4 row-gap-3 flex-wrap align-items-center justify-content-center justify-content-md-between">
                  <div class="pxn_copyright_text">&copy; <span>2026</span> Rovix. All Rights Reserved.</div>

                  <ul class="pxn_socials_2">
                    <li><a class="social" href="https://facebook.com/" target="_blank"><i class="pxni-facebook"></i></a>
                    </li>
                    <li><a class="social" href="https://x.com/" target="_blank"><i class="pxni-x-twitter"></i></a></li>
                    <li><a class="social" href="https://linkedin.com/" target="_blank"><i class="pxni-linkedin"></i></a>
                    </li>
                    <li><a class="social" href="https://instagram.com/" target="_blank"><i
                          class="pxni-instagram"></i></a>
                    </li>
                  </ul>

                  <ul class="pxn_footer_bottom_menu">
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Privacy & Policy</a></li>
                    <li><a href="#">FAQS</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end: Footer -->
<?php endif; /* footer */ ?>

    </div> <!-- end: smooth-content -->
  </div> <!-- end: smooth-wrapper -->

  <!-- JS here -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/gsap-scroll-trigger.min.js"></script>
  <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
  <script src="assets/js/gsap-scroll-smoother.js"></script>
  <script src="assets/js/gsap-split-text.min.js"></script>

  <script src="assets/js/meanmenu.min.js"></script>
  <script src="assets/js/nice-select.min.js"></script>
  <script src="assets/js/backtotop.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/charts.min.js"></script>
  <script src="assets/js/leaflet.min.js"></script>

  <!-- custom script -->
  <script src="assets/js/main.js"></script>
</body>

</html>