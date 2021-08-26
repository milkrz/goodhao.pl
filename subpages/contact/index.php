<?php
require_once('lib/Page.php');
if (!isset($page)) {
    $page = new Page(__FILE__, "default");
    $page->Title = "Kontakt";
    $page->HeaderBackground = "/images/contact.jpg";
    require_once("layouts/loader.php");
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-12 align-self-center">
            <div class="mapouter">
                <div class="gmap_canvas border">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=OS. STAWKI 17/11&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>

        <div class="col-md-6 col-12 align-self-center">
            <div>
                <p>
                <h2 class="intro-text"><strong>Good Hao</strong></h2>
                <h5>Szkoła Języków Obcych</h5>
                </p>
            </div>
            <div>
            <i class="bi bi-geo-alt-fill me-2"></i> <strong>Adres</strong>
                <p class="no_spacing">Oiedle Stawki 17/11</p>
                <p class="no_spacing">27-400 Ostrowiec Świętokrzyski</p>
            </div>

            <div class="mt-3">
                <i class="bi bi-envelope-fill me-2"></i> <strong>E-Mail</strong>
                <p class="no_spacing">kontakt@goodhao.pl</p>
            </div>

            <div class="mt-3">
                <i class="bi bi-telephone-fill me-2"></i><strong>Telefon</strong>
                <p class="no_spacing">+48 533 580 803</p>
            </div>

            <div class="mt-3">
            <i class="bi bi-door-open-fill me-2"></i></i><strong>Godziny otwarcia:</strong>
                <p class="no_spacing">Pn – Pt 7.00 – 21.00</p>
            </div>

            <div class="mt-3">
                <p>NIP: 6611227724</p>
            </div>
        </div>
    </div>
</div>