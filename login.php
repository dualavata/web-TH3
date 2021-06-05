<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style-login.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- logo  -->
        <a href="./intro.php" class="center"> <img src="./pics/quoc_huy.svg" alt="" class="icon-header"></a>
        <a href="./intro.php" class="center"> <img src="./pics/GroupTextHeader.svg" alt="" class="pic-header"></a>
        <!-- form  -->
        <form method="POST" id="login_form">
            <div class="login form-group">
                <div class="center form-group">
                    <p class="header">Đăng nhập</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="username">Tài khoản</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Nhập tài khoản" required oninvalid="this.setCustomValidity('Vui lòng nhập tài khoản')" oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required oninvalid="this.setCustomValidity('Vui lòng nhập mật khẩu')" oninput="this.setCustomValidity('')">
                </div>
                <button type="submit" class="btn btn-primary login-bt" id="login_btn">
                    Đăng nhập
                </button>

            </div>
        </form>
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
    <script>
        $('form').on('submit', function(event) {
            event.preventDefault();
        })
        $("#login_btn").click(function() {
            $.ajax({
                method: "POST",
                url: "./db/logic-Login.php",
                data: $("#login_form").serialize(), //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                success: function(response) {
                    console.log(response);
                    if (response === 'ok') {
                        location.replace('./admin.php');
                    }
                }
            });
        });
    </script>
</body>