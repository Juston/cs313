<?php

function connect() {
  $dns = 'mysql:host=127.9.69.130;dbname=127.9.69.130scriptures';
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
