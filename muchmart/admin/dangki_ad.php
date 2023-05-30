
<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
   
     
    //Nhúng file kết nối với database

use LDAP\Result;

    $con=mysqli_connect("localhost","root","","twofood_shop")
    Or die("<p>Không thể connect</p>".mysqli_connect_error());
   
    
    mysqli_set_charset($con,"utf8");
    header('Content-Type: text/html; charset=UTF-8');
        
    $username = $_POST['username'];
    $fullname   = ($_POST['fullname']);
    $password   = ($_POST['password']);
    $repassword = $_POST['repassword'];
    $sdt     = ($_POST['sdt']);
 
    
        if (!$fullname || !$password || !$sdt || !$username|| !$repassword)
    {
        echo  "Vui lòng nhập đầy đủ thông tin";
    }
        else if($password!=$repassword)
            echo "mật khẩu nhập lại không đúng";
        else{
            // Mã khóa mật khẩu
    
      
              
        
        //Lưu thông tin thành viên vào bảng
        $sql1="select * from db_user";
        $result1=mysqli_query($con,$sql1);
        $id=$result1->num_rows+1;
        $sql ="insert into db_user 
            values  ($id,'$fullname', '$username','$password' ,'$sdt',' ')";

      if(mysqli_query($con, $sql)){
          echo" đăng kí thành công";
          setcookie("id", $id,  time() + 3600);    
       header("location:quanlysanpham.php"); 
       
        
        }
        else{
            
          echo" đăng kí không thành công";
            header("location:dangkiadmin.php");
       
        }
        
        
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        }
          
        
    
?>
   <?php
  ob_end_flush();
?>
