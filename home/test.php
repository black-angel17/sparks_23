<pre>
<?php 

include_once '../home/db/session.class.php';
include_once '../home/db/database.class.php';
session::start();
Database::make_conn();

$flag = $_POST['flag'];
$qnum = $_POST['qnum'];
$id = $_SESSION['team_id'];

$result = Database::flag_checker($id,$qnum,$flag);

if ($result){
    print "\nFlag is correct ";
    header("Location: web.php");
    
}  
else{
    header("Location: board/404.html");
    print("DUPLICATE VALUE");
}

?>
</pre>


  
