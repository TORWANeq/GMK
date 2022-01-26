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
    <title>EDYCJA_1_6</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/EDYCJA_1_6.css" media="screen">
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
    <meta property="og:title" content="EDYCJA_1_6">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-17de" data-image-width="1200" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-1f0e">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-right u-clearfix u-section-4" id="carousel_3626">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/113.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Finał gry odbył się na Placu I. J. Paderewskiego, przy Pomniku Powstańców Wielkopolskich Ziemi Kościańskiej. Tam po uczczeniu minutą ciszy poległych i zmarłych Powstańców, Burmistrz miasta Kościana Pan Michał Jurga przemówił do uczestników gry, zaproszonych gości i przechodniów. Wręczono nagrody główne zwyciężcom oraz nagrody dla wszystkich pozostałych uczestników.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="sec-6035">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Najlepsza drużyna otrzymała również nagrodę w postaci granatów wykradniętych z Arsenału. Wraz z rekonstruktorami odgrywającymi role Powstańców Wielkopolskich, wzięli udział w inscenizacji rozbrajania Niemców u bram "Sanatorium".<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/28.jpg" data-image-width="800" data-image-height="533">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-6" id="sec-bd86">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-round u-radius-29 u-image-1" src="images/38.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-9010">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">
          <span style="font-weight: 700;">Zwycięzcy:</span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;"> Miejsce I<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">Dowódca: Aleksander Szajek<br>Wojciech Szajek<br>Kacper Schmidt<br>Bartosz Wyrzykiewicz<br>Hubert Zemler
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;"> Miejsce II<br>
            </span> Dowódca: Jakub Kąkolewski<br>Fryderyk Małecki<br>Miłosz Majorczyk<br>Joanna Linke<br>Dominika Woś<br>Konrad Łukaszyk<br>Kacper Pietrasz
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;"> Miejsce III<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">Dowódca: Grzegorz Sekuła<br>Jędrzej Mądry<br>Mateusz Gryś<br>Mateusz Waliszewski
          </span>
          <br>
        </p>
        <img class="u-expanded-width-xs u-image u-image-default u-image-1" src="images/xgra_miejska_logo.jpg" alt="" data-image-width="800" data-image-height="217">
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">
          <span style="font-size: 0.875rem;"> Projekt pn. "Kryptonim Wolność" w ramach 93. rocznicy Powstania Wielkopolskiego dofinansowała<br>
          </span>Fundacja Banku Zachodniego WBK<br>
        </p>
      </div>
    </section>
    
    
    

  </body>
</html>