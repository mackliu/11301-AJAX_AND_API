<?php include_once "./api/base.php";
$stu = $Student->find($_POST['id']);

?>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">編輯學生</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class='form-group mx-auto col-6 mt-5'>
                <div class="modal-body">

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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="update(<?= $stu['id']; ?>)">送出</button>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">重置</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function update(id) {
        let form = {
            id: $("#id").val(),
            uni_id: $("#uni_id").val(),
            classroom: $("#classroom").val(),
            seat_num: $("#seat_num").val(),
            name: $("#name").val(),
            birthday: $("#birthday").val(),
            national_id: $("#national_id").val(),
            address: $("#address").val(),
            parent: $("#parent").val(),
            telphone: $("#telphone").val(),
            major: $("#major").val(),
            secondary: $("#secondary").val()
        }
        $.post('./api/update.php', form, function() {
            getClassroomStudents(form.classroom);
            editModal.hide()
        })
    }
    const editModal = new bootstrap.Modal('#editModal')
    const modal = document.querySelector("#editModal")
    modal.addEventListener('hidden.bs.modal', event => {

        editModal.dispose()
        $("#modal").html("")

    })
    //console.log(addModal)
    editModal.show()
</script>