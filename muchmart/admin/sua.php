
    <!DOCTYPE html>
<html >

<head>
</head>
<body>
<?php
        include"connection.php";
       
            $id=$_GET['id'];
            $idcat;
            $sql="select * from db_product where id=".$id;
            $rs=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($rs)){
                $idcat=$row[1];
        
        ?>
        <form method='post'>
        <p align='center'>Sửa sản phẩm</p>
        <table align="center">
        
            <tr>
                <td>Tên sản phâm</td>
                <td><input type='text' name='ten' value='<?php echo $row[2]; ?>' id='ten'></td>
            </tr>
            <tr>
                <td>Hình ảnh sản phâm (dạng link)</td>
                <td><input type='text' name='img' id='img' value='<?php echo $row[3]; ?>'></td>
            </tr>
            <tr>
                <td>Mục sản phẩm</td>
                <td>
                    <input type='text' name='cat' value='
                    <?php
                    include"connection.php";
                    $sqlselect="select * from db_category where id=".$row[1];
                    $rs=mysqli_query($connect,$sqlselect);
                    while($r=mysqli_fetch_array($rs)){
                    echo $r[1];
                }
               ?>'>
                </td>
                
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><input type='text' name='mota' id='mota' value='<?php echo $row[4]; ?>'></td>
            </tr>
            <tr>
                <td>số lượng</td>
                <td><input type='number' name='sl' id='sl' value='<?php echo $row[5]; ?>'></td>
            </tr>
            <tr>
                <td>Giá gốc</td>
                <td><input type='text' name='giagoc' id='giagoc' value='<?php echo $row[6]; ?>'></td>
            </tr>
            <tr>
                <td>Giá bán</td>
                <td><input type='text' name='giaban' id='giaban' value='<?php echo $row[7]; ?>'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' name='sua' value='Sửa'class="btn btn--primary " ></td>
            </tr>
        </table>
        </form>
        <?php }
        if(isset($_POST['sua'])) 
        {
            $ten=$_POST['ten'];
            $img=$_POST['img'];
            $cat=$_POST['cat'];
            $sl=$_POST['sl'];
            $giaban=$_POST['giaban'];
            $giagoc=$_POST['giagoc'];
            $mota=$_POST['mota'];
            $catid;
            $sql1="select * from db_category where name =' ".$cat."' ";
            $result2=mysqli_query($connect,$sql1);
            while($row=mysqli_fetch_array($result2))
                $catid=$row[0];
            $sql="update db_product  set  catid=$idcat,name='$ten',img='$img',detail='$mota',number=$sl,price=$giagoc,price_sale=$giaban where id=$id";
                    $rs=mysqli_query($connect,$sql);
                    if($rs)
                    echo "sửa thành công";

                    else
                    echo "sửa không thành công";
                    
        }
?>

       
</body>

    