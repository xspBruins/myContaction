<?php 
require_once '../include.php';
$rows = getAllfocusAlbum();
/*if(!$rows){
	alertMes("sorry，网站更新中...", "index.php");
}*/

$barrows = getAllBar();
/*if (!$barrows){
	alertMes("sorry，网站更新中...", "index.php");
}*/

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=gbk" />
		<meta name="author" content="www.lanrenmb.com" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>来往吧</title>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
		
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="js/o-script.js"></script>
		
		<script type='text/javascript' src='js/slider/jquery.mobile.customized.min.js'></script>
		<script type='text/javascript' src='js/slider/jquery.easing.1.3.js'></script> 
		<script type='text/javascript' src='js/slider/camera.min.js'></script> 
		
		<script>
			jQuery(function(){
				
				jQuery('#camera_wrap_4').camera({
					height: 'auto',
					loader: 'bar',
					pagination: false,
					thumbnails: false,
					hover: false,
					opacityOnGrid: false
				});

			});
		</script>
	</head>
	<body class="o-page p-home">
		<div id="page">
			<!-- Header -->
			<div id="header">
				<div class="header-content">
					<a class="menu-btn" href="#menu"></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<!-- Content -->
			<div id="content">
				<div class="home-content">
					<span id="Logo" class="svg">
						<img src="img/logo.svg" />
					</span>
				</div>
				<div class="fluid_container">
					<div class="camera_wrap camera_black_skin camera_emboss pattern_1" id="camera_wrap_4">
						<div data-src="img/gallery/20140820095551233.jpg">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									<h1></h1> 
									<p></p> 
								</div>
							</div>
						</div>
						<div data-src="img/gallery/54aba60b60b96.png">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									<h1></h1> 
									<p></p> 
								</div>
							</div>
						</div>
						<div data-src="img/gallery/518e03c34d64b7ea4ca9d8557ba2bc1f.jpg">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									<h1></h1> 
									<p></p> 
								</div>
							</div>
						</div>
					</div><!-- #camera_wrap_3 -->

				</div><!-- .fluid_container -->
				
				<!-- <a href="#" class="home-footer">
					About us
				</a> -->
			</div>
			
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
							<li><a href="gallery.php#PGalleryTwoC"><i class="fa fa-picture-o"></i>0411</a></li>
							<li><a href="gallery.php#PGalleryTwoC"><i class="fa fa-picture-o"></i>奇加网咖</a></li>
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
</html>