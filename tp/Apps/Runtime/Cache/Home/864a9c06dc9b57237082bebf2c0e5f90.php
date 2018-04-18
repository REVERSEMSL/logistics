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
					<p>新闻资讯</p>
				</div>
				<ul>
					<li><a href="news.html">新闻中心</a></li>
				</ul>
				<div class="tit-ol">
					<p>在线下单</p>
				</div>
				<ul>
					<li><a href="online.html">立即下单</a></li>
					<li><a href="problem.html">常见问题</a></li>
				</ul>
				<div class="tit-co">
					<p>联系我们</p>
				</div>
				<ul>
					<li><a href="contact.html">在线留言</a></li>
				</ul>
			</div>
			<div class="col-sm-9">
				<section class="title">
					<h1>
						新闻中心
						<span>NEWS CENTER</span>
					</h1>
				</section>
				<div class="news-con con-pad">
					<ul>
						<li>
							<a href="news-detail1.html">
								<h2>国家邮政局发通告要求严格落实收寄验视制度</h2>
								<span>2017-7-13</span>
								<p>
									新华网北京8月1日电国家邮政局近日会同公安部、国家安全部联合发出通告，要求切实维护南京青奥会期间的寄递物品安全，严格落实收寄验视制度.
								</p>
							</a>
						</li>
						<li>
							<a href="news-detail2.html">
								<h2>快递集团恭祝全国人民佳节愉快</h2>
								<span>2017-7-13</span>
								<p>
									月朗星疏，金秋送爽。值此国庆佳节和中秋佳节来临之际，安曙达集团向一直以来支持、关心安曙达成长的各级领导、合作伙伴、客户、媒体及社会各界朋友，致以深深的祝福和衷心的感谢！同时向节日期间坚守在工作岗位上的各位同仁们表示诚挚问候，并致以崇高的敬意。
								</p>
							</a>
						</li>
						<li>
							<a href="news-detail3.html">
								<h2>快递一周年：有你就有力量</h2>
								<span>2017-7-13</span>
								<p>
									一个特殊的日子，安曙达品牌成立一周年。北京、上海、东莞三地同时启动“有你就有力量”安曙达一周年庆典，安曙达数千名员工代表齐聚一堂共同同庆祝公司1周岁生日。
								</p>
							</a>
						</li>
						<li>
							<a href="news-detail4.html">
								<h2>引领电商快递新风向上海站沙龙成功举办</h2>
								<span>2017-7-13</span>
								<p>
									8月20日下午，安曙达集团“引领电商快递新风向”沙龙上海站活动圆满落幕，来自上海地区及周边城市四十余家电商企业出席了本次活动。其中，安曙达集团副总裁刘某某、品牌总监戴某某、上海公司浦西总经理许某、浦东公司副总经理王某某等代表应邀参会。来自各方的企业代表纷纷各抒己见，共同探讨电商与快递之间发展的诸多关键要素。
								</p>
							</a>
						</li>
					</ul>
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