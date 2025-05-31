<?php 
    namespace Busines;
    
    use Database;
    use mysqli;
    class UserMessages {
        private string $user_name = "";
        private string $user_email;
        private string $user_message;
        


        /**
         * Class constructor.
         */
        public function __construct($user_name,$user_email,$user_message)
        {
           $this->user_name    = $user_name;
           $this->user_email   = $user_email;
           $this->user_message = $user_message;
        }
        
       public function getUserName():string{
        return $this->user_name;
       }
        public function getUserEmail():string{
        return $this->user_email;
       }
        public function getUserMessage():string{
        return $this->user_message;
       }
       public function sendUserMessage(array $userData):bool{
        $usermessage = new SaveUserMessage();
        $usermessage->saveMessageToDatabase($userData);
        return false;
       }
    }

    class SaveUserMessage{
        private $conn;
        public function __construct(){
           $db = new Database();
           $this->conn = $db->getDbConnection();
        }

        public function saveMessageToDatabase(array $user_data):bool{
            $user_name    = $user_data['user_name'];
            $user_email   = $user_data['user_email'];
            $user_message = $user_data['user_message'];
            $sql = "";
            $resul = mysqli_query($this->conn,$sql);
            if($resul)
            {
                return false;
            }else
            {
                return true;
            }
        
        }
    }
    $send = new UserMessages('Mohamed',"almgroma@gmail.com","This is my message ");
    $send->sendUserMessage();
?>