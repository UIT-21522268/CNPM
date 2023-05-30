<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >
        function themprd() {
        var xmlhttp = new XMLHttpRequest();
        var obj=document.getElementById("ketqua");
        var url="them.php";
        var param="ten="+ten.value+"&img="+img.value+"&loai="+loai.value+"&mota="+mota.value+"&giagoc="+giagoc.value+"&giaban="+giaban.value+"&sl="+sl.value;
        xmlhttp.open("POST",url,true);
                xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xmlhttp.send(param);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               document.getElementById('ketqua').innerHTML=xmlhttp.response;
             
                

                
            
  }
};
        }
    </script>
    <form method="post">
    <p align='center'>Thêm sản phẩm</p>
        <table align="center">
        
            <tr>
                <td>Tên sản phâm</td>
                <td><input type='name' name='ten' id='ten'></td>
            </tr>
            <tr>
                <td>Hình ảnh sản phâm (dạng link)</td>
                <td><input type='img' name='img' id='img'></td>
            </tr>
            <tr>
                <td>Mục sản phẩm</td>
                <td>
                <select  name='loai' id='loai'>
                    <?php
                    include"connection.php";
                    $sqlselect="select * from db_category";
                    $rs=mysqli_query($connect,$sqlselect);
                    while($row=mysqli_fetch_array($rs)){
                    echo "<option id='".$row[0]."'  value='".$row[0]."'>".$row[1]."</option>";
                }
               ?>
            </select>
                </td>
                
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><input type='text' name='mota' id='mota'></td>
            </tr>
            <tr>
                <td>số lượng</td>
                <td><input type='number' name='sl' id='sl'></td>
            </tr>
            <tr>
                <td>Giá gốc</td>
                <td><input type='text' name='giagoc' id='giagoc'></td>
            </tr>
            <tr>
                <td>Giá bán</td>
                <td><input type='text' name='giaban' id='giaban'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='button' name='them' value='Thêm'class="btn btn--primary " onclick="themprd()"></td>
            </tr>
            <tr>
                <td id='ketqua'>

                </td>
            </tr>
        </table>
                
    </form>
   
</body>