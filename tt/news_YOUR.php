
<?php
// 這裡的 $n 是用來判斷要看哪一則新聞
$n = $_GET['n'] ?? 0; 
?>

<h2>最新消息</h2>
<p class="ct" style="color:red">點擊標題觀看詳細</p>
<?php if($n == 0): ?>
    <table class="all">
        <tr class="tt ct"><td>標題</td></tr>
        <tr class="pp ct" onclick="location.href='?do=news&n=1'">
            <td>年終特賣會開跑了</td>
        </tr>
        <tr class="pp ct" onclick="location.href='?do=news&n=2'">
            <td>情人節特惠活動</td>
        </tr>
    </table>

<?php else: ?>
    <table class="all">
        <?php if($n == 1): ?>
            <tr><td class="tt">標題</td><td class="pp">年終特賣會開跑了</td></tr>
            <tr><td class="tt">內容</td><td class="pp">即日期至年底，凡會員購物滿仟送佰...</td></tr>
        <?php endif; ?>

        <?php if($n == 2): ?>
            <tr><td class="tt">標題</td><td class="pp">情人節特惠活動</td></tr>
            <tr><td class="tt">內容</td><td class="pp">為了慶祝七夕情人節...七七折...</td></tr>
        <?php endif; ?>
    </table>
    
    <div class="ct">
        <button onclick="location.href='?do=news'">返回</button>
    </div>

<?php endif; ?>