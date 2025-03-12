<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_id; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', '<?php echo $ga_id; ?>');
    </script>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Green Finance AI">
    <!-- Description -->
    <meta name="description" content="Training platform with RStudio and JupyterLab">
    <!-- Page Title -->
    <title>Green Finance AI | Training Platform</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo $gtm_id; ?>');</script>
        <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link href="vendor/img/favicon.ico" rel="icon">
    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link href="vendor/css/wow.css" rel="stylesheet">
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="css/line-awesome.min.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtm_id; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Start Header -->
<header id="home">
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="#slider-area" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="img/future-forward-ventures-logo-small.png" title="logo" alt="logo" class="logo-default">
            </a>
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav  ml-auto mr-auto">
                    <a id="navbar-home" class="nav-link line" href="https://greenfinanceai.com">Home</a>
                    <a id="navbar-training" class="nav-link scroll line" href="#home">Training</a>
                    <a id="navbar-contact" class="nav-link line" href="https://greenfinanceai.com#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Side Nav-->
    <div class="side-menu left hidden">
        <div class="quarter-circle  btn_sideNavClose">
            <div class="menu_bars2 active link">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="inner-wrapper">
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="sidenav-home" class="nav-link" href="https://greenfinanceai.com">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="sidenav-training" class="nav-link scroll" href="#home">Training</a>
                    </li>
                    <li class="nav-item">
                        <a id="sidenav-contact" class="nav-link" href="https://greenfinanceai.com#contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a id="side-footer-link" class="github-text-hvr" href="https://github.com/Green-Finance-AI"><i class="fab fa-github"></i></a></li>
                    <li><a id="side-footer-link" class="docker-text-hvr" href="https://hub.docker.com/u/alicesoto"><i class="fab fa-docker"></i></a></li>
                    <li><a id="side-footer-link" class="envelope-text-hvr" href="mailto:info@greenfinanceai.com"><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->

<!-- Start Fix Nav -->
<div class="fixed-nav-on-scroll fixed-nav-appear d-none sidemenu_toggle">
    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-center align-items-center position-relative">
            <div class="fixed-icon-scroll">
                <a class="menu_bars menu-bars-setting mr-3 mr-lg-0">
                    <div class="menu-lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Fix Nav -->

<!-- Start Inner Content -->
<section class="welcome" id="about">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s">
                <span class="sub-heading text-yellow">Empower your team with advanced analytical skills</span>
                <h3 class="heading text-center">Green Finance AI Training Platform</h3>
                <p>
                    Explore our interactive, state-of-the-art training environment designed specifically for data scientists, researchers, and analysts. Our platform provides secure, web-based access to JupyterLab and RStudio Server, enabling collaborative work and individualized learning experiences in real-time.
                </p>
                <br>
                <p>
                    With our powerful multi-user JupyterHub setup, every participant receives their own isolated environment. Users can freely install custom Python packages in their virtual environments, ensuring flexibility and independence to experiment and innovate without system-wide restrictions.
                </p>
                <br>
                <p>
                    This setup encourages practical learning and hands-on experimentation, empowering your organization with the tools and knowledge necessary to excel in data-driven roles.
                </p>
            </div>
        </div>

        <!-- Links to Training Environments -->
        <div class="row text-center align-items-center justify-content-center mt-5">
            <!-- JupyterHub Link -->
            <div class="col-md-5 wow slideInLeft" data-wow-duration="1s">
                <a id="launch-jupyter" href="https://training.greenfinanceai.com/jupyter/" target="_blank">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/jupyter/jupyter-original-wordmark.svg" alt="Jupyter" width="100" style="max-width: 100%;">
                </a>
                <h5 class="launch-server-heading mt-3">Launch JupyterHub</h5>
            </div>

            <!-- Spacer -->
            <div class="col-sm-1"></div>

            <!-- RStudio Link -->
            <div class="col-md-5 wow slideInRight" data-wow-duration="1s">
                <a id="launch-rstudio" href="https://training.greenfinanceai.com/rstudio/" target="_blank">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/rstudio/rstudio-original.svg" alt="RStudio" width="85" style="max-width: 100%;">
                </a>
                <h5 class="launch-server-heading mt-3">Launch RStudio Server</h5>
            </div>
        </div>
    </div>
</section>
<!-- End Inner Content -->

<!-- Start Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12">
                <div class="footer-social text-center">
                <ul class="list-unstyled">
                        <li><a id="footer-link" class="wow fadeInUp" href="https://github.com/Green-Finance-AI"><i aria-hidden="true" class="fab fa-github"></i><span></span></a></li>
                        <li><a id="footer-link" class="wow fadeInDown" href="https://hub.docker.com/u/alicesoto"><i aria-hidden="true" class="fab fa-docker"></i><span></span></a></li>
                        <li><a id="footer-link" class="wow fadeInUp" href="mailto:info@greenfinanceai.com"><i aria-hidden="true" class="fa-solid fa-envelope"></i><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-12 text-center mt-3">
                <p class="company-about fadeIn">&copy; 2025 Green Finance AI. A company by 
                    <img src="img/future-forward-ventures-logo.png" alt="Future Forward Ventures" style="height: 24px; vertical-align: bottom;"> 
                    <a href="https://futureforwardventures.ai" style="color: inherit; text-decoration: none;" onmouseover="this.style.color='#1ED873'" onmouseout="this.style.color='inherit'">Future Forward Ventures</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Start Scroll Top -->
<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!-- End Scroll Top -->

<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/morphext.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/js/wow.min.js"></script>

<!-- CUSTOM JS -->
<script src="vendor/js/contact_us.js"></script>
<script src="js/script.js"></script>
</body>
</html>