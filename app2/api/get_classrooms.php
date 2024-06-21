<?php include_once "base.php";

$classrooms = q('select `classroom` from `students` group by `classroom`');
echo json_encode($classrooms);
