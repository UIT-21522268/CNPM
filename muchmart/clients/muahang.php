<?php
    session_start();
    ob_start();

?>
            <?php
            if(isset($_POST['submit'])){
                $id=$_POST['idprd'];
                $name=$_POST['nameprd'];
                $gia=$_POST['giaprd'];
               $sl=$_POST['sl'];
                if(!isset($_SESSION['arrthem'][$id])){
                    $_SESSION['arrthem'][$id]=array(
                        'name'=>$name,
                        'idp'=>$id,
                        'gia'=>$gia,
                        'sl'=>$sl
                    );
                }else{
                   $_SESSION['arrthem'][$id][(int)'sl']+=(int)$sl;
                    }
                    header('location:giohang.php');
                }
    
?>
<?php
    ob_end_flush();
?>