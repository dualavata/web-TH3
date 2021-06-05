<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản trị viên</title>
    <link rel="stylesheet" href="./css/style-admin.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/f0a087512d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("a.delete").click(function(e) {
                if (!confirm('Xác nhận xoá?')) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>
</head>

<body>
    <div>
        <!-- Navbar logo và thanh đăng nhập, đăng kí -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light container justify-content-lg-between pt-3 pb-3 pl-0 pr-0">
                <a href="./intro.php"><img src="./pics/logo-cs.png" alt="logo" class="logo" /></a>
                <div>
                    <ul class="navbar-nav mr-auto">
                        <div class="nav1">
                            <li class="nav-item nav-button">
                                <p class="alert-text">Bạn đang trong chế độ quản trị viên</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Navbar thanh menu -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                <div class="collapse navbar-collapse container pl-0 pr-0" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item menu-text home-icon ">
                            <a href="./intro.php"><i class="fas fa-home home-icon-detail"></i>
                            </a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="./intro.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="#">Tra cứu vi phạm theo biển số</a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="./xembaocao.php">Xem báo cáo</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- breadcrumb bar -->
    <div class="container pl-0 pr-0" style="height: 63px;">
        <nav>
            <ol style="display: flex; list-style-type: none; padding: 20px 0px 20px 0px ;">
                <li class="breadcrumb-item "><a href="./intro.php" class="breadcrumb-non-active">Trang chủ</a> </li>
                <li class="breadcrumb-item active" aria-current="page"><a class="breadcrumb-active"> Tra cứu vi
                        phạm theo biển số</a> </li>
            </ol>
        </nav>
    </div>
    <!-- tra cứu  -->
    <div class=" pl-0 pr-0">
        <form method="GET" class="needs-validation d-flex justify-content-between container pl-0 pr-0">
            <div class="form-row">
                <div class="text-tracuu">
                    <p>Tra cứu phương tiện vi phạm giao thông
                    </p>
                </div>
                <div class="col-md-8">
                    <div>
                        <label for="validationCustom01" style="font-size: 18px;">Biển kiểm soát</label>
                        <div style="display: flex; justify-content: space-between;">
                            <!-- nhập vào Biển số xe  -->
                            <input type="text" name="bienSo" class="form-control" id="inputIdCar" placeholder="30A12345">
                            <button type="submit" class="btn btn-primary search-bt" id="btn">
                                Tra cứu
                            </button>
                            <a href="them.php" class="btn btn-primary search-bt m-0" role="button" aria-pressed="true">Thêm lỗi vi phạm</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="mt-4 pt-0 pb-0" style="padding-left: 100px; padding-right: 100px;" id="table">
            <table class="table table-striped">
                <thead>
                    <tr style="font-size: 18px;">
                        <th scope="col">Biển số xe</th>
                        <th scope="col">Tên phương tiện</th>
                        <th scope="col">Lỗi vi phạm</th>
                        <th scope="col">Vị trí</th>
                        <th scope="col">Ngày vi phạm</th>
                        <th scope="col">Số tiền nộp phạt</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    <?php
                    require_once('./db/dbHelper.php');
                    $pt = [];
                    $sql = "select * from tbl_car ";
                    $pt = executeResult($sql);
                    if (isset($_GET['bienSo']) && $_GET['bienSo'] != '') {
                        $sql = '';
                        $bienso = $_GET['bienSo'];
                        if ($bienso != '') {
                            $sql = "select * from tbl_car where  bienSoXe = '$bienso' ";
                        }

                        $pt = executeResult($sql);
                    }

                    if (count($pt) === 0) {
                        echo '<p style="color:red;">Không tìm thấy kết quả !</p>';
                    } else {
                        foreach ($pt as $ds) {
                            if ($ds['bienSoXe'] !== '') {
                                echo '
                                <tr>
                                    <td>' . $ds['bienSoXe'] . '</td>
                                    <td>' . $ds['tenPhuongTien'] . '</td>
                                    <td>' . $ds['loiViPham'] . '</td>
                                    <td>' . $ds['viTri'] . '</td>
                                    <td>' . $ds['ngayViPham'] . '</td>
                                    <td>' . $ds['tienNopPhat'] . '</td>
                                    <td>' . $ds['trangthai'] . '</td>
                                    <td>
                                        <a href="action.php?action_id=' . $ds['id'] . '">
                                            <button type="button" class="btn btn-outline-primary">sửa</button>
                                        </a>
                                        <a href="?delete_id=' . $ds['id'] . '" id ="delete" . class="delete"> <button type="button" class="btn btn-outline-danger" >xoá</button> </a>
                                    </td>
                                </tr>';
                            }
                        }
                    }
                    if (isset($_GET['delete_id'])) {
                        $id = $_GET['delete_id'];
                        $sql = "delete from tbl_car where id=" . $id;
                        execute($sql);
                        echo '<h2 style="color :red; display: flex;justify-content: center;">Xoá thành công!!!</h2>';
                    }
                    ?>
                </thead>
            </table>
        </div>
    </div>
    <!-- logo con chim -->
    <div class="fixed-absolute">
        <img src="./pics/bird.png" alt="" class="bird-img">
    </div>
    <!-- text cảnh báo -->
    <div class="container alert-text pl-0 pr-0 pb-5">
        <hr>
        <p style="text-align: justify;">Tra cứu biển số xe muốn sửa hoặc thêm lỗi vi phạm:<br>
            1. Nhập vào biển số xe, chọn "Chỉnh sửa" để sửa hoặc xoá lỗi vi phạm;<br>
            2. Chọn mục "Thêm lỗi vi phạm" để thêm lỗi vi phạm mới;
        </p>
        <hr>
    </div>
    <!-- footer text  -->
    <div class="p-0 footer-bar fixed-bottom">
        <ul class=" container footer p-0">
            <li>Cơ quan chủ quản: Văn phòng Chính phủ</li>
            <li>www.BaiThucHanh3.vn</li>
            <li>Tổng đài hỗ trợ: 19001234</li>
            <li>Email: BaiThucHanh3@gmail.com</li>
        </ul>
    </div>
</body>
<script>
    // function rf() {
    //     debugger
    //     location.replace("admin.php");
    // }
    $('#delete').click(function() {
        debugger
        location.replace("admin.php");
    })
</script>

</html>