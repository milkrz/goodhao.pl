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
                    <iframe class="gmap_iframe" width="100%" frameborder="3" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=OS. STAWKI 17/11&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
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
            <i class="bi bi-geo-alt-fill me-2"></i><strong>Adres :</strong>
			<i><a href="google.navigation:q=50.95028348400445, 21.41137318479233&mode=d"><p class="no_spacing">Osiedle Stawki 17/11</p>
                <p class="no_spacing">27-400 Ostrowiec Świętokrzyski</p></i></a>
                
            </div>

            <div class="mt-3">
                <i class="bi bi-envelope-fill me-2"></i><strong>E-mail :</strong>
                <p><i class="no_spacing"><a href="mailto:kontakt@goodhao.pl" class="no_spacing" >kontakt@goodhao.pl</a></i></p>
            </div>

            <div class="mt-3">
                <i class="bi bi-telephone-fill me-2"></i><strong>Telefon :</strong>
                <p><i class="no_spacing"><a href="tel:+48533580803" >+48 533 580 803</a></i></p>
            </div>

            <div class="mt-3">
            <i class="bi bi-door-open-fill me-2"></i><strong>Godziny otwarcia :</strong>
                <i><p class="no_spacing">poniedziałek - piątek: 9:00 - 21:00</p></i>
				<i><p class="no_spacing">sobota: nieczynne</p><i>
            </div>

            <div class="mt-3">
			<i class="bi bi-bank2"><strong> NIP : </strong></i><i class="no_spacing">6611227724</i>
               
            </div>
        </div>
    </div>
</div>