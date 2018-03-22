<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="public/css/base.css" rel="stylesheet">
<link href="public/css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
 <?php if(!empty($username)):?>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="index.php?m=update&a=about"><span>关于我</span><span class="en">About</span></a><a href="index.php?m=details&a=list"><span>慢生活</span><span class="en">Life</span></a><!-- <a href="index.php?m=details&a=reply"><span>碎言碎语</span><span class="en">Doing</span></a> -->
   <?php if(!empty($udertype)):?>
    <a href="index.php?m=details&a=send"><span>发表博文</span><span class="en">Send</span></a>
  <a href="index.php?m=admin&a=login"><span>后台管理</span><span class="en">Admin</span></a>
  
  <?php endif;?>
  <a href="index.php?m=user&a=logout"><span>退出</span><span class="en">Exit</span></a>
 
  <a href="index.php?m=user&a=word"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
  <?php else: ?>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="index.php?m=update&a=about"><span>关于我</span><span class="en">About</span></a><a href="index.php?m=details&a=list"><span>慢生活</span><span class="en">Life</span></a><a href="index.php?m=user&a=login"><span>登录</span><span class="en">Login</span></a><a href="index.php?m=user&a=register"><span>注册</span><span class="en">Register</span></a>
  </nav>
  <?php endif;?>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.php" class="n1">网站首页</a><a href="index.php?m=details&a=send" class="n2">发表博文</a></h1>
<form action="index.php?m=details&a=doSend" method="post" enctype="multipart/form-data">
<div class="about left">
  <h2>Just about me</h2>
    <ul> 
    <!--  <img src="public/images/001.png"> -->
      <input class="fat_title_a" type="text" name="title" value="">
          <span>还可以输入80个字符</span>
 <script type="text/javascript" src="public/ckeditor/ckeditor.js" ></script>
          <textarea class="ckeditor" name="content" value=""></textarea>
          <div class="reply_ri_sub">
           <!--  <input type="hidden" name="hid_id" value="<?=$id;?>"> -->
           <!--  <input type="hidden" name="hid_cid" value="<?=$cid;?>"> -->
            <input type="hidden" name="hid_username" value="<?=$_SESSION['username'];?>">
            <input class="reply_sub_a" type="submit" name="reply_sub" value="发表博文">
            <input type="file" name="file" value="上传图片">
  </ul>
    <h2>About my blog</h2>
    <p>域  名：blog.wuchunfangw.cn 创建于2017年09月30日 <a href="/" class="blog_link" target="_blank">注册域名</a></p>
    <p>服务器：阿里云服务器<a href="/" class="blog_link" target="_blank">购买空间</a></p>
    <p>备案号：蜀ICP备11002373号-1</p>
    <p>程  序：PHP 帝国CMS7.0</p>
</div>
</form>
<aside class="right">  
  <form action="index.php?m=update&a=doUpdate">
  <?php if(!empty($udertype)):?>
    <div class="about_c">
    <p>网名：<span>DanceSmile</span> | 即步非烟</p>
    <p name="name">姓名：杨青 </p>
    <p name="birthday">生日：1987-10-30</p>
    <p>籍贯：四川省—成都市</p>
    <p>现居：天津市—滨海新区</p>
    <p>职业：网站设计、网站制作</p>
    <p>喜欢的书：《红与黑》《红楼梦》</p>
    <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="杨青个人博客网站" title="杨青个人博客网站"></a>
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a>
<a href="index.php?m=update&a=update"><b style="font-size: 16px;">修改个人资料</b></a>
</div>     
  <?php else: ?>
  
    <div class="about_c">
    <p>网名：<span>Beautiful</span> | 沦落为雨季</p>
    <p>姓名：吴春芳 </p>
    <p>生日：1996-03-30</p>
    <p>籍贯：山西省—忻州市</p>
    <p>现居：北京市—昌平区</p>
    <p>职业：网站设计、网站制作</p>
    <p>喜欢的书：《红与黑》《红楼梦》</p>
    <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="杨青个人博客网站" title="杨青个人博客网站"></a>
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a>
</div>  
</form>
<?php endif;?>   
</aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>


 