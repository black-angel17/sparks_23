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

public static function update_db(){
        
  if (Database::$connection->connect_error) {
      die("Connection failed: ". Database::$connection->connect_error);
    } 
    else{
    $sql ="SELECT * FROM `register` ";
    $result = Database::$connection->query($sql);
     print("it has retuned");
    return $result;
    
        //it retunr a row 

      //   if ($row["email"]== $name and $row['password'] ==$pass ) {
      //     echo print("\t\t\tUSER IS FOUND\t\t\t\t");
      //     return true;
      //   }
      //   else{
      //     print("PASSWORD Mismatched");
      //   }  

      // }
      
    //Database::$connection->close();
    }


}
public static function upd_db(){
        
  if (Database::$connection->connect_error) {
      die("Connection failed: ". Database::$connection->connect_error);
    } 
    else{
    $sql ="SELECT * FROM `register` ORDER BY `scores` DESC ";
    $result = Database::$connection->query($sql);
     print("it has retuned");
    return $result;
    
        //it retunr a row 

      //   if ($row["email"]== $name and $row['password'] ==$pass ) {
      //     echo print("\t\t\tUSER IS FOUND\t\t\t\t");
      //     return true;
      //   }
      //   else{
      //     print("PASSWORD Mismatched");
      //   }  

      // }
      
    //Database::$connection->close();
    }


}

}
?>