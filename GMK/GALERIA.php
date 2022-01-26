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
    <title>GALERIA</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/GALERIA.css" media="screen">
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
    <meta property="og:title" content="GALERIA">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-74c8" data-image-width="1200" data-image-height="477">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-19ed">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="sec-06f3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Galeria Wszystkich Edycji Gry Miejskiej</h2>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-always u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_1.php" data-page-id="81886457">
              <div class="u-back-slide" data-image-width="800" data-image-height="556">
                <img class="u-back-image u-expanded" src="images/edycj1.jpg" alt="Edycja I">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading">Edycja I</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_2.php" data-page-id="905930289">
              <div class="u-back-slide" data-image-width="800" data-image-height="556">
                <img class="u-back-image u-expanded" src="images/edycja2.jpg" alt="Edycja II">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading">Edycja II</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_3_MISJE.php" data-page-id="521510318">
              <div class="u-back-slide" data-image-width="800" data-image-height="556">
                <img class="u-back-image u-expanded" src="images/edycja3.jpg" alt="Edycja III">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading">Edycja III</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_4.php" data-page-id="689128378">
              <div class="u-back-slide" data-image-width="800" data-image-height="669">
                <img class="u-back-image u-expanded" src="images/edycja4.jpg" alt="Edycja IV">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-gallery-heading">Edycja IV</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_5.php" data-page-id="765711927">
              <div class="u-back-slide" data-image-width="800" data-image-height="669">
                <img class="u-back-image u-expanded" src="images/edycj5.jpg" alt="Edycja V">
              </div>
              <div class="u-over-slide u-shading u-over-slide-5">
                <h3 class="u-gallery-heading">Edycja V</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_6.php" data-page-id="2134617047">
              <div class="u-back-slide" data-image-width="800" data-image-height="522">
                <img class="u-back-image u-expanded" src="images/edycja6.jpg" alt="Edycja VI">
              </div>
              <div class="u-over-slide u-shading u-over-slide-6">
                <h3 class="u-gallery-heading">Edycja VI</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_7.php" data-page-id="69044934">
              <div class="u-back-slide" data-image-width="800" data-image-height="522">
                <img class="u-back-image u-expanded" src="images/edycja7.jpg" alt="Edycja VII">
              </div>
              <div class="u-over-slide u-shading u-over-slide-7">
                <h3 class="u-gallery-heading">Edycja VII</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_8.php" data-page-id="753820253">
              <div class="u-back-slide" data-image-width="800" data-image-height="522">
                <img class="u-back-image u-expanded" src="images/edycja8.jpg" alt="Edycja VIII">
              </div>
              <div class="u-over-slide u-shading u-over-slide-8">
                <h3 class="u-gallery-heading">Edycja VIII</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_9.php" data-page-id="553320051">
              <div class="u-back-slide" data-image-width="800" data-image-height="522">
                <img class="u-back-image u-expanded" src="images/edycja9.jpg" alt="Edycja IX">
              </div>
              <div class="u-over-slide u-shading u-over-slide-9">
                <h3 class="u-gallery-heading">Edycja IX</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-hover-liftUp u-gallery-item u-radius-15 u-shape-round" data-href="EDYCJA_10.php" data-page-id="810822390">
              <div class="u-back-slide" data-image-width="1080" data-image-height="810">
                <img class="u-back-image u-expanded" src="images/1E309B60-CEAC-4FA8-A84C-9E6177EF1322.jpg" alt="Edycja X">
              </div>
              <div class="u-over-slide u-shading u-over-slide-10">
                <h3 class="u-gallery-heading">Edycja X</h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
  </body>
</html>