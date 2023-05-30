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
                <img src="assets/img/TWOFOOD.png" alt="">
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
            <div id="QLSP"  >
                
                    <p>Các đơn đặt hàng </p>
                    <form  >
                        <table border="0px" height=400px width=100%>
                        <tr>
                                <td width="10%">Id hóa đơn</td>
                                <td width="20%">Ngày đặt hàng</td>
                                <td width="15%">Tên người đặt hàng</td>
                                <td width="10%">Số điện thoại</td>
                                <td width="10%" >Số tiền</td>
                                <td width="10%">Phí giao hàng</td>
                                <td width="15%" >Địa chỉ</td>
                                <td width="20%">Chi tiết hóa đơn</td>
                            </tr>
                    <?php
                include"connection.php";
                header('Content-Type: text/html; charset=UTF-8');
                    $sql="select * from db_order ";
                $rs=mysqli_query($connect,$sql);
                if($rs){
                    while($row=mysqli_fetch_array($rs))
                    { ?>
            
                            <tr>
                                <td ><?php echo $row[0];  ?></td>
                                <td><?php echo  $row[2];  ?></td>
                                <td><?php echo $row[3];  ?></td>
                                <td><?php echo $row[4];  ?></td>
                                <td><?php echo $row[5];  ?></td>
                                <td><?php echo $row[6];  ?></td>
                                <td><?php echo $row[7];  ?></td>
                                <td>
                                <a href='chitiethoadon.php?id=<?php echo $row[0];  ?>'>chi tiết </a>
                                </td>
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