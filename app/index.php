<?php
session_start();
require("../config/database.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
      if(isset($_REQUEST['fullname']) and !empty($_REQUEST['fullname']) and isset($_REQUEST['email']) and !empty($_REQUEST['email'])){
    $per=array("fullname"=>htmlentities($_REQUEST['fullname']) ,"email"=> htmlentities($_REQUEST['email']));
       $resp= Database::SaveRecord($per);
       echo $resp;
      }else{
      echo "not set";
      }
}else{

      echo"Invalid request Method";
}

?>