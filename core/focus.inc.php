<?php
require_once '../include.php';

//�����id��С����ֻ��ʾ����
function getAllfocusAlbum(){
	$sql = "select * from focus_album order by id desc limit 3";
	$rows = fetchAll($sql);
	return $rows;
}