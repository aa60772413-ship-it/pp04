<?php
	include_once "db.php";
$id = $_POST['id'];
// 刪除 session 中該 id 的商品
unset($_SESSION['buycart'][$id]);
?>