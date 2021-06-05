<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xem báo cáo</title>
    <link rel="stylesheet" href="./css/style-xembaocao.css">
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
                            <a class="nav-link" href="./admin.php">Tra cứu vi phạm theo biển số</a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="#">Xem báo cáo</a>
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
                <li class="breadcrumb-item active" aria-current="page"><a class="breadcrumb-active"> Hỗ trợ</a> </li>
            </ol>
        </nav>
    </div>
    <!-- header  -->
    <div class="container p-0">
        <p style="font-size: 28px; font-weight: 600;">
            Tiếp nhận phản ánh, góp ý và hỗ trợ
        </p>
    </div>
    <!-- form -->
    <form class="container p-0" method="POST">
        <div class="mt-4 p-0" id="table">
            <table class="table table-striped">
                <thead>
                    <tr style="font-size: 18px;" class="row hang">
                        <td scope="col" class="col-2 cot">Họ và tên</td>
                        <td scope="col" class="col-2 cot">Số điện thoại</td>
                        <td scope="col" class="col-2 cot">Email</td>
                        <td scope="col" class="col-2 cot">Địa chỉ thường trú</td>
                        <td scope="col" class="col-2 cot">Thành phố</td>
                        <td scope="col" class="col-2 cot" style="overflow-wrap: break-word;">Nội dung</td>
                    </tr>
                    <?php
                    require('./db/dbHelper.php');
                    $pt = [];
                    $sql = 'select * from tbl_hotro';
                    $pt = executeResult($sql);
                    if (count($pt) !== 0) {
                        foreach ($pt as $ds) {
                            echo '
                                <tr class="row hang" >
                                    <td  class="col-2 cot">' . $ds['hoten'] . '</td>
                                    <td  class="col-2 cot">' . $ds['sdt'] . '</td>
                                    <td  class="col-2 cot">' . $ds['email'] . '</td>
                                    <td  class="col-2 cot">' . $ds['diachi'] . '</td>
                                    <td  class="col-2 cot">' . $ds['thanhpho'] . '</td>
                                    <td  class="col-2 cot">' . $ds['noidung'] . '</td>
                                </tr>';
                        }
                    }
                    ?>
                </thead>
            </table>
        </div>
        </div>
    </form>
    <!-- footer text  -->
    <div class="p-0" style="background-color: #903938; margin-top: 60px;">
        <ul class=" container footer p-0">
            <li>Cơ quan chủ quản: Văn phòng Chính phủ</li>
            <li>www.BaiThucHanh3.vn</li>
            <li>Tổng đài hỗ trợ: 19001234</li>
            <li>Email: BaiThucHanh3@gmail.com</li>
        </ul>
    </div>
</body>