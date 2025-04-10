<?php
    
    require_once('config2.php');

    class Database {
        private static $singlton = null;
        private $conn ;
        // private $host = DB_HOST;
        // private $username = DB_USERNAME;
        // private $password = DB_PASSWORD;
        // private $database = DB_NAME;

         /**
         * Class constructor.
         */
        private  function __construct()
        {
          self::$conn = new PDO('mysqli: DB_HOST; dbname = DB_NAME;',DB_USERNAME,DB_PASSWORD);
        }

        public static function connect(){
            if(self::$singlton === null){
                self::$singlton  = new self();
            }
            return self::$singlton;
        }
    }

    ?>
?>