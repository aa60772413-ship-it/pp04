<!-- 10分 -->
<h2 class="ct">會員管理</h2>
<table class="all ct">
    <tr>
        <td class="tt">姓名</td>
        <td class="tt">會員帳號</td>
        <td class="tt">註冊日期</td>
        <td class="tt">管理</td>
    </tr>
    <?php
    $rows = $Mem->all();
    foreach ($rows as $row) :
        if ( $row['acc'] == 'admin') {
            continue;
        }
    ?>
    <tr>
        <td class="pp">
            <?=$row['name']?>
        </td>
        <td class="pp">
            <?=$row['acc']?>
        </td>
        <td class="pp">
            <?=$row['date']?>
        </td>
        <td class="pp">
            <button onclick="location.href='?do=edit_mem&id=<?=$row['id']?>'">編輯</button>
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