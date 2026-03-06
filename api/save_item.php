<?php include_once "db.php";

if (!isset($_POST['id'])) {
    $_POST['no']=rand(100000,999999);
}

$Item->save($_POST);

to("../back.php?do=th")

?>