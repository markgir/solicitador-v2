<?php require_once __DIR__ . '/includes/functions.php'; $current_page = 'services'; ?>
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
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Services</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="services.php">Services</a></li>
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
                    <li class="has-dropdown"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li><a href="portfolios.php">Portfolios</a></li>
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
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Services</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="services.php">Services</a></li>
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
                    <li class="has-dropdown"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li><a href="portfolios.php">Portfolios</a></li>
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
                <h1 class="page_title"><?= c('page_title', 'Our Services') ?></h1>
                <div class="pxn_breadcrumb">
                  <span><a href="index.php">Home</a></span>
                  /
                  <span class="current">Our Services</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end: Page Header -->
<?php endif; /* page-header */ ?>
      <main id="content" class="site-main pxn-conetnt">

        <?php if (section_visible($current_page, 'services')): ?>
<!-- start: Services Section -->
        <section class="pxn-h2-services-section section-padding">

          <img src="./assets/images/services/h2-services-left-shape.png" alt="Shape" class="left_shape">
          <img src="./assets/images/services/h2-services-right-shape.png" alt="Shape" class="right_shape">

          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h2_services_wrap">
                  <div class="section_heading text-center">
                    <span class="sec_sub"><?= c('services_subtitle', 'What We Offer') ?></span>
                    <h2 class="sec_title"><?= c('services_title', 'Innovates Services That Elevate Your Business') ?></h2>
                  </div>

                  <div class="pxn-h2_services">
                    <div class="pxn_service_item">
                      <div class="service_header">
                        <div class="service_icon">
                          <i class="pxni-growth"></i>
                        </div>

                        <div class="service_no">01.</div>
                      </div>
                      <div class="service_content">
                        <h3 class="service_title"><a href="service-details.php">Growth & Expansion <br>Consulting</a>
                        </h3>
                        <div class="service_excerpt">Support business scaling, market entry strategies, & expansion
                          planning...</div>

                        <a href="service-details.php" class="service_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>
                    </div>

                    <div class="pxn_service_item">
                      <div class="service_header">
                        <div class="service_icon">
                          <i class="pxni-transformation"></i>
                        </div>

                        <div class="service_no">02.</div>
                      </div>
                      <div class="service_content">
                        <h3 class="service_title"><a href="service-details.php">Digital Transformation
                            <br>Consulting</a>
                        </h3>
                        <div class="service_excerpt">Leverage modern technologies to moder-
                          nize workflows, improve customer...</div>

                        <a href="service-details.php" class="service_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>
                    </div>

                    <div class="pxn_service_item">
                      <div class="service_header">
                        <div class="service_icon">
                          <i class="pxni-compliance"></i>
                        </div>

                        <div class="service_no">03.</div>
                      </div>
                      <div class="service_content">
                        <h3 class="service_title"><a href="service-details.php">Risk Management & <br>Compliance</a>
                        </h3>
                        <div class="service_excerpt">Identify potential risks, ensure regulatory compliance, & protect
                          your
                          business...</div>

                        <a href="service-details.php" class="service_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>
                    </div>

                    <div class="pxn_service_item">
                      <div class="service_header">
                        <div class="service_icon">
                          <i class="pxni-expansion"></i>
                        </div>

                        <div class="service_no">04</div>
                      </div>
                      <div class="service_content">
                        <h3 class="service_title"><a href="service-details.php">Growth & Expansion Consulting</a></h3>
                        <div class="service_excerpt">Support business scaling, market entry strategies, & expansion
                          planning...</div>

                        <a href="service-details.php" class="service_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>
                    </div>

                    <div class="pxn_service_item feature"
                      data-bg-image="./assets/images/services/h2-service-bg-img.jpg">
                      <div class="service_header">
                        <div class="service_icon">
                          <i class="pxni-progress"></i>
                        </div>

                        <div class="service_no">05.</div>
                      </div>
                      <div class="service_content">
                        <h3 class="service_title"><a href="service-details.php">Growth & Expansion <br>Consulting</a>
                        </h3>
                        <div class="service_excerpt">Support business scaling, market entry strategies, & expansion
                          planning...</div>

                        <a href="service-details.php" class="service_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Services Section -->
<?php endif; /* services */ ?>

        <?php if (section_visible($current_page, 'faq')): ?>
