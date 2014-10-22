<?php
function connect() {   

  // Check for OpenShift environment var and connect accordingly 
     $openShiftCheck = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
     $dbName = "scriptures"; 
 
 
     if ($openShiftCheck === null || $openShiftCheck == "") 
     { 
         // Use Local 
         // TO DO: Add your own local credintials 
         require("setLocalDatabaseCredentials.php"); 
     } 
     else 
     { 
         // Use OpenShift 
 

        // Values for across domains 
         $crossDomain = true; 
         if ($crossDomain) 
         { 
             $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
             $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
             $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
             $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');         
         } 
         else 
         {     
             // Values for domain 
             $dbHost = "http://php-juston.rhcloud.com/"; 
             $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
             $dbUser = 'admincDFxcWH'; 
             $dbPassword = 'CvBaPCF-iKb8';   
         }    
     } 
      
     // Attempt to load database 
     try 
     { 
         $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword); 
         return $db; 
     } 
     catch (PDOException $ex) 
     { 
         echo "Error connecting to database.<br>"; 
         echo "Error: " . $ex->getMessage() . "<br>"; 
         die(); 
     } 


}
include 'model.php';
if($_POST['action'] == 'Add Scripture') {
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$check = $_POST['check'];

	if(!empty($book) && !empty($chapter) && !empty($verse) && !empty($content) && !empty($check)) {
		$insertScripture = insertScripture($book, $chapter, $verse, $content);

		$sucess = "<p style="color:green">Scripture added.</p>";
	
	//	if() {
	//		$insertTopic = insertTopic();
	// 	}

	} else {
		$error = '<p style="color:red">You cannot leave any of the fields empty! No scripture was added.</p>';
	}
}



include 'view.php';