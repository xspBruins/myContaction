<?php
require_once '../include.php';

function getAllBar(){
	$sql = "select * from bar_introduction";
	$rows = fetchAll($sql);
	return $rows;
}