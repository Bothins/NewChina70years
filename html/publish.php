<?php
	session_start();

	if(isset($_SESSION['userinfo'])){
		$login = true;
		$userinfo = $_SESSION['userinfo'];
	}
	else{
		$login = false;
	}

	if(isset($_GET['action']) && $_GET['action']=='logout'){
		unset($_SESSION['userinfo']);
		if(empty($_SESSION))
			session_destroy();
		header("Refresh:0;url=./login.html");
		die;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<title>C H L C -- 发表博客</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<section id="nav_fixed" class="nav_box" ><!--class="nav_box"-->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../index.html" class="navbar-brand"></a>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../index.html">首页</a></li>
                    <li><a href="journey.html">辛酸历程</a></li>
                    <li id="dropdown" class="dropdown">
                        <a href="#"  class="dropdown-toggle" data-toggle="dropdown">丰功伟绩<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left ">
                            <li><a href="a2019.html">不凡2019</a></li>
                            <li><a href="power.html">厉害了我的国</a></li>
                        </ul>
                    </li>
                    <li><a href="photosShow.html">时光相馆</a></li>
                    <li class="active"><a href="discussion.html">爱国论坛</a></li>
                    <li><a href="aboutUs.html">关于我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <div class="container">
    	<div class="row">
        	<div class="col-sm-9 publishBox" style="min-height: auto;margin-bottom: 30px;">
    			<h3 style="text-align: center;">发表博文</h3>
    			<form action="backPhp/publishInfo.php" method="post">
    				<div class="form-group" style="margin-top: 20px;">
			   			<label>文章分类：</label><select name="articleKind">
			   				<option value="1">爱国论坛</option>
			   				<option value="2">回忆过往</option>
			   				<option value="3">闲谈祖国</option>
			   				<option value="4">其他</option>
			   			</select>
			   	    </div>
    				<div class="form-group">
    					<label>标题：</label>
			   		    <input type="text"  name="title" />
			   	   </div>
			   	    <div>
						<link rel="stylesheet" type="text/css" href="umeditor/themes/default/css/umeditor.min.css"/>
						<script type="text/javascript" src="umeditor/third-party/jquery.min.js"></script>
						<script type="text/javascript" src="umeditor/umeditor.config.js"></script>
						<script type="text/javascript" src="umeditor/umeditor.min.js"></script>
						<script type="text/javascript" src="umeditor/lang/zh-cn/zh-cn.js"></script>
						<script type="text/javascript">
							$(function(){
								UM.getEditor('myEditor');
							});
						</script>
						<script type="text/plain" id="myEditor" style="height: 300px;width: 100%;" name="content">
							<p>请在里编写文章。。。</p>
						</script>
			   	    </div>
			   	    <div style="width: 200px;margin: 10px auto;">
			   	    	<input type="submit" value="提交" class="btn btn-info btn-sm" />
				   	    <input type="reset" style="margin-left: 100px;"  value="重置" class="btn btn-danger btn-sm" />
			   	    </div>
    			</form>
    		</div>
	        <div class="col-sm-3 side-bar">
	            <div class="list" style="height: 110px;">
	                <div class="card-title">| 搜索文章</div>
	                <div class="card-body" style="margin-top: 10px;">
	                    <form action="" class="navbar-form navbar-left" rol="search" method="post">
	                        <div class="form-group">
	                            <input type="text" class="form-control input-sm" placeholder="搜 爱国论坛 文章" name="key"/>
	                        </div>
	                        <button type="submit" class="btn btn-danger btn-sm">搜索</button>
	                    </form>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-8">
	                    <div class="list-group">
	                        <a href="javascript:;" class="list-group-item active">爱国论坛</a>
	                        <a href="mainPages.php?page=1" class="list-group-item">回忆过往</a>
	                        <a href="mainPages.php?page=2" class="list-group-item">美好祝愿</a>
	                        <a href="mainPages.php?page=3" class="list-group-item">闲谈祖国</a>
	                        <a href="mainPages.php?page=4" class="list-group-item">其他</a>
	                        <a href="publish.php" class="list-group-item">发表文章</a>
	                    </div>
	                </div>
	            </div>
	
	        </div>
    	</div>
    </div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('.unLogin').click(function(){
			if(!<?php echo $login; ?>)
				alert("请先登录后再操作！！");
		});

	});
</script>