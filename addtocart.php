<?php
    session_start();
    if((isset($_POST['dathang']))&&($_POST['dathang'])){
        // ánh xạ id
        $img=$_POST['img'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $id=$_POST['id'];
        $soluong=1;
        //Tạo mảng con
        $sp=array($id,$img,$tensp,$gia,$soluong,$soluong);
        //add to giỏ hàng
        // $_SESSION['cart'][]=$sp;
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$sp);
        header('location:viewcart.php');
    };
    ?>