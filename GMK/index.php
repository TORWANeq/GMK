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
    <title>STRONA_GLOWNA</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/index.css" media="screen">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/nicepage.js"></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Gra Miejska Kościan",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="STRONA_GLOWNA">
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
  <body class="u-body u-stick-footer">
  <?php
if(!isset($_SESSION["logged_data"]))
 require_once "html_menu/headernologged.html";
else require_once "html_menu/headerislogged.html";
 
?>
    <section class="u-clearfix u-custom-color-1 u-section-1" id="carousel_af34">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-image u-section-2" id="carousel_e317" data-image-width="1024" data-image-height="683">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-91d0">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-4" id="carousel_0c7d" data-image-width="1295" data-image-height="769">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">O co tu chodzi?</h2>
        <p class="u-text u-text-2">Warto wiedzieć czym naprawdę jest gra miejska - jest to wykorzystanie przestrzeni miejskiej i osadzenie w niej fabuły rozgrywki. Ludzie są łączeni w grupy składających sie z 5 do 8 osób. Współpraca i przekazywanie informacji doprowadzi ich do rozwiązania zagadki.</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-1" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="" data-animation-delay="0"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a8d"></use></svg><svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-6a8d" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            
            
          </span>
                <h4 class="u-text u-text-3">poznawaj</h4>
                <p class="u-text u-text-4">Gra odbywa się na całym terenie Kościana, <br>dostarczymy wam niezapomnianych wrażeń poprzez <br>fabularną zabawę.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-2" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="" data-animation-delay="0"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c4c2"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c4c2" style="enable-background:new 0 0 512 512;"><g id="B_-_102_x2C__target_x2C__Aim_x2C__archive_x2C__business_x2C__goal_x2C__mission_x2C__success"><g><path d="M248.43,103.943c32.703,0,62.638,11.959,85.554,31.737l33.452-33.451    c-31.525-28.266-73.26-45.494-119.006-45.494c-49.339,0-94,20.029-126.277,52.31c-32.368,32.321-52.351,76.979-52.351,126.277    c0,49.34,19.982,93.956,52.351,126.278c32.276,32.323,76.938,52.31,126.277,52.31c17.982,0,35.294-2.675,51.685-7.61l0,0    l0.086-0.041l0,0h0.078l0.25-0.084l0.172-0.042l1.67-0.543l0.25-0.043l0.172-0.083l0.584-0.167l0.252-0.084l0,0l0.165-0.084    l0.421-0.125l0.164-0.042l0.25-0.083l0.17-0.084l0.25-0.042l0.165-0.083l0.257-0.042l0.164-0.085h0.086l0.079-0.083l0.257-0.041    l0.164-0.084l0.25-0.084l0.171-0.042l0.25-0.083l0.165-0.084l0.25-0.083l0.17-0.041l0.164-0.085h0.086l0.165-0.042l0.171-0.083    l0.164-0.083l0.25-0.085l0.586-0.208l0.171-0.042l0.415-0.168l0.17-0.042v-0.041l0.25-0.042    c24.502-9.032,46.496-23.29,64.644-41.396c32.282-32.322,52.267-76.938,52.267-126.278c0-45.744-17.227-87.475-45.492-119.044    l-33.453,33.41c19.818,22.999,31.782,52.936,31.782,85.635c0,36.294-14.72,69.161-38.472,92.911    c-23.836,23.75-56.619,38.47-92.914,38.47c-36.295,0-69.158-14.72-92.908-38.47c-23.752-23.75-38.473-56.616-38.473-92.911    c0-36.252,14.721-69.118,38.473-92.911C179.272,118.662,212.135,103.943,248.43,103.943 M248.43,150.65    c19.738,0,38.05,6.816,52.435,18.189l28.436-28.475c-21.745-18.566-50.01-29.813-80.871-29.813    c-34.454,0-65.646,13.965-88.225,36.545c-22.581,22.58-36.545,53.772-36.545,88.227c0,34.455,13.964,65.648,36.545,88.228    c22.58,22.579,53.771,36.545,88.225,36.545c34.458,0,65.65-13.966,88.23-36.545c22.582-22.58,36.545-53.773,36.545-88.228    c0-30.858-11.287-59.124-29.854-80.91l-28.435,28.475c11.373,14.426,18.147,32.657,18.147,52.435    c0,23.375-9.445,44.574-24.751,59.877c-15.393,15.346-36.546,24.796-59.882,24.796c-23.417,0-44.57-9.45-59.876-24.796    c-15.392-15.304-24.837-36.503-24.837-59.877c0-23.374,9.445-44.574,24.837-59.877C203.86,160.141,225.014,150.65,248.43,150.65z     M263.985,205.761c-4.683-2.426-9.951-3.805-15.555-3.805c-9.196,0-17.478,3.637-23.495,9.575l-0.171,0.167    c-6.019,6.064-9.781,14.426-9.781,23.625c0,9.241,3.762,17.604,9.781,23.625c6.024,6.064,14.385,9.785,23.667,9.785    c9.202,0,17.561-3.764,23.586-9.785c6.019-6.021,9.781-14.384,9.781-23.625c0-5.603-1.421-10.871-3.842-15.513l-22.501,22.538    c-1.921,1.922-4.512,2.926-7.024,2.926c-2.592,0-5.098-1.004-7.026-2.926c-1.921-1.925-2.927-4.475-2.927-7.025    c0-2.55,1.006-5.101,2.927-7.025L263.985,205.761z M248.43,195.307c7.445,0,14.384,2.049,20.41,5.604l27.343-27.346    c-13.214-10.244-29.771-16.308-47.752-16.308c-21.575,0-41.058,8.738-55.279,22.872c-14.049,14.134-22.831,33.661-22.831,55.195    c0,21.576,8.782,41.062,22.831,55.194c14.221,14.134,33.704,22.872,55.279,22.872c21.495,0,41.063-8.738,55.199-22.872    c14.135-14.132,22.831-33.618,22.831-55.194c0-17.98-6.104-34.538-16.306-47.709l-27.352,27.304    c3.6,5.98,5.605,12.963,5.605,20.406c0,11.039-4.434,21.032-11.708,28.308c-7.196,7.234-17.227,11.708-28.27,11.708    c-11.038,0-21.076-4.474-28.35-11.708c-7.189-7.276-11.707-17.269-11.707-28.308c0-11.039,4.518-21.032,11.707-28.308l0.25-0.167    C227.525,199.697,237.478,195.307,248.43,195.307z M168.736,403.625l-41.4,67.905l27.351-6.439l33.446-53.814    c-3.091-1.004-6.189-2.133-9.281-3.303C175.425,406.635,172.077,405.171,168.736,403.625z M94.974,235.323    c0,1.84-1.506,3.303-3.348,3.303c-1.756,0-3.262-1.463-3.262-3.303c0-44.196,17.898-84.213,46.832-113.19    c29.021-28.936,68.993-46.873,113.234-46.873c1.841,0,3.262,1.505,3.262,3.303c0,1.84-1.421,3.345-3.262,3.345    c-42.399,0-80.786,17.145-108.55,44.909C112.116,154.58,94.974,192.965,94.974,235.323z M419.624,58.032l1.335-17.563    L407.41,54.979l-1.338,17.562L419.624,58.032z M219.83,448.072c-1.756,0-3.262-1.505-3.262-3.346c0-1.839,1.506-3.303,3.262-3.303    h105.209l-18.733-30.106c6.69-2.216,13.215-4.767,19.482-7.692l41.313,67.905l-27.35-6.439l-10.615-17.019H219.83z     M250.772,237.665c-1.335,1.296-3.427,1.296-4.684,0c-1.336-1.297-1.336-3.387,0-4.683l153.63-153.625    c1.25-1.296,3.342-1.296,4.684,0c1.25,1.297,1.25,3.388,0,4.684L250.772,237.665z M424.471,62.547l-13.627,14.551l0.164,0.251    l17.312-1.923l13.879-15.472L424.471,62.547z" style="fill-rule:evenodd;clip-rule:evenodd;"></path>
