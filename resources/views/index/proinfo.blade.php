<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <title>三级分销</title>
    <link rel="shortcut icon" href="/static/index/images/favicon.ico" />
    
    <!-- Bootstrap -->
    <link href="/static/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/index/css/style.css" rel="stylesheet">
    <link href="/static/index/css/response.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond./static/index/js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="maincont">
     <header>
      <a href="javascript:history.back(-1)" class="back-off fl"><span class="glyphicon glyphicon-menu-left"></span></a>
      <div class="head-mid">
       <h1>产品详情</h1>
      </div>
     </header>
     <div id="sliderA" class="slider">
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" />
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" />
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" />
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" />
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" />
     </div><!--sliderA/-->
     <table class="jia-len">
      <tr>
       <th><strong class="orange">{{$data->shop_price}}</strong></th>
       <td>
        <input type="text" class="spinnerExample" />
       </td>
      </tr>
      <tr>
       <td>
        <strong>{{$data->shop_name}}</strong>
        <p class="hui">{{$data->shop_account}}</p>
       </td>
       <td align="right">
        <a href="javascript:;" class="shoucang"><span class="glyphicon glyphicon-star-empty"></span></a>
       </td>
      </tr>
     </table>
     <div class="height2"></div>
    
     <div class="height2"></div>
     <div class="zhaieq">
      <a href="javascript:;" class="zhaiCur">商品简介</a>
      <a href="javascript:;">商品参数</a>
      <a href="javascript:;" style="background:none;">订购列表</a>
      <div class="clearfix"></div>
     </div><!--zhaieq/-->
     <div class="proinfoList">
      <img src="{{env('UPLOAD_URL')}}{{$data->shop_img}}" width="636" height="822" />
     </div><!--proinfoList/-->
     <div class="proinfoList">
      暂无信息....
     </div><!--proinfoList/-->
     <div class="proinfoList">
      暂无信息......
     </div><!--proinfoList/-->
     <table class="jrgwc">
      <tr>
       <th>
        <a href="index.html"><span class="glyphicon glyphicon-home"></span></a>
       </th>
       <td><a href="car.html">加入购物车</a></td>
      </tr>
     </table>
    </div><!--maincont-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/static/index/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/style.js"></script>
    <!--焦点轮换-->
    <script src="/static/index/js/jquery.excoloSlider.js"></script>
    <script>
		$(function () {
		 $("#sliderA").excoloSlider();
		});
	</script>
     <!--jq加减-->
    <script src="/static/index/js/jquery.spinner.js"></script>
   <script>
	$('.spinnerExample').spinner({});
	</script>
  </body>
</html>