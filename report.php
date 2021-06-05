<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hỗ trợ</title>
    <link rel="stylesheet" href="./css/style-report.css">
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
                                <a href="./login.php" class="btn btn-outline-primary butt" role="button" aria-pressed="true">Đăng nhập</a>
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
                            <a class="nav-link" href="./search.php">Tra cứu vi phạm theo biển số</a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="./nopphat.php">Hướng dẫn nộp phạt phí vi phạm giao thông </a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="#">Hỗ trợ</a>
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
    <div class="container">
        <div class="row">
            <!-- input  -->
            <div class="col-9 p-0">
                <div style="background-color: rgba(234, 160, 49, 0.1); border-radius: 4px; padding: 13px;">
                    <form id="myForm" method="POST">
                        <?php
                        require_once('./db/logic-report.php');
                        ?>
                        <div class="form-row">
                            <div class="col-3 text">Họ và tên</div>
                            <div class="form-group col-9">
                                <input type="name" class="form-control" name="name" placeholder="Nhập họ và tên" required oninvalid="this.setCustomValidity('Vui lòng nhập Họ và Tên')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3 text">Số điện thoại</div>
                            <div class="form-group col-9">
                                <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" required oninvalid="this.setCustomValidity('Vui lòng nhập Số điện thoại')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3 text">Email</div>
                            <div class="form-group col-9">
                                <input type="text" class="form-control" name="inputEmail" placeholder="Nhập địa chỉ email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3 text">Địa chỉ thường trú</div>
                            <div class="form-group col-9">
                                <input type="text" class="form-control" name="inputAddress" placeholder="Nhập số nhà, thôn, xóm,..." required oninvalid="this.setCustomValidity('Vui lòng nhập địa chỉ thường trú')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-3 text">Thành phố</div>
                            <div class="form-group col-9">
                                <input type="text" class="form-control" name="inputCity" placeholder="Nhập thành phố" required oninvalid="this.setCustomValidity('Vui lòng nhập thành phố')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="col-3 text">Nội dung</div>
                            <div class="form-group col-9">
                                <textarea class="form-control" name="inputText" rows="5" placeholder="Nhập nội dung" required oninvalid="this.setCustomValidity('Vui lòng nhập nội dung phản ánh')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-primary submit-bt">Gửi phản ánh</button>
                                <button class="btn btn-outline-secondary" onclick="this.form.reset();">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div style=" background-color:rgba(30, 47, 65, 0.1); border-top-right-radius: 4px; border-top-left-radius: 4px; padding: 5px 0px 5px 0px;">
                    <b style=" font-size: 20px; padding:  5px 15px 5px 15px;">Lưu ý</b>
                </div>
                <ul class="text-justify p-2" style="border: solid rgba(30, 47, 65, 0.1) 1px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;">
                    <b style="font-size: 18px;">1. Hệ thống tiếp nhận các phản ánh, kiến nghị về:</b>
                    <ul style="font-size: 14px; ">
                        <li>Các lỗi của website như: trả về kết quả lỗi, kết quả sai với thực tế;</li>
                        <li>Website bị lỗi, treo hoặc không hoạt động bình thường;</li>
                        <li>Những giải pháp, sáng mới trong chức năng của website để website càng thêm phát triển;</li>
                        <li>Thông tin được cung cấp trên trang tin tức của website bị sai lệch, cũ, đã lỗi thời, cần
                            được cập nhật;</li>
                    </ul>
                    <b style="font-size: 18px;">2. Hệ thống không tiếp nhận đơn thư khiếu nại, tố cáo và hướng dẫn giải
                        đáp pháp luật.</b>
                </ul>
            </div>
        </div>
    </div>
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