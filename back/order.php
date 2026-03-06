<!-- 用會員管理改 15分-->
<h2 class="ct">訂單管理</h2>
<table class="all ct">
    <tr>
        <td class="tt">訂單編號</td>
        <td class="tt">金額</td>
        <td class="tt">會員帳號</td>
        <td class="tt">姓名</td>
        <td class="tt">註冊日期</td>
        <td class="tt">操作</td>
    </tr>
    <?php
    $rows = $Order->all();
    foreach ($rows as $row) :
        if ( $row['acc'] == 'admin') {
            continue;
        }
    ?>
    <tr>
        <td class="pp" onclick="location.href='?do=edit_order&id=<?=$row['id']?>'">
            <?=$row['no']?>
        </td>
        <td class="pp">
            <?=$row['sum']?>
        </td>        
        <td class="pp">
            <?=$row['acc']?>
        </td>
        <td class="pp">
            <?=$row['name']?>
        </td>
        <td class="pp">
            <?=$row['created_at']?>
        </td>
        <td class="pp">
            <button onclick="del(<?=$row['id']?>)" >刪除</button>

        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>

<script>

function del(id) {
let table="<?=$_GET['do']?>";
 $.post('./api/del.php',{id, table},function(){
    location.reload()
  })
}
</script>