<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="public/css/base.css" rel="stylesheet">
<link href="public/css/mood.css" rel="stylesheet">
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
<div class="moodlist">
  <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="index.php" class="n1">网站首页</a><a href="index.php?m=details&a=reply&id=<?=$id;?>" class="n2">碎言碎语</a></h1>
  <div class="bloglist">
    <ul class="arrow_box">
     <div class="sy">
    <?php if(!empty($message['picture'])):?>
     <figure><img src="<?=$message['picture'];?>"></figure>
    <?php else: ?>
    <figure><img src="public/images/001.png"></figure>
    <?php endif;?>
      <p> <?=$message['title'];?></p>
      </div>
      <span class="dateview"><?=$time = date('Y-m-d',$message['addtime']);?></span>
    </ul>
    <?php if(!empty($replyQes)):?>
    <?php foreach ($replyQes as $value):?>
    <ul class="arrow_box">
         <div class="sy">
      <p> <?=$value['content'];?></p>
        </div>
      <span class="dateview"><?=$time = date('Y-m-d',$value['addtime']);?></span>
    </ul>
    <?php endforeach;?>
    <?php endif;?>
    <ul class="arrow_box">
       <div class="sy">
        <form action="index.php?m=details&a=doReply" method="post">
          <script type="text/javascript" src="public/ckeditor/ckeditor.js" ></script>
          <textarea class="ckeditor" name="content" value=""></textarea>
          <div class="reply_ri_sub">
            <input type="hidden" name="hid_id" value="<?=$id;?>">
           <!--  <input type="hidden" name="hid_cid" value="<?=$cid;?>"> -->
            <input type="hidden" name="hid_username" value="<?=$_SESSION['username'];?>">
            <input class="reply_sub_a" type="submit" name="reply_sub" value="发表回复">
          </div>
        </form>
       </div>
    </ul>
  </div>
  <div class="page"><a title="Total record"><b><?=$total;?></b></a><a href="index.php?m=details&a=list&page=<?=$allPage['first'];?>"><b>首页</b></a><a href="index.php?m=details&a=list&page=<?=$allPage['prev'];?>"><</a><a href="index.php?m=details&a=list&page=<?=$allPage['next'];?>">></a><a href="index.php?m=details&a=list&page=<?=$allPage['end'];?>">尾页</a></div>
</div>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>