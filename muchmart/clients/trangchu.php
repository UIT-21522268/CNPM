
<?php
if (!isset($_COOKIE["username"])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWO FOOD </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >
        function lietkesanpham(str) {
        
       
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            document.getElementById("list-products").innerHTML=xmlhttp.responseText;

        }
        xmlhttp.open("GET","danhsachsanpham.php?cat_id="+str,true);
        xmlhttp.send();
    }

    </script>
     <div id="wrapper">
        <div id="header">
            <a href="/index.html" class="logo">
                <img src="assets/img/TWOFOOD.png" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="trangchu.php">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="trangchu.php">Sản phẩm</a>
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
                    <a href='giohang.php'>  <img src="assets/img/cart.png" alt=""></a>
              
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
            <div class="to-bottom">
                <a href="">
                    <img src="assets/img/to_bottom.png" alt="">
                </a>
                
            </div>
        </div>
       
        <div id="wp-products">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <?php
                include"connection.php";
                $sql="select * from db_category";
                $rs=mysqli_query($connect,$sql);
                if($rs){ 
            ?>
            <form method="post">
            <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul id='timsp' name='timsp'  >
                        <?php
                            while($row=mysqli_fetch_array($rs)){
                                echo "<li id='catid' name='loai' value='".$row[0]."'onclick='lietkesanpham(".$row[0].")'>".$row[1]."</li>";
                            }
                        ?>

                        </ul>
                    </div>
                </div>
           
            
            </form>
            <?php

                }
                ?>
            <ul id="list-products">
               
                <?php
                 include"connection.php";
                 header('Content-Type: text/html; charset=UTF-8');
                    $sql="select * from db_product ";
                    $rs=mysqli_query($connect,$sql);
                    if($rs){
                        while($row=mysqli_fetch_array($rs))
                        {
                            
                            echo "  <div class='item'>
                            <a href='singleproduct.php?id=".$row[0]."&catid=".$row[1]."'>
                            <img src='".$row[3]."' alt=''>
                            </a>
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
                
                            <div class='name'>".$row[2]."</div>
                            <div class='price'>".$row[7]." VND</div>
                        </div>";
                            
                        }
                    }
                ?>

            </ul>
            <div class="list-page">
                <div class="item">
                    <a href="/sanpham1.html">1</a>
                </div>
                <div class="item">
                    <a href="/sanpham2.html">2</a>
                </div>
                <div class="item">
                    <a href="/sanpham3.html">3</a>
                </div>
                <div class="item">
                    <a href="/sanpham4.htmlm">4</a>
                </div>
            </div>
        </div>

        <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>GIẢM GIÁ LÊN ĐẾN</span>
                    <span>45%</span>
                </h1>
            </div>
            <div class="box-right"></div>
        </div>

        <div id="comment">
            <h2>NHẬN XÉT CỦA KHÁCH HÀNG</h2>
            <div id="comment-body">
                <div class="prev">
                    <a href="#">
                        <img src="assets/img/prev.png" alt="">
                    </a>
                </div>
                <ul id="list-comment">
                    <li class="item">
                        <div class="avatar">
                            <img src="assets/img/avatar_1.png" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Nguyễn Đình Vũ</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="assets/img/avatar_1.png" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Trần Ngọc Sơn</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="assets/img/avatar_1.png" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/img/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Nguyễn Trần Vi</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                </ul>
                <div class="next">
                    <a href="#">
                        <img src="assets/img/next.png" alt="">
                    </a>
                </div>
            </div>
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
                        <a href="/trangchu.html">Trang chủ</a>
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
