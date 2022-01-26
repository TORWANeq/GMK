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
    <title>EDYCJA_3</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/EDYCJA_3.css" media="screen">
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
    <meta property="og:title" content="EDYCJA_3">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-c828" data-image-width="1200" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-03e9">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-0b0b">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> III edycja zgromadziła w tym roku blisko 200 uczestników i ponad 50 rekonstruktorów, aktorów i koordynatorów gry. Spora część Kościana zamieniła się w wielką planszę do gry, po której poruszało się prawie 30 drużyn, kilkunastu korespondentów wojennych.</h1>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="carousel_3626">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e116.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Po mieście znów krążyły pruskie patrole broniące dostępu do centrum oraz koszar mieszczących się na terenie Sanatorium. Dostawcy ponownie musieli gęsto sie tłumaczyć mijając&nbsp;pruski posterunek na ulicy Wrocławskiej.<br>
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
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> W tym roku strona powstańcza wsparta została gościnnie&nbsp;samochodem pancernym „Poznańczyk” będący wierną kopią wozu zdobytego przez 55 Pułk Strzelców Wielkopolskich podczas wojny polsko-bolszewickiej w 1920 r.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e27.jpg" data-image-width="800" data-image-height="556">
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
                  <img class="u-align-center-sm u-align-center-xs u-expanded-width-xs u-image u-image-round u-radius-29 u-image-1" src="images/e36.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Przykład szedł z samej góry. Nad poprawnością przebiegu gry czuwała umundurowana inspekcja wojskowa składająca się z przedstawicieli władz miasta, gminy i województwa. Notable poparli zryw niepodległościowy ciałem i duchem epoki!<br>
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
              <div class="u-align-left u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Do wykonania było 15 misji ale każda drużyna mogła wykonać tylko pewną ich pulę. Najwięcej emocji wzbudzała ucieczka jeńca - żołnierza francuskiego, któremu drużyny dostarczały zestaw ucieczkowy.<br>
                  </p>
                  <a href="EDYCJA_3_MISJE.php" data-page-id="2621401175" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-4 u-radius-50 u-btn-1">misje</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e46.jpg" data-image-width="800" data-image-height="556" data-href="EDYCJA_3_MISJE.php" data-page-id="2621401175">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-9" id="sec-f0c7">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/e55.jpg" data-image-width="800" data-image-height="669">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Zwycięzcami gry zostali licealiści z drużyny "Przyczajone Kobry Kościan". Drugie miejsce zajęła drużyna "R6510/13" z Kościana, a trzecie "Grupa Trzecia" ze Starych Oborzysk. Czuwaj!<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    

  </body>
</html>