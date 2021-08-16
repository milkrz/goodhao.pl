<?php
require_once('lib/PageTemplate.php');
require_once('common/version.php');

if($TPL->DebugMode)
{
    $version = date("YmdHis");
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $TPL->PageTitle; ?></title>   
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.svg" />
    <link rel="stylesheet" href="/lib/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="/css/site.css?v=<?php echo $version?>" />
    <link rel="stylesheet" href="/css/fonts.css?v=<?php echo $version?>" />
</head>
<body>
    <!-- Preloader Begin -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    
    <header class="header navbar-area">        
        <!-- Toolbar Begin -->
        <div class="toolbar-area">
            <div class="container">
                <div class="row mt-2 mb-2 toolbar-contact">
                    <div class="col-xl-8 col-lg-12 col-12 text-xl-start text-lg-center text-center">
                        <p class="my-0 py-0 d-sm-inline-block"><img src="/images/email.png" class="me-2" /><a class="pe-2" href="mailto:info@goodhao.pl">info@goodhao.pl</a></p>
                        <p class="my-0 py-0 d-sm-inline-block"><img src="/images/phone.png" class="me-2" /><a class="pe-2" href="tel:+46345678239">(+48) 345 678 239</a></p>
                        <p class="mt-lg-1 mt-sm-1 my-0 py-0 d-xl-inline-block"><img src="/images/google-maps.png" class="me-2" />Adres: Mikołaja Kopernika23, 34-223 Warszawa</p>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-12 text-xl-end text-lg-center text-center mt-lg-1 mt-sm-1">
                        <a href="#"><img src="/images/facebook.png" class="me-2" /></a>
                        <a href="#"><img src="/images/twitter.png" class="me-2" /></a>
                        <a href="#"><img src="/images/youtube.png" class="me-2" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!-- Menu Begin -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="/images/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <?php
                                    $script_url = $_SERVER["SCRIPT_URL"];   
                                    $menu_items = array(
                                        array("url" => "/", "title" => "Start"),
                                        array("url" => "/news", "title" => "Aktualności"),
                                        array("url" => "/about", "title" => "O nas"),
                                        array("url" => "/faq", "title" => "FAQ"),
                                        array("url" => "/employee", "title" => "Wykładowcy"),
                                        array("url" => "/price-list", "title" => "Cennik"),
                                        array("url" => "/contact", "title" => "Kontakt"),
                                        array("url" => "/job", "title" => "Praca")
                                    );

                                    for($i=0;$i<sizeof($menu_items);$i++)
                                    {
                                        $menu_item = $menu_items[$i];
                                        $url = $menu_item["url"];
                                        $active = $script_url == $url ? "active" : "";
                                        $title = $menu_item["title"];
                                        
                                        ?>
                                        <li class="nav-item">
                                            <a class="page-scroll <?php echo $active ?>" href="<?php echo $url?>"><?php echo $title?></a>
                                        </li>
                                        <?php
                                    }
                                ?>       
                            </ul>
                        </div> 
                    </nav> 
                </div>
                </div>
            </div> 
        </div> 
        <!-- Menu End -->
    </header>
    
    <div class="container">
        <main role="main" class="pb-3">
            <?php
            if($TPL->DebugMode)
            {
                ?>
                <div id="idDebug" class="alert alert-danger">Uwaga! Tryb debug</div>
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
            <div id="idContent">
                <?php include $TPL->PageContent; ?>
            </div>
        </main>
    </div>
    <footer class="border-top text-muted footer">
        <div class="footer-bottom">
                <div class="container">
                    <div class="inner">
                        <div class="row">                            
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                    &copy; 2021 - goodhao.pl - <a href="/privacy">Polityka prywatności</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 text-lg-end text-md-end text-center">
                                    Wszelkie prawa zastrzeżone
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <a href="#" class="scroll-top btn-hover">
        <img src="/images/up-arrow.png" />
    </a>


    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/popper/popper.min.js"></script>
    <script src="/lib/bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/site.js?v=<?php echo $version?>"></script>    
    <?php
        if(isset($TPL->PageJs))
        {
            include($TPL->PageJs);
        }
    ?>
</body>
</html>