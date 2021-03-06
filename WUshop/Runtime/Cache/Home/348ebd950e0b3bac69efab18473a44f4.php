<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_CSS_URL;?>/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_CSS_URL;?>/login_reg.css">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_CSS_URL;?>/reg.css">
	<link rel="stylesheet" type="text/css" href="<?php echo HOME_CSS_URL;?>/media_reg.css">
</head>
<body>
	<main id="container" class="container">
		<section class="page account-page" id="reg">
			<header class="header">
				<h1 class="logo">
					<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><rect width="50" height="50" style="fill:#ef5b00"></rect><rect x="11.25" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><rect x="11.25" y="15" width="12.5" height="5" style="fill:#FFFFFF"></rect><rect x="26.25" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect><rect x="33.75" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><circle cx="23.75" cy="22.5" r="7.5" fill="#FFFFFF"></circle><rect x="16.25" y="20" width="7.5" height="15" style="fill:#ef5b00"></rect><rect x="16.25" y="22.5" width="10" height="12.5" style="fill:#ef5b00"></rect><circle cx="23.75" cy="22.5" r="2.5" fill="#ef5b00"></circle><rect x="18.75" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect></svg>
				</h1>
				<h2 class="title">小米账号注册</h2>
			</header>
			<section class="section form" id="reg">
				<form name="" method="" enctype="" id="login"></form>
				<div class="form-item accounts">
					<input class="" type="text" name="username" placeholder="邮箱/手机号码/小米账号"/>
					<ul class="list">
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
						<li class="item"><span class="l">中国</span><span class="r">+86</span></li>
					</ul>
				</div>
				<div class="form-item">
					<input class="" type="password" name="password" placeholder="密码"><br>
				</div>
				<div class="form-item check_code">
					<input type="text" name="" class="form-itemR" value="" placeholder="图片验证码"/>
					<a href="" class="form-itemL">
						<img src="<?php echo HOME_IMAGES_URL;?>/check_code.png">
					</a>
				</div>
				<button class="form-item btn">立即注册</button><br>
			</section>
			<footer class="footer">
				<p class="desc">
					<span>点击“立即注册”，即表示您同意并愿意遵守小米<a href="">用户协议</a> 和<a href="">隐私政策</a> </span>
				</p>
			</footer>
		</section>
	</main>
	<footer id="footer">
		<div class="options">
			<a href="" class="active">简体</a>
			<a href="">繁体</a>
			<a href="">English</a>
			<a href="">常见问题</a>
		</div>
		<p class="desc">
			小米公司版权所有-京ICP备10046444-京公网安备11010802020134号-京ICP证110507号
		</p>
	</footer>
</body>
</html>