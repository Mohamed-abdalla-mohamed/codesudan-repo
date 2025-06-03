<?php 
// Include the configuration file 
require_once 'config.php'; 
 
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost", "root","","users_messages");
if(!$con){
	die("Connection Error !!".mysqli_connect_error());
}
// Connect with the database  
global $db;
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
mysqli_query($db,"SET NAMES 'utf8'");
mysqli_query($db,'SET CHARACTER SET utf8');

mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,'SET CHARACTER SET utf8');

// Display error if failed to connect  
if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}
///////////////////////////////////////////////////////////
class Database{
  public function getDbConnection():mysqli{
      
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost","root","","users_messages");
if(!$con){
	die("Connection Error !!".mysqli_connect_error());
}
// Connect with the database  
global $db;
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 

  return $db;
} 
}