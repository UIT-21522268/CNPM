<?php
          session_start();
          ob_start();

?>
<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
   
     
    //Nhúng file kết nối với database

use LDAP\Result;

    $con=mysqli_connect("localhost","root","","twofood_shop")
    Or die("<p>Không thể connect</p>".mysqli_connect_error());
   
    
    mysqli_set_charset($con,"utf8");
    header('Content-Type: text/html; charset=UTF-8');
        //Lấy dữ liệu từ file dangky.php
    $username = $_POST['username'];
    $fullname   = ($_POST['fullname']);
    $password   = ($_POST['password']);
    $repassword = $_POST['repassword'];
    $email     = ($_POST['email']);
  
    
        if (!$fullname || !$password || !$email || !$username|| !$repassword)
    {
        echo  "Vui lòng nhập đầy đủ thông tin";
    }
        else if($password!=$repassword)
            echo "mật khẩu nhập lại không đúng";
        else{
       
          
        //Kiểm tra tên đăng nhập này đã có người dùng chưa
        
              
        //Kiểm tra email có đúng định dạng hay không
        
              
        
        //Lưu thông tin thành viên vào bảng
        $sql1="select * from db_customer";
        $result1=mysqli_query($con,$sql1);
        $id=$result1->num_rows+1;
        $sql ="insert into db_customer 
            values  ($id,'$fullname', '$username','$password',' ','$email')";
                              
    
    
      if(mysqli_query($con, $sql)){
          echo" đăng kí thành công";
          setcookie("username", $username,  time() + 3600);    
       header("location:trangchu.php?page=dangki"); 
       
        
        }
        else{
            
          echo" đăng kí không thành công";
            header("location:dangki.php");
       
        }
        
        
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        }
          
        
    
?>
   <?php
  ob_end_flush();
?>
