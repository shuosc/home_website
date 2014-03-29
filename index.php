<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>上海大学开源社区主页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- //////// Favicon ////////  -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"  />

	<!--
		x响应式布局
    -->
    <!--[if lt IE 9]>
        <script src="<a href="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>" class="ext" target="_blank">http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.j...</a><span class="ext"></span>
    <![endif]-->



	<!-- //////// Css StyleSheets ////////  -->
	<!-- 引入这些文件至 <head> 中 -->
<link rel="stylesheet" href="js/responsive-nav.js-master/responsive-nav.css">
<script src="js/responsive-nav.js-master/responsive-nav.min.js"></script>	
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/slide.js"></script>
	<script>
    (function($){
        $(window).load(function(){
            $(".turnto_point").mCustomScrollbar();
        });
    })(jQuery);
</script>

</head>
<body>
	<div id="Bcontainer">
        <a href="https://github.com/shuopensourcecommunity">
            <img style="position: absolute; top: 0; right: 0; border: 0;" src="css/images/joinus.png" alt="Join us on GitHub">
        </a>
        <div id="container">
			<div id="head">
				<div class="head_logo">
					<a class="logo" href="index.php"></a>
					<div class="osi_div">
						<a class="osi" href="index.php">
							<div><span>上海大学开源社区</span></div>
							<div class="subtitle">SHU Open Source Community</div>
						</a>
					</div>
				</div>
				<div class="sub">
					<ul>
						<li><a href="#" >主页</a></li>
						<li><a href="https://github.com/shuopensourcecommunity" >Github</a></li>
						<!--<li><a href="#" >About us</a></li>-->
					</ul>
					<div class="sub_right">
						<!--<div class="signup_d"><a href="">sign up</a></div>
						<div>or</div>
						<div class="login_d"><button></button></div>-->
					</div>
				</div>
			</div>
			<div class="clearboth"></div>
			<div id="cv">
				<div class="photowall">	
					<div class="pwh"><a href="">相册</a></div>
					<div class="pwc">
						<div class="pwcl">
                            <div class="leaderbox">
                                <div class="leader_img"></div>
                                <div class="leader_dsp">
                                    社区负责人： <span class="highlight">杨 瑒</span>
                                </div>
                                <div class="leader_but">
                                    + 联系他
                                </div>
                            </div>
						</div>
						<div class="pwcr">
							<div class="turnto_box">
								<ul class="turnto_point">
									<li><img src="css/images/1.jpg" alt=""></li>
									<li><img src="css/images/2.jpg" alt=""></li>
									<li><img src="css/images/3.jpg" alt=""></li>
									<li><img src="css/images/4.jpg" alt=""></li>
									<li><img src="css/images/5.jpg" alt=""></li>
								</ul>
							</div>
							<div class="pwcll">
								<div class="img_box">
									<img  id="img_1" src="css/images/1.jpg" alt="">
									<img  id="img_2" src="css/images/2.jpg" alt="">
									<img  id="img_3" src="css/images/3.jpg" alt="">
									<img  id="img_4" src="css/images/4.jpg" alt="">
									<img  id="img_5" src="css/images/5.jpg" alt="">
								</div>
								<div class="content_box">
									上海大学开源社区是一个以开源软件为基础的以技术交流和项目合作为主要活动的学生组织。
								</div>
							</div>

                            <div id="content_1">
                                上海大学开源社区与社会上的技术活动组织也有良好的接触，该照片为【拥抱开源 - 企业IT自主之路】志愿者活动
                            </div>
                            <div id="content_2">
                                上海大学开源社区与社会上的技术活动组织也有良好的接触，该照片为【拥抱开源 - 企业IT自主之路】志愿者活动
                            </div>
                            <div id="content_3">
                                开源系列讲座专题 - Django框架Web应用开发，主讲人：杨凡
                            </div>
                            <div id="content_4">
                                2013年冬季开源系列讲座，为开源社区在学院内部开设的长期活动，意在让对技术感兴趣的同学能够得到更多的机会
                            </div>
                            <div id="content_5">
                                开源系列讲座专题 - QML and QT5 introduction.
                            </div>
						</div>
					</div>
				</div>
                <!-- PHP ： 人人状态信息显示-->
                <?php require_once("message_list.php"); ?>
				<div class="message_list">
                    <?php foreach($result as $k=>$r) { ?>
					<div class="msg_item" id="aid<?=$r['aid']?>">
                        <div class="msg_logo"><div class="msg_img"></div></div>
                        <div class="msg_name">开源社区</div>
                        <div class="msg_content"> <?=$r['content']?></div>
					</div>
                <?php } ?>
                </div>
            </div>
		</div>
		<div class="footer_logo"><img src="css/images/logoforfooter.png" alt=""></div>
		<div id="footer">
			<div class="footer_1">
				<div class="footer_1c">本站开发者</div>
<!--                <img src="css/images/shanghai_gdg.png" alt=""/>-->
				<ul>
                    <li>Ryan Yuan： 设计者</li>
                    <li>XuLi: 前端开发</li>
                    <li>Grzhan： 后端开发、维护</li>
				</ul>
			</div>
			<div class="footer_1">
				<div class="footer_1c">关于本站</div>
<!--                <img src="css/images/shu.png" alt=""/>-->
				<ul>
					<li>支持响应式（部分）</li>
					<li>采用PHP/Apache开发</li>
					<li>请使用Chrome/Firefox/IE9+等浏览器浏览</li>
				</ul>
			</div>
            <div class="footer_1">
                <div class="footer_1c">联系我们</div>
                <ul>
                    <li>Email:getbetterabc@yeah.net</li>
                    <li>Tel: 13761283909</li>
                    <li>QQ:386839406</li>
                    <li>Copyright:2013-2014</li>
                </ul>
            </div>
			<div class="footer_1">
				<div class="footer_1c">支持与合作</div>
<!--                <img src="css/images/csdn_club.png" alt=""/>-->
				<ul>
					<li>上海大学计算机工程与科学学院</li>
					<li>上海谷歌开发组</li>
					<li>CSDN高校俱乐部</li>
				</ul>
			</div>
	
		</div>
	</div>
    <script>
        var navigation = responsiveNav(".sub",{animate:true});
        navigation.toggle();
    </script>

</body>
</html>
<!-- PHP ： 人人状态信息更新 -->
<?php
    ob_start();
    renrenUpdate();
    ob_end_clean();
?>