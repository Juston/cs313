<?php

  
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

   include 'result.php';

 } else {
   include 'view.php';
}