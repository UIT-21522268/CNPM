<?php
if (isset($_COOKIE['$id'])){
    header('location: dangkiadmin.php');
}
?>
<!DOCTYPE html>
<html >

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
                    <a href="quanlysanpham.php">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="quanlysanpham.php">Sản phẩm</a>
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
               
            </div>
        </div>

        <div class="admin">
            <div class="noidung">
                <p>DANH MỤC</p>
                <button class="noidung_item" onclick="window.open('quanlysanpham.php')"> Quản lý sản phẩm</button>
                <button class="noidung_item" onclick="window.open('quanlykhachhang.php')">Quản lý khách hàng</button>
                <button class="noidung_item" onclick="window.open('quanlydonhang.php')">Quản lý đơn hàng</button>
            </div>
            <div id="QLSP">
      
                            <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                    $id=$_GET['id'];
                    echo "<h1>Đơn đặt hàng số: ".$id."</h1>";
                include"connection.php";
                header('Content-Type: text/html; charset=UTF-8');
                    $sql="select * from db_orderdetail where orderid=".$id."";
                     $rs=mysqli_query($connect,$sql);
                    if($rs){
                    while($row=mysqli_fetch_array($rs))
                    { 
                        $sql1='select * from db_product where id='.$row[2];
                        $rs1=mysqli_query($connect,$sql1);
                        $name;
                        while($r=mysqli_fetch_array($rs1))
                            $name=$r[2];
                        ?>
                                
                                 <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?php echo $name;?></h5>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <?php echo $row[3];?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $row[4];?> VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
        <div>
            
        </div>
    </section>
                            
            </div>
           
         </div>
    </div>
</body>
</html>