<?php
require_once('dbHelper.php');
if (!empty($_POST)) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['inputEmail'])) {
        $inputEmail = $_POST['inputEmail'];
    }
    if (isset($_POST['inputAddress'])) {
        $inputAddress = $_POST['inputAddress'];
    }
    if (isset($_POST['inputCity'])) {
        $inputCity = $_POST['inputCity'];
    }
    if (isset($_POST['inputText'])) {
        $inputText = $_POST['inputText'];
    }
    if ($name == "" || $phone == "" || $inputEmail == "" || $inputAddress == "" || $inputCity == "" || $inputText == "") {
        echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
    }

    $sql = "INSERT INTO tbl_hotro(hoten, sdt, email, diachi, thanhpho, noidung) VALUES ('$name','$phone','$inputEmail','$inputAddress','$inputCity','$inputText')";
    execute($sql);
    echo '<h3 style="color :red; text-align: center;">Báo cáo thành công!!!</h3>';
}

?>