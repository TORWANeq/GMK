<?php


require_once "php/mailManager.php";

$team=isset($_GET['team']) && !empty($_GET['team']) ? htmlentities($_GET['team'], ENT_QUOTES, "utf-8") : "";
$name=isset($_GET['name1']) && !empty($_GET['name1']) ? htmlentities($_GET['name1'], ENT_QUOTES, "utf-8") : "";
$surname=isset($_GET['surname1']) && !empty($_GET['surname1']) ? htmlentities($_GET['surname1'], ENT_QUOTES, "utf-8") : "";
$date=isset($_GET['date1']) && !empty($_GET['date1']) ? htmlentities($_GET['date1'], ENT_QUOTES, "utf-8") : "";
$phone=isset($_GET['phone']) && !empty($_GET['phone']) ? htmlentities($_GET['phone'], ENT_QUOTES, "utf-8") : "";
$email=isset($_GET['email1']) && !empty($_GET['email1']) ? htmlentities($_GET['email1'], ENT_QUOTES, "utf-8") : "";

$name2=isset($_GET['name2']) && !empty($_GET['name2']) ? htmlentities($_GET['name2'], ENT_QUOTES, "utf-8") : "";
$surname2=isset($_GET['surname2']) && !empty($_GET['surname2']) ? htmlentities($_GET['surname2'], ENT_QUOTES, "utf-8") : "";
$bdate2=isset($_GET['date2']) && !empty($_GET['date2']) ? htmlentities($_GET['date2'], ENT_QUOTES, "utf-8") : "";

$name3=isset($_GET['name3']) && !empty($_GET['name3']) ? htmlentities($_GET['name3'], ENT_QUOTES, "utf-8") : "";
$surname3=isset($_GET['surname3']) && !empty($_GET['surname3']) ? htmlentities($_GET['surname3'], ENT_QUOTES, "utf-8") : "";
$bdate3=isset($_GET['date3']) && !empty($_GET['date3']) ? htmlentities($_GET['date3'], ENT_QUOTES, "utf-8") : "";

$name4=isset($_GET['name4']) && !empty($_GET['name4']) ? htmlentities($_GET['name4'], ENT_QUOTES, "utf-8") : "";
$surname4=isset($_GET['surname4']) && !empty($_GET['surname4']) ? htmlentities($_GET['surname4'], ENT_QUOTES, "utf-8") : "";
$bdate4=isset($_GET['date4']) && !empty($_GET['date4']) ? htmlentities($_GET['date4'], ENT_QUOTES, "utf-8") : "";

$name5=isset($_GET['name5']) && !empty($_GET['name5']) ? htmlentities($_GET['name5'], ENT_QUOTES, "utf-8") : "";
$surname5=isset($_GET['surname5']) && !empty($_GET['surname5']) ? htmlentities($_GET['surname5'], ENT_QUOTES, "utf-8") : "";
$bdate5=isset($_GET['date5']) && !empty($_GET['date5']) ? htmlentities($_GET['date5'], ENT_QUOTES, "utf-8") : "";

$name6=isset($_GET['name6']) && !empty($_GET['name6']) ? htmlentities($_GET['name6'], ENT_QUOTES, "utf-8") : "";
$surname6=isset($_GET['surname6']) && !empty($_GET['surname6']) ? htmlentities($_GET['surname6'], ENT_QUOTES, "utf-8") : "";
$bdate6=isset($_GET['date6']) && !empty($_GET['date6']) ? htmlentities($_GET['date6'], ENT_QUOTES, "utf-8") : "";

$name7=isset($_GET['name7']) && !empty($_GET['name7']) ? htmlentities($_GET['name7'], ENT_QUOTES, "utf-8") : "";
$surname7=isset($_GET['surname7']) && !empty($_GET['surname7']) ? htmlentities($_GET['surname7'], ENT_QUOTES, "utf-8") : "";
$bdate7=isset($_GET['date7']) && !empty($_GET['date7']) ? htmlentities($_GET['date7'], ENT_QUOTES, "utf-8") : "";

$name8=isset($_GET['name8']) && !empty($_GET['name8']) ? htmlentities($_GET['name8'], ENT_QUOTES, "utf-8") : "";
$surname8=isset($_GET['surname8']) && !empty($_GET['surname8']) ? htmlentities($_GET['surname8'], ENT_QUOTES, "utf-8") : "";
$bdate8=isset($_GET['date8']) && !empty($_GET['date8']) ? htmlentities($_GET['date8'], ENT_QUOTES, "utf-8") : "";

  
    $message_body="";
    $message_body.="Nazwa drużyny: $team\n";
    $message_body.="Imię Lidera: $name\n";
    $message_body.="Nazwisko Lidera: $surname\n";
    $message_body.="Data urodzenia: $date\n";
    $message_body.="Numer telefonu: $phone\n";
    $message_body.="Adres email: $email\n\n";
 
    $message_body.="Imię: $name2\n";
    $message_body.="Nazwisko: $surname2\n";
    $message_body.="Data urodzenia: $bdate2\n\n";
 
    $message_body.="Imię: $name3\n";
    $message_body.="Nazwisko: $surname3\n";
    $message_body.="Data urodzenia: $bdate3\n\n";

    $message_body.="Imię: $name4\n";
    $message_body.="Nazwisko: $surname4\n";
    $message_body.="Data urodzenia: $bdate4\n\n";

    $message_body.="Imię: $name5\n";
    $message_body.="Nazwisko: $surname5\n";
    $message_body.="Data urodzenia: $bdate5\n\n";

    $message_body.="Imię: $name6\n";
    $message_body.="Nazwisko: $surname6\n";
    $message_body.="Data urodzenia: $bdate6\n\n";

    $message_body.="Imię: $name7\n";
    $message_body.="Nazwisko: $surname7\n";
    $message_body.="Data urodzenia: $bdate7\n\n";

    $message_body.="Imię: $name8\n";
    $message_body.="Nazwisko: $surname8\n";
    $message_body.="Data urodzenia: $bdate8\n\n";


    $from = "rejestracja@gramiejskakoscian.pl";

    $subject = "Potwierdzenie rejestracji do gry miejskiej Kryptonim Wolność";
    $message = "Gratulacje! Udało ci się zarejestrować drużynę do Udziału w XI edycji Gry miejskiej Kryptonim Wolność.\n\n
        Czekajcie na zadanie internetowe od Komendanta Rezerwy Skautowej. Czuwaj.\n\n
        Ta wiadomość jest generowana automatycznie proszę na nia nie odpowiadać, w razie problemów bądź pytań proszę o kontaktować na adres e-mail: gramiejskakoscian@gmail.com";

    $mailServiceProvider = new mailSender();
    $response = $mailServiceProvider->sendMail($from,$email,$subject, $message);
    $response1 = $mailServiceProvider->sendMail($from,"gramiejskakoscian@gmail.com", "Nowa druzyna", $message_body);
    
    if ($response1["status"] > 0) {
          header("Location: UDANA_REJESTRACJA.php");
    }else {
            header("Location: NIE_UDANA_REJESTRACJA.php");
    }
    



?>