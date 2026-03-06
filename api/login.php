<?php
	include_once "db.php";

    $ch = $Mem->count($_POST);

    if ($ch) {
        echo "1";
        $_SESSION['mem']=$_POST['acc'];

    }else{
        echo "0";
    }

?>