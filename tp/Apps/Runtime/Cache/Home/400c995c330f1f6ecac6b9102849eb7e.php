<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="Public/bootstrap-3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="Public/css/main.css">
		<script src="Public/jquery-3.3.1.js"></script>
		<script src="Public/bootstrap-3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.login_in,.regist_in{
				width: 100%;
			}
			.div_login{
				min-height: 300px;
			}
			.login_in 
		</style>
	</head>
	<body>
		<div class="nav"></div>
		<div class="sildeshow"></div>
		<div class="sec container">
			<div class="row">
				<div class="col-sm-5 ">
					<div class="div_login">
						<div class="col-sm-6 col-xs-8 login_in">
							<input type="text" class="form-control" name="u_name" id="u_name" placeholder="用户名"><br>		
							<input type="text" class="form-control" name="u_pwd" id="u_pwd" placeholder="密码"><br>
							<input class="btn btn-default log_btn" type="button" name="" value="登录">
							<input class="btn btn-default" type="button" name="" value="快速注册"><br>
						</div>
					</div>

					<div class="div_regist">
						<div class="col-sm-6 col-xs-8 regist_in">
							<input type="text" class="form-control" name="u_rname" id="u_rname" placeholder="用户名"><br>		
							<input type="password" class="form-control" name="u_rpwd" id="u_rpwd" placeholder="密码"><br>
							<input type="password" class="form-control" name="u_rrpwd" id="u_rrpwd" placeholder="再次填写密码"><br>
							<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 顾客
							</label>
							<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 送件人
							</label>
							
							<input type="text" class="form-control" name="u_address" id="u_address" placeholder="地址"><br>
							<input type="number" class="form-control" name="u_rtel" id="u_rtel" placeholder="手机号"><br>
							<input type="text" class="form-control" name="u_rmail" id="u_rmail" placeholder="邮箱"><br>
							<input class="btn btn-default reg_btn" type="button" name="" value="去登录">
							<input class="btn btn-default reg_btn " type="button" name="" value="注册"><br>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
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
		$(".nav").load("Apps/Home/View/nav.html");
		$(".sildeshow").load("Apps/Home/View/slideshow.html");
		$('body').on('click','.log_btn',function () {
			$.ajax({
				url: "<?php echo U("Home/index/login");?>",
				type: 'post',
				dataType: 'json',
				data: {
					u_name:$('#u_name').val(),
					u_pwd:$('#u_pwd').val()
				},
				success:function(data){
					console.log(data);
					if (data.ok=="success") {
						alert('登录成功');
					}else{
						alert('登录失败');				
					}
				}
			})
		})
		$('body').on('click','.reg_btn',function () {
			// var radio;
			// $('input[name="inlineRadioOptions"]').each(function () {
			// 	// if($(this).prop('checked')){

			// 	// }
			// 	alert($('input[name="inlineRadioOptions"]').val());
			// })
			$.ajax({
				url: "<?php echo U("Home/index/regist");?>",
				type: 'post',
				// dataType: 'json',
				data: {
					u_name:$('#u_rname').val(),
					u_pwd:$('#u_rpwd').val(),
					u_address:$('#u_address').val(),
					u_tel:$("#u_rtel").val(),
					u_mail:$("#u_rmail").val()
				},
				success:function(data){
					console.log(data);
					if (data.ok=="success") {
						alert('注册成功');
					}else{
						alert('注册失败');				
					}
				}
			})
		})
	</script>
</html>