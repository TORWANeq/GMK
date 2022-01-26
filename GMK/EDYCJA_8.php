<?php
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
    <title>EDYCJA_8</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/EDYCJA_8.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Gra Miejska Kościan",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="EDYCJA_8">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <script>
    function gdprConfirmed() {
        return true;
    }
    if (gdprConfirmed()) {
    document.write("\
    \
    <!-- Google Analytics -->\
    <gascript async src=\"https://www.googletagmanager.com/gtag/js?id=gra miejska\"></gascript>\
    <gascript>\
        window.dataLayer = window.dataLayer || [];\
        function gtag(){dataLayer.push(arguments);}\
        gtag('js', new Date());\
        gtag('config', 'gra miejska');\
    </gascript>\
    <!-- End Google Analytics -->\
    ".replace(/gascript/g, 'script'));
    }
    </script><script src="https://www.google.com/recaptcha/api.js?render=6Lccj3odAAAAAPMbzwYRDAYXInH2UIbHv7mYqx5o"></script>
    <script>
( function( grecaptcha, sitekey, actions ) {

	var recaptcha = {

		execute: function( action ) {
			grecaptcha.execute(
				sitekey,
				{ action: action }
			).then( function( token ) {
				var forms = document.getElementsByTagName( 'form' );

				for ( var i = 0; i < forms.length; i++ ) {
					var fields = forms[ i ].getElementsByTagName( 'input' );

					for ( var j = 0; j < fields.length; j++ ) {
						var field = fields[ j ];

						if ( 'recaptchaResponse' === field.getAttribute( 'name' ) ) {
							field.setAttribute( 'value', token );
							break;
						}
					}
				}
			} );
		},

		executeContact: function() {
			recaptcha.execute( actions[ 'contact' ] );
		}
	};

	grecaptcha.ready(
		recaptcha.executeContact
	);

	document.addEventListener( 'change',
		recaptcha.executeContact, false
	);
} )(
	grecaptcha,
	'6Lccj3odAAAAAPMbzwYRDAYXInH2UIbHv7mYqx5o',
	{"contact":"contact"}
);
    </script>
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-3e96" data-image-width="1200" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-90e1">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-0b0b">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> W sobotę 16 lutego 2019 roku odbyła się 8. edycja gry miejskiej „Kryptonim Wolność”, będąca finałem kościańskich obchodów 100. rocznicy Powstania Wielkopolskiego, dokładnie w 100. rocznicę Rozejmu w Trewirze.</h1>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="carousel_3626">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-1" src="images/e16.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-font-montserrat u-text u-text-1"> Dla uczestników i mieszkańców była to okazja do poznania historii miasta, jego ciekawostek i miejsc związanych z bohaterami Powstania Wielkopolskiego. Kościan tego dnia zmienił się w miasto powstańcze sprzed wieku.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-6" id="sec-6035">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Ożyły koszary 37 pułku fizylierów, patrole pruskiego zaborcy, które przejmowały kontrolę nad miastem. Dzięki życzliwości właścicieli kamienic i punktów usługowych znajdujących się na rynku udało się odtworzyć wygląd dawnych kamienic w centrum miasta.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-1" src="images/e21.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-7" id="sec-bd86">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-29 u-image-1" src="images/e31.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-font-montserrat u-text u-text-1"> Dziesiątki rekonstruktorów, statystów i aktorów przypominało życie z początku XX wieku. O bruk stukały znów końskie kopyta ciągnące dorożki, wypuszczano balony zwiadowcze, na rynku można było zobaczyć czołg Renault F17, a na mieście bicykle i kataryniarza.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-8" id="sec-c96b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Centrum miasta stało się wielką planszą do gry, a uczestnicy poruszali się po ulicach wykonując szereg misji.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-1" src="images/e41.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-9" id="sec-f0c7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e51.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-custom-font u-font-montserrat u-text u-text-1"> Drużyny zgłaszały się poprzez rekrutację elektroniczną, gdzie otrzymywały pierwsze wskazówki do gry. Już od godziny 9 pierwsze grupy ruszyły na misje.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-10" id="sec-3ba1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Do gry zgłosiło się blisko 60 grup, ok. 350 uczestników, którzy musieli zmierzyć się z 20 misjami. Drużyny musiały wykazać się sprytem, grą zespołową, jak i tężyzną fizyczną.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-1" src="images/e61.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-11" id="sec-1ced">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e71.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> O godz. 16.30 na kościańskim Rynku odbyło się zakończenie gry z podsumowaniem i rozdaniem nagród. Drużyny, które wykazały się wybitnymi umiejętnościami w poszczególnych misjach otrzymały odznaki sprawnościowe.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-12" id="sec-ba7b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Najlepsze grupy zdobyły nagrody, wszyscy uczestnicy upominki i pamiątkowe trefle.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-1" src="images/e81.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-13" id="sec-b28f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e91.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Grę dla miasta Kościana przeprowadziło Stowarzyszenie im. Kościańskiej Rezerwy Skautowej, któremu Burmistrz Miasta Kościana Piotr Ruszkiewicz uroczyście przekazał sztandar, a także Agencja Artystyczna Artyleria z grupami rekonstrukcyjnymi takimi jak Towarzystwo Działań Historycznych im. Feliksa Pięty, Kreuz 1914 czy Eka.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-14" id="sec-269d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Współorganizatorami byli: Gmina Kościan, Powiat Kościański, Muzeum Regionalne, Kościański Ośrodek Kultury, Miejski Ośrodek Sportu i Rekreacji w Kościanie, Szkoła Tańca POEZJA, LOK, Stadnina Koni Racot, Leszczyński Klub Balonowy, I Liceum Ogólnokształcące im. Oskara Kolberga w Kościanie, Szkoła Podstawowa nr 1 w Kościanie, Straż Miejska, Kawiarnia Saskia i Sweet Cafe oraz Saskia oraz kwiaciarni-solarium Onyx.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-1" src="images/e101.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-15" id="sec-2012">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/e111.jpg" data-image-width="800" data-image-height="522">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-16" id="sec-7475">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Współorganizatorzy</h3>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/263686789_503924544005110_6489052654950094248_n.png" alt="" data-image-width="272" data-image-height="340">
        <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/xlogo.png.pagespeed.ic.SJviFZNqR8.png" alt="" data-image-width="140" data-image-height="150">
        <img class="u-image u-image-default u-image-3" src="images/unnamed.jpg" alt="" data-image-width="198" data-image-height="200">
        <img class="u-image u-image-default u-preserve-proportions u-image-4" src="images/1200px-POL_gmina_Kocian_COA.svg.png" alt="" data-image-width="1200" data-image-height="1325">
        <img class="u-image u-image-default u-preserve-proportions u-image-5" src="images/262630641_1000744283816418_150320313668298158_n.png" alt="" data-image-width="77" data-image-height="65">
        <img class="u-image u-image-default u-preserve-proportions u-image-6" src="images/1200px-POL_powiat_kociaski_COA.svg.png" alt="" data-image-width="1200" data-image-height="1412">
        <img class="u-image u-image-default u-preserve-proportions u-image-7" src="images/263380413_455299636189303_6509156410293364930_n.jpg" alt="" data-image-width="710" data-image-height="773">
      </div>
    </section>
    
    
    
  
  </body>
</html>