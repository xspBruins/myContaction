<?php
date_default_timezone_set ( "PRC" );

function dogetConnection($arr){
	$arr['cTime'] = date('Y-m-d');
	//var_dump($arr);
	if (insert ( "bar_contact", $arr )) {
		alertMes("С�����Ѿ��յ���~", "index.php");
	} else {
		alertMes ( "��ϵʧ����Ŷ~", "contact.php" );
	}
}