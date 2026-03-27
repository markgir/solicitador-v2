<?php require_once __DIR__ . '/includes/functions.php'; $current_page = 'portfolio-details'; ?>
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
                        <li><a href="portfolios.php">Portfolios</a></li>
                        <li class="current-menu-item"><a href="portfolio-details.php">Portfolio Details</a></li>
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
                        <li><a href="portfolios.php">Portfolios</a></li>
                        <li class="current-menu-item"><a href="portfolio-details.php">Portfolio Details</a></li>
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
                <h1 class="page_title">Portfolio Details</h1>
                <div class="pxn_breadcrumb">
                  <span><a href="index.php">Home</a></span>
                  /
                  <span class="current">Portfolio Details</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end: Page Header -->
<?php endif; /* page-header */ ?>
      <main id="content" class="site-main pxn-conetnt">

        <?php if (section_visible($current_page, 'details')): ?>
<!-- start: Project Details -->
        <section class="pxn-project-details section-padding">
          <div class="container">
            <div class="row">
              <!-- content -->
              <div class="col-lg-8">
                <div class="pxn_project_content">
                  <img class="mb-30" src="./assets/images/projects/project-details-img-1.jpg" alt="Image">

                  <h2>Powering efficient operations with modern solutions.</h2>
                  <p>Our portfolio reflects a proven track record of helping businesses overcome complex challenges and
                    achieve measurable growth. From strategic planning and operational optimization to digital
                    transformation & market expansion, each project showcases our commitment to delivering practical,
                    results-driven solutions. We
                    partner closely with our clients to understand their goals.</p>
                  <p>Explore our portfolio to see how we transform complex business challenges into practical,
                    high-impact
                    solutions
                    that drive growth and efficiency. Our portfolio represents real business challenges turned ..</p>

                  <div class="row align-items-center row-gap-4 mt-30 mb-30">
                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                      <div class="pxn_video">
                        <img src="./assets/images/projects/project-details-img-2.jpg" alt="Image">

                        <a href="https://www.youtube.com/watch?v=SjJhuZQlkbA" class="pxn_video_play video_popup">
                          <i class="pxni-play"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                      <h3>Projects Overview</h3>
                      <p>Our consulting portfolio showcases successful partner-
                        ships with organizations across industries.</p>
                      <ul class="pxn_list">
                        <li><i class="pxni-checked"></i> Market research and competitive analysis</li>
                        <li><i class="pxni-checked"></i> Operational efficiency and process optimization</li>
                        <li><i class="pxni-checked"></i> Risk assessment and decision-making support</li>
                        <li><i class="pxni-checked"></i> Strategic business planning and roadmap</li>
                      </ul>
                    </div>
                  </div>

                  <h2>Final Results</h2>
                  <p>Our business consulting services help organizations strengthen performance, overcome challenges, &
                    unlock sustainable growth. We work closely with businesses to understand their goals, analyze
                    operations, and develop clear, actionable strategies. By combining industry expertise, data-driven
                    insights.</p>
                  <p>Our mission is to help businesses of all sizes navigate change and achieve sustainable growth
                    through
                    strategic insight and execution. We are committed to delivering exceptional value by providing
                    clear.
                  </p>


                  <!-- navigation -->
                  <div class="pxn_post_navigation">
                    <a href="portfolio-details.php" class="navigation prev">
                      <span class="navigation_icon"><i class="pxni-arrow-left-2"></i></span>
                      <span class="navigation_text">Previous</span>
                    </a>

                    <a href="portfolio-details.php" class="navigation next">
                      <span class="navigation_text">Next</span>
                      <span class="navigation_icon"><i class="pxni-arrow-right-2"></i></span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- sidebar -->
              <div class="col-lg-4">
                <aside class="pxn_sidebar">

                  <div class="pxn_sidebar_widget">
                    <h2 class="sidebar_title">Portfolio Info</h2>

                    <ul class="pxn_project_info_list">
                      <li>
                        <span class="label">Clients</span>
                        <span class="value">Ethan Roberts</span>
                      </li>

                      <li>
                        <span class="label">Portfolio</span>
                        <span class="value">Business</span>
                      </li>

                      <li>
                        <span class="label">Service</span>
                        <span class="value">Corporate</span>
                      </li>

                      <li>
                        <span class="label">Category</span>
                        <span class="value">Marketing</span>
                      </li>

                      <li>
                        <span class="label">Date</span>
                        <span class="value">02 Feb 2026</span>
                      </li>

                      <li>
                        <span class="label">Share</span>
                        <span class="value social_share">
                          <a href="https://facebook.com" target="_blank">Fb,</a>
                          <a href="https://x.com" target="_blank">Tw,</a>
                          <a href="https://linkedin.com" target="_blank">In,</a>
                          <a href="https://behance.com" target="_blank">Be</a>
                        </span>
                      </li>
                    </ul>
                  </div>

                  <div class="pxn_sidebar_widget pxn_sidebar_cta"
                    data-bg-image="./assets/images/projects/sidebar-cta-bg.jpg">
                    <h2 class="sidebar_title">Need help? <br>Feel free contact us</h2>
                    <div class="cta_desc">Our mission is to support organizations of
                      every scale with expert guidance.</div>

                    <a href="contact.php" class="cta_btn pxn-btn-primary">
                      <span class="btn_text"><span>Get In Touch</span></span>
                      <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                    </a>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Project Details -->
<?php endif; /* details */ ?>

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