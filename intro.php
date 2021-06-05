<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="./css/style-intro.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/f0a087512d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div>
        <!-- Navbar logo và thanh đăng nhập, đăng kí -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light container justify-content-lg-between pt-3 pb-3 pl-0 pr-0">
                <a href="#"><img src="./pics/logo-cs.png" alt="logo" class="logo" /></a>
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
                            <a href="#"><i class="fas fa-home home-icon-detail"></i>
                            </a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item menu-text">
                            <a class="nav-link" href="./search.php">Tra cứu vi phạm theo biển số</a>
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
    <!-- Breadcrumb  -->
    <div class="container pl-0 pr-0" style="height: 63px;">
        <nav>
            <ol style="display: flex; list-style-type: none; padding: 20px 0px 20px 0px ;">
                <li class="breadcrumb-item "><a href="#"><i
                            class="fas fa-home home-icon-detail breadcrumb-non-active"></i>
                    </a> </li>
                <li class="breadcrumb-item active" aria-current="page"><a class="breadcrumb-active"> Giới thiệu</a>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Intro  -->
    <p class="container pl-0 pr-0" style="font-size: 28px; font-weight: 600;">Giới thiệu về Trang web tra cứu vi phạm
        giao thông
    </p>
    <div class="container p-0">
        <img src="./pics/gioi-thieu-slider.png" alt="" style="width: 100%;">
    </div>
    <!-- text body  -->
    <div>
        <p class="container p-0 text-body">Với quan điểm công khai, minh bạch, lấy
            người dân, doanh
            nghiệp
            làm trung tâm phục vụ, trang web cung cấp dịch vụ kết nối, cung cấp thông tin về vi phạm giao thông và tiếp
            nhận đóng góp, phản ánh, kiến nghị của cá nhân, tổ chức trên toàn quốc. </p>
        <p class="container mb-0 p-0 text-body">Cá nhân, tổ chức dễ dàng truy cập
            trang web tại địa chỉ
            duy nhất
            www.BaiThucHanh3.gov.vn theo nhu cầu để hưởng nhiều lợi ích từ trang web, tra cứu kết quả vi phạm nhanh nhất
            chỉ qua biển số xe.</p>
    </div>
    <!-- service  -->
    <div class="container">
        <div class="row">
            <div class="col-sm p-3" style="padding-left: 0px !important;">
                <img src="./pics/login-icon.svg" alt="" class="mb-3">
                <p class="text-body"> Đăng ký và được cấp ngay một tài khoản của trang web tra
                    để đăng nhập;</p>
            </div>
            <div class="col-sm p-3">
                <img src="./pics/timkiem-icon.svg" alt="" class="mb-3 ">
                <p class="text-body">Tra cứu thông tin, cung cấp dịch vụ tra cứu; Gửi phản ánh kiến nghị liên quan đến
                    việc tra cứu thông tin;</p>
            </div>
            <div class="col-sm p-3" style="padding-right: 0px !important;">
                <img src="./pics/denghi-icon.svg" alt="" class="mb-3 text-body">
                <p class="text-body">Đề nghị hỗ trợ khi sử dụng trang web qua Tổng đài điện thoại
                    19001234 hoặc đóng góp ý kiến trực
                    tuyến tại mục Hỗ trợ;
                </p>

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

</html>