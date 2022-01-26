<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="O co tu chodzi?, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>KONTAKT</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/KONTAKT.css" media="screen">
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
    <meta property="og:title" content="KONTAKT">
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
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-679a">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-2" id="carousel_eb39" data-image-width="1599" data-image-height="1131">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-title u-text-1">Skontaktuj się z nami</h1>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-body-alt-color u-text-2">Kontakt</h2>
                  <p class="u-custom-font u-heading-font u-text u-text-body-alt-color u-text-3">
                    <span style="font-weight: 700;">Kontakt telefoniczny:</span>
                    <br>
                    <span style="font-weight: 700;"></span>
                  </p>
                  <a href="https://nicepage.com/c/sale-html-templates" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-white u-btn-1"><span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+48 605 034 142
                  </a>
                  <a href="https://nicepage.com/c/sale-html-templates" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-white u-btn-2"><span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+48 605 034 142
                  </a>
                  <p class="u-text u-text-4">
                    <span style="font-weight: 700;"> Poczta elektroniczna:<br>
                    </span>gramiejskakoscian@gmail.com
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                      <div class="u-form-address u-form-group u-form-group-1">
                        <label for="address-452f" class="u-form-control-hidden u-label u-text-body-alt-color u-label-1"></label>
                        <input type="text" placeholder="Imię i Nazwisko" id="address-452f" name="name" class="u-input u-input-rectangle u-radius-15 u-white" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-2"></label>
                        <input type="email" placeholder="E-mail" id="email-319a" name="email" class="u-input u-input-rectangle u-radius-15 u-white" required="">
                      </div>
                      <div class="u-form-group u-form-name">
                        <label for="name-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-3"></label>
                        <input type="text" placeholder="Nr. telefonu" id="name-319a" name="phone" class="u-input u-input-rectangle u-radius-15 u-white" required="">
                      </div>
                      <div class="u-form-group u-form-message">
                        <label for="message-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-4"></label>
                        <textarea placeholder="Treść wiadomości" rows="4" cols="50" id="message-319a" name="message" class="u-input u-input-rectangle u-radius-15 u-white" required=""></textarea>
                      </div>
                      <div class="u-align-right u-form-group u-form-submit">
                        <a href="#" class="u-border-3 u-border-hover-custom-color-2 u-border-white u-btn u-btn-round u-btn-submit u-button-style u-none u-radius-15 u-btn-3">Wyślij</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
  </body>
</html>