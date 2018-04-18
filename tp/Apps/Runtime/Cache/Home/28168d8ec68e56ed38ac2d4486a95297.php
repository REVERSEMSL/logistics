<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/main.css">
		<script src="Public/jquery-3.3.1.js"></script>
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="nav"></div>
		<div class="sildeshow"></div>
		<div class="sec aboutpg container">
			<div class="pg-nav col-sm-3">
				<div class="tit-ab">
					<p>联系我们</p>
				</div>
				<ul>
					<li><a href="contact.html">联系我们</a></li>
					<li><a href="contact.html#message">在线留言</a></li>
				</ul>
				<div class="tit-ol">
					<p>在线下单</p>
				</div>
				<ul>
					<li><a href="online.html">立即下单</a></li>
					<li><a href="problem.html">常见问题</a></li>
				</ul>
			</div>
			<div class="col-sm-9 introduce">
				<section class="title">
					<h1>
						联系我们
						<span>CONTACT US</span>
					</h1>
				</section>
				<div class="contact con-pad">
					<div class="address">
						<p>公司地址：苏州市吴中区木渎镇珠江南路378号</p>
						<p>联系电话：0512-87818757</p>
						<p>联系邮箱：Cindy@kindjob.cn</p>
					</div>
					<div class="map">
						<iframe src="static/map/map.html"></iframe>
						<span>地图加载中...</span>
					</div>
					<div id="message" class="row">
						<p>在线留言</p>
						<form>
							<div class="col-sm-6">
								<p>姓名：</p>
								<input type="text" placeholder="姓名" />
							</div>
							<div class="col-sm-6">
								<p>联系电话：</p>
								<input type="tel" placeholder="电话号码" />
							</div>
							<div class="col-xs-12">
							<p>发送的消息：</p>
							<textarea placeholder="消息"></textarea>
							<input type="button" value="立即发送" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer"></div>

	</body>
	<script type="text/javascript">
		$(".nav").load("Apps/Home/View/nav.html");
		$(".sildeshow").load("Apps/Home/View/slideshow.html");
		$(".footer").load("Apps/Home/View/footer.html");
	</script>
</html>