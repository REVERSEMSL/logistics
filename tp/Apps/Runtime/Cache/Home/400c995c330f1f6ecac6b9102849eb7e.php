<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<script src="Public/jquery-3.3.1.js"></script>
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
		<style>
			*{margin:0; padding:0; box-sizing: border-box; font-family: "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Heiti SC", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;}
li{list-style: none;}
.navbar{margin-bottom: 0;}
body{background: #f1f1f1;}
.sec{padding:50px 0;}
.carousel-control.left,.carousel-control.right{background-image: none;}

/*online-add*/
.online-add>div{ background-color: #CF2F04;}
.square-title li a:hover{color: #EC6100;}
.square-title>div p{line-height: 60px; font-size: 18px;color: #FFFFFF; margin:0; padding-left: 40px; position: relative;}
.square-title>div p:before{display: block; content: "";  width:10px; height: 10px; position: absolute; background-color: #FFFFFF; left: 15px; top:25px;} 
.square-title>div p span{position: absolute; right:20px; top:20px;}
.online-add ul li{float: left; width:50%;}
.online-add ul li a{display: inline-block; font-size: 15px; color: #666; border:1px solid #d1d1d1; width:100%; height: 50px; line-height: 50px; text-align: center; background-color: #E5E5E5;}
.online-add ul li:nth-child(2n) a{border-left: none;}
.online-add ul{ background-color: #FFFFFF;}
/*service*/
.service>div{background-color: #0059D3;}
.service ul li{width:50%; float: left;}
.service ul li a{display: inline-block;height: 60px; line-height: 60px; width:100%; color: #666; text-align: center; border:1px solid #d1d1d1 ; border-top:none; background-color: #E5E5E5;}
.service ul li a span{font-size: 15px; padding-left: 5px;}
.service ul li:nth-child(2n) a{border-left: none;}
/*quicklink*/
.quicklink li{float: left; width:33.33%; padding:5px;}
.quicklink li img{float: left; padding-right:10px; }
.quicklink li div span{font-size: 18px; display: inline-block; padding:15px 0px;}
.quicklink li a{display: inline-block; width:100%;  padding:10px; color: #FFFFFF;}
.link-yf a{background-color: #EC6100;}
.link-wd a{background-color: #2C77DE;}
.link-jj a{background-color: #CF2F04;}
.link-yf a:hover{background-color: #FF781E;}
.link-wd a:hover{background-color: #5894E3;}
.link-jj a:hover{background-color: #FA3A0A;}
/*news*/
.news{padding:10px;}
.news-type{line-height: 40px; height: 40px;}
.news-type ul{margin:0; border-bottom: 1px solid #CCCCCC;}
.news-type ul li{float: left; padding:0 15px; background-color: #CF2F04; font-size: 15px; color: #FFFFFF;}
.news-list{padding:20px 10px 10px; border-top:1px solid #FFFFFF; border:1px solid #d1d1d1}
.news-list{margin:0; padding-bottom: 22px; background-color: #FFFFFF;}
.news-list li p{margin-right:120px; margin-bottom: 0; color: #666666;overflow: hidden;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;}
.news-list li span{float: right; color: #888888;}
.news-list li{  border-bottom: 1px dashed #CCC; }
.news-list li a{display: inline-block; width:100%;padding:10px 0;}
.news-list li a:hover p,.news-list li a:hover,.news-list li a:hover span{color: #EC6100;}
.more{background-color: transparent !important; color: #666666; float: right !important;}
.more a{color: #888888; font-size: 14px; display: inline-block;}
.more a:hover{color: #CF2F04;}
/*footer*/
footer{padding:20px 0 10px; text-align: center;}
.foot-nav{display: inline-block; margin:0;}
.foot-nav li{float: left;}
.foot-nav li a{display: inline-block; padding:10px 20px; color: #888;}
.foot-nav li a:hover,footer p a:hover{color: #EC6100;}
footer p{color: #666;}
footer p a{color: #666;}
.fl{display: none; position: fixed; bottom: 0; width:100%;}
.fl li a{border-left: 1px solid #699FE6; background-color: #2C77DE; display: inline-block; height: 50px; text-align: center; width:100%; line-height: 50px; font-size: 15px; color: #FFFFFF;}
.fl li:first-child a{border-left: none;}
.fl li a:hover{text-decoration: none;}
.fl li{float: left; width:33.33%;}


/****PG****/
.pg-nav{padding-top:20px;}
.pg-nav>div p{color: #FFFFFF; line-height: 50px; margin: 0; padding-left: 40px; font-size: 16px; position: relative;}
.pg-nav>div p:before{display: block; content: "";width:10px; height: 10px; background-color: #FFFFFF; position: absolute; left: 15px; top:20px;}
.pg-nav>ul li a{border:1px solid #d1d1d1; background-color: #E5E5E5; color: #444; border-top:none; display: inline-block; width:100%; height: 40px; line-height: 40px; text-indent: 2em; font-size: 15px;} 
.pg-nav>ul li a:hover{text-decoration: none; color: #2C77DE;}
.pg-nav>ul li a:after{position: absolute;}
.face{padding-bottom: 10px;}
.face img{max-width:100%;}
.tit-ab{background-color: #EC6100;}
.tit-ol{background-color: #2C77DE;}
.tit-co{background-color: #CF2F04;}
.title{padding:10px 0 15px; border-bottom: 1px solid #028BCF;}
.title h1{font-size: 18px; margin:0; font-weight: bold; color: #00389C; padding-left: 20px; position: relative;}
.title h1:before{display: block; content: ""; width:10px; height: 10px; position: absolute; background: url(../images/a.png); left: 0px; top:5px}
.title h1 span{font-size: 14px; font-weight: normal; color: #888; padding-left: 10px;}
/*about*/
.con-pad{padding:10px; padding-top:30px;}
.intro-con p{line-height: 2; font-size: 15px; text-indent: 2em;}
/*ser-con*/
.ser-con p{text-indent: 2em; font-size: 15px; line-height: 2;}
.ser-con h2{font-size: 18px; color: #00389C; font-weight: bold;}
/*news*/
.news-con li h2{ font-size: 18px; margin-top:10px; color: #444444;}
.news-con li p{line-height: 1.5; color: #666666; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;}
.news-con li span{color: #888888;}
.news-con li {padding:10px 0; border-bottom: 1px dashed #CCCCCC;}
.news-con li a:hover{text-decoration: none; }
.news-con li a:hover h2{color: #2C77DE;}
.news-con li a:hover span{color: #666666;}
.news-con li a:hover p{color: #444444;}
/*news-detail*/
.news-detail h1{font-size: 24px; text-align: center; color: #555;}
.news-detail p{text-align: center; color: #666666;}
.news-detail>div{padding-top:20px;}
.news-detail>div p{text-align: left; text-indent: 2em; color: #777777; line-height: 2;}
/*problem*/
.problem li{list-style: disc inside ;padding:10px 0;  color: #00389C;  border-bottom: dashed 1px #CCCCCC;}
.problem li a{color:#666666;}
.problem li a:hover{color: #028BCF;}
.news-detail .pager{padding-top:20px;}
.news-detail .pager li>a,.news-detail .pager li>span{background-color: transparent; border: none; color: #888;}
.news-detail .pager li{width:100%; display: inline-block;}
.news-detail .pager .next>a,.news-detail .pager .next>span{float: left;}
.news-detail .pager li>a:hover{color: #028BCF; text-decoration: underline;}
/*honor-con*/
.honor-con p{line-height: 2; font-size: 15px;}
/*contact*/
.address{padding:10px 0 20px;}
.address p{font-size: 15px; line-height: 2; color: #00389C;}
.map iframe{border: none; width:100%; height: 300px;}
.map{position: relative;}
.map span{position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); font-size: 16px;}
#message{padding-top:30px;}
#message>p{font-size: 18px; font-weight: bold; color: #00389C;}
#message form p{font-size: 15px; line-height: 2; padding-top:5px; margin: 0; color: #666;}
#message form input{height: 40px; padding:10px; width:100%; border:1px solid #CCCCCC;}
#message form input:focus{outline: none;}
#message form textarea:focus{outline: none;}
#message form textarea{ padding:10px; width:100%;border:1px solid #CCCCCC; height: 200px;}
#message form input[type="button"]{width:100px; margin-top: 10px; border: none; background-color: #00389C; color: #FFFFFF;}
/*onlinepg*/
.onlinepg>div>p{padding-left: 10px; border-left: 2px solid #00389C; line-height: 1; margin: 5px 0 10px;font-size: 16px; color: #00389C;}
.onlinepg>div li{padding-bottom: 10px;}
.onlinepg>div li p i{color: #F00; padding-right:10px;}
.onlinepg>div li input{height: 30px; padding:5px; outline: none; border:1px solid #CCCCCC;}
.onlinepg>div textarea{width:100%; height: 150px; outline: none; padding:10px; border:1px solid #CCCCCC;}
.sm{color: #999;}
.mes{color: #999; margin-left: -15px;}
.onlinepg input[type="button"]{margin-top:20px; width:100px; height: 35px; background-color: #028BCF; border: none; color: #FFFFFF;}
@media only screen and (max-width: 992px){
	.quicklink li a{padding:5px; text-align: center;}
	.quicklink li img{float: none; padding: 0;}
	.quicklink li div span{font-size: 15px; padding:5px 0 0;}
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
	.news-list{padding-bottom: 10px;}
	.nav{padding:20px 0; float: left !important;}
}
@media only screen and (max-width: 767px) {
	.onlinepg>div li input{width:100%;}
	.navbar-brand{padding:0 !important;}
	.sec{padding-top: 20px; padding-bottom: 0;}
	.foot-nav{display: none;}
	footer{margin-bottom: 50px;}
	.navbar-header{padding:10px 0;}
	.fl{display: block;}
	.face{display: none;}
}
		</style>
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