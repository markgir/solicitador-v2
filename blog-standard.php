<?php require_once __DIR__ . '/includes/functions.php'; $current_page = 'blog-standard'; ?>
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
                    <li class="has-dropdown"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li><a href="portfolios.php">Portfolios</a></li>
                        <li><a href="portfolio-details.php">Portfolio Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Blog</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="blog.php">Blog</a></li>
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
                    <li class="has-dropdown"><a href="#">Portfolios</a>
                      <ul class="sub-menu">
                        <li><a href="portfolios.php">Portfolios</a></li>
                        <li><a href="portfolio-details.php">Portfolio Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown current-menu-ancestor"><a href="#">Blog</a>
                      <ul class="sub-menu">
                        <li class="current-menu-item"><a href="blog.php">Blog</a></li>
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
                <h1 class="page_title">Our Blog</h1>
                <div class="pxn_breadcrumb">
                  <span><a href="index.php">Home</a></span>
                  /
                  <span class="current">Our Blog</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end: Page Header -->
<?php endif; /* page-header */ ?>

      <main id="content" class="site-main pxn-conetnt">

        <?php if (section_visible($current_page, 'posts')): ?>
<!-- start: Blog Standard Page -->
        <section class="pxn-posts-page section-padding">
          <div class="container">
            <div class="row">
              <!-- content -->
              <div class="col-lg-8">
                <div class="pxn_posts_wrap">
                  <article class="pxn_post_standard">
                    <div class="pxn_post_thumbnail">
                      <a href="blog-details.php"><img src="./assets/images/blog/blog-standard-img-1.jpg"
                          alt="Blog"></a>
                    </div>
                    <div class="pxn_post_content">
                      <div class="pxn_post_meta">
                        <div class="meta">
                          <i class="pxni-calendar"></i>
                          <span class="meta_text">15 Feb, 2026</span>
                        </div>

                        <div class="meta">
                          <i class="pxni-author"></i>
                          <span class="meta_text"><a href="#">Jessica Brown</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-file"></i>
                          <span class="meta_text"><a href="blog-details.php">Business</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-comments"></i>
                          <span class="meta_text">2 Comments</span>
                        </div>
                      </div>

                      <h2 class="post_title">
                        <a href="blog-details.php">
                          How Strategic Planning Drives Long-Term Business Growth
                        </a>
                      </h2>
                      <div class="post_excerpt">
                        Our business consulting blog is dedicated to sharing insights, strategies, & industry trends
                        that
                        help organizations navigate challenges & achieve growth. From practical advice on improving
                        operational efficiency to expert analysis of market developments, our articles are designed to
                        inform...
                      </div>
                      <a href="blog-details.php" class="post_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>
                    </div>
                  </article>

                  <article class="pxn_post_standard">
                    <div class="pxn_post_thumbnail">
                      <a href="blog-details.php"><img src="./assets/images/blog/blog-standard-img-2.jpg"
                          alt="Blog"></a>

                      <a href="https://www.youtube.com/watch?v=SjJhuZQlkbA" class="pxn_video_play video_popup">
                        <i class="pxni-play"></i>
                      </a>
                    </div>
                    <div class="pxn_post_content">
                      <div class="pxn_post_meta">
                        <div class="meta">
                          <i class="pxni-calendar"></i>
                          <span class="meta_text">15 Feb, 2026</span>
                        </div>

                        <div class="meta">
                          <i class="pxni-author"></i>
                          <span class="meta_text"><a href="#">Jessica Brown</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-file"></i>
                          <span class="meta_text"><a href="blog-details.php">Business</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-comments"></i>
                          <span class="meta_text">2 Comments</span>
                        </div>
                      </div>

                      <h2 class="post_title">
                        <a href="blog-details.php">
                          Data-Driven Decisions: Turning Insights Into Action
                        </a>
                      </h2>
                      <div class="post_excerpt">
                        Our business consulting blog is dedicated to sharing insights, strategies, & industry trends
                        that
                        help organizations navigate challenges & achieve growth. From practical advice on improving
                        operational efficiency to expert analysis of market developments, our articles are designed to
                        inform...
                      </div>
                      <a href="blog-details.php" class="post_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>
                    </div>
                  </article>

                  <article class="pxn_post_standard">
                    <div class="pxn_post_thumbnail pxn_post_thumb_slider swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="./assets/images/blog/blog-standard-img-3.jpg" alt="Blog">
                        </div>
                        <div class="swiper-slide">
                          <img src="./assets/images/blog/blog-standard-img-2.jpg" alt="Blog">
                        </div>
                        <div class="swiper-slide">
                          <img src="./assets/images/blog/blog-standard-img-1.jpg" alt="Blog">
                        </div>
                      </div>

                      <!-- slider navigation -->
                      <button class="pxn_slider-nav pxn_slider-prev">
                        <span>
                          <i class="pxni-double-arrow-left"></i>
                          <i class="pxni-double-arrow-left"></i>
                        </span>
                      </button>
                      <button class="pxn_slider-nav pxn_slider-next">
                        <span>
                          <i class="pxni-double-arrow-right"></i>
                          <i class="pxni-double-arrow-right"></i>
                        </span>
                      </button>
                    </div>
                    <div class="pxn_post_content">
                      <div class="pxn_post_meta">
                        <div class="meta">
                          <i class="pxni-calendar"></i>
                          <span class="meta_text">15 Feb, 2026</span>
                        </div>

                        <div class="meta">
                          <i class="pxni-author"></i>
                          <span class="meta_text"><a href="#">Jessica Brown</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-file"></i>
                          <span class="meta_text"><a href="blog-details.php">Business</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-comments"></i>
                          <span class="meta_text">2 Comments</span>
                        </div>
                      </div>

                      <h2 class="post_title">
                        <a href="blog-details.php">
                          Why Modern Businesses Need Agile Consulting Models
                        </a>
                      </h2>
                      <div class="post_excerpt">
                        Our business consulting blog is dedicated to sharing insights, strategies, & industry trends
                        that
                        help organizations navigate challenges & achieve growth. From practical advice on improving
                        operational efficiency to expert analysis of market developments, our articles are designed to
                        inform...
                      </div>
                      <a href="blog-details.php" class="post_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>
                    </div>
                  </article>

                  <article class="pxn_post_standard">
                    <div class="pxn_post_thumbnail">
                      <a href="blog-details.php"><img src="./assets/images/blog/blog-standard-img-4.jpg"
                          alt="Blog"></a>
                    </div>
                    <div class="pxn_post_content">
                      <div class="pxn_post_meta">
                        <div class="meta">
                          <i class="pxni-calendar"></i>
                          <span class="meta_text">15 Feb, 2026</span>
                        </div>

                        <div class="meta">
                          <i class="pxni-author"></i>
                          <span class="meta_text"><a href="#">Jessica Brown</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-file"></i>
                          <span class="meta_text"><a href="blog-details.php">Business</a></span>
                        </div>

                        <div class="meta">
                          <i class="pxni-comments"></i>
                          <span class="meta_text">2 Comments</span>
                        </div>
                      </div>

                      <h2 class="post_title">
                        <a href="blog-details.php">
                          The Role of Leadership in Organizational Success
                        </a>
                      </h2>
                      <div class="post_excerpt">
                        Our business consulting blog is dedicated to sharing insights, strategies, & industry trends
                        that
                        help organizations navigate challenges & achieve growth. From practical advice on improving
                        operational efficiency to expert analysis of market developments, our articles are designed to
                        inform...
                      </div>
                      <a href="blog-details.php" class="post_btn pxn-btn-text-inline">
                        <span class="btn_text"><span>Read More</span></span>
                        <span class="btn_icon"><i class="pxni-arrow-right"></i></span>
                      </a>
                    </div>
                  </article>

                  <div class="pxn_pagination">
                    <span class="page-numbers current">01</span>
                    <a href="#" class="page-numbers">02</a>
                    <a href="#" class="page-numbers">03</a>
                    <a href="#" class="next page-numbers"><i class="pxni-angle-right"></i></a>
                  </div>
                </div>
              </div>

              <!-- sidebar -->
              <div class="col-lg-4">
                <aside class="pxn_sidebar">

                  <div class="pxn_sidebar_widget widget_search">
                    <h2 class="sidebar_title">Search</h2>

                    <div class="widget_search_box">
                      <form action="#">
                        <input type="search" value="" required="" name="s" placeholder="Search here...">
                        <button type="submit"><i class="pxni-magnifying-glass"></i></button>
                      </form>
                    </div>
                  </div>

                  <div class="pxn_sidebar_widget">
                    <h2 class="sidebar_title">Latest Post</h2>

                    <ul class="pxn_recent_posts">
                      <li class="post">
                        <div class="post_thumb">
                          <a href="blog-details.php"><img src="./assets/images/blog/post-thumb-img-1.jpg"
                              alt="Post"></a>
                        </div>
                        <div class="post_content">
                          <span class="date"><i class="pxni-calendar"></i> 15 Feb, 2026</span>
                          <h3 class="title"><a href="blog-details.php">
                              How Strategic Planning Drives
                              Long-Term Business
                            </a></h3>
                        </div>
                      </li>

                      <li class="post">
                        <div class="post_thumb">
                          <a href="blog-details.php"><img src="./assets/images/blog/post-thumb-img-2.jpg"
                              alt="Post"></a>
                        </div>
                        <div class="post_content">
                          <span class="date"><i class="pxni-calendar"></i> 15 Feb, 2026</span>
                          <h3 class="title"><a href="blog-details.php">
                              Data-Driven Decisions: Turning
                              Insights Into Action
                            </a></h3>
                        </div>
                      </li>

                      <li class="post">
                        <div class="post_thumb">
                          <a href="blog-details.php"><img src="./assets/images/blog/post-thumb-img-3.jpg"
                              alt="Post"></a>
                        </div>
                        <div class="post_content">
                          <span class="date"><i class="pxni-calendar"></i> 15 Feb, 2026</span>
                          <h3 class="title"><a href="blog-details.php">
                              Why Modern Businesses Need
                              Agile Consulting
                            </a></h3>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="pxn_sidebar_widget">
                    <h2 class="sidebar_title">Categories</h2>

                    <ul class="pxn_category_widget">
                      <li>
                        <a href="blog-details.php" class="category">
                          <span class="text">Strategic Planning</span> <span class="count">(5)</span>
                        </a>
                      </li>
                      <li>
                        <a href="blog-details.php" class="category">
                          <span class="text">Business Optimization</span> <span class="count">(6)</span>
                        </a>
                      </li>
                      <li>
                        <a href="blog-details.php" class="category">
                          <span class="text">IT Consulting</span> <span class="count">(3)</span>
                        </a>
                      </li>
                      <li>
                        <a href="blog-details.php" class="category">
                          <span class="text">Change Management</span> <span class="count">(2)</span>
                        </a>
                      </li>
                      <li>
                        <a href="blog-details.php" class="category">
                          <span class="text">Leadership</span> <span class="count">(6)</span>
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div class="pxn_sidebar_widget">
                    <h2 class="sidebar_title">Tags</h2>

                    <div class="tagcloud">
                      <a href="#">Consulting</a>
                      <a href="#">Insights</a>
                      <a href="#">Growth</a>
                      <a href="#">Strategic</a>
                      <a href="#">Optimization</a>
                      <a href="#">Business</a>
                      <a href="#">Leadership</a>
                      <a href="#">Risk</a>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </section>
        <!-- end: Blog Standard Page -->
<?php endif; /* posts */ ?>

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