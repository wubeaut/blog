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
<style type="text/css">
  p{
    font-size: 15px;
    font-weight: bold;
    color: blank;
  }
  input{
    height: 20px;
   border:1px solid #666;
  }
  .photo{
    border:none;
  }
</style>
</head>
<body>
<header>
  <?php if(!empty($username)):?>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="index.php?m=update&a=about"><span>关于我</span><span class="en">About</span></a><a href="index.php?m=details&a=list"><span>慢生活</span><span class="en">Life</span></a><!-- <a href="index.php?m=details&a=reply"><span>碎言碎语</span><span class="en">Doing</span></a>  -->
  <?php if(!empty($udertype)):?>
   <a href="index.php?m=details&a=send"><span>发表博文</span><span class="en">Send</span></a>
  <a href="index.php?m=admin&a=login"><span>后台管理</span><span class="en">Admin</span></a>
  
  <?php endif;?>
  <a href="index.php?m=user&a=logout"><span>退出</span><span class="en">Exit</span></a>
 
  <a href="index.php?m=user&a=word"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
  <?php else: ?>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="index.php?m=update&a=about"><span>关于我</span><span class="en">About</span></a><a href="newlist.html"><span>慢生活</span><span class="en">Life</span></a><a href="index.php?m=user&a=login"><span>登录</span><span class="en">Login</span></a><a href="index.php?m=user&a=register"><span>注册</span><span class="en">Register</span></a>
  </nav>
  <?php endif;?>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.php" class="n1">网站首页</a><a href="index.php?m=update&a=about" class="n2">关于我</a></h1>
 <form action="index.php?m=update&a=doUpdate" method="post" enctype="multipart/form-data">
<div class="about left">
  <h2>Just about me</h2>
    <ul> 
      <p>姓名&nbsp;&nbsp;&nbsp;<input type="text" name="username"></p>
      <p>生日&nbsp;&nbsp;&nbsp;<select class="grz_borth_a" name="nian">
              <option selected="<?=$year;?>" value="<?=$year;?>"><?=$year;?></option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
              <option value="1959">1959</option>
              <option value="1958">1958</option>
              <option value="1957">1957</option>
              <option value="1956">1956</option>
              <option value="1955">1955</option>
              <option value="1954">1954</option>
              <option value="1953">1953</option>
              <option value="1952">1952</option>
              <option value="1951">1951</option>
              <option value="1950">1950</option>
              <option value="1949">1949</option>
              <option value="1948">1948</option>
              <option value="1947">1947</option>
              <option value="1946">1946</option>
              <option value="1945">1945</option>
              <option value="1944">1944</option>
              <option value="1943">1943</option>
              <option value="1942">1942</option>
              <option value="1941">1941</option>
              <option value="1940">1940</option>
              <option value="1939">1939</option>
              <option value="1938">1938</option>
              <option value="1937">1937</option>
              <option value="1936">1936</option>
              <option value="1935">1935</option>
              <option value="1934">1934</option>
              <option value="1933">1933</option>
              <option value="1932">1932</option>
              <option value="1931">1931</option>
              <option value="1930">1930</option>
              <option value="1929">1929</option>
              <option value="1928">1928</option>
              <option value="1927">1927</option>
              <option value="1926">1926</option>
              <option value="1925">1925</option>
              <option value="1924">1924</option>
              <option value="1923">1923</option>
              <option value="1922">1922</option>
              <option value="1921">1921</option>
              <option value="1920">1920</option>
              <option value="1919">1919</option>
              <option value="1918">1918</option>
            </select>
            <select class="grz_borth_b" name="yue">
              <option value="<?=$month;?>"><?=$month;?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select class="grz_borth_b" name="ri">
              <option value="<?=$day;?>"><?=$day;?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
            </select></p>
      <p>籍贯&nbsp;&nbsp;&nbsp;<select class="grz_city_a" name="place">
              <option value="<?=$place;?>"><?=$place;?></option>
              <option value="北京市">北京市</option>
              <option value="天津市">天津市</option>
              <option value="河北省">河北省</option>
              <option value="山西省">山西省</option>
              <option value="内蒙古自治区">内蒙古自治区</option>
              <option value="辽宁省">辽宁省</option>
              <option value="黑龙江省">黑龙江省</option>
              <option value="吉林省">吉林省</option>
              <option value="上海市">上海市</option>
              <option value="江苏省">江苏省</option>
              <option value="浙江省">浙江省</option>
              <option value="安徽省">安徽省</option>
              <option value="福建省">福建省</option>
              <option value="江西省">江西省</option>  
              <option value="山东省">山东省</option>
              <option  value="河南省">河南省</option>
              <option  value="湖北省">湖北省</option>
              <option  value="湖南省">湖南省</option>
              <option  value="广东省">广东省</option>
              <option  value="广西壮族自治区">广西壮族自治区</option>
              <option  value="海南省">海南省</option>
              <option  value="重庆市">重庆市</option>
              <option  value="四川省">四川省</option>
              <option value="贵州省">贵州省</option>
              <option  value="云南省">云南省</option>
              <option  value="西藏自治区">西藏自治区</option>
              <option  value="陕西省">陕西省</option>
              <option  value="甘肃省">甘肃省</option>
              <option value="青海省">青海省</option>
              <option  value="宁夏回族自治区">宁夏回族自治区</option>
              <option  value="新疆维吾尔自治区">新疆维吾尔自治区</option>
              <option  value="台湾省">台湾省</option>
              <option value="香港特别行政区">香港特别行政区</option>
              <option  value="澳门特别行政区">澳门特别行政区</option>
              <option  value="海外">海外</option>
              <option value="其他">其他</option>
            </select></p>
      <p>职业&nbsp;&nbsp;&nbsp;<input type="text" name="position"></p>
      <p>修改头像&nbsp;<input class="photo" type="file" name="photo"></p>
      <p><input type="submit" name="sub" value="确认修改"></p>
      <input type="hidden" name="hid_name" value="<?=$_SESSION['username'];?>" />
    </ul>
</div>
</form>
<aside class="right">  
 
  <?php if(!empty($udertype)):?>
    <div class="about_c">
    <p>网名：<span>DanceSmile</span> | 即步非烟</p>
    <p name="name">姓名：<?=$username;?> </p>
    <p name="birthday">生日：<?=$data=date('Y-m-d',$birthday);?></p>
    <p>籍贯：<?=$place;?></p>
    <p>现居：天津市—滨海新区</p>
    <p>职业：<?=$position;?></p>
    <p>喜欢的书：《红与黑》《红楼梦》</p>
    <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="<?=$username;?>个人博客网站" title="<?=$username;?>个人博客网站"></a>
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="<?=$username;?>个人博客网站"></a>
<a href="index.php?m=update&a=update"><b style="font-size: 16px;">修改资料</b></a>
</div>     
  <?php else: ?>
  
    <div class="about_c">
    <p>网名：<span>Beautiful</span> | 沦落为雨季</p>
    <p>姓名：吴春芳 </p>
    <p>生日：1996-03-30</p>
    <p>籍贯：山西省—忻州市</p>
    <p>现居：北京市—昌平区</p>
    <p>职业：PHP高级开发工程师</p>
    <p>喜欢的书：《红与黑》《红楼梦》</p>
    <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="杨青个人博客网站" title="杨青个人博客网站"></a>
<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a>
</div>  
<?php endif;?>   
</aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>