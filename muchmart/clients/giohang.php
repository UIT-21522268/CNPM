<?php
    session_start();
    ob_start();

?>
   
<?php
if (!isset($_COOKIE['username'])){
    header('location: login.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIỎ HÀNG</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

    <div id="wrapper">
        <div id="header">
            <a href="/index.html" class="logo">
                <img src="assets/img/logo.png" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="trangchu.html">Trang chủ</a>
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
                    <img src="assets/img/cart.png" alt="">
                </div>
            </div>
        </div>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>THỨC ĂN</span>
                    <br>
                    <span>THƯỢNG HẠNG</span>
                </h2>
                <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
                    hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                    hoàn hảo nhất</p>
                <button>Mua ngay</button>
            </div>
            <div class="box-right">
                <img src="assets/img/img_1.png" alt="">
                <img src="assets/img/img_2.png" alt="">
                <img src="assets/img/img_3.png" alt="">
            </div>
        </div>
    </div>
  
    
   

    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <form method='post'>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tongtien=0; ?>
                            <?php
                                $tongtien=0;
                                foreach($_SESSION['arrthem']as $prd){

                                    $thanhtien=(int)$prd['gia']* (int)$prd['sl'];
                                    (int)$tongtien+=(int)$thanhtien;
                                    ?>
        
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?php echo $prd['name'];?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo (int)$prd['gia'];?> VND
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <?php echo $prd['sl'];?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $thanhtien;?> VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <input type='submit' value='Xóa' name='xoa' id='xoa'>
                                    </td>
                                    <?php 
                                    $id=$prd['idp'];
                                if(isset($_POST['xoa']))
                                    unset($_SESSION['arrthem'][$id]);
                                ?>
                                <?php } ?>
                                </tr>
                                
                            </tbody>
                        </table>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                
                
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Tiền ship <span>30000 VND</span></li>
                            <li>Tổng tiền <span><?php echo $tongtien+30000;?> VND</span></li>
                        </ul>
                        <a href="thanhtoan.php" class="primary-btn" name='thanhtoan' id='thanhtoan'>Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </section>
 
    
    

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
<?php
    ob_end_flush();
?>