<?php
require_once '../include.php';

$act = $_REQUEST['act'];
$id = $_REQUEST['id'];

if($act == "searchBlogID"){
	$row = getOwnBlog($id);
	echo "<script>window.location='blog-single-post.php?row=$row';</script>";
}