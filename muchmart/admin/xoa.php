
 
<?php
        include"connection.php";
       
            $id=$_GET['id'];
            
            $sql="DELETE FROM db_product WHERE id=$id";
                    $rs=mysqli_query($connect,$sql);
                    if($rs)
                    {
                        echo "xóa thành công";
                        header('location:quanlysanpham.php');
                    }
                    else
                    {echo "xóa không thành công";
                        header('location:quanlysanpham.php');}
                    
        
?>

       


    