<!-- 5分 -->
<h2>最新消息</h2>
<p class="ct" style="color:red">點擊標題觀看詳細</p>
<div class="box">
    <table class="all">
        <tr class="ct tt">
            <td>標題</td>
        </tr>
        <tr class="pp ct" onclick='open_box(1)'>
            <td>年終特賣會開跑了</td>
        </tr>
        <tr class="pp ct" onclick='open_box(2)'>
            <td>情人節特惠活動</td>
        </tr>
    
    </table>
</div>

<div style="display:none" class="box">
    <table class="all" >
        <tr class="">
            <td class="tt">標題</td>
            <td class="pp">年終特賣會開跑了</td>
        </tr>
        <tr class="">
            <td class="tt">內容</td>
            <td class="pp">即日期至年底，凡會員購物滿仟送佰，買越多送越多~</td>
        </tr>
    </table>
    <div class="ct">
        <button onclick='open_box(0)'>返回</button>
    </div>
</div>

<div style="display:none" class="box">
    <table class="all" >
        <tr class="">
            <td class="tt">標題</td>
            <td class="pp">情人節特惠活動</td>
        </tr>
        <tr class="">
            <td class="tt">內容</td>
            <td class="pp">為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~</td>
        </tr>
    </table>
    <div class="ct">
        <button onclick='open_box(0)'>返回</button>
    </div>
</div>




<script>
function open_box(which){
    $('.box').hide();

    $('.box').eq(which).show();
}
</script>