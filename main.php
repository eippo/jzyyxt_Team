<!doctype>
<html>
<head>
<title>信息科学与技术学院</title>
<meta http-equiv="Content-Type" content="text/html" ; charset="gb2312">
<script src="jsq/jquery-3.1.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/index.css" type="text/css"
	media="screen">
</head>

<body>
	<div class="jzyyxt-toolbar jzyyxt-toolbar-skin-blue">
		<div class="container">
			<div class="pull-left">讲座预约系统</div>
			<div class="pull-right">登陆|注册</div>
		</div>
	</div>



	<div class="main-content clearfix">
		<div class="content_l fl">
			<div class="categ">
				<div class="mod_title">
					<div class="border_b"></div>
					<h4 class="mod_title_t">
						<label style="font-weight:bold;">我的系统</label>
					</h4>
				</div>
				<div class="blog_category">
					<ul class="category_list">
						<li><a href="#0" data-type="modal-trigger" id="search_chair">查询讲座</a><a href="#1" data-type="modal-trigger" id="book_chair">预约讲座</a></li>
						<li><a href="#0" data-type="modal-trigger" id="upload_paper">论文上传</a><a href="#1" data-type="modal-trigger" id="my_paper">我的论文</a></li>
						<li><a href="#0" data-type="modal-trigger" id="search_paper">论文搜索</a><a href="#1" data-type="modal-trigger" id="operation_guide">操作手册</a></li>
						<li><a href="#0" data-type="modal-trigger" id="change_password">修改密码</a><a href="#1" data-type="modal-trigger" id="exit">退出系统</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="content_r fr">
			<div id="right-content" class="main-home">请在左侧菜单选择具体操作</div>
		
		</div>
	</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
	alert("hello world!");
});

$(function(){
	$("#search_chair").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#book_chair").click(function(){
		$("#right-content").load("book_chair.php");
	});
	$("#upload_paper").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#my_paper").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#search_paper").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#operation_guide").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#change_password").click(function(){
		$("#right-content").load("search_chair.php");
	});
	$("#exit").click(function(){
		$("#right-content").load("search_chair.php");
	});
});
</script>
</html>