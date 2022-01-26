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
    <title>EDYCJA_1_4</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/EDYCJA_1_4.css" media="screen">
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
    <meta property="og:title" content="EDYCJA_1_4">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-4eb2" data-image-width="1200" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-fa4d">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-right u-clearfix u-section-4" id="carousel_3626">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-1">
                  <img class="u-image u-image-round u-radius-30 u-image-1" src="images/111.jpg" data-image-width="800" data-image-height="533">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Misji do wykonania było 10 oraz kilka bonusowych, łatwiejsze i trudniejsze. W ich wykonaniu czasem przeszkadzały patrole Służby Straży i Bezpieczeństwa, wierne powstałej w listopadzie 1918 roku Republice Weimarskiej. Tylko kilka drużyn zdołało wypełnić wszystkie zadania.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="sec-6035">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Oczywiście nie pozostawiliśmy graczy samym sobie. W aresztowaniu Komendanta Garnizonu Kościan, majora Raymann'a pomagała nawet sama Pola Negri - incognito ma się rozumieć.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                  <img class="u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/26.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-6" id="sec-bd86">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-29 u-image-1" src="images/36.jpg" data-image-width="800" data-image-height="556">
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
    <section class="u-align-right u-clearfix u-section-7" id="sec-c96b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Odbiór naszej gry wśród mieszkańców Kościana był bardzo pozytywny. Szczególnie serdecznie przyjęto zarówno organizatorów jak i uczestników gry w Kawiarniach: "Sweet Cafe" przy ul. Wrocławskiej 2 oraz "Saskia" przy Rynek 32/1. Dziękujemy też właścicielce lokalu przy Rynek 30 (gdzie onegdaj mieściła się restauracja pani Teodozji Siminskiej, która udostępniała swój lokal członkom "Rezerwy Skautowej"), za pomoc przy organizacji.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xl u-container-layout-2">
                  <img class="u-expanded-width-xs u-image u-image-round u-radius-30 u-image-1" src="images/43.jpg" data-image-width="800" data-image-height="533">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    

  </body>
</html>