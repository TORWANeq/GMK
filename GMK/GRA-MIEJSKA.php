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
    <title>GRA MIEJSKA</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/GRA-MIEJSKA.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Gra Miejska Kościan",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="GRA MIEJSKA">
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
    <section class="u-clearfix u-section-4" id="sec-91e1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-43 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-center u-custom-font u-font-ubuntu u-text u-text-1"> Chcesz wziąć udział w grze miejskiej <span class="u-text-black">
                      <span class="u-text-custom-color-1">"Kryptonim Wolność"</span>?
                    </span>
                  </h2>
                  <a href="REJESTRACJA_DRUZYNY.php" data-page-id="1153813719" class="u-active-grey-80 u-align-center-sm u-align-center-xs u-black u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-15 u-btn-1" data-animation-name="bounceIn" data-animation-duration="2500" data-animation-direction="" data-animation-delay="250">ZAREJESTRUJ DRUŻYNĘ</a>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-17 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2"><span class="u-align-center-sm u-align-center-xs u-icon u-icon-circle u-palette-3-light-1 u-spacing-10 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-72cc"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-72cc"><g><path d="M18,6h-5c0-1.7-1.3-3-3-3H6C5.4,3,5,2.6,5,2s0.4-1,1-1h13.5C19.8,1,20,0.8,20,0.5S19.8,0,19.5,0H6C4.9,0,4,0.9,4,2   s0.9,2,2,2h4c1.1,0,2,0.9,2,2H6c-3.3,0-6,2.7-6,6v8c0,2.2,1.8,4,4,4c1.1,0,2.1-0.4,2.8-1.2l4.6-4.7c0.2-0.1,0.3-0.2,0.5-0.2   s0.4,0.1,0.5,0.2l4.6,4.7c0.7,0.7,1.7,1.2,2.8,1.2c2.2,0,4-1.8,4-4v-8C24,8.7,21.3,6,18,6z M22,20c0,1.1-0.9,2-2,2   c-0.6,0-1.1-0.2-1.4-0.6l-4.5-4.5c0,0-0.9-0.9-2.1-0.9s-2.1,0.9-2.1,0.9l-4.5,4.5C5.1,21.8,4.6,22,4,22c-1.1,0-2-0.9-2-2v-8   c0-2.2,1.8-4,4-4h12c2.2,0,4,1.8,4,4V20z"></path><circle cx="17" cy="15" r="1"></circle><circle cx="17" cy="11" r="1"></circle><circle cx="15" cy="13" r="1"></circle><circle cx="19" cy="13" r="1"></circle><path d="M9,12H8v-1c0-0.6-0.4-1-1-1s-1,0.4-1,1v1H5c-0.6,0-1,0.4-1,1s0.4,1,1,1h1v1c0,0.6,0.4,1,1,1s1-0.4,1-1v-1h1   c0.6,0,1-0.4,1-1S9.6,12,9,12z"></path>
</g></svg></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-5" id="sec-bf7d">
      <div class="u-clearfix u-sheet u-valign-middle-md u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-xl u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h1 class="u-align-center u-text u-text-default-lg u-text-default-xl u-text-palette-3-base u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">10 lat</h1>
                <p class="u-align-center u-text u-text-2">ROZGRYWANIA&nbsp;<br>GIER MIESJKICH
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h1 class="u-align-center u-text u-text-default-lg u-text-default-xl u-text-palette-3-base u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">10</h1>
                <p class="u-align-center u-text u-text-4">
                  <span style="font-weight: 700;"></span>PRZEPROWADZONYCH&nbsp;<br>GIER MIEJSKICH
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h1 class="u-align-center u-text u-text-default-lg u-text-default-xl u-text-palette-3-base u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">100%</h1>
                <p class="u-align-center u-text u-text-6">ZADOWOLONYCH UCZESTNIKÓW</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-6" id="sec-6077">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-xs u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="2"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="3"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="4"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="5"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="6"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="7"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="8"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-1">
                <img alt="" class="u-align-center-md u-align-center-sm u-align-center-xs u-image u-image-default u-image-1" data-image-width="800" data-image-height="556" src="images/edycj1.jpg" data-href="EDYCJA_1.php" data-page-id="81886457">
                <h4 class="u-text u-text-default u-text-1">Edycja I</h4>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide u-carousel-item-2">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-image u-image-2" src="images/edycja2.jpg" data-image-width="800" data-image-height="556" data-href="EDYCJA_2.php" data-page-id="905930289">
                <h2 class="u-text u-text-default u-text-2">Edycja II<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide u-carousel-item-3">
              <div class="u-container-layout u-container-layout-3">
                <img class="u-image u-image-default u-image-3" src="images/edycja3.jpg" alt="" data-image-width="800" data-image-height="556" data-href="EDYCJA_3_MISJE.php" data-page-id="521510318">
                <h2 class="u-text u-text-default u-text-3">Edycja III<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-4">
                <img class="u-align-center u-image u-image-round u-radius-25 u-image-4" src="images/edycja4.jpg" alt="" data-image-width="800" data-image-height="669" data-href="EDYCJA_4.php" data-page-id="689128378">
                <h2 class="u-text u-text-default u-text-4">Edycja IV</h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-round u-radius-25 u-image-5" src="images/edycj5.jpg" alt="" data-image-width="800" data-image-height="669" data-href="EDYCJA_5.php" data-page-id="765711927">
                <h2 class="u-text u-text-default u-text-5">Edycja V<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-6">
                <img class="u-image u-image-default u-image-6" src="images/edycja61.jpg" alt="" data-image-width="800" data-image-height="522" data-href="EDYCJA_6.php" data-page-id="2134617047">
                <h2 class="u-text u-text-default u-text-6">Edycja VI<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-7">
                <img class="u-image u-image-round u-radius-25 u-image-7" src="images/edycja7.jpg" alt="" data-image-width="800" data-image-height="522" data-href="EDYCJA_7.php" data-page-id="69044934">
                <h2 class="u-text u-text-default u-text-7">Edycja VII<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-8">
                <img class="u-image u-image-round u-radius-25 u-image-8" src="images/edycja8.jpg" alt="" data-image-width="800" data-image-height="522" data-href="EDYCJA_8.php" data-page-id="753820253">
                <h2 class="u-text u-text-default u-text-8">Edycja VIII<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide u-carousel-item-9">
              <div class="u-container-layout u-container-layout-9">
                <img class="u-image u-image-default u-image-9" src="images/1E309B60-CEAC-4FA8-A84C-9E6177EF1322.jpg" alt="" data-image-width="1080" data-image-height="810">
                <h2 class="u-text u-text-default u-text-9">Edycja X<span style="font-weight: 700;"></span>
                </h2>
              </div>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-gradient u-icon-circle u-spacing-9 u-text-hover-white u-text-white u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-gradient u-icon-circle u-spacing-9 u-text-hover-white u-text-white u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
        <div class="u-align-center u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-10">
            <h2 class="u-text u-text-body-color u-text-10">Galeria wszytkich Edycji Gry Miejskiej</h2>
            <a href="GALERIA.php" data-page-id="152050981" class="u-active-grey-80 u-black u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-15 u-btn-1" data-animation-name="bounceIn" data-animation-duration="2500" data-animation-direction="" data-animation-delay="250">GALERIA EDYCJI</a>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
  </body>
</html>