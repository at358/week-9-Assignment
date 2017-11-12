<?php
 class UserDB {
 private static $dsn = 'mysql:host=sql1.njit.edu;dbname=at358';
     private static $username = 'at358';
     private static $password = 'rhkGR7VNK';
     private static $db;
     private function __construct() {}
     public static function getUsers () {
 try {
	    $conn = new PDO($dsn, $username, $password);
	    echo "Connected successfully<br>";
	    $sql = "SELECT * FROM accounts WHERE 1";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $users = $q->fetchAll();
	    if($q->rowCount() > 0){
	      foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";  
	     else{
	    	break;	
	    } 
	}
       $q->closeCursor();
    
     }
     	    
    
 catch(PDOException $e) 
	 {
     	echo "Connection failed: " . $e->getMessage();
    }
 $conn = null;
?>
