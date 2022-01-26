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
    <title>TREFL</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/TREFL.css" media="screen">
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
    <meta property="og:title" content="TREFL">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-6029" data-image-width="1200" data-image-height="470">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-f070">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-0b0b">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">
          <span style="font-weight: 400;"> Pętelka w kształcie trefla była najbardziej rozpoznawalnym elementem umundurowania powstańca wielkopolskiego. Przyszywany do rogatywki, swoją barwą i kolorowymi obrączkami wskazywał szarżę żołnierza. Trefl w kościańskiej grze miejskiej “Kryptonim Wolność”, jest pamiątkowym elementem, który można przypiąć np. do klapy marynarki lub kurtki podczas obchodów rocznic zwycięskiego Powstania Wielkopolskiego. Pamiątkowego Trefla z legitymacją, otrzymuje każdy uczestnik kościańskiej gry miejskiej. Każdy gracz co roku awansuje o jeden stopień wyżej oraz nową legitymację uprawniającą do noszenia trefla w danym stopniu podczas naszej gry.</span>
        </h1>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="sec-c96b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Rozkazem dziennym nr 2 z 7.01.1919r. w Wielkopolsce stworzono Okręgi Wojskowe powołując do życia Wojsko Wielkopolskie<br>( Siły Zbrojne Polskie w byłym zaborze pruskim). Należało przygotować się na kontrataki niemieckie dlatego postanowiono zwiększyć liczebność oddziałów powstańczych. 17 stycznia ogłoszono pobór do Armii Wielkopolskiej.<br>Stworzone zostały regulaminy wojskowe, w których miedzy innymi pojawiły się przepisy dotyczące stopni wojskowych.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-xl u-container-layout-2">
                  <img class="u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/22.jpg" data-image-width="800" data-image-height="567">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-6" id="sec-9a9b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/32.jpg" data-image-width="800" data-image-height="567">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Trefle przyszywane były z boku rogatywki. Dla szeregowców i podoficerów wykonane były z zielonego a dla oficerów srebrnego sznurka. Czerwonymi i białymi obrączkami (u generałów złotymi) oznaczano stopień.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-7" id="sec-f2f7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Trefli używano do scalenia Armii Wielkopolskiej z Wojskiem Polskim 25 maja 1919 r. Armia Wielkopolska podporządkowana została Naczelnemu Dowództwu WP, przy zachowaniu jej odrębnej organizacji, dlatego w praktyce mundury i trefle Wojsk Wielkopolskich były noszone podczas wojny polsko-bolszewickiej 1920 r.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-2">
                  <img class="u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/22.jpg" data-image-width="800" data-image-height="567">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-8" id="sec-bd86">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-1" src="images/14.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-center u-container-style u-hidden-sm u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
  </body>
</html>