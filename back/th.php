    <h2 class="ct">商品分類</h2>
    <!-- 25分 -->
    <div class="ct">
        新增大分類
        <input type="text" name="big" id="big">
        <button onclick="saveType('big')">新增</button>
    </div>
    <div class="ct">
        新增中分類
        <select name="bigs" id="bigs">
            <?php
                $bigs=$Type->all(['big_id'=>0]);
                foreach ($bigs as $big) {
                    echo "<option value='{$big['id']}'>{$big['name']}</option>";
                }
            ?>
        </select>
        <input type="text" name="mid" id="mid">
        <button onclick="saveType('mid')">新增</button>
    </div>

    <table class="all">
        <?php
            $bigs = $Type->all(['big_id'=>0]);
            foreach ($bigs as $big) :
        ?>
        <tr class="tt">
            <td><?=$big['name']?></td>
            <td class="ct">
                <button onclick="edit(<?=$big['id']?>,'<?=$big['name']?>')">修改</button>
                <button onclick="del(<?=$big['id']?>,'type')">刪除</button>
            </td>
        </tr>
        <?php
            $mids = $Type->all(['big_id'=>$big['id']]);
            foreach ($mids as $mid) :
        ?>
            <tr class="pp">
                <td><?=$mid['name']?></td>
                <td class="ct">
                <button onclick="edit(<?=$mid['id']?>)">修改</button>
                <button onclick="del(<?=$mid['id']?>,'type')">刪除</button>        
                </td>
            </tr>
        <?php
            endforeach
        ?>

        <?php
            endforeach
        ?>
    </table>
                <!-- 5分 -->
    <h2 class="ct">商品管理</h2>
    <div class="ct">
        <button onclick="location.href='?do=add_item'">新增商品</button>
    </div>

    <table class="all ct">
        <tr>
            <td class="tt">編號</td>
            <td class="tt">商品名稱</td>
            <td class="tt">庫存量</td>
            <td class="tt">狀態</td>
            <td class="tt">操作</td>
        </tr>
        <?php
            $rows = $Item->all();
            foreach ($rows as $row) :
        ?>
        <tr>
            <td class="pp"><?=$row['no']?></td>
            <td class="pp"><?=$row['name']?></td>
            <td class="pp"><?=$row['qt']?></td>
            <td class="pp"><?=($row['sh'] ==1)?"販售中":"已下架"?></td>
            <td  style="display:flex;" class="pp">
                <div >
                    <input class="" onclick="location.href='?do=edit_item&id=<?=$row['id']?>'" type="button" value="修改" data-id="<?=$row['id']?>">
                    <input onclick="del(<?=$row['id']?>,'item')" type="button" value="刪除" >
                <div>
                    <input onclick="sh(1,<?=$row['id']?>)"  type="button" value="上架" >
                    <input onclick="sh(0,<?=$row['id']?>)"  type="button" value="下架" >
                    <!-- 10分 +刪除5分 -->
                </div>
            </td>   
        </tr>
        <?php
            endforeach
        ?>
    </table>

    <script>
    function saveType(type){
        //沒ID是新增
        let name='';
        let big_id=0;
        switch(type){
            case 'big':
                name=$("#big").val();
            break;
            case 'mid':
                name=$("#mid").val();
                big_id=$("#bigs").val();

            break;
        }

        $.post("api/save_type.php",{name,big_id},()=>{
            location.reload();
        })
    }
    function edit(id){
        let name = prompt("請輸入分類名稱");
            $.post("api/save_type.php",{name,id},()=>{
            location.reload();
        })
          
    }
    function del(id,table) {
        // let table="type";
        $.post('./api/del.php',{id, table},function(){
        location.reload()
        })
    }
    function sh(sh,id){
        $.post("./api/save_sh.php",{id,sh},function(){
            location.reload();
        })
    }
    </script>