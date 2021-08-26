<?php
require_once('lib/Page.php');
if (!isset($page)) {
    $page = new Page(__FILE__, "default");
    $page->Title = "Pytania i odpowiedzi";
    $page->HeaderBackground = "/images/faq.jpg";
    require_once("layouts/loader.php");
    exit;
}
?>

<div class="row">
    <div class="col-10 offset-1">
        <div class="accordion " id="id-d3b06d20b3864339999e62da4ea7e3ce">
            <div class="accordion-item my-3 border">
                <h2 class="accordion-header" id="id-f071936f6634448880867e7bf1063241">
                    <button class="accordion-button collapsed " style="background-color: #FBFFE4;" type="button" data-bs-toggle="collapse" data-bs-target="#id-f6a49b07457943a9bb14b1486305bf8f" aria-expanded="false" aria-controls="id-f6a49b07457943a9bb14b1486305bf8f">
                        <i class="bi bi-question-circle me-4"></i>1. Jak długo trwają lekcje w GoodHao?
                    </button>
                </h2>
                <div id="id-f6a49b07457943a9bb14b1486305bf8f" class="accordion-collapse collapse" aria-labelledby="id-f071936f6634448880867e7bf1063241" data-bs-parent="#id-d3b06d20b3864339999e62da4ea7e3ce">
                    <div class="accordion-body">Typowa lekcja trwa <strong>45 minut</strong>. Lekcja rozszerzona to <strong>90 minut</strong>.</div>
                </div>
            </div>
            <div class="accordion-item my-3 border">
                <h2 class="accordion-header" id="id-7d57f84e723644ee868d4af17cc0c798">
                    <button class="accordion-button collapsed" style="background-color: #EDFFFB;" type="button" data-bs-toggle="collapse" data-bs-target="#id-b382b612dc0f467eb78f5c1aff98a2ae" aria-expanded="false" aria-controls="id-b382b612dc0f467eb78f5c1aff98a2ae">
                        <i class="bi bi-question-circle me-4"></i>2. Czy w przypadku nieobecności na zajęciach lekcja przepada?
                    </button>
                </h2>
                <div id="id-b382b612dc0f467eb78f5c1aff98a2ae" class="accordion-collapse collapse" aria-labelledby="id-7d57f84e723644ee868d4af17cc0c798" data-bs-parent="#id-d3b06d20b3864339999e62da4ea7e3ce">
                    <div class="accordion-body">Jeżeli lekcja zostanie odwołana przez ucznia <strong>5 godzin</strong> przed jej rozpoczęciem, wtedy <strong>nie przepada</strong> i jest przeniesiona na koniec pakietu. <span class="text-danger">Jeśli termin nie jest zachowany – lekcja przepada.</span></div>
                </div>
            </div>
            <div class="accordion-item my-3 border">
                <h2 class="accordion-header" id="id-10c296f1ae50425aa416ae8bab01b552">
                    <button class="accordion-button collapsed colorOne" style="background-color: #FBFFE4;" type="button" data-bs-toggle="collapse" data-bs-target="#id-2b3f09731a934877874d61eca367055b" aria-expanded="false" aria-controls="id-2b3f09731a934877874d61eca367055b">
                        <i class="bi bi-question-circle me-4"></i>3. Ile razy mogę odwołać zajęcia bez konsekwencji?
                    </button>
                </h2>
                <div id="id-2b3f09731a934877874d61eca367055b" class="accordion-collapse collapse" aria-labelledby="id-10c296f1ae50425aa416ae8bab01b552" data-bs-parent="#id-d3b06d20b3864339999e62da4ea7e3ce">
                    <div class="accordion-body">W ciągu półrocza można <strong>dwukrotnie</strong> odwołać zajęcia.</div>
                </div>
            </div>
            <div class="accordion-item my-3 border">
                <h2 class="accordion-header" id="id-e6f831a7f0304693829e77ecb90aa8f0">
                    <button class="accordion-button collapsed colorOne" style="background-color: #EDFFFB;" type="button" data-bs-toggle="collapse" data-bs-target="#id-141713c2c5324a9488639a25da5379db" aria-expanded="false" aria-controls="id-141713c2c5324a9488639a25da5379db">
                        <i class="bi bi-question-circle me-4"></i>4. Co się dzieje, kiedy są problemy z połączeniem internetowym?
                    </button>
                </h2>
                <div id="id-141713c2c5324a9488639a25da5379db" class="accordion-collapse collapse" aria-labelledby="id-e6f831a7f0304693829e77ecb90aa8f0" data-bs-parent="#id-d3b06d20b3864339999e62da4ea7e3ce">
                    <div class="accordion-body">Jeśli z powodu problemów technicznych nie jest możliwe przeprowadzenie lekcji, wtedy lekcja jest <strong>przeniesiona</strong> na inny, możliwie najbliższy termin.</div>
                </div>
            </div>
        </div>

    </div>
</div>