
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER </title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
    
</head>
<body>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >
        function postData() {
        var xmlhttp = new XMLHttpRequest();
        var obj=document.getElementById("ketqua");
        var url="xuly.php";
        var param="username="+username.value+"&fullname="+fullname.value+  "&email="+email.value+"&password="+password.value+"&repassword="+repassword.value;
        xmlhttp.open("POST",url,true);
                xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xmlhttp.send(param);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                {
                    alert("đăng kí thành công");
                    window.close();
                    
                    window.open("trangchu.php");             
                }
    }
  };
}
  
    
        
    </script>
    <div id="header">
        <a href="" class="logo">
            <img src="assets/img/TWO FOOD.png" alt="">
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
                <img src="assets/img/user.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/cart.png" alt="">
            </div>
        </div>
    </div>
         <!--Register form -->
         <form action="xuly.php" method="post" id='register_form'>
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <p class="auth-form__heading" >Đăng kí</p>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Username" name="username" id="username">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="HỌ Và Tên" name='fullname' id='fullname'>
                        </div>
                        <div class="auth-form__group">
                            <input type="Etext" class="auth-form__input" placeholder="Email" name='email' id='email'>
                        </div>
                        <div class="auth-form__group">
                            <input type="Password" class="auth-form__input" placeholder="Nhập mật khẩu" name='password'id='password'>
                        </div>
                        <div class="auth-form__group">
                            <input type="Password" class="auth-form__input" placeholder="Nhập lại mật khẩu" name='repassword'id='repassword'>
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với TWO FOOD về
                            <a href="" class="auth-form__policy-text-link">Điều khoản dịch vụ</a> &
                            <a href="" class="auth-form__policy-text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form-control">
                        <button class="btn back btn--normal">TRỞ LẠI</button>
                        <input type="button" class="btn btn--primary " id="dangki" name="dangki" value="Đăng kí" onclick="postData()">
                        
                        <div id="ketqua"></div>
                    </div>
                </div>
                
                <div class="auth-form__social">
                    <a href="" class="auth-form__social--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__social-icon fa-brands fa-facebook-square"></i>
                        <span class="auth-form__social-title">
                            Kết nối với Facebook
                        </span> 
                    </a>
                    <a href="" class="auth-form__social--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__social-icon fa-brands fa-brands fa-google-plus-g"></i>
                        <span class="auth-form__social-title">
                            Kết nối với Google
                        </span> 
                    </a>
                </div>
            </div>
         </form>
                
            </div>
            <div id="footer">
                <div class="box">
                    <div class="logo">
                        <img src="assets/img/TWO FOOD.png" alt="">
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
  