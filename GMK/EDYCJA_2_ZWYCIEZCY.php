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
    <title>EDYCJA_2_ZWYCIEZCY</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/EDYCJA_2_ZWYCIEZCY.css" media="screen">
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
    <meta property="og:title" content="EDYCJA_2_ZWYCIEZCY">
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
    <section class="u-clearfix u-image u-shading u-section-2" id="sec-7b45" data-image-width="1200" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="sec-b518">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-0b0b">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> Ponownie najtrudniejszym zadaniem do zrealizowania była misja "Arsenał”, przeprowadzana na terenie Wojewódzkiego Szpitala Neuropsychiatrycznego. Kiedy drużyny zdobyły broń i amunicję oraz rozwiązały końcową zagadkę, Kościan został ponownie wyzwolony.</h1>
      </div>
    </section>
    <section class="u-align-right u-clearfix u-section-5" id="carousel_3626">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-34 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-1">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/z11.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-26 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-2">
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Rozbrojono wszystkie posterunki 37 pułku fizylierów i wszyscy zaczęli gromadzić się na Rynku.<br>
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
                  <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Finał nawiązywał już bezpośrednio do obchodów podpisania Rozejmu w Trewirze 16 lutego 1919. Odczytano fragment dotyczący Frontu Wielkopolskiego, ogłoszono wyniki rozgrywki i nagrodzono najlepsze drużyny. Na koniec wręczono pamiątkowe trefle wraz z legitymacjami wszystkim uczestnikom.<br>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/z21.jpg" data-image-width="800" data-image-height="533">
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
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-29 u-image-1" src="images/z31.jpg" data-image-width="800" data-image-height="556">
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
    <section class="u-align-right u-clearfix u-section-8" id="sec-c96b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-25 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-layout-cell u-size-35 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-2">
                  <img class="u-align-center-sm u-align-center-xs u-image u-image-round u-radius-30 u-image-1" src="images/z4.jpg" data-image-width="800" data-image-height="556">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-9" id="sec-288f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">
          <span style="font-weight: 700;"> MIEJSCE I</span>
          <br>
          <span style="font-size: 0.875rem;">DRUŻYNA: Podwale/ Leszno<br>Dowódca Drużyny: Mariusz Zakrzewski<br>Zosia Szabel-Zakrzewska<br>Przemek Szabel<br>Adam Szabel<br>Marysia Zakrzewska<br>40 punktów plus +15 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">
          <span style="font-weight: 700;">
            <span style="font-weight: 700;"></span>MIEJSCE II
          </span>
          <br>
          <span style="font-size: 0.875rem;">DRUŻYNA: Ellos tres veces dos Kościan<br>Dowódca Drużyny: Monika Marcinowska<br>Julia Andrzejewska<br>Alicja Suszka<br>Filip Kluczyński<br>40 punktów plus +12 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE III
            </span>
            <br>DRUŻYNA: Kościański Grom<br>Dowódca Drużyny: Dominik Nawrot<br>Kamil Markiewicz<br>Eryk Nowak<br>Karol Zakrzewski<br>Kamil Gnusowski<br>Bartosz Sekuĺa<br>Damian Michalski<br>40 punktów plus +12 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-4"><b>Pozostałe drużyny:</b>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span> MIEJSCE VI<br>
            </span>DRUŻYNA: Tajemnica/Kościan<br>Dowódca Drużyny: Małgorzata Drzewiecka<br>Julia Graf<br>Klaudia Bussler<br>Marta Nowicka<br>Dagmara Krajewska<br>Karolina Kasperska<br>39 punktów plus +8 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE V<br>
            </span>DRUŻYNA: Zwycięscy Zielarze<br>Dowódca Drużyny: Fryderyk Małecki<br>Dominika Woś<br>Joanna Linke<br>Filip Malikowski<br>Konrad Łukaszyk<br>Jakub Kąkolewski<br>Urszula Przybylska<br>Anita Płotkowiak<br>39 punktów plus +10 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-7">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE IV<br>
            </span>DRUŻYNA: K.B.W.<br>Dowódca Drużyny: Miłosz Sikora<br>Tomasz Zapłata<br>Jarosław Zielonka<br>Dominik Smardz<br>Eryk Furowicz<br>40 punktów plus +7 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-8">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE IX<br>
            </span>DRUŻYNA: Specnaz/Kościan<br>Dowódca : Adam Lewandowski<br>Szymon Menzel<br>Bartosz Pelczyński<br>Albert Maćkowiak<br>Julia Pelczyńska<br>Miłosz Majorczyk<br>Adam Chudziński<br>Patryk Jankiewicz<br>39 - 1 punkt karny = 38 punktów, plus +10 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-9">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;"></span>
            <span style="font-weight: 700;">MIEJSCE VIII</span>
            <br>DRUŻYNA No.7 Kościan<br>Dowódca Drużyny: Norbert Mikuła<br>Piotr Michalski<br>Patryk Biernat<br>Sebastian Pawłowski<br>Krystian Knop<br>Dominik Lokś<br>38 punktów plus +11 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-10">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE VII<br>
            </span>DRUŻYNA No.11 Kościan<br>Dowódca Drużyny: Piotr Michałowski<br>Natalia Górniak<br>Julia Kostrzyńska<br>Weronika Wyrzykiewicz<br>Hubert Kasztelan<br>Szymon Wojtkowiak<br>39 punktów plus +9 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-11">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE X<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: Za Wolność!/Leszno<br>Dowódca Drużyny: Anna Kaczmarek<br>Anna Kaczmarek<br>Ela Jarosz<br>Albert Cygan<br>Wojciech Klecha<br>Natalia Kwaśniewska<br>Paweł Kwaśniewski<br>38 punktów plus +7 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-12">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XI<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: Kompania 9/Kościan<br>Dowódca Drużyny: Albert Lisztwan<br>Mateusz Gryś<br>Mikołaj Donaj<br>Jędrzej Mądry<br>Łukasz Liberski<br>Kaczmarek Maria<br>Policka Katarzyna<br>38 punktów plus +5 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-13">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XII<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA No.1 Kościan<br>Dowodzący : Adam Napierała<br>Patrycja Kulińska<br>Krystian Napierała<br>Przemysł Gruszkiewicz<br>Artur Łabenski<br>38 punktów +3 bonusowe 
          </span>
          <br>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-10" id="sec-b393">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XIII<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: Pierwszy Patrol Kościańskiej Rezerwy Skautowej im. K. Żegockiego/Kościan<br>Dowódca Drużyny: Aleksander Szajek<br>Bartosz Wyrzykiewicz<br>Hubert Zemler<br>Kacper Schmidt<br>Jakub Zielonka<br>Wojciech Szajek<br>Aleksander Szajek<br>37 punktów plus +9 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XIV<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: 82. Grupa Harcerska Hufiec Kościan<br>Dowódca Drużyny: Patrycja Żur<br>Milena Skórzanek<br>Roksana Tomaszewska<br>Anna Waligóra<br>Maciej Olejnik<br>37 - 1 punkt karny = 36 punktów, plus +6 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XV<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: Nowy Lubosz-Kościan<br>Dowódca Drużyny: Alicja Lewandowska<br>Paweł Linke<br>Joanna Kowalczyk<br>Weronika Dominiczak<br>Julita Knoska<br>Marlena Bryszak<br>Zuzanna Majorek<br>35 punktów plus +7 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XVI<br>
            </span>
          </span>
          <span style="font-size: 0.875rem;">DRUŻYNA: Bastion<br>Dowódca Drużyny: Tomasz Olejnik<br>Filip Nawrot<br>Wiktor Dominiczak<br>Tymoteusz Potyrała<br>Szymon Ptaszyński<br>Bartosz Nowicki<br>36 - 2 punkty karne = 34 punkty, plus +7 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XVII<br>
            </span> DRUŻYNA: Prowokatorzy Kościan<br>Dowódca Drużyny: Mateusz Waliszewski<br>Natalia Witkowska<br>Malwina Frąckowiak<br>Nina Kunert<br>Sebastian Marach<br>33 - 1 punkt karny = 32 punkty, plus +4 bonusowe
          </span>
          <br>
        </p>
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">
          <span style="font-size: 0.875rem;">
            <span style="font-weight: 700;">
              <span style="font-weight: 700;"></span>MIEJSCE XVIII<br>
            </span> DRUŻYNA: Rawiczaki/Rawicz<br>Dowódca Drużyny: Maciej Skrzypczak<br>Agnieszka Węcłaś<br>Michał Balcerek<br>Karol Michalski<br>Mikołaj Obarski<br>29 - 1 punkt karny = 28 punktów
          </span>
          <br>
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-11" id="sec-3ba4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1"> Dziękujemy wszystkim, którzy wsparli naszą grę miejską:<br>Grupie Teatralnej przy Kościańskim Ośrodku Kultury;<br>Muzeum Regionalnemu im. dr. Henryka Florkowskiego w Kościanie;<br>Gazecie Kościańskiej, regionalistom i dziennikarzom z redakcji zrekonstruowanej "Gazety Polskiej";<br>Cukierni "Sweet Cafe";<br>Kawiarni "Saskia";<br>Towarzystwu Miłośników Miasta Lubonia Sekcja Historyczna;<br>&nbsp;Towarzystwu Działań Historycznych im. Feliksa Pięty;<br>GRH Frontowiec;<br>oraz wszystkim rekonstruktorom, którzy przybyli indywidualnie.<br>
        </p>
      </div>
    </section>
    
    
    

  </body>
</html>