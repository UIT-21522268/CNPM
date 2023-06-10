
<?php
if (!isset($_COOKIE["id"])){
    header('location: dangkiadmin.php');
}
?>
<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWO FOOD </title>
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
                <h1 class="QL_header">QUẢN LÝ SẢN PHẨM</h1>
                <button class="QL_btn" onclick="themsp()">Thêm sản phẩm </button>
                <p class='QL_header'>Danh sách sản phẩm</p>
                <ul id="list-products">
                    <form width=100%>
                    <?php

 
//Nhúng file kết nối với database

      


                include"connection.php";
                header('Content-Type: text/html; charset=UTF-8');
                    $sql="select * from db_product ";
                $rs=mysqli_query($connect,$sql);
                if($rs){
                    while($row=mysqli_fetch_array($rs))
                    {
                       
                        echo "  <li class='item'>
                        
                        <img src='".$row[3]."' alt='' >
                 
                        <div class='stars'>
                            <span>
                                <img src='assets/img/star.png' alt=''>
                            </span>
                            <span>
                                <img src='assets/img/star.png' alt=''>
                            </span>
                            <span>
                                <img src='assets/img/star.png' alt=''>
                            </span>
                            <span>
                                <img src='assets/img/star.png' alt=''>
                            </span>
                            <span>
                                <img src='assets/img/star.png' alt=''>
                            </span>
                            
                        </div>

                        <div class='name' name='name'>".$row[2]."</div>
                        <div class='price' >".$row[6]." VND</div>
                        <div id='QLKH' align='center'>
                            <a href='sua.php?id=$row[0]'>
                            Sửa   
                            </a>
                            <a href='xoa.php?id=$row[0]'>
                            Xóa
                            </a>
                            
                </div>
              
                    </li>
                   
                    ";
                        }}
                    ?>
                    </form>
                
                        
                </ul>
                                
            </div>
           
         </div>
    </div>
</body>
</html>