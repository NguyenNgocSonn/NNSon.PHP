<?php
require ("add_process.php");

$data = array();

$is_update_action = false;

if (!empty($_GET['id']))
{
    $data = getStudent($_GET['id']);
    $is_update_action  = true;
}


if (!empty($_POST['add_student']))
{

    $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['student_name'] = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['student_gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
    $data['student_address'] = isset($_POST['address']) ? $_POST['address'] : '';

    updateStudent($data['student_id'], $data['student_name'], $data['student_email'], $data['student_gender'], $data['student_address']);
    header("Location:list.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/post.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style type="text/css">
    .error {
        color: red;
    }
</style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Thông tin sinh viên</h1>
        <hr>
        <form action="add_process.php" method="POST" role="form">



            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" name="code" placeholder="Nhập vào Mã sinh viên" required>
            </div>

            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="full_name" placeholder="Nhập vào Họ và tên"required >
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập vào Email"required >
            </div>

            <div class="form-group">
                <label for="">Giới tính</label><br>
                <input type="radio" name="gender" value="Nam">Male
                <input type="radio" name="gender" value="Nữ">Female
                <input type="radio" name="gender" value="Khác">Other
                <label for="gender" class="error" style="font-weight: bold;"></label>
            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Nhập vào Địa chỉ" required >
            </div>

            <input type="submit" class="btn btn-primary" name="add_student" value="Lưu">
        </fieldset>
    </form>
</div>
</body>
</html>