<!-- start: FAQ Section -->
        <section class="pxn-h2-faq-section section-padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h2_faq_wrap">
                  <div class="faq_content">
                    <div class="section_heading">
                      <span class="sec_sub">Frequently question</span>
                      <h2 class="sec_title">Common Questions About Our Services</h2>
                    </div>

                    <div class="pxn_accordion" id="pxnAccordion">
                      <div class="pxn_accordion_item">
                        <button class="accordion_question" type="button" data-bs-toggle="collapse"
                          data-bs-target="#pxnAccordion1" aria-expanded="true" aria-controls="pxnAccordion1">
                          <span class="accordion_no">01</span>
                          What types of businesses do you work with?
                        </button>
                        <div id="pxnAccordion1" class="collapse show" data-bs-parent="#pxnAccordion">
                          <div class="accordion-body">
                            <div class="accordion_answer">
                              We assess your business, identify challenges, and deliver data-driven, actionable
                              solutions.
                              Project timelines vary, but most engagements range from a few weeks to...
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pxn_accordion_item">
                        <button class="accordion_question collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#pxnAccordion2" aria-expanded="false" aria-controls="pxnAccordion2">
                          <span class="accordion_no">02</span>
                          How does your consulting process work?
                        </button>
                        <div id="pxnAccordion2" class="collapse" data-bs-parent="#pxnAccordion">
                          <div class="accordion-body">
                            <div class="accordion_answer">
                              We assess your business, identify challenges, and deliver data-driven, actionable
                              solutions.
                              Project timelines vary, but most engagements range from a few weeks to...
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pxn_accordion_item">
                        <button class="accordion_question collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#pxnAccordion3" aria-expanded="false" aria-controls="pxnAccordion3">
                          <span class="accordion_no">03</span>
                          Do you offer customized consulting solutions?
                        </button>
                        <div id="pxnAccordion3" class="collapse" data-bs-parent="#pxnAccordion">
                          <div class="accordion-body">
                            <div class="accordion_answer">
                              We assess your business, identify challenges, and deliver data-driven, actionable
                              solutions.
                              Project timelines vary, but most engagements range from a few weeks to...
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pxn_accordion_item">
                        <button class="accordion_question collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#pxnAccordion4" aria-expanded="false" aria-controls="pxnAccordion4">
                          <span class="accordion_no">04</span>
                          How do you measure success?
                        </button>
                        <div id="pxnAccordion4" class="collapse" data-bs-parent="#pxnAccordion">
                          <div class="accordion-body">
                            <div class="accordion_answer">
                              We assess your business, identify challenges, and deliver data-driven, actionable
                              solutions.
                              Project timelines vary, but most engagements range from a few weeks to...
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pxn_faq_cta">
                    <div class="cta_img">
                      <img src="./assets/images/faq/h2-faq-cta-img.jpg" alt="FAQ">
                    </div>
                    <div class="cta_content">
                      <h3 class="cta_title">Do You Have any Question?</h3>
                      <a href="tel:+880123456789" class="cta_action">+880 (123) 456 789</a>

                      <a href="contact.php" class="cta_btn pxn-btn-primary">
                        <span class="btn_text"><span>Contact Us</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="pxn-h1_client_wrapper">
                  <div class="pxn_divider"><span>Trusted by 500+ Brands & Companies</span></div>

                  <div class="pxn-h1_client_carousel swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-1.png" alt="Client">
                        </a>
                      </div>
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-2.png" alt="Client">
                        </a>
                      </div>
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-3.png" alt="Client">
                        </a>
                      </div>
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-4.png" alt="Client">
                        </a>
                      </div>
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-5.png" alt="Client">
                        </a>
                      </div>
                      <div class="swiper-slide pxn_client_logo style-2">
                        <a href="#" class="pxn_client_logo_inner">
                          <img src="./assets/images/clients/client-logo-6.png" alt="Client">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: FAQ Section -->
<?php endif; /* faq */ ?>

        <?php if (section_visible($current_page, 'why-choose')): ?>
<!-- start: Why Choose Us -->
        <section class="pxn-h1-why-choose-section" data-bg-image="./assets/images/why-choose/h1-why-choose-bg-img.png">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h1_why_choose_wrapper">
                  <div class="section_heading">
                    <div class="heading_text">
                      <span class="sec_sub">Why Choose Us</span>
                      <h2 class="sec_title">Why Businesses Trust Our Consultants</h2>
                    </div>

                    <div class="sec_desc">Clients choose us for our strategic clarity, disciplined execution, &
                      commitment
                      to results. We act as long-term partners, helping organizations unlock new opportunities,
                      strengthen
                      performance, & stay ahead in a competitive market.</div>
                  </div>

                  <div class="why_choose_features">

                    <div class="feature_bg_img">
                      <img src="./assets/images/why-choose/h1-why-choose-img.png" alt="ChooseImage">
                    </div>

                    <div class="pxn-h1_feature_box">
                      <div class="feature_box_head">
                        <h3 class="feature_title">Custom business solutions</h3>
                        <div class="feature_icon"><i class="pxni-solutions"></i></div>
                      </div>

                      <div class="feature_desc">We deliver solutions for tailored to the unique needs of your business.
                      </div>
                    </div>

                    <div class="pxn-h1_feature_box right">
                      <div class="feature_box_head">
                        <h3 class="feature_title">Experienced consultants</h3>
                        <div class="feature_icon"><i class="pxni-consultants"></i></div>
                      </div>

                      <div class="feature_desc">Our consultings team brings years of hands-on industry experience.</div>
                    </div>

                    <div class="pxn-h1_feature_box">
                      <div class="feature_box_head">
                        <h3 class="feature_title">Strategy-led approach</h3>
                        <div class="feature_icon"><i class="pxni-approach"></i></div>
                      </div>

                      <div class="feature_desc">Our consulting services are driven by a clear, strategy-first mindset.
                      </div>
                    </div>

                    <div class="pxn-h1_feature_box right">
                      <div class="feature_box_head">
                        <h3 class="feature_title">Results-focused execution</h3>
                        <div class="feature_icon"><i class="pxni-execution"></i></div>
                      </div>

                      <div class="feature_desc">We turn strategy into action with a strong focus on measurable outcomes.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Why Choose Us -->
<?php endif; /* why-choose */ ?>

        <?php if (section_visible($current_page, 'pricing')): ?>
