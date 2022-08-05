<?php

class Database{


          public static function getConn()
    {
       
        //    $servername = "ftp.avp.vgy.mybluehost.me";
        $servername = "localhost"; 
        $username = "u538836443_moolapay"; 
        $password = "Moolapay@1";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=u538836443_moolapay", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
            echo json_encode(array("message" => $e->getMessage(), "code" => "404"));
        }

    }
    public static function SaveRecord($data=array()){
       try {
        $conn=self::getConn();
        $q='INSERT INTO `users`( `name`, `email`) VALUES (?,?)';
 
        $stm = $conn->prepare($q);
        $stm->bindValue(1,$data["fullname"]);
        $stm->bindValue(2,$data["email"]);
        $stm->execute();
        echo true;
       } catch (\Throwable $th) {
           throw $th;
           echo "server error";
       }


    }
    


}
