
<?php
  
  include"connection.php";
  header('Content-Type: text/html; charset=UTF-8');
  {
  $password   = ($_POST['password']);
  $username     = ($_POST['username']);
  if (!$password || !$username )
  {
      echo "Vui lòng nhập đầy đủ thông tin.";
      exit;
  }

      $id;
  $sql ="select * from db_user where username ='$username' and password='$password'";
  $result=$connect -> query($sql);       
               
if($result->num_rows > 0){
  echo "đăng nhập thành công";
  while($row=mysqli_fetch_array($result))
  $id=$row[0]; 
  setcookie("id", $id,  time() + 3600);
  header("location:quanlysanpham.php"); 
  }
  else{
  echo "Tài khoản không tồn tại";
  }
}
?>

