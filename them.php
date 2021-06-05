<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm Lỗi</title>
    <link rel="stylesheet" href="./css/style-add.css">
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
    <div class="container">
        <!-- logo  -->
        <a href="admin.php" class="center"> <img src="./pics/quoc_huy.svg" alt="" class="icon-header"></a>
        <a href="admin.php" class="center"> <img src="./pics/GroupTextHeader.svg" alt="" class="pic-header"></a>
        <!-- form  -->

        <form method="POST">
            <?php
            require_once('./db/logic-add.php');
            ?>
            <div class="login form-group">
                <div class="center form-group">
                    <p class="header">Thêm lỗi vi phạm</p>
                </div>
                <hr>
                <!-- biển số xe  -->
                <div class="form-group">
                    <label>Biển số xe</label>
                    <input style="display: none" type="text" class="form-control login_input" name="id">
                    <input type="text" class="form-control" name="bienso" placeholder=" Nhập biển số xe" required oninvalid="this.setCustomValidity('Vui lòng nhập biển số xe')" oninput="this.setCustomValidity('')">
                </div>
                <!-- Tên phương tiện  -->
                <div class="form-group">
                    <label>Tên phương tiện</label>
                    <input type="text" class="form-control" name="tenVP" placeholder=" Nhập tên phương tiện" required oninvalid="this.setCustomValidity('Vui lòng nhập tên phương tiện')" oninput="this.setCustomValidity('')">
                </div>
                <!-- lỗi vi phạm  -->
                <div class="form-group">
                    <label>Lỗi vi phạm</label>
                    <input type="text" class="form-control" name="loiVP" placeholder="Nhập lỗi vi phạm" required oninvalid="this.setCustomValidity('Vui lòng nhập lỗi vi phạm')" oninput="this.setCustomValidity('')">
                </div>
                <!-- địa điểm  -->
                <div class="form-group">
                    <label>Vị trí</label>
                    <input type="text" class="form-control" name="vitri" placeholder="Nhập địa điểm" required oninvalid="this.setCustomValidity('Vui lòng nhập địa điểm')" oninput="this.setCustomValidity('')">
                </div>
                <!-- thời gian  -->
                <div class="form-group">
                    <label>Ngày vi phạm</label>
                    <input type="date" class="form-control" name="ngayVP" placeholder="Nhập thời gian" required oninvalid="this.setCustomValidity('Vui lòng nhập thời gian')" oninput="this.setCustomValidity('')">
                </div>
                <!-- phí phạt  -->
                <div class="form-group">
                    <label">Số tiền nộp phạt</label>
                        <input type="number" class="form-control" name="tienVP" placeholder="Nhập số tiền nộp phạt (VNĐ)" required oninvalid="this.setCustomValidity('Vui lòng nhập số tiền nộp phạt')" oninput="this.setCustomValidity('')">
                </div>
                <!-- Trạng thái  -->
                <div class="form-group">
                    <label>Trạng thái</label>
                    <input type="text" class="form-control" name="trangthaiVP" placeholder="Nhập trạng thái" required oninvalid="this.setCustomValidity('Vui lòng nhập trạng thái')" oninput="this.setCustomValidity('')">
                </div>
                <a><button type="submit" class="btn btn-primary login-bt" id="btn">
                        Lưu
                    </button>
                    </a>
            </div>
        </form>
    </div>
    <!-- footer text  -->
    <div class="p-0 footer-bar">
        <ul class=" container footer p-0">
            <li>Cơ quan chủ quản: Văn phòng Chính phủ</li>
            <li>www.BaiThucHanh3.vn</li>
            <li>Tổng đài hỗ trợ: 19001234</li>
            <li>Email: BaiThucHanh3@gmail.com</li>
        </ul>
    </div>
</body>