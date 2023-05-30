<?php
    session_start();
    ob_start();

?>
            <?php
             include"connection.php";
             header('Content-Type: text/html; charset=UTF-8');
           $sql='select * from db_order';
            $result = mysqli_query($connect, $sql);
            $idorder=$result->num_rows +1;
            $fullname=$_POST['ten'];
            $diachi=$_POST['diachi'];
            $sdt=$_POST['sdt'];
           
             $tongtien=0;
            foreach($_SESSION['arrthem']as $prd){
            $thanhtien=(int)$prd['gia']* (int)$prd['sl'];
             (int)$tongtien+=(int)$thanhtien;}
            $u=$_COOKIE["username"];
             $sql="select * from db_customer where username='$u'";
             $result = mysqli_query($connect, $sql);
             $idcus;
             while($row = $result->fetch_row())
             {
                $idcus=$row[0];
             }  
             
             
             $sql="insert into db_order(id,customerid,fullname,phone,money,address) values ($idorder,$idcus ,'$fullname','$sdt',$tongtien,'$diachi')";
             mysqli_query($connect, $sql);
             foreach($_SESSION['arrthem']as $prd){
                $thanhtien=(int)$prd['gia']* (int)$prd['sl'];
                $sql='select * from db_orderdetail';
                $result = mysqli_query($connect, $sql);
                $iddetail=$result->num_rows +1;
                $id=$prd['idp'];
                $sl=$prd['sl'];
                $sql="insert into db_orderdetail values ( $iddetail,$idorder,$id,$sl,$thanhtien)";
                mysqli_query($connect, $sql);
                
            }
            
?>
<script>
    alert ("Thanh toán thành công");
</script>

<?php
    header("location:trangchu.php?");
    ob_end_flush();
?>