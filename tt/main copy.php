<style>
    .box{
        display:flex;
        background-color: #EFCA85;;
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
    <tr colspan="2" class="ct tt"></tr>
    <tr class="ct tt">
        <td></td>
        <td></td>
    </tr>
    <tr colspan="2" class="ct tt"></tr>
</table>

<div class="ct tt"><?=$row['name']?></div>
 <div class="all box">
            <div class="pp">
                <a href="?do=detail&id=<?=$row['id']?>">
                    <img width="100px" height="80px" src="./upload/<?=$row['img']?>" alt="">
                </a>
            </div>
            <div style="flex:1">               
                <div class="pp">
                    價錢:<?=$row['price']?>
                </div>
                <div class="pp">規格:<?=$row['spec']?></div>
                <div class="pp">簡介:<?=mb_substr($row['intro'],0,20)?></div>
            </div>
        </div>
<div class="ct tt">
    <a href="?do=buycart&id=<?=$row['id'];?>&qt=1">
        <img src="./icon/0402.jpg" alt="">
    </a>
</div>
    <?php
    endforeach;
    ?>