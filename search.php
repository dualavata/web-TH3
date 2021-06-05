<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tra cứu</title>
    <link rel="stylesheet" href="./css/style-search.css">
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
                                <a href="./login.php" class="btn btn-outline-primary butt" role="button" aria-pressed="true"> Đăng nhập
                                </a>
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
                            <a class="nav-link" href="./nopphat.php">Hướng dẫn nộp phạt phí vi phạm giao thông </a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="./report.php">Hỗ trợ</a>
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
    <div class="container pl-0 pr-0">
        <form class="needs-validation d-flex justify-content-between">
            <div class="form-row">
                <div class="text-tracuu">
                    <p>Tra cứu phương tiện vi phạm giao thông
                    </p>
                </div>
                <div class="col-md-8">
                    <div>
                        <label for="validationCustom01" style="font-size: 18px;">Biển kiểm soát</label>
                        <div style="display: flex; justify-content: space-between;">
                            <input type="text" name="bienSo" class="form-control" id="inputIdCar" placeholder="30A12345" required oninvalid="this.setCustomValidity('Vui lòng biển kiểm soát')" oninput="this.setCustomValidity('')">
                            <button type="submit" class="btn btn-primary search-bt" id="btn">
                                Tra Cứu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container mt-4 p-0" id="table">
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
                        <th scope="col"></th>
                    </tr>
                    <?php
                    require_once('./db/dbHelper.php');
                    $pt = [];
                    if (isset($_GET['bienSo']) && $_GET['bienSo'] != '') {
                        $bienso = $_GET['bienSo'];
                        $sql = "select * from tbl_car where  bienSoXe = '$bienso' ";
                        $pt = executeResult($sql);
                    }
                    if (count($pt) === 0) {
                        echo '<p style="color:red;">Không tìm thấy kết quả !</p>';
                    } else {
                        foreach ($pt as $ds) {
                            echo '
                                <tr>
                                    <td>' . $ds['bienSoXe'] . '</td>
                                    <td>' . $ds['tenPhuongTien'] . '</td>
                                    <td>' . $ds['loiViPham'] . '</td>
                                    <td>' . $ds['viTri'] . '</td>
                                    <td>' . $ds['ngayViPham'] . '</td>
                                    <td>' . $ds['tienNopPhat'] . '</td>
                                    <td>' . $ds['trangthai'] . '</td>
                                </tr>';
                        }
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
        <p style="text-align: justify;">Tra cứu quyết định xử phạt vi phạm hành chính trong lĩnh vực giao thông đường
            bộ: <br>
            1. Thuộc thẩm quyền: Cục Cảnh sát giao thông, các đơn vị trực thuộc Cục Cảnh sát giao thông; Phòng Cảnh sát
            giao thông và các đơn vị đội/trạm thuộc Phòng Cảnh sát giao thông (theo danh sách Đội/Trạm). <br>
            2. Thuộc thẩm quyền của thanh tra giao thông đường bộ.
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

</html>