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
    <title>REJESTRACJA</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/REJESTRACJA.css" media="screen">
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
    <meta property="og:title" content="REJESTRACJA">
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
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-7214">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-border-1 u-border-grey-75 u-clearfix u-image u-shading u-section-2" id="carousel_ae14" data-image-width="1599" data-image-height="1131">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-1">Zarejestruj</h2>
            <div class="u-form u-form-1">
              <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form">
                <div class="u-form-group u-form-name">
                  <label for="name-daf4" class="u-label">Login</label>
                  <input type="text" placeholder="Wpisz swój login" id="name-daf4" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-group">
                  <label for="email-daf4" class="u-label">Hasło</label>
                  <input type="text" placeholder="Wpisz swoje hasło" id="email-daf4" name="haslo" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-ea2b" class="u-label">Powtórz hasło</label>
                  <input type="text" placeholder="Powtórz hasło" id="text-ea2b" name="haslo-1" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-active-grey-90 u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-1 u-radius-15 u-text-white u-btn-1">Zarejestruj</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <p class="u-text u-text-default u-text-2">
              <a class="u-active-none u-border-2 u-border-active-custom-color-2 u-border-hover-custom-color-4 u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-2 u-text-body-alt-color u-text-hover-custom-color-4 u-btn-2" href="LOGOWANIE.php" data-page-id="554320143">Zaloguj się</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    
    
    
  
  </body>
</html>