<?php
//處理刪除資料的請求
include_once "base.php";
$Student->del($_POST['id']);
