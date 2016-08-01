<?php 
require_once '../include.php';

$barrows = getAllBar();
if (!$barrows){
	alertMes("sorry，网站更新中...", "index.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=gbk2312" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>联系我们</title>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="../../../../maps.google.com/maps/api/js@sensor=false"></script>
		<script type="text/javascript" src="js/gmap3.min.js"></script>
		<script type="text/javascript" src="js/o-script.js"></script>

	</head>
	<body class="o-page p-contact">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="index.php" class="p-link-home"><i class="fa fa-home"></i></a>
					<a class="menu-btn" href="#menu"></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<div class="bannerPane" style="height:300px">
				<div id="map" style="width:100%; height:300px;"></div>
				<div class="s-banner-content">
					<div><img  width="100" src="img/logo-pages.svg" /></div>
				</div>
			</div>
			<!-- MAP -->
			
			<div id="content">
				
				<h3 class="title"><i class="fa fa-envelope"></i>联系我们</h3>
				
				<form action="doContact.php?act=doconnection" method="post" id="contact" class="contactForm">
					
					<label>账号 <span class="required">*</span></label>
					<input type="text" name="name" id="ContactName" placeholder="Name" />
					
					<label>邮箱 <span class="required">*</span></label>
					<input type="email" name="mail" id="ContactEmail" placeholder="Email" />
					
					<label>消息 <span class="required">*</span></label>
					<textarea id="ContactMessage" name="comment" placeholder="Message"></textarea>
					
					<input type="button" onclick="doContact(); return false;" class="btn-normal" id="SubmitContact" value="提交" />
					
				</form>

				<h3 class="title"><i class="fa fa-map-marker"></i>您的位置</h3>
				<p>
					Da Lian <br>
					38°52'15''. <br>
					121°30'55''.
				</p>
			</div>
			
			<div class="subFooter">Copyright 2016. All rights reserved.</div>
			
			<!-- Menu navigation -->
			<nav id="menu">
				<ul>
					<li class="Selected">
						<a href="index.php">
							<i class="fa fa-home"></i>主页
						</a>
					</li>
					<li>
						<a href="about.php">
							<i class="fa fa-users"></i>关于我们
						</a>
					</li>
					<li>
						<a href="blog.php">
							<i class="fa fa-pencil-square-o"></i>部落格
						</a>
					</li>
					<li>
						<a href="gallery.php">
							<i class="fa fa-picture-o"></i>我们网吧
						</a>
						<ul>
						<?php foreach ($barrows as $barrow): ?>
							<li><a href="gallery.php#PGalleryTwoC"><i class="fa fa-picture-o"></i><?php echo $barrow['bName'];?></a></li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li>
						<a href="drinkerder/index.php">
							<i class="fa fa-th-list"></i>我要订座
						</a>
						<ul>
							<li><a href="product-single.php"><i class="fa fa-th-list"></i>3连坐</a></li>
							<li><a href="product-single.php"><i class="fa fa-th-list"></i>五连坐</a></li>
							<li><a href="product-single.php"><i class="fa fa-th-list"></i>其他</a></li>
						</ul>
					</li>
                    <li>
                        <a href="O2O/index.php">
                            <i class="fa fa-cutlery"></i>我要订餐
                        </a>
                    </li>
					<li>
						<a href="contact.php">
							<i class="fa fa-envelope"></i>联系我们
						</a>
					</li>
				</ul>
			</nav>
			
		</div>
	</body>
	<script type="text/javascript">
function doContact(){
	document.getElementById("contact").submit();
}
	</script>
</html>