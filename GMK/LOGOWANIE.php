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
    <title>LOGOWANIE</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/LOGOWANIE.css" media="screen">
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
    <meta property="og:title" content="LOGOWANIE">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
  <body class="u-body">
    
<?php
if(!isset($_SESSION["logged_data"]))
 require_once "html_menu/headernologged.html";
else require_once "html_menu/headerislogged.html";
 
?>
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-635a">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-border-1 u-border-grey-75 u-clearfix u-image u-shading u-section-2" id="carousel_ae14" data-image-width="1599" data-image-height="1131">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1">Logowanie</h2>
            <div class="u-form u-form-1">

              <form action="login.php" method="POST" class="u-clearfix u-form-spacing-15 u-form u-inner-form" style="padding: 0;" source="custom" name="form">
                <div class="u-form-group u-form-name">
                  <label for="name-daf4" class="u-label">Login</label>
                  <input type="text" placeholder="Wpisz swój login" id="name-daf4" name="login" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" >
                </div>
                <div class="u-form-group">
                  <label for="email-daf4" class="u-label">Hasło</label>
                  <input placeholder="Wpisz swoje hasło" id="email-daf4" name="password" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white"  type="password">
                </div>
                <div class="u-form-checkbox u-form-group u-form-group-3" style="margin-top:20px;">
                  <input type="checkbox" id="checkbox-35f7" name="checkbox" value="On">
                  <label for="checkbox-35f7" class="u-label">Nie wylogowuj mnie</label>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-active-grey-90 u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-1 u-radius-15 u-text-white u-btn-1">Zaloguj</a>
                  <input  type="submit"  name=""   class="u-form-control-hidden">
                   <!--  
                
                <input type="hidden" value="" name="recaptchaResponse">
           -->

                  


                  
                </div>
                
          
              </form>
             
              
            </div>
            
            
            
          </div>
          
        </div>
        
      </div>
    
    </section>
   
   
    

  </body>
</html>