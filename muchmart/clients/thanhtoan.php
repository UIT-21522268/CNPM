<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Much Mart </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>


    <div id="wrapper">
        <div id="header">
            <a href="/index.html" class="logo">
                <img src="assets/img/logo.png" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="./trangchu.php">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="/sanpham1.html">Sản phẩm</a>
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
                    <a href='giohang.php'>
                    <img src="assets/img/cart.png" alt="">
                    </a>
                   
                </div>
            </div>
        </div>
        
        
          
            <p style="text-align:center;font-size:xx-large;padding:20px;">Thông tin thanh toán và giao hàng</p>
            <table width=70% id='thanhtoan' name='thanhtoan' align="center">
            <form method='post' action='xulythanhtoan.php' width=70%>
            
                <tr>
                    <td>
                        Tên người nhận hàng
                    </td>
                    <td><input type='text' name='ten' placeholder="Tên người nhận hàng"></td>
                </tr>
                <tr>
                    <td>Địa chỉ nhận hàng</td>
                    <td><input type='text' name='diachi' placeholder="Địa chỉ nhận hàng"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='sdt' placeholder="Số điện thoại"></td>
                </tr>
                <tr>
                    <td><input type='submit' value='Xác nhận' colspan='2'></td>
                </tr>
          

            </form>
            </table>
           
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
                        <a href="/index.html">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="/sanpham1.html">Sản phẩm</a>
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