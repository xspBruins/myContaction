<?php
require_once '../include.php';

function getAllBlog(){
	$sql = "select * from bar_topic";
	$rows = fetchAll($sql);
	return $rows;
}

//根据点击哪个博客而进入该博客具体内容页
function getOwnBlog($id){
	$sql = "select * from bar_topic where id=$id";
	$row = fetchOne($sql);
	return $row;
}

