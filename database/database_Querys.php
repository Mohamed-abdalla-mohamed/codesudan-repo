<?php
namespace Database;

use Database;
use mysqli_result;
use mysqli;
use PDO;
//use Database\Connection;
__DIR__.require_once('database.php');
class DatabaseQueries
{   
    private $db ;
    private $conn ;

    public function __construct(){
        $this->db = Database::connect();
        $this->conn = $this->db->getDbConnection();
        
    }
    
    
  public function getQueryResult(string $sqlQ): mysqli_result
  {
      $stmt = $this->conn->prepare($sqlQ);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
  }
}

?>