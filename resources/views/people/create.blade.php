<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 水平表单</title>
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">  
	<script src="/static/js/jquery.min.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
</head>
<body>
<center><h1>外来人统计添加</h1></center>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form  action="{{url('/people/store')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">名字</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="username" id="firstname" 
				   placeholder="请输入名字">
				   <b style="color:red">{{$errors->first('username')}}</b>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">年龄</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"name="age" id="lastname" 
				   placeholder="请输年龄">
				    <b style="color:red">{{$errors->first('age')}}</b>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">身份证</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"	name="card" id="lastname" 
				   placeholder="请输身份证">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">是否是湖北人</label>
	<div class="radio">
    <label>
        <input type="radio" name="is_hubei" id="optionsRadios1"  value="1">是  
    </label>
    <label>
        <input type="radio" name="is_hubei" id="optionsRadios2"  value="2" checked>否
    </label>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">头像</label>
		<div class="col-sm-10">
				<input type="file" name="head" class="form-control">
		</div>
		</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>

</body>
</html>