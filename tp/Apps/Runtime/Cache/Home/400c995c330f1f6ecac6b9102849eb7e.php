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
		<div class="sec container">
			<div class="row">
				<div class="col-sm-5">
					<div class="online-add square-title">
						<div>
							<p>网上下单<span class="glyphicon glyphicon-arrow-right"></span></p>
						</div>
						<ul class="clearfix">
							<li>
								<a href="online.html">
									立即下单
								</a>
							</li>
							<li>
								<a href="problem.html">
									常见问题
								</a>
							</li>
						</ul>
					</div>
					<div class="service square-title">
						<div>
							<p>服务介绍<span class="glyphicon glyphicon-arrow-right"></span></p>
						</div>
						<ul class="clearfix">
							<li>
								<a href="service.html">
									<img src="Public/imgs/il1.png" />
									<span>物流卡航</span>
								</a>
							</li>
							<li>
								<a href="service1.html">
									<img src="Public/imgs/il2.png" />
									<span>物流空运</span>
								</a>
							</li>
							<li>
								<a href="service2.html">
									<img src="Public/imgs/il3.png" />
									<span>限时到达</span>
								</a>
							</li>
							<li>
								<a href="service3.html">
									<img src="Public/imgs/il4.png" />
									<span>物流普运</span>
								</a>
							</li>
							<li>
								<a href="service4.html">
									<img src="Public/imgs/il5.png" />
									<span>城际快线</span>
								</a>
							</li>
							<li>
								<a href="service5.html">
									<img src="Public/imgs/il6.png" />
									<span>合作共赢</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-7">
					<ul class="clearfix quicklink">
						<li class="link-yf">
							<a href="problem-detail3.html">
								<img src="Public/imgs/ir1.png" />
								<div>
									<span>运费咨询</span>
								</div>
							</a>
						</li>
						<li class="link-wd"> 
							<a href="problem-detail7.html">
								<img src="Public/imgs/ir2.png" />
								<div>
									<span>网点查询</span>
								</div>
							</a>
						</li>
						<li class="link-jj">
							<a href="problem-detail5.html">
								<img src="Public/imgs/ir3.png" />
								<div>
									<span>解决方案</span>
								</div>
							</a>
						</li>
					</ul>
					<div class="news">
						<div class="news-type">
							<ul class="clearfix">
								<li>新闻资讯</li>
								<li class="more"><a href="news.html">查看更多</a></li>
							</ul>
						</div>
						<ul class="news-list">
							<li>
								<a href="news-detail1.html">
									<span>2017-7-12</span>
									<p>国家邮政局发通告要求严格落实收寄验视制度</p>
								</a>
							</li>
							<li>
								<a href="news-detail2.html">
									<span>2017-7-12</span>
									<p>快递集团恭祝全国人民佳节愉快</p>
								</a>
							</li>
							<li>
								<a href="news-detail3.html">
									<span>2017-7-12</span>
									<p>快递一周年：有你就有力量</p>
								</a>
							</li>
							<li>
								<a href="news-detail4.html">
									<span>2017-7-12</span>
									<p>快递引领电商快递新风向上海站沙龙成功举办</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</body>
	<script type="text/javascript">
		$(".sildeshow").load("Apps/Home/View/slideshow.html");
		$(".nav").load("Apps/Home/View/nav.html");
	</script>
</html>