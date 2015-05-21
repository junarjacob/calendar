<?php
$json  = array ();
$user='root';
$pass='';

$query = 'SELECT * FROM evenement ORDER BY id';


 
   $result  = $db -> query($query ) or  die(print_r( $db -> errorInfo()));
   
   echo  json_encode($result -> fetchAll(PDO :: FETCH_ASSOC));

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST [ 'end' ];

// Connect to the database
try {
    $db = new PDO('mysql:host=localhost;dbname=fullcalendar', $user, $pass);

    //echo  json_encode($result -> fetchAll (PDO :: FETCH_ASSOC));
    //$db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$ Sql  = "INSERT INTO event (title, start, end) VALUES (: title,: start,: end)" ;
$ Q  = $ db -> prepare ( $ sql );
$ Q -> execute ( array ( ': title' => $ title , ': start' => $ start , ': end' => $ end ));

 
?>