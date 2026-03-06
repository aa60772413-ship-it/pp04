<?php
	include_once "db.php";
    // dd($_POST);
    $Bot->save(["bot"=>$_POST['bot'],"id"=>1]);
    to("../back.php?do=bot")
?>