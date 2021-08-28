<?php
require_once('lib/Page.php');
if (!isset($page)) {
    $page = new Page(__FILE__, "default");
    $page->Title = "Wykładowcy";
    $page->HeaderBackground = "/images/teachers.jpg";
    require_once("layouts/loader.php");
    exit;
}
?>
<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="card mb-3 h-100 text-dark bg-light" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <br><img src="/images/shade.male.620x620.jpg" class="img-fluid rounded-start" alt="..."></br>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>Artur Paluch</strong></h5>
        <p class="card-text" >nauczyciel języka angielskiego z prawie 30-letnim doświadczeniem
w pracy ze wszystkimi grupami wiekowymi na wszystkich poziomach zaawansowania.
Najważniejsze w nauczaniu jest to, żeby uczeń zrealizował swój cel. Dlatego wiem, że
każdy wymaga indywidualnego podejścia. Chętnie stosuję wszelkiego rodzaju nowinki
technologiczne, dzięki czemu zajęcia są ciekawsze i bardziej urozmaicone.
Hobby? Brytyjskie filmy, które są doskonałym źródłem języka, muzyka lat 80., książki
i sport – mało oryginalnie – głównie piłka nożna.</p><br><br><br>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 h-100 text-white bg-dark" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <br><img src="/images/shade.famale.620x620.jpg" class="img-fluid rounded-start" alt="..."></br>
    </div>
    <div class="col-md-8" >
      <div class="card-body">
        <h5 class="card-title"><strong>Danuta Paluch</strong></h5>
        <p class="card-text">nauczycielka języka polskiego z trzydziestoletnim doświadczeniem
pracy w szkołach podstawowych i ponadpodstawowych. Lubię swoją pracę i kontakt
z młodzieżą. Pasjonuję się poezją Wisławy Szymborskiej, Wacława Oszajcy i Jana
Twardowskiego. Z przyjemnością wracam do lektury „Małego księcia” czy „Oskara i
pani Róży”. Chętnie słucham SDM, U Studni, Pod Budą, ale także Louisa Armstronga,
Phila Collinsa, Tiny Turner. Lubię Kabaret Moralnego Niepokoju i Grupę MoCarta.
Praca z młodzieżą to ważny element mojego życia. Nauczycielką chciałam być od
momentu przekroczenia progu szkoły.</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 h-100 text-dark bg-light" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <br><img src="/images/shade.male.620x620.jpg" class="img-fluid rounded-start" alt="..."></br>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>Jan Paluch</strong></h5>
        <p class="card-text">z wykształcenia sinolog (Uniwersytet Warszawski) z czteroletnim
doświadczeniem w nauczaniu języka chińskiego, głównie dzieci i młodzieży. Uczę także
języka angielskiego. Moją pasją , poza nauczaniem, jest sport, piłka nożna i tenis – przed
telewizorem, oraz pływanie – w praktyce. Interesuję się historią świata oraz
międzynarodową polityką. Lubię polską muzykę lat 80. – przede wszystkim piosenki
zespołu Republika i kreskówki lat dziewięćdziesiątych. Języka chińskiego uczę
dwuetapowo – najpierw oswajam uczniów z fonetyką, wprowadzając słownictwo
i zwracając uwagę na tony i wymowę, następnie wprowadzam znaki.</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>