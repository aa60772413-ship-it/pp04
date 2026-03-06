<!-- 15分 -->
<div class="ct">
    <button onclick="location.href='?do=add_admin'">新增管理員</button>
</div>
<table class="all ct">
    <tr>
        <td class="tt">帳號</td>
        <td class="tt">密碼</td>
        <td class="tt">管理</td>

    </tr>
    <tr>
        <td class="pp">admin</td>
        <td class="pp">****</td>
        <td class="pp">此帳號為最高權限</td>
    </tr>
    <?php
    $rows = $Admin->all();
    foreach ($rows as $row) :
        if ( $row['acc'] == 'admin') {
            continue;
        }
    ?>
    <tr>
        <td class="pp">
            <?=$row['acc']?>
        </td>
        <td class="pp">
            <?=$row['pw']?>
        </td>
        <td class="pp">
            
            <button onclick="location.href='?do=edit_admin&id=<?=$row['id']?>'">編輯</button>
            <button onclick="del(<?=$row['id']?>)" class="del-btn" data-id="<?=$row['id']?>">刪除</button>

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

// $(".del-btn").click(function () {
//   console.log($(this).data("id"));
//   let id = $(this).data("id")
//   $.post('./api/del.php',{id, table:'Admin'},function(){
//     location.reload()
//   })
// });



</script>