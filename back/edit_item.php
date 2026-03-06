<!-- 複製新增5分 -->
<h2 class="ct">編輯商品</h2>
<?php
    $row = $Item->find($_GET['id'])
?>
<form action="./api/save_item.php" method="post" enctype="multipart/form-data">
    <table class="all">
        <tr>
            <td class="tt">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big" onchange="getMids()">
                <?php
                $bigs=$Type->all(['big_id'=>0]);
                foreach ($bigs as $big) :?>
                <option value=<?=$big['id']?>><?=$big['name']?></option>;
                <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="tt">所屬中分類</td>
            <td class="pp">
                <select name="mid" id="mid">

                </select>
            </td>
        </tr>
        <tr>
            <td class="tt">商品編號</td>
            <td class="pp">
                <?=$row['no']?>
            </td>
        </tr>
        <tr>
            <td class="tt">商品名稱</td>
            <td class="pp">
                <input type="text" name="name" value="<?=$row['name']?>">

            </td>
        </tr>
        <tr>
            <td class="tt">商品價格</td>
            <td class="pp">
                <input type="text" name="price" value="<?=$row['price']?>">

            </td>
        </tr>
        <tr>
            <td class="tt">規格</td>
            <td class="pp">
                <input type="text" name="spec" value="<?=$row['spec']?>">
            </td>
        </tr>
        <tr>
            <td class="tt">庫存量</td>
            <td class="pp">
                <input type="text" name="qt" value="<?=$row['qt']?>">
            </td>
        </tr>
        <tr>
            <td class="tt">商品圖片</td>
            <td class="pp">
                <input type="file" name="img" id="">
            </td>
        </tr>
        <tr>
            <td class="tt">商品介紹</td>
            <td class="pp">
                <textarea name="intro" id=""><?=$row['intro']?></textarea>
            </td>
        </tr>
    </table>
    <div class="ct">
        <!-- 記得帶上ID!!!! -->
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="修改">
        <input type="reset" value="重製">
        <input type="button" value="返回" onclick="location.href='?do=th'">
    </div>
</form>

<script>
function getMids() {
    let bigid = $("#big").val();
    $.get("./api/get_mid.php", { bigid }, (res) => {
        $("#mid").html(res);
    });
}
getMids();

</script>