<?php

 
//Nhúng file kết nối với database

      


    include"connection.php";
    header('Content-Type: text/html; charset=UTF-8');
    if(isset($_GET["cat_id"]))
    $loai = $_GET['cat_id'];
    if($loai=='all'){
        $sql="select * from db_product ";
    $rs=mysqli_query($connect,$sql);
    if($rs){
        while($row=mysqli_fetch_array($rs))
        {
            
            echo "  <div class='item'>
            <a href='singleproduct.php?id=".$row[0]."&catid=".$row[1]."'>
            <img src='".$row[4]."' alt=''>
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

            <div class='name'>".$row[3]."</div>
            <div class='price'>".$row[11]." VND</div>
        </div>";
            
        }
    }
    }
    else{
    $sql="select * from db_product where catid=".$loai;
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
            <div class='price'>".$row[6]." VND</div>
        </div>";
            
            
        }
    }
    else
    echo"<p> không có sản phẩm</p>";
}
?>