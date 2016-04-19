<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<title>产品详情</title>
<link rel="Shortcut Icon" href="<?php echo IMG_PATH;?>admin_img/favicon.ico">
<!--<script>
//实现页面自动跳转
	setTimeout(function(){
location.href="<?php echo APP_PATH;?>index.php";

},18000);
</script>-->
<meta http-equiv="refresh" content="300;url=<?php echo APP_PATH;?>index.php"/>
<link href="<?php echo APP_PATH;?>statics/xnn/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo APP_PATH;?>statics/xnn/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo APP_PATH;?>statics/xnn/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo APP_PATH;?>statics/xnn/css/flexslider.css" type="text/css" media="screen" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Coffee Bar Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!--<link href='http://fonts.useso.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Courgette' rel='stylesheet' type='text/css'>-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/xnn/js/easing.js"></script>

	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="header" style="height:180px">
   <div class="container">
        <div class="header-main">
			 <div class="logo">
			   <!--<a href="index.html"><img src="<?php echo APP_PATH;?>statics/xnn/images/logo.gif" alt=""></a>-->
			 </div>
            <div class="top-nav">
            	<span class="menu"> <img src="<?php echo APP_PATH;?>statics/xnn/images/icon.png" alt=""/></span>
				<div style="float: left;margin-left:-50px;margin-top:20px""><a href="<?php echo APP_PATH;?>index.php"><img style="max-width: 100%" src="<?php echo APP_PATH;?>statics/xnn/images/logo.png" /></a></div>
				<ul class="nav nav-pills nav-justified res">
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li ><a class="active" href="javascript:history.back()"><i class="glyphicon glyphicon-home"></i>返回</a></li>
				</ul>
				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			<!-- /script-for-menu -->
			 </div>	
     <div class="clearfix"> </div>
   </div>	
 </div>
</div>
<!--header end here-->
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-bottom">
			<div class="col-md-9 blog-left">
				<div class="blog-grids">
					<h3>详细内容介绍</h3>
					<a href="#" ><img src="<?php echo $thumb;?>" alt="" class="img-responsive" style="margin:0 auto;width:600px"></a>
					<div class="blog-detail" style="width:100%;height:380px;margin:0 auto;border:1px solid #ccc;float:right;overflow:auto;padding:30px;">
						<h4 style="text-align:center;"><?php echo $title;?></h4>
						<p style="text-indent:2em;"><?php echo $content;?>
						</p>
					
					</div>
				</div>
				
            

			</div>
		
		</div>
		    <div class="clearfix"> </div>
		 </div>
	 </div>
  </div>
</div>
</body>
</html>