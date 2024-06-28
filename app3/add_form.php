<?php
if ($_POST['nowClassroom'] != 0) {
    $code = $_POST['nowClassroom'];
} else {
    $code = "";
}


?>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="w-100 text-center">新增學生</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class='form-group mx-auto col-6 mt-5'>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>學號</label>
                        <input class="form-control" type="number" name="uni_id" id="uni_id">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>班級代號</label>
                        <input class="form-control" type="number" name="classroom" id="classroom" value="<?= $code; ?>">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>座號</label>
                        <input class="form-control" type="number" name="seat_num" id="seat_num">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>姓名</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>生日</label>
                        <input class="form-control" type="date" name="birthday" id="birthday">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>身份證字號</label>
                        <input class="form-control" type="text" name="national_id" id="national_id">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>地址</label>
                        <input class="form-control" type="text" name="address" id="address">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>父母</label>
                        <input class="form-control" type="text" name="parent" id="parent">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>電話</label>
                        <input class="form-control" type="text" name="telphone" id="telphone">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>科系</label>
                        <input class="form-control" type="text" name="major" id="major">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>畢業國中</label>
                        <input class="form-control" type="text" name="secondary" id="secondary">
                    </div>
                    <div>
                        <input type="button" value="送出" class='btn btn-primary' onclick="send()">
                        <input type="reset" value="重置" class='btn btn-warning'>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

<script>
    function send() {
        let form = {
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
        $.post("./api/insert.php", form, function(res) {
            if (res == '1') {
                alert('新增成功')
                addModal.hide()

                getClassroomStudents(form.classroom);
            } else {
                alert('新增失敗')
            }
        })
    }

    const addModal = new bootstrap.Modal('#addModal')
    const modal = document.querySelector("#addModal")
    modal.addEventListener('hidden.bs.modal', event => {

        addModal.dispose()
        $("#modal").html("")

    })
    //console.log(addModal)
    addModal.show()
</script>