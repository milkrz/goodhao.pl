<?php
require_once('lib/PageTemplate.php');
require_once('common/version.php');

if ($TPL->DebugMode) {
    $version = date("YmdHis");
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>goodhao.pl - kursy językowe</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="/images/favicon.png" />
    <link rel="apple-touch-icon" href="/images/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS Lib -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/lib/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/site.css?v=<?php echo $version ?>" />
</head>

<body>
    <!-- Top Bar Begin -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contact@goodhao.pl">contact@goodhao.pl</a>
                <i class="bi bi-phone"></i> +48 123 234 345
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                <a href="https://youtube.com" class="linkedin"><i class="bi bi-youtube"></i></i></a>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Header Begin -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo me-auto py-0"><img src="/images/logo-lite.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <?php
                    $script_url = $_SERVER["SCRIPT_URL"];
                    $menu_items = array(
                        array("url" => "/", "title" => "Oferta"),
                        array("url" => "/news", "title" => "Aktualności"),
                        array("url" => "/about", "title" => "O nas"),
                        array("url" => "/faq", "title" => "FAQ"),
                        array("url" => "/employee", "title" => "Wykładowcy"),
                        array("url" => "/price-list", "title" => "Cennik"),
                        array("url" => "/contact", "title" => "Kontakt"),
                        array("url" => "/job", "title" => "Praca")
                    );

                    for ($i = 0; $i < sizeof($menu_items); $i++) {
                        $menu_item = $menu_items[$i];
                        $url = $menu_item["url"];
                        $active = $script_url == $url ? "active" : "";
                        $title = $menu_item["title"];

                    ?>
                        <li>
                            <a class="nav-link <?php echo $active ?>" href="<?php echo $url ?>"><?php echo $title ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Begin -->
    <div id="hero" class="d-flex " style="background: url('<?php echo $TPL->Page->HeaderBackground ?>') top center;">
        <div class="w-100">
            <h1 class="w-100 p-0 m-0 text-center">
                <?php echo $TPL->Page->Title ?>
            </h1>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Main Begin -->
    <main id="main">
        <div class="container">
            <?php
            if ($TPL->DebugMode) {
            ?>
                <div class="alert alert-info">
                    <div class="d-none d-xl-block font-weight-bold">X-LARGE (XL)</div>
                    <div class="d-none d-lg-block d-xl-none font-weight-bold">LARGE (LG)</div>
                    <div class="d-none d-md-block d-lg-none font-weight-bold">MEDIUM (MD)</div>
                    <div class="d-none d-sm-block d-md-none font-weight-bold">SMALL (SM)</div>
                    <div class="d-block d-sm-none alert font-weight-bold">X-SMALL (Defaut)</div>
                </div>

            <?php
            }
            ?>
        <?php 
            include($TPL->Page->PageContent);
        ?>

        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Begin -->
    <footer id="footer">
        <div class="container py-4">
            <div class="me-auto text-center">
                <div class="copyright">
                    &copy; Copyright <strong><span>goodhao.pl</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <div id="preloader">
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/popper/popper.min.js"></script>

    <script src="/js/site.js?v=<?php echo $version ?>"></script>
    <?php
    $js = $TPL->Page->PageJs;
    if (file_exists($js)) {
        include($js);
    }
    ?>
</body>

</html>