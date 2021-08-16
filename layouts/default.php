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
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-12">
                        <div class="toolbar-contact">
                            <p><img src="/images/email.png" /><a class="px-2" href="mailto:info@goodhao.pl">info@goodhao.pl</a></p>
                            <p><img src="/images/phone.png" /><a class="px-2" href="tel:+46345678239">(+48) 345 678 239</a></p>
                            <p><img src="/images/google-maps.png" />Adres: Mikołaja Kopernika23, 34-223 Warszawa</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="#"><img src="/images/facebook.png" /></a></li>
                                <li><a href="#"><img src="/images/twitter.png" /></i></a></li>
                                <li><a href="#"><img src="/images/youtube.png" /></i></a></li>
                            </ul>
                        </div>
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