</g>
</g></svg>
            
            
          </span>
                <h4 class="u-text u-text-5">Wykonuj zadania</h4>
                <p class="u-text u-text-6">W naszych grach stawiamy na róznorodne zadania oraz na intergację <br>w zespołach. Dzięki uniwersalnej formule gry każdy będzie w stanie wykonać określone zadania.&nbsp;<br>
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-3" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="" data-animation-delay="0"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2dfb"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-2dfb" style="enable-background:new 0 0 60 60;"><g><path d="M55.014,45.389l-9.553-4.776C44.56,40.162,44,39.256,44,38.248v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
		c1.239-1.75,2.232-3.698,2.954-5.799C49.084,27.47,50,26.075,50,24.5v-4c0-0.963-0.36-1.896-1-2.625v-5.319
		c0.056-0.55,0.276-3.824-2.092-6.525C44.854,3.688,41.521,2.5,37,2.5s-7.854,1.188-9.908,3.53
		c-2.368,2.701-2.148,5.976-2.092,6.525v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109
		c0.916,3.627,2.833,6.36,3.503,7.237v3.309c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866c-2.9,1.582-4.701,4.616-4.701,7.92V57.5
		h46v-4.043C60,50.019,58.089,46.927,55.014,45.389z"></path><path d="M17.983,44.025l8.921-4.866c0.367-0.201,0.596-0.586,0.596-1.004v-2.814c-0.885-1.232-2.446-3.712-3.337-6.91
		C23.1,27.399,22.5,25.994,22.5,24.5v-4c0-1.124,0.352-2.219,1-3.141v-4.733c-0.034-0.383-0.074-1.269,0.096-2.395
		C22.219,9.751,20.687,9.5,19,9.5c-10.389,0-10.994,8.855-11,9v4.579c-0.648,0.706-1,1.521-1,2.33v3.454
		c0,1.079,0.483,2.085,1.311,2.765c0.825,3.11,2.854,5.46,3.644,6.285v2.743c0,0.787-0.428,1.509-1.171,1.915l-6.653,4.173
		C1.583,48.134,0,50.801,0,53.703V57.5h12.5v-4.238C12.5,49.409,14.601,45.87,17.983,44.025z"></path>
