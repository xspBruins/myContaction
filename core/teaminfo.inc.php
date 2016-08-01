<?php
require_once '../include.php';

function getAllTeaminfo(){
	$sql = "select * from bar_admin";
	$rows = fetchAll($sql);
	return $rows;
}
