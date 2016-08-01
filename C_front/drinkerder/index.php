<!DOCTYPE HTML>
<html>
<head>
<meta charset="gb2312">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>��Ҫ����</title>
<meta name="keywords" content="jQuery,ѡ��">
<link rel="stylesheet" type="text/css" href="../css/main.css" />
<style type="text/css">
.demo{width:700px; margin:40px auto 0 auto; min-height:450px;}
@media screen and (max-width: 360px) {.demo {width:340px}}

.front{width: 300px;margin: 5px 32px 45px 32px;background-color: #f0f0f0;	color: #666;text-align: center;padding: 3px;border-radius: 5px;}
.booking-details {float: right;position: relative;width:200px;height: 450px; }
.booking-details h3 {margin: 5px 5px 0 0;font-size: 16px;}
.booking-details p{line-height:26px; font-size:16px; color:#999}
.booking-details p span{color:#666}
div.seatCharts-cell {color: #182C4E;height: 25px;width: 25px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;}
div.seatCharts-seat {color: #fff;cursor: pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
div.seatCharts-row {height: 35px;}
div.seatCharts-seat.available {background-color: #B9DEA0;}
div.seatCharts-seat.focused {background-color: #76B474;border: none;}
div.seatCharts-seat.selected {background-color: #E6CAC4;}
div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;}
div.seatCharts-container {border-right: 1px dotted #adadad;width: 400px;padding: 20px;float: left;}
div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 16px;}
ul.seatCharts-legendList {padding-left: 0px;}
.seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;}
span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;}
.checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer}
#selected-seats {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;}
#selected-seats li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}
</style>

</head>

<body>

<div id="main">
   <div class="demo">
   		<div id="seat-map">
			<div class="front">��Ļ</div>					
		</div>
		<div class="booking-details">
			<p>������<span>�������</span></p>
			<p>ʱ�䣺<span>9/4/2016 17:13</span></p>
			<p>��λ��</p>
			<ul id="selected-seats"></ul>
			<p>��λ����<span id="counter">0</span></p>
			<p>�ܼƣ�<b>��<span id="total">0</span></b></p>
					
			<button class="checkout-button">ȷ��ѡ��</button>
					
			<div id="legend"></div>
		</div>
		<div style="clear:both"></div>
   </div>
	
  <br/>
</div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.seat-charts.min.js"></script>
<script type="text/javascript">
var price = 80; //Ʊ��
$(document).ready(function() {
	var $cart = $('#selected-seats'), //��λ��
	$counter = $('#counter'), //Ʊ��
	$total = $('#total'); //�ܼƽ��
	
	var sc = $('#seat-map').seatCharts({
		map: [  //��λͼ
			'aaaaaaaaaa',
            'aaaaaaaaaa',
            '__________',
            'aaaaaaaa__',
            'aaaaaaaaaa',
			'aaaaaaaaaa',
			'aaaaaaaaaa',
			'aaaaaaaaaa',
			'aaaaaaaaaa',
            'aa__aa__aa'
		],
		naming : {
			top : false,
			getLabel : function (character, row, column) {
				return column;
			}
		},
		legend : { //����ͼ��
			node : $('#legend'),
			items : [
				[ 'a', 'available',   '��ѡ��' ],
				[ 'a', 'unavailable', '���۳�']
			]					
		},
		click: function () { //����¼�
			if (this.status() == 'available') { //��ѡ��
				$('<li>'+(this.settings.row+1)+'��'+this.settings.label+'��</li>')
					.attr('id', 'cart-item-'+this.settings.id)
					.data('seatId', this.settings.id)
					.appendTo($cart);

				$counter.text(sc.find('selected').length+1);
				$total.text(recalculateTotal(sc)+price);
							
				return 'selected';
			} else if (this.status() == 'selected') { //��ѡ��
					//��������
					$counter.text(sc.find('selected').length-1);
					//�����ܼ�
					$total.text(recalculateTotal(sc)-price);
						
					//ɾ����Ԥ����λ
					$('#cart-item-'+this.settings.id).remove();
					//��ѡ��
					return 'available';
			} else if (this.status() == 'unavailable') { //���۳�
				return 'unavailable';
			} else {
				return this.style();
			}
		}
	});
	//���۳�����λ
	sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
		
});
//�����ܽ��
function recalculateTotal(sc) {
	var total = 0;
	sc.find('selected').each(function () {
		total += price;
	});
			
	return total;
}
</script>
</body>
</html>