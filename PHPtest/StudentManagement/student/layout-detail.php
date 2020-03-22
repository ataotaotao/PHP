<?php
	header("content-type:text/html;charset=UTF-8");
	require_once '../function_class./mysqli.func.php';

	//接受参数
	$id = isset($_REQUEST['id'])?$_REQUEST['id']:"";
	$mysql = new MysqlConnect("Wt1779791796","51zxw");


	$result = $mysql->search("student","*","where id = $id");

	// echo "<pre>";
	// print_r($result);
	// echo "</pre>";




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>detail</title>
	<link rel="stylesheet" href="static/css/bootstrap.min.css">  
	<style type="text/css">
		body{ font-family: 'Microsoft YaHei';}
		/*.panel-body{ padding: 0; }*/
	</style>
</head>
<body>
<div class="jumbotron">
	<div class="container">
		<h1>Laravel 为web艺术家设计</h1>
  		<h3>——我就是玩不转form表单</h3>
  		
	</div>
</div>
<div class="container">
	<div class="main">
		<div class="row">
			<!-- 左侧内容 -->
			<div class="col-md-3">
				<div class="list-group">
					<a href="layout-index.php" class="list-group-item text-center active">学生列表</a>
					<a href="layout-form.php" class="list-group-item text-center">新增学生</a>
				</div>
			</div>
			<!-- 右侧内容 -->
			<div class="col-md-9">
				<!-- 自定义内容 -->
				<div class="panel panel-default">
					<div class="panel-heading">学生详情</div>
					<div class="panel-body">
						<table class="table table-striped table-responsive table-hover">
							<tbody>
								<?php
									foreach($result as $key=>$val){
								?>
									<tr>
									<td width="50%">ID</td>
									<td><?php echo $val['id']; ?></td>
								</tr>
								<tr>
									<td>姓名</td>
									<td><?php echo $val['username']; ?></td>
								</tr>
								<tr>
									<td>年龄</td>
									<td><?php echo $val['age']; ?></td>
								</tr>
								<tr>
									<td>性别</td>
									<td><?php echo $val['sex']; ?></td>
								</tr>
								<?php
									}
								?>
								
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- <nav>
					<ul class="pagination pull-right">
					<li  class="previous"><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</nav>	 -->
			</div>
		</div>
  	</div>
</div>
<!-- 尾部 -->
<div class="jumbotron" style=" margin-bottom:0;margin-top:105px;">
	<div class="container">
	<span>&copy; 2016 Saitmob</span>
	</div>
</div>


	<script src="static/js/jquery-3.1.0.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
</body>
</html>