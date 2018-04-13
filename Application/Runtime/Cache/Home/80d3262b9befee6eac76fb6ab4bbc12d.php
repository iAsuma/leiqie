<?php if (!defined('THINK_PATH')) exit();?> 
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>雷切BMS - Layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  
  <link rel="stylesheet" href="/leiqie/Public/layui/css/layui.css"  media="all">
  <script src="/leiqie/Public/js//jquery-3.2.1.min.js"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">雷切 通用后台</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退了</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">所有商品</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="javascript:;">列表三</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">解决方案</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">云市场</a></li>
        <li class="layui-nav-item"><a href="">发布商品</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 20px;">
      <button type="button" id="animation-left-nav">ceshi</button>
      内容主体区域
      
      <br><br>
      <blockquote class="layui-elem-quote">
        layui 之所以赢得如此多人的青睐，更多是在于它“前后台系统通吃”的能力。既可编织出绚丽的前台页面，又可满足繁杂的后台功能需求。
        <br>layui 后台布局， 致力于让每一位开发者都能轻松搭建自己的后台模板。
      </blockquote>
      
      <a href="/doc/element/layout.html#admin" target="_blank" class="layui-btn layui-btn-big">获取该布局代码</a>
      
      <br><br><br><br>
      
       
      
      
      下面是充数内容，为的是出现滚动条<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>充数内容<br>
    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © gotoecho.com - produced by@阿斯玛
  </div>
</div>
<script src="/leiqie/Public/layui/layui.js" charset="utf-8"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
<script type="text/javascript">
  var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_30088308'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30088308' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  //左侧导航栏收缩功能动画效果
  var i = 0;
  $('#animation-left-nav').click(function(){
    //这里定义一个全局变量来方便判断动画收缩的效果,也就是放在最外面
    if(i==0){
      $(".layui-side").animate({width:'toggle'});
      $(".layui-body").animate({left:'0px'});     
      $(".layui-footer").animate({left:'0px'});
      i++;
    }else{
      $(".layui-side").animate({width:'toggle'});
      $(".layui-body").animate({left:'200px'});
      $(".layui-footer").animate({left:'200px'});
      i--;
    }
  });
  //左侧导航栏收缩提示
  $('#animation-left-nav').hover(function(){
    layer.tips('收缩左侧导航栏', '#animation-left-nav', {tips:[4,'#FF8000'],time:0});
  },function(){
    layer.closeAll('tips'); 
  });
</script>
</body>
</html>