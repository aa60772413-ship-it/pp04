<?php include_once "db.php";

$mids=$Type->all(['big_id'=>$_GET['bigid']]);

foreach($mids as $mid){
    echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
}