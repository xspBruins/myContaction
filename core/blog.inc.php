<?php
require_once '../include.php';

function getAllBlog(){
	$sql = "select * from bar_topic";
	$rows = fetchAll($sql);
	return $rows;
}

//���ݵ���ĸ����Ͷ�����ò��;�������ҳ
function getOwnBlog($id){
	$sql = "select * from bar_topic where id=$id";
	$row = fetchOne($sql);
	return $row;
}

