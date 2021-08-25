<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default");    
    $page->Title = "Kontakt";
    $page->HeaderBackground = "/images/contact1.jpg";
    require_once("layouts/loader.php");
    ?>
    
	<div class="row mt-4">
    <div class="col-md-4 col-12 text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d40222.11568606038!2d21.400612!3d50.944391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718099880f44e95%3A0xdb0e5a778118ef24!2sStawki%2017%2F11%2C%2027-400%20Ostrowiec%20%C5%9Awi%C4%99tokrzyski!5e0!3m2!1spl!2spl!4v1629909037900!5m2!1spl!2spl" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-md-8 col-12 align-self-center">
        <p><b><h2 class="intro-text">GoodHao</b>
                    </h2></strong>Szkoła Języków Obcych</p><br>
        
            <img src="images/pin.png" alt="pinezka" /> <b>OS. STAWKI 17/11</b><br><b>27-400 OSTROWIEC ŚWIĘTOKRZYSKI</b><br><br>
            <img src="images/mail.png" alt="e-mail" /> <b>feedback@goodhao.pl</b><br><br>
            <img src="images/telephone.png" alt="telefon" /> <b>+48 333 444 555</b><br><br>
			<img src="images/pin.png" alt="" /> <b>godziny otwarcia:</b><br><br>
			Pn – Pt 7.00 – 21.00<br><br>
			NIP: 6611227724<br><br>
			
       
    </div>
</div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Skontaktuj się z nami
                    </h2>
                    <hr>
                    <p></p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label><b>Imię:</b></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label><b>Adres e-mail:</b></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label><b>Twój nr. telefonu:</b></label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label><b>Treść wiadomości:</b></label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
							<div class="form-row">
        <label class="checkbox-cnt">
            <input type="checkbox" data-error="Musisz wypełnić pole" name="regulation">
            <i class="state" aria-hidden="true"></i>
            <span>Wyrażam zgodę na przetwarzanie danych osobowych w związku z wysłaniem zapytania przez formularz kontaktowy, w celu udzielenia odpowiedzi na zadane pytanie/prośbę o kontakt. Szczegółowe informacje na temat wyrażenia zgody znajdziesz w Polityce prywatności.</span>
        </label>
    </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="submit-btn">Wyślij</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>