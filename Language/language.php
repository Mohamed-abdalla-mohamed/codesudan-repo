<?php 
    use accounts\Session;

class Language {
    private $session;
    private $currentLanguage;
    public function __construct(Session $session){
        $this->session  = $session; 
    }

    public function getLanguage(){
        // check if the session exist and itis no empty
        if($this->session->isEmpty_session("lang") !== true){
            // get the session value
            if($this->session->getSession_value("lang") == "arabic"){
                $this->currentLanguage = $this->session->getSession_value("lang");
                $obj = file_get_contents("../Language/". $this->currentLanguage . ".json");
                $data = json_decode($obj);
                $this->session->setSession_value("lang",$data->this->currentLanguage); 
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
}