</g></svg>
            
            
          </span>
                <h4 class="u-text u-text-7">Współpracuj</h4>
                <p class="u-text u-text-8"> Nasze gry to wyjątkowe połączenie rywalizacji&nbsp;<br>i współpracy. <br> Działajcie razem jako grupa by pokonać  pozostałe zespoły! <br> To najlepsza recepta na udaną zabawę i wspólne spędzanie czasu.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-4" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="" data-animation-delay="0"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-12c2"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-12c2" style="enable-background:new 0 0 60 60;"><g><path d="M35.493,24h2c0.553,0,1-0.447,1-1s-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1S34.94,24,35.493,24z"></path><path d="M31.995,31c-0.433-0.001-0.854-0.078-1.252-0.23c-0.512-0.195-1.093,0.062-1.291,0.578
		c-0.196,0.516,0.063,1.094,0.578,1.291c0.626,0.238,1.285,0.36,1.963,0.361h0.357c0.553,0,1-0.447,1-1s-0.447-1-1-1H31.995z"></path><path d="M29.621,24.676c0.181,0,0.363-0.049,0.528-0.151c0.443-0.276,0.933-0.445,1.454-0.503c0.549-0.061,0.945-0.555,0.885-1.104
		s-0.551-0.941-1.104-0.885c-0.822,0.091-1.594,0.357-2.294,0.794c-0.469,0.292-0.611,0.909-0.319,1.378
		C28.961,24.509,29.287,24.676,29.621,24.676z"></path><path d="M35.993,40c-0.086,0-0.171,0.002-0.256,0.006c-0.552,0.022-0.98,0.488-0.958,1.04c0.021,0.538,0.465,0.959,0.998,0.959
		c0.014,0,0.028,0,0.042-0.001L37.778,42c0.553,0,1-0.447,1-1s-0.447-1-1-1H35.993z"></path><path d="M43.493,24c0.553,0,1-0.447,1-1s-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1H43.493z"></path><path d="M47.778,40c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1s-0.447-1-1-1H47.778z"></path><path d="M51.351,32c0-0.553-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2C50.903,33,51.351,32.553,51.351,32z"></path><path d="M41.778,42h2c0.553,0,1-0.447,1-1s-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1S41.226,42,41.778,42z"></path><path d="M45.351,32c0-0.553-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2C44.903,33,45.351,32.553,45.351,32z"></path><path d="M36.351,31c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1s-0.447-1-1-1H36.351z"></path><path d="M24.064,58h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S24.616,58,24.064,58z"></path><path d="M18.064,58h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S18.616,58,18.064,58z"></path><path d="M52.604,54.517c-0.539-0.121-1.074,0.217-1.195,0.756c-0.115,0.51-0.338,0.979-0.663,1.392
		c-0.341,0.434-0.267,1.063,0.168,1.404c0.184,0.144,0.401,0.214,0.617,0.214c0.297,0,0.59-0.131,0.787-0.382
		c0.504-0.64,0.864-1.396,1.042-2.188C53.481,55.173,53.143,54.638,52.604,54.517z"></path><path d="M51.531,52.719c0.216,0,0.435-0.07,0.617-0.214c0.435-0.342,0.509-0.971,0.168-1.404c-0.503-0.639-1.152-1.167-1.879-1.528
		c-0.497-0.247-1.095-0.044-1.341,0.45c-0.246,0.495-0.044,1.095,0.45,1.341c0.463,0.229,0.877,0.566,1.197,0.974
		C50.941,52.588,51.234,52.719,51.531,52.719z"></path><path d="M47.065,50c0-0.553-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2C46.617,51,47.065,50.553,47.065,50z"></path><path d="M47.993,58h-1.93c-0.553,0-1,0.447-1,1s0.447,1,1,1l1.971-0.001l0.029-1v1c0.553,0,0.965-0.447,0.965-1
		C49.028,58.447,48.546,58,47.993,58z"></path><path d="M59.426,35.632c-0.088-0.546-0.603-0.919-1.146-0.829c-0.546,0.087-0.917,0.601-0.829,1.146
		c0.028,0.178,0.044,0.359,0.042,0.552c0,0.336-0.048,0.668-0.142,0.988c-0.155,0.53,0.148,1.086,0.679,1.241
		c0.094,0.027,0.188,0.04,0.281,0.04c0.433,0,0.832-0.282,0.96-0.719c0.147-0.503,0.222-1.024,0.222-1.543
		C59.495,36.22,59.473,35.925,59.426,35.632z"></path><path d="M28.029,29.855c0.524-0.173,0.81-0.738,0.638-1.263c-0.115-0.351-0.174-0.718-0.174-1.088
		c0.001-0.151,0.01-0.302,0.028-0.449c0.069-0.548-0.319-1.049-0.867-1.117c-0.565-0.063-1.049,0.321-1.117,0.867
		c-0.028,0.226-0.043,0.456-0.044,0.694c0,0.588,0.092,1.166,0.273,1.718c0.139,0.421,0.53,0.688,0.95,0.688
		C27.82,29.905,27.926,29.89,28.029,29.855z"></path><path d="M56.746,31.738c-0.714-0.414-1.494-0.657-2.317-0.722c-0.549-0.04-1.032,0.367-1.075,0.919
		c-0.043,0.551,0.368,1.032,0.919,1.075c0.522,0.041,1.017,0.195,1.47,0.458c0.158,0.092,0.331,0.135,0.501,0.135
		c0.345,0,0.681-0.179,0.866-0.498C57.387,32.628,57.224,32.016,56.746,31.738z"></path><path d="M55.345,39.729C54.916,39.909,54.462,40,53.993,40h-0.215c-0.553,0-1,0.447-1,1s0.447,1,1,1h0.215
		c0.736,0,1.451-0.144,2.125-0.427c0.51-0.214,0.749-0.8,0.535-1.309C56.44,39.755,55.85,39.515,55.345,39.729z"></path><path d="M32.555,44.839c0.099-0.514,0.307-0.989,0.619-1.413c0.327-0.444,0.232-1.07-0.213-1.398
		c-0.445-0.326-1.07-0.232-1.398,0.213c-0.489,0.666-0.817,1.413-0.973,2.222c-0.104,0.542,0.251,1.066,0.794,1.171
		c0.063,0.012,0.127,0.018,0.189,0.018C32.043,45.65,32.462,45.317,32.555,44.839z"></path><path d="M34.122,50.594c0.38,0,0.742-0.217,0.91-0.584c0.229-0.503,0.009-1.096-0.493-1.325c-0.469-0.215-0.894-0.538-1.228-0.936
		c-0.356-0.423-0.986-0.478-1.409-0.122c-0.423,0.355-0.478,0.986-0.122,1.409c0.524,0.623,1.19,1.131,1.927,1.467
		C33.842,50.564,33.983,50.594,34.122,50.594z"></path><path d="M30.064,58h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S30.616,58,30.064,58z"></path><path d="M36.064,58h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S36.616,58,36.064,58z"></path><path d="M41.065,50c0-0.553-0.447-1-1-1h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2C40.617,51,41.065,50.553,41.065,50z"></path><path d="M42.064,58h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S42.616,58,42.064,58z"></path><path d="M21.021,28.977C18.75,26.412,15.722,25,12.493,25s-6.257,1.412-8.527,3.977c-4.612,5.211-4.612,13.688,0,18.899
		l8.527,9.633l8.527-9.633C25.633,42.665,25.633,34.188,21.021,28.977z M12.493,43c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6
		S15.802,43,12.493,43z"></path><path d="M48.747,24.507l6.464-7.286c3.478-3.92,3.478-10.296,0-14.216C53.491,1.067,51.195,0,48.746,0
		c-2.448,0-4.744,1.067-6.464,3.005c-3.477,3.92-3.477,10.296,0,14.216L48.747,24.507z M48.993,4c3.032,0,5.5,2.468,5.5,5.5
		s-2.468,5.5-5.5,5.5s-5.5-2.468-5.5-5.5S45.961,4,48.993,4z"></path>
