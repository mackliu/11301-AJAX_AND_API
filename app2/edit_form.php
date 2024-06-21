<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        .form-label {
            text-align-last: justify;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">新增學生</h1>
        <form action="./api/insert.php" method="post" class='form-group mx-auto col-6 mt-5'>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>id</label>
                <input class="form-control" type="text" name="id" id="id">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>學號</label>
                <input class="form-control" type="text" name="uni_id" id="uni_id">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>班級代號</label>
                <input class="form-control" type="text" name="classroom" id="classroom">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>座號</label>
                <input class="form-control" type="text" name="seat_num" id="seat_num">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>姓名</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>生日</label>
                <input class="form-control" type="text" name="birthday" id="birthday">
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
                <input type="submit" value="送出" class='btn btn-primary'>
                <input type="reset" value="重置" class='btn btn-warning'>
            </div>
        </form>

    </div>
    <script src="./js/jquery-2.1.4.js"></script>
    <script src='./js/bootstrap.js'></script>
</body>

</html>