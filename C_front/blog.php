<?php 
require_once '../include.php';
$rows = getAllBlog();
if(!$rows){
	alertMes("sorry,还没有帖子哦~", "index.php");
	
}

$barrows = getAllBar();
if (!$barrows){
	alertMes("sorry，网站更新中...", "index.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=gbk" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>部落格</title>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
		<script type="text/javascript" src="js/o-script.js"></script>
	</head>
	<body class="o-page p-blog">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="index.php" class="p-link-home"><i class="fa fa-home"></i></a>
					<a class="menu-btn" href="#menu"></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<div class="bannerPane">
				<div class="overlay"></div>
				<div class="s-banner-content">
					<div><img  width="100" src="img/logo-pages.svg" /></div>
					Blog
				</div>
			</div>
			<div id="content">
				<?php foreach ($rows as $row):?>
				<article>
					<a href="javascript:void(0);" onclick="getBlog(<?php echo $row['id'];?>);return false;">
						<div class="article-img-pane">
							<img src="img/gallery/<?php echo $row['tImg'];?>" />
						</div>
						<h2><?php echo $row['tName'];?></h2>
						<p class="posts-summary">
							<?php echo $row['tTop'];?>
						</p>
					</a>
					<div class="a-meta">
						<span><i class="fa fa-calendar"></i><?php echo $row['tubTime'];?></span> <i class="fa fa-comment"></i> 6
					</div>
				</article>
				<?php endforeach;?>
				
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
function getBlog(id){
	window.location = "doGetBlog.php?act=searchBlogID&id="+id;
}


</script>	
	
	
</html>