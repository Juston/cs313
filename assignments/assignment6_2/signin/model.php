<?php

function checkPassword($username, $password) {
	$db = connect();
    $sql = 'SELECT userPassword FROM users WHERE userName = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $hashed = $stmt->fetch();
    $hashedPassword = $hashed['userPassword'];
    return crypt($password, $hashedPassword) == $hashedPassword;
	
	return $result;
}