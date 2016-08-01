<?php
header ( "content-type:text/html;charset=gb2312" );

$appid = 'wx90fce9f0dcf717bf';
$appsecret = '40d10a57fcee39402c9eef1102547371';

$access_token = get_access_token ( $appid, $appsecret );


$menu = array (
		"button" => array (
				array (
						"name" => "网吧优惠",
						"sub_button" => array (
								array (
										"type" => "view",
										"name" => "网吧活动",
										"url" => "http://www.soso.com/" 
								),
								array (
										"type" => "view",
										"name" => "商家广告",
										"url" => "http://www.baidu.com/" 
								) 
						)
				),
				array (
						"type" => "view",
						"name" => "来往吧",
						"url" =>""
				),
				array (
						"name" => "关于我们",
						"sub_button" => array (
								array (
										"type" => "click",
										"name" => "在线服务",
										"key" => "V1001_ONLINE" 
								),
								array (
										"type" => "view",
										"name" => "联系我们",
										"url" => "http://www.baidu.com/" 
								)
						) 
				)
				 
		) 
);
to_urlencode($menu);


$menu_json = json_encode($menu);
$menu_json = urldecode($menu_json);
if (menu_add($access_token,$menu_json))
	echo "创建自定义菜单成功！";
else 
	echo "创建自定义菜单失败！";


function to_urlencode(&$arr){
	foreach ($arr as $key => $value){
		if (is_array($value)){
			to_urlencode($arr[$key]);
		}else {
			$arr[$key] = urlencode($value);
		}
	}
}

function get_access_token($appid,$appsecret){
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
	
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$output = curl_exec($ch);
	if (curl_errno($ch)){
		echo 'Errno'.curl_error($ch);
	}
	curl_close($ch);
	$jsoninfo = json_decode($output,true);
	//print_r($jsoninfo);
	return $jsoninfo["access_token"];
}



function menu_add($access_token,$menu_json){
	$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$access_token";
	//echo $url;
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$menu_json);
	$result = curl_exec($ch);
	if (curl_errno($ch)){
		echo 'Errno'.curl_error($ch);
	}
	curl_close($ch);
	var_dump($result);
	return ($result->errcode == 0);
	
}


?>