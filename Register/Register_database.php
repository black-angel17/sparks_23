<?php 

class Database{

public static $connection;


public static function make_conn(){

    $servername = "127.0.0.1:4400";
    $username = "kali";
    $passwor = "kali";
    $dbname = "test";

$conn = new mysqli($servername, $username, $passwor, $dbname);
Database::$connection = $conn;
return Database::$connection;

}

public static function insert_data($team_name,$team_id,$member1,$member2,$member3,$department,$year,$phone){

       
    $sql = "INSERT INTO `register` (`team_name`,`team_id`,`member1`,`member2`,`member3`,`department`,`year`,`phone`)
    VALUES ('$team_name','$team_id','$member1','$member2','$member3','$department','$year','$phone');";
    
    if (Database::$connection->query($sql) === TRUE) {
     echo "\n\nNew record created successfully";
     return True;

   } else {
      return "Error: " . $sql . "<br>" . Database::$connection->error;
      
    }
    

}








}

























































?>