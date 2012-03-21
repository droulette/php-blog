<?php

function add_post($title, $contents) {
	$title=mysql_real_Escape_string ($title);
	$contents=mysql_real_Escape_string ($contents);


	mysql_queery("INSERT INTO `posts` SET
		`cat_id'={$category},
		`cat_id'='{$title}',
		`contents'='{$contents}',
		`date_posted'=NOW()");
		}

function edit_post($id, $title, $contents, $category) {

}

function add_category ($name) {
	$name = mysql_real_escape_string ($name);
	
	mysql_query("INSERT INTO `categories` SET `name` = '{$name}'");
}

function delete($table, $id) {
	$table = mysql_real_escape_string ($table);
	$id =(int) $id;
	
	mysql_query("DELETE FROM `{$table}` WHERE `id` = {$id}" ); 	
}

function get_posts($id = null) {
	$posts=array();

	$query = mysql_query("SELECT `id`, `title`, `contents`, `date_posted` FROM `post`");

	
	while ($row=mysql_fetch_assoc($query)) {
		$posts[] = $row;
	}
	return $posts;
		
}

function get_categories($id = null) {
	$categories = array();

	$query = mysql_query("SELECT `id`, `name` FROM `categories`");

	while ($row=mysql_fetch_assoc($query)) {
		$categories[] = $row;
	}
	return $categories;
	}
	

function category_exists($field, $value) {
	$field=mysql_real_escape_string($field);
	$value=mysql_real_escape_string($value);
	
	$query = mysql_query("SELECT COUNT(1) from `categories` WHERE `{$field}` = '{$value}'");
	
	return(mysql_result($query, 0) == '0') ? false : true;
}


?>