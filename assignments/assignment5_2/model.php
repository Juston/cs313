<?php

function insertScripture($scriptureBook, $scriptureChapter, $scriptureVerse, $scriptureContent) {
	$db = connect();
    $sql = 'INSERT INTO scriptures (scripture_book, scripture_chapter, scripture_verse, scripture_content) '
            . 'VALUES(:scriptureBook, :scriptureChapter, :scriptureVerse, :scriptureContent)';
    $user = 'user';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':scriptureBook', $scriptureBook);
    $stmt->bindValue(':scriptureChapter', $scriptureChapter);
    $stmt->bindValue(':scriptureVerse', $scriptureVerse);
    $stmt->bindValue(':scriptureContent', $scriptureContent);
    $stmt->execute();
    $insertResult = $stmt->rowCount();
    $stmt->closeCursor();
    
    return $insertResult;
}

function insertManytoMany() {
	$db = connect();
    // $sql = 'INSERT INTO users (userEmail, userPassword, userFirstName, userLastName, userType) '
    //         . 'VALUES(:email, :password, :firstName, :lastName, :type)';
    // $user = 'user';
    // $stmt = $db->prepare($sql);
    // $stmt->bindValue(':email', $email);
    // $stmt->bindValue(':password', $password);
    // $stmt->bindValue(':firstName', $firstName);
    // $stmt->bindValue(':lastName', $lastName);
    // $stmt->bindValue(':type', $user);
    // $stmt->execute();
    // $insertResult = $stmt->rowCount();
    // $stmt->closeCursor();
    
    // return $insertResult;
}

function insertNewTopic($topicName) {
	$db = connect();
    $sql = 'INSERT INTO users (topic_name) '
            . 'VALUES(:topicName)';
    $user = 'user';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':topicName', $topicName);
    $stmt->execute();
    $insertResult = $stmt->rowCount();
    $stmt->closeCursor();
    
    return $insertResult;
}

function getScriptureList() {
	$db = connect();
	$query = "SELECT * 
		 FROM ";
	$list = $db->query($query);
	$lists = $list->fetchAll();
	
	return $lists;	
}

function getTopicList() {
	$db = connect();
	$query = "SELECT * 
		 FROM ";
	$list = $db->query($query);
	$lists = $list->fetchAll();
	
	return $lists;	
}