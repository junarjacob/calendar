<?php
$json  = array ();
$user='root';
$pass='';

$query = 'SELECT * FROM evenement ORDER BY id';

try {
    $db = new PDO('mysql:host=localhost;dbname=fullcalendar', $user, $pass); 
	
	//echo  json_encode($result -> fetchAll (PDO :: FETCH_ASSOC));
    //$db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 
   $result  = $db -> query($query ) or  die(print_r( $db -> errorInfo()));
   
   echo  json_encode($result -> fetchAll(PDO :: FETCH_ASSOC));
 
?>