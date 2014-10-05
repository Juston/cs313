<?php
session_start();
  
if($_POST['action'] == 'Submit') {

   $vert = '<p>Introvert vs Extrovert: '.$_POST['vert'].'<br>'; 
   $free_time = 'Free time: '.$_POST['free_time'].'<br>';
   $color = 'Color for a week: '.$_POST['color'].'<br>';
   $comfort = 'Comfortable: '.$_POST['comfort'].'</p>';

   $comment = $vert.' '.$free_time.' '.$color.' '.$comfort;

   $fp = fopen("record.txt", "a");
    $savestring = $comment;
    fwrite($fp, $savestring);
    fclose($fp); 

   $_SESSION['survey']['complete'] = 'true'; 
   include 'result.php';

 } elseif($_POST['action'] == 'View Survey Results') {
    include 'result.php';
 } elseif($_SESSION['survey']['complete']) {
    include 'result.php';
 } else {
   include 'view.php';
}