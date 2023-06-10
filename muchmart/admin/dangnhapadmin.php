
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN </title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >
        function postData() {
        var xmlhttp = new XMLHttpRequest();
        var obj=document.getElementById("ketqua");
        var url="dangnhap_ad.php";
        var param="username="+username.value+"&password="+password.value;
        xmlhttp.open("POST",url,true);
                xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xmlhttp.send(param);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.close();
                window.open("quanlysanpham.php");
    }
  };
}
    </script>
    <div id="header">
        <a href="" class="logo">
            <img src="/assets/img/logo.png" alt="">
        </a>
        <div id="menu">
            <div class="item">
                <a href="">Trang chủ</a>
            </div>
            <div class="item">
                <a href="">Sản phẩm</a>
            </div>
            <div class="item">
                <a href="">Blog</a>
            </div>
            <div class="item">
                <a href="">Liên hệ</a>
            </div>
        </div>
        <div id="actions">
            <div class="item">
                <img src="/assets/img/user.png" alt="">
            </div>
            <div class="item">
                <img src="/assets/img/cart.png" alt="">
            </div>
        </div>
    </div>
                <!--Login form-->
                
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <p class="auth-form__heading">Đăng nhập</p>
                            <span class="auth-form__switch-btn"><a href='dangkiadmin.hp'>Đăng kí</a></span>
                        </div>
                        
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="Email/SDT của bạn" class="auth-form__input" placeholder="Username" name='username' id='username'>
                            </div>
                            <div class="auth-form__group">
                                <input type="Password" class="auth-form__input" placeholder="Mật khẩu" name='password' id='password'>
                            </div>
                        </div>
                        <div class="auth-form__aside">
                            <div class="auth-form__help">
                                <a href="" class="auth-form__help-link forgot">Quên mật khẩu</a>
                                <span class="auth-form_help-separate"></span>
                                <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                            </div>
                        </div>
                        <div class="auth-form-control">
                
                            <input type="button" value="ĐĂNG NHẬP" id="dangnhap" name="dangnhap" class="btn btn--primary " onclick="postData()">
                            </button>
                            <div id='ketqua' name='ketqua'></div>
                        </div>
                    </div>
                    
                    <div class="auth-form__social">
                        <a href="" class="auth-form__social--SMS btn btn--size-s btn--with-icon">
                            <i class="fa-solid fa-message-sms"></i>
                            <span class="auth-form__social-title">
                                SMS
                            </span> 
                        </a>
                        <a href="" class="auth-form__social--facebook btn btn--size-s btn--with-icon">
                            <i class="auth-form__social-icon fa-brands fa-facebook-square"></i>
                            <span class="auth-form__social-title">
                                Facebook
                            </span> 
                        </a>
                        <a href="" class="auth-form__social--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__social-icon fa-brands fa-brands fa-google-plus-g"></i>
                            <span class="auth-form__social-title">
                                Google
                            </span> 
                        </a>
                    </div>
                </div>
             
                
        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="">
                </div>
                <p>Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>
            </div>
            <div class="box">
                <h3>NỘI DUNG</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="">Sản phẩm</a>
                    </div>
                    <div class="item">
                        <a href="">Blog</a>
                    </div>
                    <div class="item">
                        <a href="">Liên hệ</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h3>LIÊN HỆ</h3>
                <form action="">
                    <input type="text" placeholder="Địa chỉ email">
                    <button>Nhận tin</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    </body>
</html>
