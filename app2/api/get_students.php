<?php include_once "base.php";
$code = $_GET['code'];
$students = $Student->all(['classroom' => $code]);
echo json_encode($students);