<!-- start: Pricing Section -->
        <section class="pxn-h1-pricing-section section-padding services-page">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h1_pricing_wrapper">
                  <div class="section_heading">
                    <div class="heading_text">
                      <span class="sec_sub">Pricing Plans</span>
                      <h2 class="sec_title">Choose the Right Plan for Your Business</h2>
                    </div>

                    <label class="pxn_toggle_switcher">
                      <input class="pxn-toggle-checkbox" type="checkbox">
                      <span class="toggle_switch"></span>
                      <span class="toggle-m">Monthly</span>
                      <span class="toggle-y">Yearly</span>
                    </label>
                  </div>

                  <div class="pricing_wrapper">
                    <div class="pxn_pricing_box">
                      <div class="pricing_header">
                        <div class="package_name">Starter Plan</div>

                        <div class="package_price">
                          <span class="currency">$</span>
                          <span class="price" data-year-price="99.9" data-month-price="49.9">49.9</span>
                          <span class="period" data-year-period="/ Year" data-month-period="/ Month">/ Month</span>
                        </div>
                      </div>

                      <div class="pricing_content">
                        <ul class="package_features">
                          <li><i class="pxni-checked-circle"></i> Initial business analysis</li>
                          <li><i class="pxni-checked-circle"></i> Basic strategy recommendations</li>
                          <li><i class="pxni-checked-circle"></i> Email-Based Support</li>
                          <li><i class="pxni-checked-circle"></i> 4 social media platforms+ADS</li>
                          <li><i class="pxni-checked-circle"></i> Limited consultation hours</li>
                        </ul>

                        <a href="contact.php" class="package_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>

                      <img src="./assets/images/shapes/pricing-bottom.png" alt="shape" class="pricing_shape">
                    </div>

                    <div class="pxn_pricing_box recommended">
                      <div class="pricing_header">
                        <div class="package_name">Growth Plan</div>

                        <div class="package_price">
                          <span class="currency">$</span>
                          <span class="price" data-year-price="119.9" data-month-price="59.9">59.9</span>
                          <span class="period" data-year-period="/ Year" data-month-period="/ Month">/ Month</span>
                        </div>
                      </div>

                      <div class="pricing_content">
                        <ul class="package_features">
                          <li><i class="pxni-checked-circle"></i> In-depth market research</li>
                          <li><i class="pxni-checked-circle"></i> Custom business strategies</li>
                          <li><i class="pxni-checked-circle"></i> Project Implementation Support</li>
                          <li><i class="pxni-checked-circle"></i> Regular progress tracking</li>
                          <li><i class="pxni-checked-circle"></i> Priority support</li>
                        </ul>

                        <a href="contact.php" class="package_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>

                      <img src="./assets/images/shapes/pricing-bottom.png" alt="shape" class="pricing_shape">
                    </div>

                    <div class="pxn_pricing_box">
                      <div class="pricing_header">
                        <div class="package_name">Premium Plan</div>

                        <div class="package_price">
                          <span class="currency">$</span>
                          <span class="price" data-year-price="139.9" data-month-price="69.9">69.9</span>
                          <span class="period" data-year-period="/ Year" data-month-period="/ Month">/ Month</span>
                        </div>
                      </div>

                      <div class="pricing_content">
                        <ul class="package_features">
                          <li><i class="pxni-checked-circle"></i> Executive-level strategy</li>
                          <li><i class="pxni-checked-circle"></i> Full-scale business consulting</li>
                          <li><i class="pxni-checked-circle"></i> Ongoing performance tracking</li>
                          <li><i class="pxni-checked-circle"></i> Dedicated account manager</li>
                          <li><i class="pxni-checked-circle"></i> Advanced analytics & reporting</li>
                        </ul>

                        <a href="contact.php" class="package_btn pxn-btn-primary">
                          <span class="btn_text"><span>Get Started</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>
                      </div>

                      <img src="./assets/images/shapes/pricing-bottom.png" alt="shape" class="pricing_shape">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Pricing Section -->
<?php endif; /* pricing */ ?>

        <?php if (section_visible($current_page, 'process')): ?>
