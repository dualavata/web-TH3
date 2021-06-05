<?php
require_once('dbHelper.php');
$u = $p = $user = "";
// unset($_SESSION['userName']);
 if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)) {
    if (isset($_POST['username'])) {
        $u = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $p = $_POST['password'];
    }
    if ($u == "" || $p == "") {
        echo '<h2 style="color :red">Nhap day du thong tin!!!</h2>';
    } else {
        $sql = "select * FROM tbl_user where username='$u' ";
        $users = executeResult($sql);
        foreach ($users as $user) {
            if ($user['username'] == $u && $user['password'] == $p && $u != '') {
                echo 'ok';
                die();
            } else if ($p != '') {
                echo '<h2 style="color :red">Đăng nhập thất bại !!!</h2>';
            }
        }
    }
}
