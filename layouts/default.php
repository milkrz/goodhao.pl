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
    <link rel="stylesheet" href="/lib/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="/css/site.css?v=<?php echo $version?>" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">goodhao.pl</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav">    
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/Account/Register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/Account/Login">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/Privacy">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            <?php
            if($TPL->DebugMode)
            {
                ?>
                <div id="idDebug">Uwaga! Tryb debug</div>
                <?php
            }
            ?>
            <div id="idContent">
                <?php include $TPL->PageContent; ?>
            </div>
        </main>
    </div>
    <footer class="border-top footer text-muted">
        <div class="container text-center">
            &copy; 2021 - goodhao.pl - <a href="/privacy">Privacy</a>
        </div>
    </footer>
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