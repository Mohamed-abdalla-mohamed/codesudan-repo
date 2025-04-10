<?php 

// this is function to get the selected language from json file and set it to the session
function getLang(){    
    if (isset($_GET["lang"]) && $_GET["lang"] !== "") {
        if ($_GET["lang"] == "arabic") {
            // this is when the user select the arabic language
            $cuerrent = $_GET["lang"];
            $obj = file_get_contents("../Language/".$cuerrent . ".json");
            $data = json_decode($obj);
            $_SESSION["lang"] = $data->$cuerrent;
        } else if ($_GET["lang"] == "english") {
            // this is when the user select english language.
            $cuerrent = $_GET["lang"];
            $obj = file_get_contents("../Language/".$cuerrent . ".json");
            $data = json_decode($obj);
            $_SESSION["lang"] = $data->$cuerrent;
        } else {
            // this is the default when the selected language did not exist
            $cuerrent = 'english';
            $obj = file_get_contents("../Language/".$cuerrent . ".json");
            $data = json_decode($obj);
            $_SESSION["lang"] = $data->$cuerrent;
        }
    
    } else {
        // this is the default language when the user did not choos any language
        // and the lang property did not set in the link
        $cuerrent = "english";
        $obj = file_get_contents("../Language/".$cuerrent . ".json");
        $data = json_decode($obj);
        $_SESSION["lang"] = $data->$cuerrent;
    }
    return $data->$cuerrent;
    }
    
function currentLang(){    
    if (isset($_GET["lang"]) && $_GET["lang"] !== "") {
        if ($_GET["lang"] == "arabic") {
            // this is when the user select the arabic language
            $cuerrent = $_GET["lang"];
           
            $_SESSION["lang"] = $cuerrent;
        } else if ($_GET["lang"] == "english") {
            // this is when the user select english language.
            $cuerrent = $_GET["lang"];
          
            $_SESSION["lang"] = $cuerrent;
        } else {
            // this is the default when the selected language did not exist
            $cuerrent = 'english';           
            $_SESSION["lang"] = $cuerrent;
        }
    
    } else {
        // this is the default language when the user did not choos any language
        // and the lang property did not set in the link
        $cuerrent = "english";
       
        $_SESSION["lang"] = $cuerrent;
    }
    return $cuerrent;
    }
    ?>