<!-- 10分 -->
<style>
    table{
        width: 60%;      /* 寬度設為 80% 比較大方 */
        margin: 10px auto; /* auto 會自動左右置中 */
    }
</style>
<?php
$big_id=$_GET['big_id']??"";
$mid_id=$_GET['mid_id']??"";
if(!empty($mid_id)){
    $rows=$Item->all(['mid'=>$mid_id,'sh'=>1]);
    $nav="全部商品 > ".$_GET['big_name']." > ".$_GET['mid_name'];

}elseif(!empty($big_id)){
    $rows=$Item->all(['big'=>$big_id,'sh'=>1]);
    $nav="全部商品 > ".$_GET['big_name'];
}else{
    $rows=$Item->all(['sh'=>1]);
    $nav="全部商品";
}
echo "<h1>$nav</h1>";
foreach($rows as $row):
?>
<table>
    <tr>
        <td colspan="2" class="ct">
            <?=$row['name']?>
        </td>
    </tr>
    <tr class="all pp">
        <td class="ct"><a href="?do=detail&id=<?=$row['id']?>">
                <img width="100px" height="80px" src="./upload/<?=$row['img']?>" alt="">
            </a></td>
        <td>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">價錢:<?=$row['price']?></div>
            <div style="border-bottom: 2px solid white;margin-top: 10px;">規格:<?=$row['spec']?></div>
            <div style="margin-top: 10px;">簡介:<?=mb_substr($row['intro'],0,20)?></div>
        </td>
    </tr>
    <tr>  
        <td colspan="2" class="ct tt">
            <a href="?do=buycart&id=<?=$row['id'];?>&qt=1">
                <img src="./icon/0402.jpg" alt="">
            </a>
        </td>  
    </tr>
</table><hr>
    <?php
    endforeach;
    ?>