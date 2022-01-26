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
    <title>STYL_SKAUTING</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/STYL_SKAUTING.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Gra Miejska Kościan",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="STYL_SKAUTING">
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
    <section class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-section-2" id="carousel_a92e">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <img class="u-border-2 u-border-grey-75 u-image u-image-round u-radius-30 u-image-1" src="images/skauting.jpg" data-image-width="800" data-image-height="554">
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-d390">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1"> Druhu, idź na całość! Jak grać to do końca i w dobrym stylu!</h2>
        <p class="u-text u-text-2"> Kościański ruch skautowy rósł w siłę od 1912 roku. Władze niemieckie czujnym okiem obserwowały rozwijający się skauting. Zaborca starał się hamować jego rozwój. Szkolenie skautów obejmowało między innymi historię, geografię, literaturę polską, a także przedmioty związane z walką zbrojną, jak terenoznawstwo, czy wyszkolenie strzeleckie (oczywiście nielegalne).<br>Wszystkie te działania przygotowywały kościańską młodzież do zrywu narodowo-wyzwoleńczego. Strój skauta podobny był do munduru dzisiejszych skautów i harcerzy, charakterystyczny był kapelusz z wygiętym rondem.
        </p>
        <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="600" data-image-height="417">
                <img class="u-back-image u-expanded" src="images/s1.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="600" data-image-height="392">
                <img class="u-back-image u-expanded" src="images/s2.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="600" data-image-height="417">
                <img class="u-back-image u-expanded" src="images/s3.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="600" data-image-height="417">
                <img class="u-back-image u-expanded" src="images/s4.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide" data-image-width="600" data-image-height="400">
                <img class="u-back-image u-expanded" src="images/s5.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
  </body>
</html>