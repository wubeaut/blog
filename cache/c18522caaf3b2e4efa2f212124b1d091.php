<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="public/css/base.css" rel="stylesheet">
<link href="public/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
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
<article class="blogs">
<h1 class="t_nav"><span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span><a href="index.php" class="n1">网站首页</a><a href="index.php?m=details&a=list" class="n2">慢生活</a></h1>
<div class="newblog left">
   <?php if(!empty($message)):?>
  <?php foreach ($message as $value):?>
   <h2><?=$value['title'];?></h2>
    <p class="dateview"><span><?=$time = date('Y-m-d',$value['addtime']);?></span><span>作者：吴春芳</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
    <figure><img src="public/images/001.png"></figure>
    <ul class="nlist">
      <p><?=$value['content'];?></p>
      <a title="/" href="index.php?m=details&a=reply&id=<?=$value['id'];?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="line"></div>
     <?php endforeach;?>
    <?php endif;?>
     
    <div class="blank"></div>
    <div class="ad">  
   
    </div>
    <div class="page"><a title="Total record"><b><?=$total;?></b></a><a href="index.php?m=details&a=list&page=<?=$allPage['first'];?>"><b>首页</b></a><a href="index.php?m=details&a=list&page=<?=$allPage['prev'];?>"><</a><a href="index.php?m=details&a=list&page=<?=$allPage['next'];?>">></a><a href="index.php?m=details&a=list&page=<?=$allPage['end'];?>">尾页</a></div>
</div>
<aside class="right">
 <!-- <form action="index.php?m=details&a=find" method="post"> -->
   <div class="rnav">
      <ul>
       <li class="rnav1"><a href="/download/" target="_blank">日记</a></li>
       <li class="rnav2"><a href="/newsfree/" target="_blank">程序人生</a></li>
       <li class="rnav3"><a href="/web/" target="_blank">欣赏</a></li>
       <li class="rnav4"><a href="/newshtml5/" target="_blank">短信祝福</a></li>
     </ul>
     <!-- <input type="text" name="search" ><input type="submit" name="sub" value="搜索">   -->
    </div>
  <!-- </form> -->
<div class="news">
<h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
    <?php if(!empty($article)):?>
    <?php foreach ($article as $val):?>
      <li><a href="index.php?m=details&a=list" title="Column 三栏布局 个人网站模板" target="_blank"><?=$val['title'];?></a></li>
    <?php endforeach;?>
    <?php endif;?>
    </ul>
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
     <?php if(!empty($hits)):?>
    <?php foreach ($hits as $vel):?>
      <li><a href="index.php?m=details&a=list" title="Column 三栏布局 个人网站模板" target="_blank"><?=$vel['title'];?></a></li>
      <?php endforeach;?>
      <?php endif;?>
    </ul>
    </div>
    <div class="visitors">
      <h3><p>最近访客</p></h3>
      <ul>

      </ul>
    </div>
     <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
</aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>