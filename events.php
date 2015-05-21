<?php
$json  = array ();
$user='admin23AMCiC';
$pass='iQFLkuv1vnJ5';

$query = 'SELECT * FROM evenement ORDER BY id';

try {
    $db = new PDO('mysql:host=calendar-junar.rhcloud.com;dbname=fullcalendar', $user, $pass);
	
	//echo  json_encode($result -> fetchAll (PDO :: FETCH_ASSOC));
    //$db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 
   $result  = $db -> query($query ) or  die(print_r( $db -> errorInfo()));
   
   echo  json_encode($result -> fetchAll(PDO :: FETCH_ASSOC));
 
?>