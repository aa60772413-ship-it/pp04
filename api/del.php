<?php
	include_once "db.php";

    dd($_POST);
    $db = ${ucfirst($_POST['table'])};

    $db->del($_POST['id']);
?>