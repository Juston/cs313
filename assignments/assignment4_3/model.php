<?php

function fastfoodOptions() {
	$db = connect();
	$query = "SELECT * 
		 FROM fastfood";
	$list = $db->query($query);
	$lists = $list->fetchAll();
	
	return $lists;	
}