<?php
session_start();
if (!isset($_SESSION["logged_data"])){ exit();}
?>   
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="css/nicepage2.css" media="screen">
	  <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/edytor.css" media="screen">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/nicepage2.js"></script>
    <meta name="generator" content="Nicepage 4.3.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Strona Główna">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">

  <?php
       if(!isset($_SESSION["logged_data"]))
        require_once "html_menu/headernologged.html";
       else require_once "html_menu/headerislogged.html";
        
       ?>


    <section class="u-align-right u-clearfix u-section-1" id="sec-adaf">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
            <input type="hidden" id="siteId" name="siteId" value="71968247">
            <input type="hidden" id="pageId" name="pageId" value="261274081">
            <div class="u-form-group u-form-name">
              <label for="search_field" class="u-label">TEAM</label>
              <div class="form-search-wrapper">
                <div class="search-icon"></div>  
                <input type="text" placeholder="Wprowadź nazwę drużyny" id="search_field" name="team_name" class="main-search-team u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
              </div>
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
          
        </div>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <div class="u-whole-table">
            <div class="u-table-row u-table-header">
              <div class="u-table-row-cell">ID</div>
              <div class="u-table-row-cell">Nazwa Drużyny</div>
              <div class="u-table-row-cell">Imię</div>
              <div class="u-table-row-cell">Nazwisko</div>
              <div class="u-table-row-cell">Data urodzenia</div>
              <div class="u-table-row-cell">Telefon</div>
              <div class="u-table-row-cell">Email</div>
              <div class="u-table-row-cell">Akcje</div>
            </div>
            <div id="teams_cell">
            <?php
              // require_once "php/TeamMember.php"; 
              // $alice = new TeamMember("1","Alice", "Hudges", "02/23/1997", "+1(231) 239 1230", "alice.hudges@hotmail.com");
              // $userData = [
              //   $alice, $alice,$alice, $alice,$alice, $alice,$alice, $alice
              // ];

              // for($i = 0;$i<count($userData);$i++) {
              //   $member = $userData[$i];
              //   $name = $member->getName();
              //   $lname = $member->getLName();
              //   $bday = $member->getBDate();
              //   $phone = $member->getPhone();
              //   $email = $member->getEmail();
              //   $index= $i+1;
              //   echo<<<EOL
              //   <div class="u-table-row">
              //     <div class="u-table-row-cell">$index</div>
              //     <div class="u-table-row-cell">$name</div>
              //     <div class="u-table-row-cell">$lname</div>
              //     <div class="u-table-row-cell">$bday</div>
              //     <div class="u-table-row-cell">$phone</div>
              //     <div class="u-table-row-cell">$email</div>
              //     <div class="u-table-row-cell">Akcje</div>
              //   </div>
              //   EOL;
              // }
            ?>
            </div>
          </div>
          <div class="u-table-row">
            <div class="u-table-row-cell"></div>
            <div class="u-table-row-cell"><input class="new_team" value="" placeholder="Team name"></div>
            <div class="u-table-row-cell"><input class="new_name" value="" placeholder="First name"></div>
            <div class="u-table-row-cell"><input class="new_lname" value="" placeholder="Last name"></div>
            <div class="u-table-row-cell"><input class="new_bday" value="" placeholder="Birthday"></div>
            <div class="u-table-row-cell"><input class="new_phone" value="" placeholder="Phone"></div>
            <div class="u-table-row-cell"><input class="new_email" value="" placeholder="Email"></div>
            <div class="u-table-row-cell"><button class="add_new_user">Add User</button></div>
          </div>        
        </div>
      </div>
      <script type="text/javascript">
        (function(w,d,log){
            function getPerson(value) {
              $.ajax({
                url: "php/async_search.php",
                method: "POST",
                dataType: "json",
                data: value,
                complete: function(response) {
                  log(response.responseText);
                  let json = JSON.parse(response.responseText);
                  let field = d.getElementById("teams_cell");
                  field.innerHTML ="";
                  results = json;
                  for(var i=0; i< json.length; i++) {
                    let row=json[i];
                    field.innerHTML += `<div class="u-table-row">
                        <div class="u-table-row-cell">${i+1}</div>
                        <div class="u-table-row-cell">${row["teamName"]}</div>
                        <div class="u-table-row-cell"><input class="cell_name" value="${row["fName"]}" placeholder="First Name"></div>
                        <div class="u-table-row-cell"><input class="cell_lname" value="${row["lName"]}" placeholder="Last Name"></div>
                        <div class="u-table-row-cell"><input class="cell_bday" value="${row["birthday"]}" placeholder="08/26/1997"></div>
                        <div class="u-table-row-cell"><input class="cell_phone" value="${row["mobile"]}" placeholder="+48 643 832 120" maxlength="16"></div>
                        <div class="u-table-row-cell"><input class="cell_email" value="${row["emailAddress"]}" placeholder="email@simple.email"></div>
                        <div class="u-table-row-cell"><button class="save_row">Save</button><button class="delete_user">Delete</button></div>
                      </div>`;
                  }
                }
              });
            }

            var results = [];
            w.onload= function(){
              getPerson({"search_value":"1", "all_records": 1});
              let searchField = d.getElementById("search_field");
              searchField.addEventListener("keyup", function(e){
                let value = searchField.value;
                if((value.trim()).length < 1) {
                  getPerson({"search_value":"1", "all_records": 1});
                  return;
                }
                getPerson({"search_value":value});
              
            });

            $(d).delegate(".save_row", "click", function(e){
              e.preventDefault();
              let index = $(".save_row").index(this);
              let row = results[index];

              $.ajax({
                url: "php/change_user.php",
                method: "POST",
                dataType: "json",
                data: row,
                complete: function(response) {
                  log(response.responseText);
                }
              });

            }).delegate(".cell_name", "keyup", function(e){
              e.preventDefault();
              let index = $(".cell_name").index(this);
              results[index]["fName"] = $(this).val();

            }).delegate(".cell_lname", "keyup", function(e){
              e.preventDefault();
              let index = $(".cell_lname").index(this);
              results[index]["lName"] = $(this).val();
            }).delegate(".cell_bday", "keyup", function(e){
              e.preventDefault();
              let index = $(".cell_bday").index(this);
              results[index]["birthday"] = $(this).val();
            }).delegate(".cell_phone", "keyup", function(e){
              e.preventDefault();
              let index = $(".cell_phone").index(this);
              results[index]["mobile"] = $(this).val();
            }).delegate(".cell_email","keyup", function(e){
              e.preventDefault();
              let index = $(".cell_email").index(this);
              results[index]["emailAddress"] = $(this).val();
              log(results[index]);
            }).delegate(".delete_user", "click", function(e){
              e.preventDefault();
              let index = $(".delete_user").index(this);
              let row = results[index];
              let a = $(this).closest(".u-table-row");
              $.ajax({
                url: "php/delete_user.php",
                method: "POST",
                dataType: "json",
                data: row,
                complete: function(response) {
                  log(response.responseText);
                  a.remove();
                }
              });
            }).delegate(".add_new_user", "click", function(e){
              e.preventDefault();
              let teamName = $(".new_team").val(),
                  fName = $(".new_name").val(),
                  lName = $(".new_lname").val(),
                  bday = $(".new_bday").val(),
                  phone =$(".new_phone").val(),
                  email = $(".new_email").val();

              let row = {"team": teamName,"fname": fName,"lname": lName,"bday": bday,"phone":phone,"email":email};
              let field = d.getElementById("teams_cell");
              $.ajax({
                url: "php/create_user.php",
                method: "POST",
                dataType: "json",
                data: row,
                complete: function(response) {
                  log(response.responseText);
                  $(".new_team").val("");
                  $(".new_name").val("");
                  $(".new_lname").val("");
                  $(".new_bday").val("");
                  $(".new_phone").val("");
                  $(".new_email").val("");
                  field.innerHTML += `<div class="u-table-row">
                        <div class="u-table-row-cell">${$(".u-table-row").length-1}</div>
                        <div class="u-table-row-cell">${teamName}</div>
                        <div class="u-table-row-cell"><input class="cell_name" value="${fName}" placeholder="First Name"></div>
                        <div class="u-table-row-cell"><input class="cell_lname" value="${lName}" placeholder="Last Name"></div>
                        <div class="u-table-row-cell"><input class="cell_bday" value="${bday}" placeholder="08/26/1997"></div>
                        <div class="u-table-row-cell"><input class="cell_phone" value="${phone}" placeholder="+48 643 832 120" maxlength="16"></div>
                        <div class="u-table-row-cell"><input class="cell_email" value="${email}" placeholder="email@simple.email"></div>
                        <div class="u-table-row-cell"><button class="save_row">Save</button><button class="delete_user">Delete</button></div>
                      </div>`;
                }
              });
            });
          }
        })(window,document,console.log);
      </script>
  </body>
</html>