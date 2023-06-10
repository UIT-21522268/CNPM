
<?php
  
    include"connection.php";
    header('Content-Type: text/html; charset=UTF-8');
    {
    $password   = addslashes($_POST['password']);
    $username     = addslashes($_POST['username']);
    if (!$password || !$username )
    {
        echo "Vui lòng nhập đầy đủ thông tin.";
        exit;
    }
  
    $sql ="select * from db_customer where username ='$username' and password='$password'";
    $result=$connect -> query($sql);                      
  if($result->num_rows > 0){
    echo "Đăng nhập thành công";
    setcookie("username", $username,  time() + 3600);
    header("location:trangchu.php?page=login");
    }
    else{
    echo "Tài khoản không tồn tại";
    }
}
?>

