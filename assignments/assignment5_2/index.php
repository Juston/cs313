<?php
include '/library/library.php';
$db = connect();
echo $db;
// include 'model.php';
if($_POST['action'] == 'Add Scripture') {
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$check = $_POST['check'];

	// if(!empty($book) && !empty($chapter) && !empty($verse) && !empty($content) && !empty($check)) {
	// 	$insertScripture = insertScripture($book, $chapter, $verse, $content);
	
	//	if() {
	//		$insertTopic = insertTopic();
	// 	}

	// } else {
		$error = '<p style="color:red">You cannot leave any of the fields empty! No scripture was added.</p>';
	// }
}



include 'view.php';