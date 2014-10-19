<?php
  session_start();

//  include library.php';
//  include 'model.php';
  echo "crazy";

  if($_POST['action'] = "Manual Search") {
    // var $fastfood_options = fastfoodOptions();

    var $option_outputs = "";
    // foreach($fastfood_options as $option) {
    //   $option_outputs .= '<p>Name: ' . $option['fastfoodName'] . '<br>' . $option['fastfoodLocation'] . '</p>';
    // }
  }
  if($_POST['action'] = "Auto Search") {
    // var $fastfood_options = fastfoodOptions();

    var $option_outputs = '<form action="." method="post"><input type="text" value=""></form>';
    // foreach($fastfood_options as $option) {
    //   $option_outputs .= '<p>Name: ' . $option['fastfoodName'] . '<br>' . $option['fastfoodLocation'] . '</p>';
    // }
  }

  include 'view.php';
  exit;

  ?>