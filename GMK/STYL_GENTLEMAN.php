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
    <title>STYL_GENTLEMAN</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/STYL_GENTLEMAN.css" media="screen">
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
    <meta property="og:title" content="STYL_GENTLEMAN">
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
      <div class="u-align-left u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <img class="u-border-2 u-border-grey-75 u-image u-image-round u-radius-30 u-image-1" src="images/gentleman.jpg" data-image-width="800" data-image-height="554">
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="carousel_1b59">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <h2 class="u-text u-text-default u-text-1"> Wiedeński szyk...</h2>
        <p class="u-text u-text-2"> Rekonstruktorzy to zawodowi historycy lub hobbyści interesują się różnymi epokami z przeszłości, zrzeszający się w grupy zajmujące się odtwarzaniem różnorodnych okresów historycznych od początków ludzkiej kultury aż do XXI wieku. Zajmują się różnymi dziedzinami życia, nie tylko stroną militarną. Starają się żyć tak jak nasi przodkowie dotykając historii. Badają ją dogłębnie wnikając w sfery codziennego życia. Nie trzeba być profesjonalnym rekonstruktorem aby w szafie znaleźć&nbsp; lakierki czy dziadkowy kożuch i wystylizować się na pierwsze dekady XX wieku.</p>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-sm u-gutter-50 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-31">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1" src="">
                    <div class="u-container-layout u-container-layout-1">
                      <img class="u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-sm u-absolute-hcenter-xs u-expanded u-image" src="images/g1.jpg" data-image-width="600" data-image-height="846">
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-29">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2" src="">
                    <div class="u-container-layout u-valign-bottom-md u-valign-top-sm u-valign-top-xl u-container-layout-2">
                      <img class="u-align-center-xs u-image u-image-2" src="images/g2.jpg" data-image-width="600" data-image-height="417">
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-3" src="">
                    <div class="u-container-layout u-valign-middle-md u-container-layout-3">
                      <img class="u-image u-image-3" src="images/g3.jpg" data-image-width="600" data-image-height="392">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-e4c7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-image-1" src="images/g6.jpg" alt="" data-image-width="600" data-image-height="863">
        <img class="u-image u-image-default u-image-2" src="images/g5.jpg" alt="" data-image-width="600" data-image-height="863">
        <img class="u-expanded-width-sm u-image u-image-default u-image-3" src="images/g4.jpg" alt="" data-image-width="600" data-image-height="417">
      </div>
    </section>
    
    
    
    
  </body>
</html>