</g></svg>
            
            
          </span>
                <h4 class="u-text u-text-9">osiągaj cele</h4>
                <p class="u-text u-text-10">Zapisz się i dołacz do zabawy, osiągajcie coraz wyższe wyniki oraz wygrywajcie nagrody.<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-5" id="sec-68ee">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-6" id="sec-cd96">
      <div class="u-align-left u-clearfix u-sheet u-valign-bottom u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-1">Gra Miejska <span class="u-text-custom-color-1">"KRYPTONIM WOLNOŚĆ"</span>
        </h2>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-7" id="carousel_6201">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-22 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-similar-fill u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-xs u-container-layout-1">
                      <img class="u-align-center u-expanded-width-xs u-image u-image-default u-image-1" src="images/264024081_308995590943396_8639479821853316757_n.png" alt="" data-image-width="1920" data-image-height="1080">
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-38 u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-right-cell u-similar-fill u-size-60 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <p class="u-text u-text-1">
                        <span style="font-weight: 700;"> Zapraszamy do zarejestrowania się do Gry Miejskiej w Kościanie.</span>
                        <br> Wyjątkowo w tym roku, w sobotę<br>&nbsp;2 pażdziernika 2021 odbędzie się jubileuszowa 10. edycja gry miejskiej „Kryptonim Wolność”. Zazwyczaj gra odbywała się w połowie lutego w rocznice Rozejmu w Trewirze, który w teorii kończył działania na frontach Powstania Wielkopolskiego. 2 października to smutna, 82 rocznica rozstrzelań ludności cywilnej na Rynku w Kościanie, podczas II Wojny Światowej. Wojska niemieckie mordowały wówczas również Powstańców Wielkopolskich. Trzeba również pamiętać&nbsp;o tragicznych momentach naszej historii.
                      </p>
                      <a href="REJESTRACJA_DRUZYNY.php" data-page-id="1153813719" class="u-active-grey-80 u-black u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-15 u-text-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="2500" data-animation-direction="" data-animation-delay="250">ZAREJESTRUJ DRUŻYNĘ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-8" id="sec-1aed">
      <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-width-fixed u-gallery-1" id="carousel-eedc">
        <div class="u-gallery-inner u-gallery-inner-1" role="listbox"><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-1"><div class="u-back-slide" data-image-width="2048" data-image-height="1367"><img class="u-back-image u-back-image-1" src="images/262023967_948676026046127_3398300960780287011_n.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-1"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-2"><div class="u-back-slide" data-image-width="2048" data-image-height="1367"><img class="u-back-image u-back-image-2" src="images/41.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-2"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-3"><div class="u-back-slide" data-image-width="2048" data-image-height="1365"><img class="u-back-image u-back-image-3" src="images/31.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-3"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-4"><div class="u-back-slide" data-image-width="1944" data-image-height="1296"><img class="u-back-image u-back-image-4" src="images/51.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-4"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-5"><div class="u-back-slide" data-image-width="2048" data-image-height="1365"><img class="u-back-image u-back-image-5" src="images/61.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-5"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-6"><div class="u-back-slide" data-image-width="1600" data-image-height="1067"><img class="u-back-image u-back-image-6" src="images/81.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-6"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-7" data-image-width="720" data-image-height="480"><div class="u-back-slide" data-image-width="2048" data-image-height="1367"><img class="u-back-image u-back-image-7" src="images/101.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-7"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-8"><div class="u-back-slide" data-image-width="1600" data-image-height="1066"><img class="u-back-image u-back-image-8" src="images/71.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-8"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-9" data-image-width="2048" data-image-height="1365"><div class="u-back-slide"><img class="u-back-image u-back-image-9" src="images/15.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-9"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-10" data-image-width="2048" data-image-height="1365"><div class="u-back-slide"><img class="u-back-image u-back-image-10" src="images/13.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-10"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-11" data-image-width="2048" data-image-height="1365"><div class="u-back-slide"><img class="u-back-image u-back-image-11" src="images/12.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-11"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-12" data-image-width="1936" data-image-height="1296"><div class="u-back-slide"><img class="u-back-image u-back-image-12" src="images/17.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-12"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-13" data-image-width="2048" data-image-height="1365"><div class="u-back-slide"><img class="u-back-image u-back-image-13" src="images/16.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-13"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-radius-15 u-shape-round u-gallery-item-14" data-image-width="1944" data-image-height="1296"><div class="u-back-slide"><img class="u-back-image u-back-image-14" src="images/18.jpg">
</div><div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-14"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div></div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-9" id="sec-446d">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-10" id="carousel_eb39" data-image-width="1599" data-image-height="1131">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center-sm u-align-center-xs u-text u-title u-text-1">Skontaktuj się z nami</h1>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-25-md u-size-25-sm u-size-25-xs u-size-30-lg u-size-30-xl u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
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
              <div class="u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-35-md u-size-35-sm u-size-35-xs u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                      <div class="u-form-address u-form-group u-form-group-1">
                        <label for="address-452f" class="u-form-control-hidden u-label u-text-body-alt-color u-label-1"></label>
                        <input type="text" placeholder="Imię i Nazwisko" id="address-452f" name="address" class="u-input u-input-rectangle u-radius-15 u-white" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-2"></label>
                        <input type="email" placeholder="E-mail" id="email-319a" name="email" class="u-input u-input-rectangle u-radius-15 u-white" required="">
                      </div>
                      <div class="u-form-group u-form-name">
                        <label for="name-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-3"></label>
                        <input type="text" placeholder="Nr. telefonu" id="name-319a" name="name" class="u-input u-input-rectangle u-radius-15 u-white" required="">
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
    </script>
  </body>
</html>