<!-- start: Process Section -->
        <section class="pxn-h3-process-section section-padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h3_process_wrap">
                  <div class="section_heading text-center">
                    <span class="sec_sub">Our Work Process</span>
                    <h2 class="sec_title">How We Deliver Business Consulting Solutions</h2>
                  </div>

                  <div class="pxn-h3_process">
                    <div class="pxn_process_item_2">
                      <h3 class="process_title">Discovery & Understanding</h3>
                      <div class="process_desc">We start by learning about your business, goals, challenges, and market
                        to
                        gain</div>

                      <a href="#" class="process_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>

                      <div class="process_step">
                        <div class="process_no"><span>01</span></div>
                      </div>
                    </div>

                    <div class="pxn_process_item_2">
                      <h3 class="process_title">Research & Analysis</h3>
                      <div class="process_desc">We start by learning about your business, goals, challenges, and market
                        to
                        gain</div>

                      <a href="#" class="process_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>

                      <div class="process_step">
                        <div class="process_no"><span>02</span></div>
                      </div>
                    </div>

                    <div class="pxn_process_item_2">
                      <h3 class="process_title">Strategy Development</h3>
                      <div class="process_desc">We start by learning about your business, goals, challenges, and market
                        to
                        gain</div>

                      <a href="#" class="process_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>

                      <div class="process_step">
                        <div class="process_no"><span>03</span></div>
                      </div>
                    </div>

                    <div class="process_wrap_line">
                      <svg class="horizontal" xmlns="http://www.w3.org/2000/svg" width="1326" height="6"
                        viewBox="0 0 1326 6" fill="none">
                        <path
                          d="M-4.07696e-05 2.66663C-4.07696e-05 4.13939 1.19387 5.33329 2.66663 5.33329C4.13939 5.33329 5.33329 4.13939 5.33329 2.66663C5.33329 1.19387 4.13939 -4.07696e-05 2.66663 -4.07696e-05C1.19387 -4.07696e-05 -4.07696e-05 1.19387 -4.07696e-05 2.66663ZM1320 2.66663C1320 4.13939 1321.19 5.33329 1322.67 5.33329C1324.14 5.33329 1325.33 4.13939 1325.33 2.66663C1325.33 1.19387 1324.14 -4.07696e-05 1322.67 -4.07696e-05C1321.19 -4.07696e-05 1320 1.19387 1320 2.66663ZM2.66663 2.66663V3.16663H10.1666V2.66663V2.16663H2.66663V2.66663ZM25.1666 2.66663V3.16663H40.1666V2.66663V2.16663H25.1666V2.66663ZM55.1666 2.66663V3.16663H70.1666V2.66663V2.16663H55.1666V2.66663ZM85.1666 2.66663V3.16663H100.167V2.66663V2.16663H85.1666V2.66663ZM115.167 2.66663V3.16663H130.167V2.66663V2.16663H115.167V2.66663ZM145.167 2.66663V3.16663H160.167V2.66663V2.16663H145.167V2.66663ZM175.167 2.66663V3.16663H190.167V2.66663V2.16663H175.167V2.66663ZM205.167 2.66663V3.16663H220.167V2.66663V2.16663H205.167V2.66663ZM235.167 2.66663V3.16663H250.167V2.66663V2.16663H235.167V2.66663ZM265.167 2.66663V3.16663H280.167V2.66663V2.16663H265.167V2.66663ZM295.167 2.66663V3.16663H310.167V2.66663V2.16663H295.167V2.66663ZM325.167 2.66663V3.16663H340.167V2.66663V2.16663H325.167V2.66663ZM355.167 2.66663V3.16663H370.167V2.66663V2.16663H355.167V2.66663ZM385.167 2.66663V3.16663H400.167V2.66663V2.16663H385.167V2.66663ZM415.167 2.66663V3.16663H430.167V2.66663V2.16663H415.167V2.66663ZM445.167 2.66663V3.16663H460.167V2.66663V2.16663H445.167V2.66663ZM475.167 2.66663V3.16663H490.167V2.66663V2.16663H475.167V2.66663ZM505.167 2.66663V3.16663H520.167V2.66663V2.16663H505.167V2.66663ZM535.167 2.66663V3.16663H550.167V2.66663V2.16663H535.167V2.66663ZM565.167 2.66663V3.16663H580.167V2.66663V2.16663H565.167V2.66663ZM595.167 2.66663V3.16663H610.167V2.66663V2.16663H595.167V2.66663ZM625.167 2.66663V3.16663H640.167V2.66663V2.16663H625.167V2.66663ZM655.167 2.66663V3.16663H670.167V2.66663V2.16663H655.167V2.66663ZM685.167 2.66663V3.16663H700.167V2.66663V2.16663H685.167V2.66663ZM715.167 2.66663V3.16663H730.167V2.66663V2.16663H715.167V2.66663ZM745.167 2.66663V3.16663H760.167V2.66663V2.16663H745.167V2.66663ZM775.167 2.66663V3.16663H790.167V2.66663V2.16663H775.167V2.66663ZM805.167 2.66663V3.16663H820.167V2.66663V2.16663H805.167V2.66663ZM835.167 2.66663V3.16663H850.167V2.66663V2.16663H835.167V2.66663ZM865.167 2.66663V3.16663H880.167V2.66663V2.16663H865.167V2.66663ZM895.167 2.66663V3.16663H910.167V2.66663V2.16663H895.167V2.66663ZM925.167 2.66663V3.16663H940.167V2.66663V2.16663H925.167V2.66663ZM955.167 2.66663V3.16663H970.167V2.66663V2.16663H955.167V2.66663ZM985.167 2.66663V3.16663H1000.17V2.66663V2.16663H985.167V2.66663ZM1015.17 2.66663V3.16663H1030.17V2.66663V2.16663H1015.17V2.66663ZM1045.17 2.66663V3.16663H1060.17V2.66663V2.16663H1045.17V2.66663ZM1075.17 2.66663V3.16663H1090.17V2.66663V2.16663H1075.17V2.66663ZM1105.17 2.66663V3.16663H1120.17V2.66663V2.16663H1105.17V2.66663ZM1135.17 2.66663V3.16663H1150.17V2.66663V2.16663H1135.17V2.66663ZM1165.17 2.66663V3.16663H1180.17V2.66663V2.16663H1165.17V2.66663ZM1195.17 2.66663V3.16663H1210.17V2.66663V2.16663H1195.17V2.66663ZM1225.17 2.66663V3.16663H1240.17V2.66663V2.16663H1225.17V2.66663ZM1255.17 2.66663V3.16663H1270.17V2.66663V2.16663H1255.17V2.66663ZM1285.17 2.66663V3.16663H1300.17V2.66663V2.16663H1285.17V2.66663ZM1315.17 2.66663V3.16663H1322.67V2.66663V2.16663H1315.17V2.66663ZM-4.07696e-05 2.66663C-4.07696e-05 4.13939 1.19387 5.33329 2.66663 5.33329C4.13939 5.33329 5.33329 4.13939 5.33329 2.66663C5.33329 1.19387 4.13939 -4.07696e-05 2.66663 -4.07696e-05C1.19387 -4.07696e-05 -4.07696e-05 1.19387 -4.07696e-05 2.66663ZM1320 2.66663C1320 4.13939 1321.19 5.33329 1322.67 5.33329C1324.14 5.33329 1325.33 4.13939 1325.33 2.66663C1325.33 1.19387 1324.14 -4.07696e-05 1322.67 -4.07696e-05C1321.19 -4.07696e-05 1320 1.19387 1320 2.66663ZM2.66663 2.66663V3.16663H10.1666V2.66663V2.16663H2.66663V2.66663ZM25.1666 2.66663V3.16663H40.1666V2.66663V2.16663H25.1666V2.66663ZM55.1666 2.66663V3.16663H70.1666V2.66663V2.16663H55.1666V2.66663ZM85.1666 2.66663V3.16663H100.167V2.66663V2.16663H85.1666V2.66663ZM115.167 2.66663V3.16663H130.167V2.66663V2.16663H115.167V2.66663ZM145.167 2.66663V3.16663H160.167V2.66663V2.16663H145.167V2.66663ZM175.167 2.66663V3.16663H190.167V2.66663V2.16663H175.167V2.66663ZM205.167 2.66663V3.16663H220.167V2.66663V2.16663H205.167V2.66663ZM235.167 2.66663V3.16663H250.167V2.66663V2.16663H235.167V2.66663ZM265.167 2.66663V3.16663H280.167V2.66663V2.16663H265.167V2.66663ZM295.167 2.66663V3.16663H310.167V2.66663V2.16663H295.167V2.66663ZM325.167 2.66663V3.16663H340.167V2.66663V2.16663H325.167V2.66663ZM355.167 2.66663V3.16663H370.167V2.66663V2.16663H355.167V2.66663ZM385.167 2.66663V3.16663H400.167V2.66663V2.16663H385.167V2.66663ZM415.167 2.66663V3.16663H430.167V2.66663V2.16663H415.167V2.66663ZM445.167 2.66663V3.16663H460.167V2.66663V2.16663H445.167V2.66663ZM475.167 2.66663V3.16663H490.167V2.66663V2.16663H475.167V2.66663ZM505.167 2.66663V3.16663H520.167V2.66663V2.16663H505.167V2.66663ZM535.167 2.66663V3.16663H550.167V2.66663V2.16663H535.167V2.66663ZM565.167 2.66663V3.16663H580.167V2.66663V2.16663H565.167V2.66663ZM595.167 2.66663V3.16663H610.167V2.66663V2.16663H595.167V2.66663ZM625.167 2.66663V3.16663H640.167V2.66663V2.16663H625.167V2.66663ZM655.167 2.66663V3.16663H670.167V2.66663V2.16663H655.167V2.66663ZM685.167 2.66663V3.16663H700.167V2.66663V2.16663H685.167V2.66663ZM715.167 2.66663V3.16663H730.167V2.66663V2.16663H715.167V2.66663ZM745.167 2.66663V3.16663H760.167V2.66663V2.16663H745.167V2.66663ZM775.167 2.66663V3.16663H790.167V2.66663V2.16663H775.167V2.66663ZM805.167 2.66663V3.16663H820.167V2.66663V2.16663H805.167V2.66663ZM835.167 2.66663V3.16663H850.167V2.66663V2.16663H835.167V2.66663ZM865.167 2.66663V3.16663H880.167V2.66663V2.16663H865.167V2.66663ZM895.167 2.66663V3.16663H910.167V2.66663V2.16663H895.167V2.66663ZM925.167 2.66663V3.16663H940.167V2.66663V2.16663H925.167V2.66663ZM955.167 2.66663V3.16663H970.167V2.66663V2.16663H955.167V2.66663ZM985.167 2.66663V3.16663H1000.17V2.66663V2.16663H985.167V2.66663ZM1015.17 2.66663V3.16663H1030.17V2.66663V2.16663H1015.17V2.66663ZM1045.17 2.66663V3.16663H1060.17V2.66663V2.16663H1045.17V2.66663ZM1075.17 2.66663V3.16663H1090.17V2.66663V2.16663H1075.17V2.66663ZM1105.17 2.66663V3.16663H1120.17V2.66663V2.16663H1105.17V2.66663ZM1135.17 2.66663V3.16663H1150.17V2.66663V2.16663H1135.17V2.66663ZM1165.17 2.66663V3.16663H1180.17V2.66663V2.16663H1165.17V2.66663ZM1195.17 2.66663V3.16663H1210.17V2.66663V2.16663H1195.17V2.66663ZM1225.17 2.66663V3.16663H1240.17V2.66663V2.16663H1225.17V2.66663ZM1255.17 2.66663V3.16663H1270.17V2.66663V2.16663H1255.17V2.66663ZM1285.17 2.66663V3.16663H1300.17V2.66663V2.16663H1285.17V2.66663ZM1315.17 2.66663V3.16663H1322.67V2.66663V2.16663H1315.17V2.66663Z"
                          fill="currentColor" />
                      </svg>

                      <svg class="vertical" xmlns="http://www.w3.org/2000/svg" width="6" height="1326"
                        viewBox="0 0 6 1326" fill="none">
                        <path
                          d="M2.66675 -1.0252e-05C1.19399 -1.03164e-05 8.13651e-05 1.1939 8.13007e-05 2.66666C8.12364e-05 4.13942 1.19399 5.33332 2.66675 5.33332C4.13951 5.33332 5.33341 4.13942 5.33341 2.66666C5.33341 1.1939 4.13951 -1.01876e-05 2.66675 -1.0252e-05ZM2.66669 1320C1.19393 1320 2.36661e-05 1321.19 2.36017e-05 1322.67C2.35373e-05 1324.14 1.19393 1325.33 2.66669 1325.33C4.13945 1325.33 5.33336 1324.14 5.33336 1322.67C5.33336 1321.19 4.13945 1320 2.66669 1320ZM2.66675 2.66666L2.16675 2.66666L2.16675 10.1667L2.66675 10.1667L3.16675 10.1667L3.16675 2.66666L2.66675 2.66666ZM2.66675 25.1667L2.16675 25.1667L2.16675 40.1667L2.66675 40.1667L3.16675 40.1667L3.16675 25.1667L2.66675 25.1667ZM2.66675 55.1667L2.16675 55.1667L2.16675 70.1667L2.66675 70.1667L3.16675 70.1667L3.16675 55.1667L2.66675 55.1667ZM2.66674 85.1667L2.16674 85.1667L2.16674 100.167L2.66674 100.167L3.16674 100.167L3.16674 85.1667L2.66674 85.1667ZM2.66674 115.167L2.16674 115.167L2.16674 130.167L2.66674 130.167L3.16674 130.167L3.16674 115.167L2.66674 115.167ZM2.66674 145.167L2.16674 145.167L2.16674 160.167L2.66674 160.167L3.16674 160.167L3.16674 145.167L2.66674 145.167ZM2.66674 175.167L2.16674 175.167L2.16674 190.167L2.66674 190.167L3.16674 190.167L3.16674 175.167L2.66674 175.167ZM2.66674 205.167L2.16674 205.167L2.16674 220.167L2.66674 220.167L3.16674 220.167L3.16674 205.167L2.66674 205.167ZM2.66674 235.167L2.16674 235.167L2.16674 250.167L2.66674 250.167L3.16674 250.167L3.16674 235.167L2.66674 235.167ZM2.66674 265.167L2.16674 265.167L2.16674 280.167L2.66674 280.167L3.16674 280.167L3.16674 265.167L2.66674 265.167ZM2.66674 295.167L2.16674 295.167L2.16673 310.167L2.66673 310.167L3.16673 310.167L3.16674 295.167L2.66674 295.167ZM2.66673 325.167L2.16673 325.167L2.16673 340.167L2.66673 340.167L3.16673 340.167L3.16673 325.167L2.66673 325.167ZM2.66673 355.167L2.16673 355.167L2.16673 370.167L2.66673 370.167L3.16673 370.167L3.16673 355.167L2.66673 355.167ZM2.66673 385.167L2.16673 385.167L2.16673 400.167L2.66673 400.167L3.16673 400.167L3.16673 385.167L2.66673 385.167ZM2.66673 415.167L2.16673 415.167L2.16673 430.167L2.66673 430.167L3.16673 430.167L3.16673 415.167L2.66673 415.167ZM2.66673 445.167L2.16673 445.167L2.16673 460.167L2.66673 460.167L3.16673 460.167L3.16673 445.167L2.66673 445.167ZM2.66673 475.167L2.16673 475.167L2.16673 490.167L2.66673 490.167L3.16673 490.167L3.16673 475.167L2.66673 475.167ZM2.66673 505.167L2.16673 505.167L2.16673 520.167L2.66673 520.167L3.16673 520.167L3.16673 505.167L2.66673 505.167ZM2.66672 535.167L2.16672 535.167L2.16672 550.167L2.66672 550.167L3.16672 550.167L3.16672 535.167L2.66672 535.167ZM2.66672 565.167L2.16672 565.167L2.16672 580.167L2.66672 580.167L3.16672 580.167L3.16672 565.167L2.66672 565.167ZM2.66672 595.167L2.16672 595.167L2.16672 610.167L2.66672 610.167L3.16672 610.167L3.16672 595.167L2.66672 595.167ZM2.66672 625.167L2.16672 625.167L2.16672 640.167L2.66672 640.167L3.16672 640.167L3.16672 625.167L2.66672 625.167ZM2.66672 655.167L2.16672 655.167L2.16672 670.167L2.66672 670.167L3.16672 670.167L3.16672 655.167L2.66672 655.167ZM2.66672 685.167L2.16672 685.167L2.16672 700.167L2.66672 700.167L3.16672 700.167L3.16672 685.167L2.66672 685.167ZM2.66672 715.167L2.16672 715.167L2.16672 730.167L2.66672 730.167L3.16672 730.167L3.16672 715.167L2.66672 715.167ZM2.66672 745.167L2.16672 745.167L2.16671 760.167L2.66671 760.167L3.16671 760.167L3.16672 745.167L2.66672 745.167ZM2.66671 775.167L2.16671 775.167L2.16671 790.167L2.66671 790.167L3.16671 790.167L3.16671 775.167L2.66671 775.167ZM2.66671 805.167L2.16671 805.167L2.16671 820.167L2.66671 820.167L3.16671 820.167L3.16671 805.167L2.66671 805.167ZM2.66671 835.167L2.16671 835.167L2.16671 850.167L2.66671 850.167L3.16671 850.167L3.16671 835.167L2.66671 835.167ZM2.66671 865.167L2.16671 865.167L2.16671 880.167L2.66671 880.167L3.16671 880.167L3.16671 865.167L2.66671 865.167ZM2.66671 895.167L2.16671 895.167L2.16671 910.167L2.66671 910.167L3.16671 910.167L3.16671 895.167L2.66671 895.167ZM2.66671 925.167L2.16671 925.167L2.16671 940.167L2.66671 940.167L3.16671 940.167L3.16671 925.167L2.66671 925.167ZM2.66671 955.167L2.16671 955.167L2.16671 970.167L2.66671 970.167L3.16671 970.167L3.16671 955.167L2.66671 955.167ZM2.66671 985.167L2.16671 985.167L2.1667 1000.17L2.6667 1000.17L3.1667 1000.17L3.16671 985.167L2.66671 985.167ZM2.6667 1015.17L2.1667 1015.17L2.1667 1030.17L2.6667 1030.17L3.1667 1030.17L3.1667 1015.17L2.6667 1015.17ZM2.6667 1045.17L2.1667 1045.17L2.1667 1060.17L2.6667 1060.17L3.1667 1060.17L3.1667 1045.17L2.6667 1045.17ZM2.6667 1075.17L2.1667 1075.17L2.1667 1090.17L2.6667 1090.17L3.1667 1090.17L3.1667 1075.17L2.6667 1075.17ZM2.6667 1105.17L2.1667 1105.17L2.1667 1120.17L2.6667 1120.17L3.1667 1120.17L3.1667 1105.17L2.6667 1105.17ZM2.6667 1135.17L2.1667 1135.17L2.1667 1150.17L2.6667 1150.17L3.1667 1150.17L3.1667 1135.17L2.6667 1135.17ZM2.6667 1165.17L2.1667 1165.17L2.1667 1180.17L2.6667 1180.17L3.1667 1180.17L3.1667 1165.17L2.6667 1165.17ZM2.6667 1195.17L2.1667 1195.17L2.1667 1210.17L2.6667 1210.17L3.1667 1210.17L3.1667 1195.17L2.6667 1195.17ZM2.66669 1225.17L2.16669 1225.17L2.16669 1240.17L2.66669 1240.17L3.16669 1240.17L3.16669 1225.17L2.66669 1225.17ZM2.66669 1255.17L2.16669 1255.17L2.16669 1270.17L2.66669 1270.17L3.16669 1270.17L3.16669 1255.17L2.66669 1255.17ZM2.66669 1285.17L2.16669 1285.17L2.16669 1300.17L2.66669 1300.17L3.16669 1300.17L3.16669 1285.17L2.66669 1285.17ZM2.66669 1315.17L2.16669 1315.17L2.16669 1322.67L2.66669 1322.67L3.16669 1322.67L3.16669 1315.17L2.66669 1315.17ZM2.66675 -1.0252e-05C1.19399 -1.03164e-05 8.13651e-05 1.1939 8.13007e-05 2.66666C8.12364e-05 4.13942 1.19399 5.33332 2.66675 5.33332C4.13951 5.33332 5.33341 4.13942 5.33341 2.66666C5.33341 1.1939 4.13951 -1.01876e-05 2.66675 -1.0252e-05ZM2.66669 1320C1.19393 1320 2.36661e-05 1321.19 2.36017e-05 1322.67C2.35373e-05 1324.14 1.19393 1325.33 2.66669 1325.33C4.13945 1325.33 5.33336 1324.14 5.33336 1322.67C5.33336 1321.19 4.13945 1320 2.66669 1320ZM2.66675 2.66666L2.16675 2.66666L2.16675 10.1667L2.66675 10.1667L3.16675 10.1667L3.16675 2.66666L2.66675 2.66666ZM2.66675 25.1667L2.16675 25.1667L2.16675 40.1667L2.66675 40.1667L3.16675 40.1667L3.16675 25.1667L2.66675 25.1667ZM2.66675 55.1667L2.16675 55.1667L2.16675 70.1667L2.66675 70.1667L3.16675 70.1667L3.16675 55.1667L2.66675 55.1667ZM2.66674 85.1667L2.16674 85.1667L2.16674 100.167L2.66674 100.167L3.16674 100.167L3.16674 85.1667L2.66674 85.1667ZM2.66674 115.167L2.16674 115.167L2.16674 130.167L2.66674 130.167L3.16674 130.167L3.16674 115.167L2.66674 115.167ZM2.66674 145.167L2.16674 145.167L2.16674 160.167L2.66674 160.167L3.16674 160.167L3.16674 145.167L2.66674 145.167ZM2.66674 175.167L2.16674 175.167L2.16674 190.167L2.66674 190.167L3.16674 190.167L3.16674 175.167L2.66674 175.167ZM2.66674 205.167L2.16674 205.167L2.16674 220.167L2.66674 220.167L3.16674 220.167L3.16674 205.167L2.66674 205.167ZM2.66674 235.167L2.16674 235.167L2.16674 250.167L2.66674 250.167L3.16674 250.167L3.16674 235.167L2.66674 235.167ZM2.66674 265.167L2.16674 265.167L2.16674 280.167L2.66674 280.167L3.16674 280.167L3.16674 265.167L2.66674 265.167ZM2.66674 295.167L2.16674 295.167L2.16673 310.167L2.66673 310.167L3.16673 310.167L3.16674 295.167L2.66674 295.167ZM2.66673 325.167L2.16673 325.167L2.16673 340.167L2.66673 340.167L3.16673 340.167L3.16673 325.167L2.66673 325.167ZM2.66673 355.167L2.16673 355.167L2.16673 370.167L2.66673 370.167L3.16673 370.167L3.16673 355.167L2.66673 355.167ZM2.66673 385.167L2.16673 385.167L2.16673 400.167L2.66673 400.167L3.16673 400.167L3.16673 385.167L2.66673 385.167ZM2.66673 415.167L2.16673 415.167L2.16673 430.167L2.66673 430.167L3.16673 430.167L3.16673 415.167L2.66673 415.167ZM2.66673 445.167L2.16673 445.167L2.16673 460.167L2.66673 460.167L3.16673 460.167L3.16673 445.167L2.66673 445.167ZM2.66673 475.167L2.16673 475.167L2.16673 490.167L2.66673 490.167L3.16673 490.167L3.16673 475.167L2.66673 475.167ZM2.66673 505.167L2.16673 505.167L2.16673 520.167L2.66673 520.167L3.16673 520.167L3.16673 505.167L2.66673 505.167ZM2.66672 535.167L2.16672 535.167L2.16672 550.167L2.66672 550.167L3.16672 550.167L3.16672 535.167L2.66672 535.167ZM2.66672 565.167L2.16672 565.167L2.16672 580.167L2.66672 580.167L3.16672 580.167L3.16672 565.167L2.66672 565.167ZM2.66672 595.167L2.16672 595.167L2.16672 610.167L2.66672 610.167L3.16672 610.167L3.16672 595.167L2.66672 595.167ZM2.66672 625.167L2.16672 625.167L2.16672 640.167L2.66672 640.167L3.16672 640.167L3.16672 625.167L2.66672 625.167ZM2.66672 655.167L2.16672 655.167L2.16672 670.167L2.66672 670.167L3.16672 670.167L3.16672 655.167L2.66672 655.167ZM2.66672 685.167L2.16672 685.167L2.16672 700.167L2.66672 700.167L3.16672 700.167L3.16672 685.167L2.66672 685.167ZM2.66672 715.167L2.16672 715.167L2.16672 730.167L2.66672 730.167L3.16672 730.167L3.16672 715.167L2.66672 715.167ZM2.66672 745.167L2.16672 745.167L2.16671 760.167L2.66671 760.167L3.16671 760.167L3.16672 745.167L2.66672 745.167ZM2.66671 775.167L2.16671 775.167L2.16671 790.167L2.66671 790.167L3.16671 790.167L3.16671 775.167L2.66671 775.167ZM2.66671 805.167L2.16671 805.167L2.16671 820.167L2.66671 820.167L3.16671 820.167L3.16671 805.167L2.66671 805.167ZM2.66671 835.167L2.16671 835.167L2.16671 850.167L2.66671 850.167L3.16671 850.167L3.16671 835.167L2.66671 835.167ZM2.66671 865.167L2.16671 865.167L2.16671 880.167L2.66671 880.167L3.16671 880.167L3.16671 865.167L2.66671 865.167ZM2.66671 895.167L2.16671 895.167L2.16671 910.167L2.66671 910.167L3.16671 910.167L3.16671 895.167L2.66671 895.167ZM2.66671 925.167L2.16671 925.167L2.16671 940.167L2.66671 940.167L3.16671 940.167L3.16671 925.167L2.66671 925.167ZM2.66671 955.167L2.16671 955.167L2.16671 970.167L2.66671 970.167L3.16671 970.167L3.16671 955.167L2.66671 955.167ZM2.66671 985.167L2.16671 985.167L2.1667 1000.17L2.6667 1000.17L3.1667 1000.17L3.16671 985.167L2.66671 985.167ZM2.6667 1015.17L2.1667 1015.17L2.1667 1030.17L2.6667 1030.17L3.1667 1030.17L3.1667 1015.17L2.6667 1015.17ZM2.6667 1045.17L2.1667 1045.17L2.1667 1060.17L2.6667 1060.17L3.1667 1060.17L3.1667 1045.17L2.6667 1045.17ZM2.6667 1075.17L2.1667 1075.17L2.1667 1090.17L2.6667 1090.17L3.1667 1090.17L3.1667 1075.17L2.6667 1075.17ZM2.6667 1105.17L2.1667 1105.17L2.1667 1120.17L2.6667 1120.17L3.1667 1120.17L3.1667 1105.17L2.6667 1105.17ZM2.6667 1135.17L2.1667 1135.17L2.1667 1150.17L2.6667 1150.17L3.1667 1150.17L3.1667 1135.17L2.6667 1135.17ZM2.6667 1165.17L2.1667 1165.17L2.1667 1180.17L2.6667 1180.17L3.1667 1180.17L3.1667 1165.17L2.6667 1165.17ZM2.6667 1195.17L2.1667 1195.17L2.1667 1210.17L2.6667 1210.17L3.1667 1210.17L3.1667 1195.17L2.6667 1195.17ZM2.66669 1225.17L2.16669 1225.17L2.16669 1240.17L2.66669 1240.17L3.16669 1240.17L3.16669 1225.17L2.66669 1225.17ZM2.66669 1255.17L2.16669 1255.17L2.16669 1270.17L2.66669 1270.17L3.16669 1270.17L3.16669 1255.17L2.66669 1255.17ZM2.66669 1285.17L2.16669 1285.17L2.16669 1300.17L2.66669 1300.17L3.16669 1300.17L3.16669 1285.17L2.66669 1285.17ZM2.66669 1315.17L2.16669 1315.17L2.16669 1322.67L2.66669 1322.67L3.16669 1322.67L3.16669 1315.17L2.66669 1315.17Z"
                          fill="currentColor" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Process Section -->
