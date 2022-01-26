<?php  
// SELECT * FROM team_register AS A RIGHT JOIN team_name AS B ON A.team = B.id WHERE 1
session_start();
?> 

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>REJESTRACJA_DRUZYNY</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/REJESTRACJA_DRUZYNY.css" media="screen">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="REJESTRACJA_DRUZYNY">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
  <body class="u-body">

  <?php
if(!isset($_SESSION["logged_data"]))
 require_once "html_menu/headernologged.html";
else require_once "html_menu/headerislogged.html";
 
?>

    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-f8a2">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    <section class="u-clearfix u-section-2" id="sec-977c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
          <form id="mainForm" class="u-clearfix u-form-spacing-6 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-f9eb" class="u-label u-label-1">Nazwa drużyny</label>
              <input type="text" placeholder="Wprowadź nazwę drużyny" id="name-f9eb" name="team" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white " required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
              <label for="name-3f1c" class="u-label u-label-2">Imię dowódcy</label>
              <input type="text" placeholder="Wprowadź swoje imię" id="name-3f1c" name="name1" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
              <label for="name-8d66" class="u-label u-label-3">Nazwisko dowódcy</label>
              <input type="text" placeholder="Wprowadź swoje nazwisko" id="name-8d66" name="surname1" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="date-5d68" class="u-label u-label-4">Data urodzenia dowódcy</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-5d68" name="date1" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" >
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
              <label for="phone-42aa" class="u-label u-label-5">Numer telefonu dowódcy</label>
              <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Wprowadź swój numer telefonu" id="phone-42aa" name="phone" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-email u-form-group u-form-group-6">
              <label for="email-e6d5" class="u-label u-label-6">Adres E-Mail dowódcy</label>
              <input type="email" placeholder="Wprowadź prawidłowy adres e-mail" id="email-e6d5" name="email1" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-7">
              <label for="name-50ac" class="u-label u-label-7">Imię druha/druhny nr.2</label>
              <input type="text" placeholder="Wprowadź imię" id="name-50ac" name="name2" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-8">
              <label for="name-d3a9" class="u-label u-label-8">Nazwisko druha/druhny nr.2</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-d3a9" name="surname2" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true">
            </div>
            <div class="u-form-date u-form-group u-form-group-9">
              <label for="date-9ec9" class="u-label u-label-9">Data urodzenia druha/druhny nr.2</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-9ec9" name="date2" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-10">
              <label for="name-04fc" class="u-label u-label-10">Imię druha/druhny nr.3</label>
              <input type="text" placeholder="Wprowadź imię" id="name-04fc" name="name3" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-11">
              <label for="name-4967" class="u-label u-label-11">Nazwisko druha/druhny nr.3</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-4967" name="surname3" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-date u-form-group u-form-group-12">
              <label for="date-0997" class="u-label u-label-12">Data urodzenia druha/druhny nr.3</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-0997" name="date3" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-13">
              <label for="name-498c" class="u-label u-label-13">Imię druha/druhny nr.4</label>
              <input type="text" placeholder="Wprowadź imię" id="name-498c" name="name4" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-14">
              <label for="name-df88" class="u-label u-label-14">Nazwisko druha/druhny nr.4</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-df88" name="surname4" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-date u-form-group u-form-group-15">
              <label for="date-5c8f" class="u-label u-label-15">Data urodzenia druha/druhny nr.4</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-5c8f" name="date4" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-16">
              <label for="name-a91e" class="u-label u-label-16">Imię druha/druhny nr.5</label>
              <input type="text" placeholder="Wprowadź imię" id="name-a91e" name="name5" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-17">
              <label for="name-c5c0" class="u-label u-label-17">Nazwisko druha/druhny nr.5</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-c5c0" name="surname5" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-date u-form-group u-form-group-18">
              <label for="date-e88b" class="u-label u-label-18">Data urodzenia druha/druhny nr.5</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-e88b" name="date5" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" required="true" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-19">
              <label for="name-221c" class="u-label u-label-19">Imię druha/druhny nr.6</label>
              <input type="text" placeholder="Wprowadź imię" id="name-221c" name="name6" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-20">
              <label for="name-b99e" class="u-label u-label-20">Nazwisko druha/druhny nr.6</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-b99e" name="surname6" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" >
            </div>
            <div class="u-form-date u-form-group u-form-group-21">
              <label for="date-c614" class="u-label u-label-21">Data urodzenia druha/druhny nr.6</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-c614" name="date6" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-22">
              <label for="name-0fbc" class="u-label u-label-22">Imię druha/druhny nr.7</label>
              <input type="text" placeholder="Wprowadź imię" id="name-0fbc" name="name7" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-23">
              <label for="name-0a42" class="u-label u-label-23">Nazwisko druha/druhny nr.7</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-0a42" name="surname7" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-date u-form-group u-form-group-24">
              <label for="date-cbee" class="u-label u-label-24">Data urodzenia druha/druhny nr.7</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-cbee" name="date7" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-25">
              <label for="name-ade4" class="u-label u-label-25">Imię druha/druhny nr.8</label>
              <input type="text" placeholder="Wprowadź imię" id="name-ade4" name="name8" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-26">
              <label for="name-4f1c" class="u-label u-label-26">Nazwisko druha/druhny nr.8</label>
              <input type="text" placeholder="Wprowadź nazwisko" id="name-4f1c" name="surname8" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-date u-form-group u-form-group-27">
              <label for="date-b808" class="u-label u-label-27">Data urodzenia druha/druhny nr.8</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-b808" name="date8" class="u-border-1 u-border-palette-5-dark-1 u-input u-input-rectangle u-radius-15 u-white">
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-28">
              <input type="checkbox" id="checkbox-ce4d" name="checkbox" value="On" required="true">
              <label for="checkbox-ce4d" class="u-label u-label-28">Wyrażam <a href="#">zgodę</a> na przetwarzanie danych osobowych.
              </label>
            </div>
            <div class="u-form-agree u-form-group u-form-group-29">
              <input type="checkbox" id="agree-94d1" name="agree" class="u-agree-checkbox" required="true" >
              <label for="agree-94d1" class="u-label u-label-29">Akceptuję <a href="#">regulamin</a> gry miejskiej "Kryptonim Wolność"
              </label>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <input type="submit" value="ZAREJESTRUJ DRUŻYNĘ" name="submit" class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-1 u-radius-15 u-btn-1">
            </div>
           
          </form>
          
        </div>
        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-1" src="images/toppng.com-soldier-silhouette-681x1174.png" alt="" data-image-width="681" data-image-height="1174">
        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-2" src="images/m_toppng.com-soldier-silhouette-681x1174.png" alt="" data-image-width="681" data-image-height="1174">
        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-3" src="images/m_soldiers-36414__340.png" alt="" data-image-width="680" data-image-height="340">
        <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-4" src="images/m_m_soldiers-36414__340.png" alt="" data-image-width="680" data-image-height="340">
        <a href="files/Zgoda-rodzica.pdf" class="u-black u-border-none u-btn u-btn-round u-button-style u-file-link u-hover-custom-color-1 u-radius-50 u-btn-2">zgoda rodzica</a>
        <h1 class="u-align-center u-text u-text-default u-text-1">Rejestracja drużyny<br>
          <span style="font-size: 1.5rem;">do XI Edycji Gry Miejskiej w Kościanie</span>
        </h1>

        <div class ="error-class"></div>

        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-5" src="images/5a1c5e691b3834.5401768515118086171115.png" alt="" data-image-width="3981" data-image-height="8000">
        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-6" src="images/m_5a1c5e691b3834.5401768515118086171115.png" alt="" data-image-width="3981" data-image-height="8000">
        
      </div>
     
    </section>

    <script type="text/javascript">
      (function(d,w,log){
        w.addEventListener("load", function(){
          d.getElementById("mainForm").addEventListener("submit", function(e) {
            e.preventDefault();
           
            if(!document.getElementById('checkbox-ce4d').checked) {
              $(".error-class").text("Checkbox is not set");
              return;
            }

            if(!document.getElementById('agree-94d1').checked) {
              $(".error-class").text("Agree is not set");
              return;
            }

            let requestParams = {
              "team": $("#name-f9eb").val(),
              "name1": $("#name-3f1c").val(),
              "surname1": $("#name-8d66").val(),
              "date1": $("#date-5d68").val(),
              "phone": $("#phone-42aa").val(),
              "email1": $("#email-e6d5").val(),
              "name2": $("#name-50ac").val(),
              "surname2": $("#name-d3a9").val(),
              "date2": $("#date-9ec9").val(),
              "name3": $("#name-04fc").val(),
              "surname3": $("#name-4967").val(),
              "date3": $("#date-0997").val(),
              "name4": $("#name-498c").val(),
              "surname4": $("#name-df88").val(),
              "date4": $("#date-5c8f").val(),
              "name5": $("#name-a91e").val(),
              "surname5": $("#name-c5c0").val(),
              "date5": $("#date-e88b").val(),
              "checkbox": 1,
              "agree": 1
            };

            $.ajax({
              url: "php/createNewTeam.php",
              method: "POST",
              dataType: "json",
              data: requestParams,
              complete: function(response) {
                  //log(response.responseText);
                  try{
                    let json = JSON.parse(response.responseText);
                    if ("error" in json) {
                      $(".error-class").text(json["error_msg"]);
                      d.body.scrollTop = 0;
                      d.documentElement.scrollTop = 0;
                    } else {
                      let data = new URLSearchParams(requestParams).toString()
                      window.location = "http://localhost/StronaGMK/send_form.php?" + data;
                    }
                  }catch (e){
                    $(".error-class").text("Taka nazwa drużyny już istnieje");
                    d.body.scrollTop = 0;
                    d.documentElement.scrollTop = 0;
                  }
              }
            })
          })
        })
      })(document, window, console.log);
    </script>
     
  </body>
 
</html>
