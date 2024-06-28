<?php include_once "./api/base.php";
$stu = $Student->find($_POST['id']);

?>

<div class="container">
    <h1 class="text-center">編輯學生</h1>
    <form method="post" class='form-group mx-auto col-6 mt-5'>

        <input class="form-control" type="hidden" name="id" id="id" value="<?= $stu['id']; ?>">

        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>學號</label>
            <input class="form-control" type="text" name="uni_id" id="uni_id" value="<?= $stu['uni_id']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>班級代號</label>
            <input class="form-control" type="text" name="classroom" id="classroom" value="<?= $stu['classroom']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>座號</label>
            <input class="form-control" type="text" name="seat_num" id="seat_num" value="<?= $stu['seat_num']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>姓名</label>
            <input class="form-control" type="text" name="name" id="name" value="<?= $stu['name']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>生日</label>
            <input class="form-control" type="text" name="birthday" id="birthday" value="<?= $stu['birthday']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>身份證字號</label>
            <input class="form-control" type="text" name="national_id" id="national_id" value="<?= $stu['national_id']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>地址</label>
            <input class="form-control" type="text" name="address" id="address" value="<?= $stu['address']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>父母</label>
            <input class="form-control" type="text" name="parent" id="parent" value="<?= $stu['parent']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>電話</label>
            <input class="form-control" type="text" name="telphone" id="telphone" value="<?= $stu['telphone']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>科系</label>
            <input class="form-control" type="text" name="major" id="major" value="<?= $stu['major']; ?>">
        </div>
        <div class='d-flex my-2'>
            <label for="" class='col-3 form-label'>畢業國中</label>
            <input class="form-control" type="text" name="secondary" id="secondary" value="<?= $stu['secondary']; ?>">
        </div>
        <div>
            <input type="button" value="送出" class='btn btn-primary' onclick="update(<?= $stu['id']; ?>)">
            <input type="reset" value="重置" class='btn btn-warning'>
        </div>
    </form>

</div>