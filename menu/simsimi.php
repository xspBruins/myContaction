<?php

$wechatObj = new wechat_php();
$wechatObj->chat();

class wechat_php{
	public function chat(){
		$key='';
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
		
		if (!empty($postStr)){
			$postObj = simplexml_load_string($postStr,'SimpleXMLElement',LIBXML_NOCDATA);  //����XML
			$msgType = $postObj->MsgType;                   //��Ϣ����
			$fromUserName = $postObj->FromUserName;         //΢���û�
			$toUserName = $postObj->ToUserName;             //������
			$time = time();
			
			//�ı���Ϣ�ظ���ʽ
			$textTpl = "<xml>
					<ToUserName><![CDATA[%s]]></ToUserName>
					<FromUserName><![CDATA[%s]]></FromUserName>
					<CreateTime>%s</CreateTime>
					<MsgType><!CDATA[[%s]]></MsgType>
					<Content><!CDATA[[%s]]</Content>
					</xml>";
			switch ($msgType){
				case "text":
					$keyword = $postObj->Content;
					$response = $this->getSimsimie($key,$keyword);
					if (empty($response))
						$response = "�ף�С�Ƽ�Ҳ���ˣ�ȥ˯�ˣ����������";
					$resultStr = sprintf($textTpl,$fromUserName,$toUserName,$time,"text",$response);
					break;
					
				case "voice":
					break;
				case "location":
					break;
			}
			echo $resultStr;
		}else {
			echo "";
			exit;
		}
	}
		
		// ����SimSimi API
	function getSimsimie($key, $keyword) {
		$url = "http://sandbox.api.simsimi.com/request.p?key=" . $key . "&lc=ch&text=" . $keyword;
		
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, FALSE );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		$result = curl_exec ( $ch );
		curl_close($ch);
		
		$getObj = json_decode($result);
		
		if ($getObj->result == 0)
			return $getObj->response;
		else 
			return '';
		
		
	}
}