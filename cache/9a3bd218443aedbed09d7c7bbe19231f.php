﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客--梦之声</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="寻梦主题的个人博客模板，优雅、稳重、大气,低调。" />
<link href="public/css/base.css" rel="stylesheet">
<link href="public/css/index.css" rel="stylesheet">
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
</header>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
      <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
      <p>加了锁的青春，不会再因谁而推开心门。</p>
    </ul>
     <?php if(!empty($udertype)):?>
    <div class="avatar"><img width="140px" height="140px" src="<?=$pic;?>" /><a href="index.php?m=update&a=update"><span><?=$username;?></span></a> </div>
    <?php else: ?>
    <div class="avatar"><a href=""><span><?=$username;?></span></a> </div>
    <?php endif;?>
  </section>
</div>
<?php else: ?>
 <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="index.php?m=update&a=about"><span>关于我</span><span class="en">About</span></a><a href="index.php?m=details&a=list"><span>慢生活</span><span class="en">Life</span></a><a href="index.php?m=user&a=login"><span>登录</span><span class="en">Login</span></a><a href="index.php?m=user&a=register"><span>注册</span><span class="en">Register</span></a>
  </nav>
</header>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
      <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
      <p>加了锁的青春，不会再因谁而推开心门。</p>
    </ul>
    <div class="avatar"><a href=""><span>吴春芳</span></a> </div>
  </section>
</div>

<?php endif;?>
<!-- <div class="template">
  <div class="box">
    <h3>
      <p><span>个人博客</span>模板 Templates</p>
    </h3>
    <ul>
      <li><a href="/"  target="_blank"><img src="public/images/01.jpg"></a><span>仿新浪博客风格・梅――古典个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="public/images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="public/images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="public/images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>
      <li><a href="/"  target="_blank"><img src="public/images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="public/images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
    </ul>
  </div>
</div> -->
<article>
  <h2 class="title_tj">
    <p>我的<span>心情</span></p>
  </h2>

  <div class="bloglist left">
  <?php if(!empty($message)):?>
  <?php foreach ($message as $value):?>
    <h3><?=$value['title'];?></h3>
    <?php if(!empty($value['picture'])):?>
     <figure><img src="<?=$value['picture'];?>"></figure>
    <?php else: ?>
    <figure><img src="public/images/001.png"></figure>
    <?php endif;?>
    <ul>
      <p><?=$value['content'];?></p>
      <a title="/" href="index.php?m=details&a=list" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span><?=$time = date('Y-m-d',$value['addtime']);?></span><span>作者：吴春芳</span><span>个人博客：[<a href="blog.wuchunfangw.cn">我的博客</a>]</span></p>
    <?php endforeach;?>
    <?php endif;?>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
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
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="blog.wuchunfangw.cn">个人博客</a></li>
      <li><a href="blog.wuchunfangw.cn">谢泽文个人博客</a></li>
      <li><a href="blog.wuchunfangw.cn">3DST技术网</a></li>
      <li><a href="blog.wuchunfangw.cn">思衡网络</a></li>
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
    <a href="/" class="weixin"> </a></aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>
