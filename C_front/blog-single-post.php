<?php 
require_once '../include.php';
$row = $_REQUEST['row'];
if(!$row){
	alertMes("sorry,暂时还没有人发帖子哦~", "index.php");
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

		<title>部落格日志</title>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">

		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />

		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
		<script type="text/javascript" src="js/o-script.js"></script>

	</head>
	<body class="o-page">
		<div id="page">
			<div id="header">
				<div class="header-content">
					<a href="index.php" class="p-link-home"><i class="fa fa-home"></i></a>
					<a class="menu-btn" href="#menu"></a>
					<a href="javascript:history.back();" class="p-link-back"><i class="fa fa-arrow-left"></i></a>
				</div>
			</div>
			<div id="content">
				<article>
					<img src="img/gallery/<?php echo $row['tImg'];?>" />
					<h2><a href="#"><?php echo $row['tName'];?></a></h2>
					<p>
						<?php echo $row['tDesc'];?> 
					</p>
					<div class="a-meta a-meta-left">
						<i class="fa fa-user"></i> <?php echo $row['tAuthor'];?> | <i class="fa fa-calendar"></i><?php echo $row['tubTime'];?> | <i class="fa fa-comment"></i> 6
					</div>
					<div class="article-comments">
						<h3 class="title"><i class="fa fa-comments"></i>评论</h3>
						<ul>
							<li>
								<img src="img/team/3-th.jpg" />
								<p class="c-a-name"><strong>John Doe</strong></p>
								<p class="comment-date">31 Nov 2013</p>
								<p class="desc">
									Lorem ipsum is simply dummy text of the printing and industry.
								</p>
							</li>
							<li>
								<img src="img/team/2-th.jpg" />
								<p class="c-a-name"><strong>John Doe</strong></p>
								<p class="comment-date">31 Nov 2013</p>
								<p class="desc">
									Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								</p>
								<ul>
									<li>
										<img src="img/team/1-th.jpg" />
										<p class="c-a-name"><strong>John Doe</strong></p>
										<p class="comment-date">31 Nov 2013</p>
										<p class="desc">
											Lorem ipsum is simply dummy text of the printing and industry.
										</p>
									</li>
									<li>
										<img src="img/team/2-th.jpg" />
										<p class="c-a-name"><strong>John Doe</strong></p>
										<p class="comment-date">31 Nov 2013</p>
										<p class="desc">
											Lorem ipsum is simply dummy text of the printing and industry.
										</p>
									</li>
								</ul>
							</li>
							<li>
								<form id="contact" class="contactForm">
									
									<label>账号 <span class="required">*</span></label>
									<input type="text" name="name" id="ContactName" placeholder="Name">
									
									<label>邮箱 <span class="required">*</span></label>
									<input type="email" name="mail" id="ContactEmail" placeholder="Email">
									
									<label>消息 <span class="required">*</span></label>
									<textarea id="ContactMessage" name="comment" placeholder="Message"></textarea>
									
									<input type="submit"  class="btn-normal" id="SubmitContact" value="评论">
									
									<div id="msg" class="notifications" style="display:none"></div>
								</form>
							</li>
						</ul>
					</div>
				</article>

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
</html>