<?php
	include_once "./api/db.php";
?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>┌精品電子商務網站」</title>
        <link href="./jscs/css.css" rel="stylesheet" type="text/css">
        <script src="./jscs/js.js"></script>
        <script src="./jscs/jquery-3.4.1.min.js"></script>
</head>

<body>
        <iframe name="back" style="display:none;"></iframe>
        <div id="main">
                <div id="top">
                        <a href="?">
                                <img src="./upload/0416.jpg">
                        </a>
                        <div style="padding:10px;">
                                <!-- +上面圖片10分 +下面跑馬燈5分-->
                                <a href="?">回首頁</a> | 
                                <a href="?do=news">最新消息</a> |
                                <a href="?do=look">購物流程</a> |
                                <a href="?do=buycart">購物車</a> |
                                <a href="?do=login">會員登入</a> |
                                <a href="?do=admin">管理登入</a>
                        </div>
                         <marquee>
                                情人節特惠活動 &nbsp; 為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~~~~~~&nbsp;
                                年終特賣會開跑了&nbsp;即日期至年底，凡會員購物滿仟送佰，買越多送越多~&nbsp;
                         </marquee>
                </div>
                <div id="left" class="ct">
                        <div style="min-height:400px;">
                                <a href="?do=main">全部商品(<?=$Item->count(['sh'=>1])?>)</a> 
                                <?php
                                $bigs=$Type->all(['big_id'=>0]);
                                // 10分
                                foreach ($bigs as $big) :?>
                                <div class="ww"><a href="?do=main&big_id=<?=$big['id']?>&big_name=<?=$big['name']?>"><?= $big['name'] ?></a>
                                        <?php
                                        $mids=$Type->all(['big_id'=>$big['id']]);
                                        foreach($mids as $mid):?>      
                                        <div class="s"><a href="?do=main&big_id=<?=$big['id']?>&big_name=<?=$big['name']?>&mid_id=<?= $mid['id']?>&mid_name=<?=$mid['name']?>"><?=$mid['name']?></a></div>
                                        <?php endforeach;?>
                                </div>
                                <?php endforeach;?>
                                
                        </div>
                                
                        <span>
                                <div>進站總人數</div>
                                <div style="color:#f00; font-size:28px;">
                                        00005 </div>
                        </span>
                </div>
                <div id="right">
                                    <!-- 主內容區(25分) -->
                <?php
                    $do = $_GET['do'] ?? 'main';
                    $path = "./front/$do.php";
                    if (file_exists($path)) {
                        include $path;
                    }else {
                        include "./front/main.php";
                    }

                ?>
                </div>
                <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
                        頁尾版權 : <?=$Bot->find(1)['bot']?></div>
                        <!-- +後台5分 -->
        </div>

</body>

</html>