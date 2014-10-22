<?php
// include 'library.php';
// include 'model.php';
if($_POST['action'] == 'Submit') {
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$check = $_POST['check'];

	// if(!empty($book) && !empty($chapter) && !empty($verse) && !empty($content) && !empty($check)) {
	// 	$insertScripture = insertScripture($book, $chapter, $verse, $content);

	// } else {
	// 	$error = '<p style="color:red">You cannot leave any of the fields empty!</p>';
	// }
}



include 'view.php';