<?php
   
        if(!$_POST['ten']||!$img= $_POST['img']||!$cat=$_POST['loai']||!$mota=$_POST['mota']||!$giagoc=$_POST['giagoc']||!$giaban=$_POST['giaban']||!$sl=$_POST['sl'])
        {
            echo" Hãy điền đầy đủ thông tin";

        }
        else
        {
            include"connection.php";
            
            $name=$_POST['ten'];
            $img= $_POST['img'];
            $cat=$_POST['loai'];
            $mota=$_POST['mota'];
            $giagoc=$_POST['giagoc'];
            $giaban=$_POST['giaban'];
            $sl=$_POST['sl'];
            $namecat;
            
                $sql1="select * from db_product ";
                $result2=mysqli_query($connect,$sql1);
                
            $id=$result2->num_rows+1;
            $sql="insert into db_product  value ($id,$cat,'$name','$img','$mota',$sl,$giagoc,$giaban)";
            $rs=mysqli_query($connect,$sql);
            if($rs)
             echo "Thêm thành công";

             else
             echo "thêm không thành công";
            
        }
    ?>