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
    <title>Much Mart</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <script>
        function themsp(){
            window.open("themsp.php","Thêm sản phẩm", "width=500, height=500");
        }
        
        
    </script>


    <div id="wrapper">
        <div style= "background-color:antiquewhite;margin-top:0; border-radius:20px;" id="header">
            <a href="/index.html" class="logo">
                <img src="assets/img/logo.png" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="quanlysanpham.php">Trang chủ</a>
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

        <div class="admin">
            <div class="noidung">
                <p>DANH MỤC</p>
                <button class="noidung_item" onclick="window.open('quanlysanpham.php')"> Quản lý sản phẩm</button>
                <button class="noidung_item" onclick="window.open('quanlykhachhang.php')">Quản lý khách hàng</button>
                <button class="noidung_item" onclick="window.open('quanlydonhang.php')">Quản lý đơn hàng</button>
            </div>
            <div id="QLSP">
                
                    <h1 style='justify-content:center;font-size:xx-large; margin:20px;'>Danh sách khách hàng </h1>
                    <form  >
                        <table border="1px antiquewhite" height=400px width=700px>
                        <tr>
                                <td style='padding-left: 20px;'>Họ Tên</td>
                                <td style='padding-left: 20px;'>Username</td>
                                <td style='padding-left: 20px;'>Email</td>
                            </tr>
                    <?php
                include"connection.php";
                header('Content-Type: text/html; charset=UTF-8');
                    $sql="select * from db_customer ";
                $rs=mysqli_query($connect,$sql);
                if($rs){
                    while($row=mysqli_fetch_array($rs))
                    { ?>
            
                            <tr>
                              
                                <td style='padding-left: 20px;'><?php echo $row[1];  ?></td>
                                <td style='padding-left: 20px;'><?php echo  $row[2];  ?></td>
                                <td style='padding-left: 20px;'><?php echo $row[5];  ?></td>
                            </tr>
                            <?php }}?>
                        </table>
                    </form>
            
                      
                    </form>             
            </div>
           
         </div>
    </div>
</body>
</html>