<?php endif; /* process */ ?>

        <?php if (section_visible($current_page, 'cta')): ?>
<!-- start: CTA Section -->
        <section class="pxn-h3-cta-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="pxn-h3_cta_wrap">
                  <div class="cta_image">
                    <img src="./assets/images/cta/h3-cta-img.jpg" alt="CTA">
                  </div>

                  <div class="cta_content" data-bg-image="./assets/images/hero/h3-hero-content-bg.png">
                    <div class="section_heading">
                      <span class="sec_sub">Powering the Future</span>
                      <h2 class="sec_title">Building a Team of Insight-Driven Consultants</h2>
                      <div class="sec_desc">We are building a team of insight-driven consultants who combine
                        deep industry knowledge with strategic thinking.</div>
                      <div class="action_wrap">
                        <a href="contact.php" class="cta_btn pxn-btn-primary">
                          <span class="btn_text"><span>Join With Us</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>

                        <div class="pxn_contact_box">
                          <a href="+880123456789" class="contact_icon">
                            <i class="pxni-phone"></i>
                          </a>
                          <a href="+880123456789" class="contact_no">+880 (123) 456 789</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: CTA Section -->
<?php endif; /* cta */ ?>

        <?php if (section_visible($current_page, 'blog')): ?>
<!-- start: Blog Section -->
        <section class="pxn-h3-blog-section section-padding">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pxn-h3_blog_wrap">
                  <div class="section_heading text-center">
                    <span class="sec_sub">Latest Blog Post</span>
                    <h2 class="sec_title">Latest Insights from Our Consultants</h2>
                  </div>

                  <div class="pxn-h3_blog_posts">
                    <article class="pxn_blog_post_3">
                      <div class="blog_image">
                        <a href="blog-details.php">
                          <img src="./assets/images/blog/h2-blog-img-1.jpg" alt="Blog">
                        </a>

                        <div class="blog_date">
                          <div class="blog_date_inner">
                            <span class="day">06</span>
                            <span class="month_year">Oct 26</span>
                          </div>
                        </div>
                      </div>
                      <div class="blog_content">
                        <a href="blog-details.php" class="blog_category">Business</a>

                        <h3 class="blog_title"><a href="blog-details.php">How Strategic Planning
                            Drives Long-Term Business Growth</a></h3>

                        <a href="blog.php" class="blog_btn pxn-btn-text-inline">
                          <span class="btn_text"><span>Read More</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>


                        <div class="blog_meta">
                          <div class="meta">
                            <i class="pxni-author"></i>
                            <span class="meta_text"><a href="#">Jessica Brown</a></span>
                          </div>

                          <span class="meta_divider"></span>

                          <div class="meta">
                            <i class="pxni-comments"></i>
                            <span class="meta_text">2 Comments</span>
                          </div>
                        </div>
                      </div>
                    </article>

                    <article class="pxn_blog_post_3">
                      <div class="blog_image">
                        <a href="blog-details.php">
                          <img src="./assets/images/blog/h2-blog-img-3.jpg" alt="Blog">
                        </a>

                        <div class="blog_date">
                          <div class="blog_date_inner">
                            <span class="day">07</span>
                            <span class="month_year">Oct 26</span>
                          </div>
                        </div>
                      </div>
                      <div class="blog_content">
                        <a href="blog-details.php" class="blog_category">Management</a>

                        <h3 class="blog_title"><a href="blog-details.php">Why Modern Businesses Need Agile Consulting
                            Models</a></h3>

                        <a href="blog.php" class="blog_btn pxn-btn-text-inline">
                          <span class="btn_text"><span>Read More</span></span>
                          <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                        </a>


                        <div class="blog_meta">
                          <div class="meta">
                            <i class="pxni-author"></i>
                            <span class="meta_text"><a href="#">Jessica Brown</a></span>
                          </div>

                          <span class="meta_divider"></span>

                          <div class="meta">
                            <i class="pxni-comments"></i>
                            <span class="meta_text">2 Comments</span>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Blog Section -->
<?php endif; /* blog */ ?>

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