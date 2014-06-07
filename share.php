<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="img/thumb.jpg">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>主人不在家 猜我在干嘛？</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/libs/easeljs-0.7.1.min.js"></script>
    <script src="js/libs/tweenjs-0.5.1.min.js"></script>
    <script src="js/libs/movieclip-0.7.1.min.js"></script>
    <script src="js/libs/preloadjs-0.4.1.min.js"></script>
    <script src="js/libs/soundjs-0.5.2.min.js"></script>
  </head>
<?php
  include('db.php');
  include('function.php');
  include('mysql.class.php');
  $db    = new db(); 
  $db->connect($db_config); 
  
  $row = $db->row_select('share-mengchong', 'id='.gl($_GET['id']));
?>
  <body onload="">
    <div class="fifth">
      <a href="index.html" class="back"><img src="img/back.png" alt=""></a>
      <img id="image" src="http://www.odota2.com/<?php echo $row[0]["url"]?>" class="pet"><img src="img/share-bg.jpg">
      <div class="sharebtn"><img src="img/sharebtn.png"></div>
      <div class="joinbtn"><a href="index.html"><img src="img/btn-join.jpg" alt=""></a></div>
    </div>
    <div class="sharebox">
      <div class="box">
        <div class="close"></div>
        <a href="#" data-share="weibo" data-text="<?php echo $row[0]["text"]?>"  class="weibo"></a>
        <a href="#" data-share="qweibo" data-text="<?php echo $row[0]["text"]?>" class="qweibo"></a>
        <a href="#" data-share="weixin" data-text="<?php echo $row[0]["text"]?>" class="weixin"></a>
        <a href="#" data-share="douban" data-text="<?php echo $row[0]["text"]?>" class="douban"></a>
        <a href="#" data-share="renren" data-text="<?php echo $row[0]["text"]?>" class="renren"></a>
      </div>
    </div>
    <div class="shareweixin">
      <p>点击右上角分享给朋友或分享朋友圈</p>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>