<pre>
<?php 
include_once 'Register_database.php';

print_r($_POST);

Database::make_conn();

Database::insert_data($_POST['team_name'],$_POST['team_id'],$_POST['member1'],$_POST['member2'],$_POST['member3'],$_POST['Department'],$_POST['Year'],$_POST['phone']);

header("Location: index.html");

?>
</pre>