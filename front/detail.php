<!-- //複製MAIN 5分 -->
<style>
    table{
        width: 95%;      /* 寬度設為 80% 比較大方 */
        margin: 20px auto; /* auto 會自動左右置中 */
    }
</style>
<?php
$row=$Item->find($_GET['id']);
?>
<table>
    <tr>
        <td colspan="2" class="ct">
            <h2><?=$row['name']?></h2>
        </td>
    </tr>
    <tr class="all pp">
        <td class="ct"><a href="?do=detail&id=<?=$row['id']?>">
                <img width="100px" height="80px" src="./upload/<?=$row['img']?>" alt="">
            </a></td>
        <td>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">
                分類:<?=$Type->find($row['big'])['name'];?> > <?=$Type->find($row['mid'])['name'];?>
            </div>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">編號:<?=$row['no'];?></div>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">價錢:<?=$row['price'];?></div>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">簡介:<?=$row['intro']?></div>
            <div style="margin-top: 10px;">庫存量:<?=$row['qt'];?></div>  
        </td>
    </tr>
    <tr>  
        <td colspan="2" class="ct tt">
            購買數量: <input type="number" name="qt" id="qt" value='1'>
            <a href="#" onclick="buy()">
                <img src="icon/0402.jpg">
            </a>
        </td>  
    </tr>
</table><hr>

<script>
    function buy(){
        let qt=$("#qt").val();
        location.href=`?do=buycart&id=<?=$_GET['id'];?>&qt=${qt}`
    }
</script>