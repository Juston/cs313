<?php
include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";
include 'model.php';
if($_POST['action'] == 'Add Scripture') {
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$check = $_POST['check'];

	if(!empty($book) && !empty($chapter) && !empty($verse) && !empty($content) && !empty($check)) {
		$insertScripture = insertScripture($book, $chapter, $verse, $content);

		$success = '<p style="color:green">Scripture added!</p>';
	
	//	if() {
	//		$insertTopic = insertTopic();
	// 	}

	} else {
		$error = '<p style="color:red">You cannot leave any of the fields empty! No scripture was added.</p>';
	}
}

$scriptureList = getScriptureList();
$scriptureOutput = "";
foreach($scriptureList as $scripture) {
	$scriptureOutput .= "<p>" . $scripture['scripture_book'] . " " . $scripture['scripture_chapter'] . ":" . $scripture['scripture_verse']; 
}


include 'view.php';