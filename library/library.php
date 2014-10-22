<?php

function connect() {
  $dns = 'mysql:host=localhost;dbname=scriptures';
  $username = 'admincDFxcWH';
  $password = 'CvBaPCF-iKb8';

  try {
      $db = new PDO($dns, $username, $password);
  } catch(PDOException $e) {
      $error_message = $e->getMessage();
      echo "<p>An error occured while connecting to the database: $error_message </p>";
  } 
  
  return $db;
}
