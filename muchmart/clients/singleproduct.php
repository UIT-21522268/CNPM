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
                    <a href='giohang.php'>
                    <img src="assets/img/cart.png" alt="">
                    </a>
                   
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
        
            <?php
           
            
            //Nhúng file kết nối với database
            include"connection.php";
            header('Content-Type: text/html; charset=UTF-8');
                if(ISSET($_GET['id']))
                {
                   
            $id   = ($_GET['id']);


            $sql = "select * from db_product where id = ".($_REQUEST['id']);
            $result = mysqli_query($connect, $sql);
            if ($result->num_rows > 0)
            {
            while($row = $result->fetch_row())
            {
            
          
        
            ?>
            <div class="product">
            <ul class="product_item">
               <li class="item">
                   <img src='<?php echo $row[3] ?>' alt="" width="600px" height="450px">
                   
               </li>
               
            </ul>
            <ul class="product_item">
                <div class="item">
                    <h1><?php echo $row[2]; ?></h1>
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
                    <p> Đã bán </p>
                        <a hef="#">12</a>
                    <div class="item_gia"><?php echo $row[7].'VND';?></div>
                    
                    
                    <div class="item_btn">
                    
                    <form action='muahang.php' method='post'>
                    <p> Số lượng</p>
                        <input type='hidden'  value=<?php echo $row[0];?> name='idprd' >
                        <input type='hidden' value=<?php echo $row[2];?> name='nameprd' >
                        <input type='hidden' value=<?php echo $row[7];?> name='giaprd' > 
                        <input type='number' value=1 name='sl'>
                        <input class="add" type='submit' value='Thêm vào giỏ hàng' title='Mua hàng' name='submit'>
                        
                </form>
                    </div>
                </div> 
            </ul>
            <?php }}}?>
        </div>
        <p class="tieude">Sản phẩm tương tự</p>
        <ul id="list-products">
        <?php
           
            
           //Nhúng file kết nối với database
           include"connection.php";
 
               if(ISSET($_GET['id']))
               {
                  
           $id   = ($_GET['id']);


           $sql = "select * from db_product where catid in(select catid from db_product where id= ".($_REQUEST['id']).")";
           $result = mysqli_query($connect, $sql);
           if ($result->num_rows > 0)
           {
           while($row = $result->fetch_row())
           {
           
         
       
           ?>
            <div class="item">
            <a href='singleproduct.php?id=<?php echo $row[0];?>&catid=<?php echo $row[1];?> '>

                <img src='<?php echo $row[3]; ?>' alt="">
           </a>
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

                <div class="name"><?php echo $row[2]; ?></div>
        
                <div class="price"><?php echo $row[7]; ?></div>
            </div>


            
                <?php }}} ?>
        </ul>
        

        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="assets/img/TWOFOOD.png" alt="">
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