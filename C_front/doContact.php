<?php
require_once '../include.php';

$act = $_REQUEST['act'];

$name = $_POST['name'];
$email = $_POST['mail'];
$comment = $_POST['comment'];

if($act == "doconnection"){
	$arr['name'] = $name;
	$arr['email'] = $email;
	$arr['comment'] = $comment;
	dogetConnection($arr);
}