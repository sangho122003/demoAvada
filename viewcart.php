<?php
session_start();
include"myfunc.php";
if(isset($_SESSION['cart'])){
    // echo var_dump($_SESSION['cart']);
    // showcart($_SESSION['cart']);


// echo'Đặt hàng Tiếp Tục. <a href="test.html">click</a> vào đây';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="hình/logo.png">
    <title>Shop | Avada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        a {
    color: rgb(0, 0, 0); /* Màu văn bản của hyperlink */
    text-decoration: none; /* Loại bỏ gạch chân */
}
        html,body{
            margin: 0;
        }
        #dau{
        display: flex;
        position: fixed;
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        }
        .dau1{
            flex: 1;
        }
        .dau2{
            flex: 3;
            border: 1px solid black;
            box-shadow: 0 0 10px 5px lightgray;
        }
        .dau-b{
            height: 100%;
            flex: 1;
            display: flex; 
            justify-content: center;
            align-items:center ;
        }
        #cuoi{
            width: 100%;
        }
        .custom-list {
list-style-type: none; /* Ẩn kiểu danh sách mặc định */
padding: 0;
margin: 0;
}

.custom-list-item {
padding: 10px;
display: block; /* Hiển thị mỗi mục danh sách dưới dạng flexbox */
align-items: center; /* Căn các phần tử con theo trục dọc */
border-radius: 20px;
}

.custom-list-item i {
margin-right: 10px; /* Khoảng cách giữa biểu tượng và nhãn */
}
.dau-b:hover{ background-color: rgb(119, 118, 118);}
.custom-list-item:hover{
background-color: lightgray;
padding: 5px ;
}
.container {
width: 100%;
height: auto;
background-color: lightgray;
border-radius: 2px;
}

.container img {
max-width: 100%; /* Đảm bảo ảnh không vượt quá chiều rộng của thẻ lớn */
height: auto; /* Đảm bảo chiều cao tự động điều chỉnh cho phù hợp */
display: block; /* Ảnh sẽ hiển thị dưới dạng block element để không bị lệch hàng */
margin: 0 auto; /* Căn chỉnh ảnh vào giữa */
}
.small{
display: flex;
flex: 1;
align-items: center;
justify-content: center;
}
.small img, small label{
margin: 1px;
}
.small i, small label{
margin: 1px;
}
/* General styles */
/* General styles */
.dau2 {
border-radius: 50px;
width: 100%;
display: flex;
flex-direction: column;
}

/* Title shop styles */
.titleshop {
    width: 100%;
display: flex;
justify-content: space-between;
align-items: center;
padding: 10px;
color: white;
background-color: black; /* Change to desired background color */
border-top-left-radius: 50px;
border-top-right-radius: 50px;
}

.conten-title-shop {
flex: 1;
text-align: center;
color: white;
}

/* Product box styles */
.row-box {
    width: 100%;
display: flex; 
align-items: center;
justify-content: center;
}

.box {
padding: 20px;
background-color: #f9f9f9; /* Change to desired background color */
border-radius: 10px;
border: 1px solid black ;
text-align: center;
}

.box img {
width: 100%;
height: auto;
border-radius: 10px;
margin-top: 25px;
object-fit: cover;
}

.box label {
font-weight: bold;
margin-top: 10px;
}

.box p {
margin-top: 5px;
}

.btnmua {
background-color: white; /* Change to desired button color */
color: black;
border: none;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius: 5px;
cursor: pointer;
border: 1px solid black;
}

.btnmua:hover {
background-color: black; /* Khi di chuột vào, nền sẽ chuyển sang màu đen */
background-image: linear-gradient(to bottom, transparent, #45a049); /* Hiệu ứng gradient từ trên xuống */
color: white; /* Màu chữ khi di chuột vào */
}

/* Icons */
.fa {
font-size: 24px;
margin-left: 5px;
}
.box:hover {
transform: scale(1.1);
background-color: lightgray;
}
::placeholder {
text-align: center; /* Căn giữa placeholder */
}
/* Selector cho thẻ <select> */
#products {
justify-content: center;
width: 200px; /* Chiều rộng */
padding: 10px; /* Khoảng cách bên trong */
border: 1px solid #ccc; /* Viền */
border-radius: 5px; /* Bo tròn viền */
font-size: 16px; /* Kích thước chữ */
}

/* Selector cho tùy chọn <option> */
#products option {
background-color: #f0f0f0; /* Màu nền */
color: #333; /* Màu chữ */
padding: 5px 10px; /* Khoảng cách bên trong */
font-size: 14px; /* Kích thước chữ */
}

/* Selector cho tùy chọn được chọn <option> */
#products option:checked {
background-color: #ccc; /* Màu nền */
color: #fff; /* Màu chữ */
}
       /* CSS cho table */
       .my-table {
    width: 100%;
    border-collapse: collapse;
}

/* CSS cho các dòng (tr) */
.my-table tr {
    background-color: #f2f2f2; /* Màu nền của các dòng */
}

/* CSS cho các ô (td) */
.my-table td {
    border: 1px solid #dddddd; /* Đường viền cho các ô */
    padding: 8px; /* Khoảng cách bên trong các ô */
}

/* CSS cho ô ở hàng đầu tiên (header) */
.my-table tr:first-child {
    background-color: #dddddd; /* Màu nền của hàng đầu tiên */
    font-weight: bold; /* Đậm chữ cho hàng đầu tiên */
}
    </style>

</head>
<body>
    <div id="dau">
        <div id="NameAvada" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
        AVADA-Shop
        </div>   
        <div id="find" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
            <input  id="find" style="width: 100%; border-radius: 25px;" type="text" name="" id=""  placeholder="search" ></div>
        <div id="caidat" class="dau1" style="display: flex; justify-items:center; align-items: center; "> 
            <div class="dau-b"><i class="fa fa-th" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-commenting" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-bell" aria-hidden="true"></i></div> 
            <div class="dau-b" id="signoutbutton"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
        </div>
    </div>
    <br>
    <div id="cuoi" style="display: flex ; width: 100%; margin-top: 50px;">
        <div class="dau1">
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><a href=""><i class="fa fa-user" aria-hidden="true"></i> <label id="greet" ></label></a></li>
                <li class="custom-list-item"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a></li>
                <li class="custom-list-item"><a href="friend.html"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Bạn Bè</a></li>
                <li class="custom-list-item"><a href="Shopping.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Avada Shop</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> News feed</a></li>
                <li class="custom-list-item"><a href="Booking.html"><i class="fa fa-ticket" aria-hidden="true"></i> Booking</a></li>
                <li class="custom-list-item">Video Shot</li>
                <li class="custom-list-item"><a href="Music.html"><i class="fa fa-music" aria-hidden="true"></i> Avada Music</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a></li>
            </ul>
        </div>
        <div class="dau2" style="border-radius: 50px; width: 100%;flex-direction: column">
            <div class="titleshop">
                <div class="conten-title-shop">
                    <label for="">Shopping-Giỏ Hàng</label>
                </div>
                <div class="conten-title-shop">
                    <input style="width: 100%; border-radius: 25px;"  placeholder="Tìm Kiếm Sản Phẩm" name="" id="">
                </div>
                <div class="conten-title-shop">
                    <a href="shopping.html"><i style="color: white;" class="fa fa-shopping-bag" aria-hidden="true"></i></i></a>
                   
                </div>
            </div>
            <div class="row-box">
                <div class="boxcenter">
                <H2>Đơn Hàng của bạn</H2>
                 <table class="my-table " >
            <tr>
                <td>STT</td>
                <td>Hình</td>
                <td>Tên Sản Phẩm</td>
                <td>Đơn Giá</td>
                <td>Số Lượng</td>
                <td>Thành Tiền</td>
                <td>Xóa</td>
            </tr>
            <?php
            echo showcart($_SESSION['cart']);

            ?>
        </table>
        <P><a href="delcart.php">xóa toàn bộ đơn hàng</a></P>
        <P><a href="shopping.html">Tiếp Tục Đặt hàng</a></P>
    
    </div>
               
        </div>
            
    </div>  
    </div>
    <script>
        let UserInfo = JSON.parse(sessionStorage.getItem("user-info"))

        let GreetHead = document.getElementById('greet');
        let SignoutBtn = document.getElementById('signoutbutton');
       
        let Signout = ()=>{
            sessionStorage.removeItem("user-creds");
            sessionStorage.removeItem("user-info");
            window.location.href ='index.html'
        }
        let CheckCred = ()=>{
            if(!sessionStorage.getItem("user-creds"))
                window.location.href='index.html'
            else{
        
                GreetHead.innerText =  `${UserInfo.firstname+" "+ UserInfo.lastname}`;
            }
        }
        window.addEventListener('load',CheckCred);
        SignoutBtn.addEventListener('click',Signout)

     
        </script>
</body>
</html>
<?php
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="hình/logo.png">
    <title>Shop | Avada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        a {
    color: rgb(0, 0, 0); /* Màu văn bản của hyperlink */
    text-decoration: none; /* Loại bỏ gạch chân */
}
        html,body{
            margin: 0;
        }
        #dau{
        display: flex;
        position: fixed;
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        }
        .dau1{
            flex: 1;
        }
        .dau2{
            flex: 3;
            border: 1px solid black;
            box-shadow: 0 0 10px 5px lightgray;
        }
        .dau-b{
            height: 100%;
            flex: 1;
            display: flex; 
            justify-content: center;
            align-items:center ;
        }
        #cuoi{
            width: 100%;
        }
        .custom-list {
list-style-type: none; /* Ẩn kiểu danh sách mặc định */
padding: 0;
margin: 0;
}

.custom-list-item {
padding: 10px;
display: block; /* Hiển thị mỗi mục danh sách dưới dạng flexbox */
align-items: center; /* Căn các phần tử con theo trục dọc */
border-radius: 20px;
}

.custom-list-item i {
margin-right: 10px; /* Khoảng cách giữa biểu tượng và nhãn */
}
.dau-b:hover{ background-color: rgb(119, 118, 118);}
.custom-list-item:hover{
background-color: lightgray;
padding: 5px ;
}
.container {
width: 100%;
height: auto;
background-color: lightgray;
border-radius: 2px;
}

.container img {
max-width: 100%; /* Đảm bảo ảnh không vượt quá chiều rộng của thẻ lớn */
height: auto; /* Đảm bảo chiều cao tự động điều chỉnh cho phù hợp */
display: block; /* Ảnh sẽ hiển thị dưới dạng block element để không bị lệch hàng */
margin: 0 auto; /* Căn chỉnh ảnh vào giữa */
}
.small{
display: flex;
flex: 1;
align-items: center;
justify-content: center;
}
.small img, small label{
margin: 1px;
}
.small i, small label{
margin: 1px;
}
/* General styles */
/* General styles */
.dau2 {
border-radius: 50px;
width: 100%;
display: flex;
flex-direction: column;
}

/* Title shop styles */
.titleshop {
display: flex;
justify-content: space-between;
align-items: center;
padding: 10px;
color: white;
background-color: black; /* Change to desired background color */
border-top-left-radius: 50px;
border-top-right-radius: 50px;
}

.conten-title-shop {
flex: 1;
text-align: center;
color: white;
}

/* Product box styles */
.row-box {
display: flex; 
align-items: center;
justify-content: center;
}

.box {
padding: 20px;
background-color: #f9f9f9; /* Change to desired background color */
border-radius: 10px;
border: 1px solid black ;
text-align: center;
}

.box img {
width: 100%;
height: auto;
border-radius: 10px;
margin-top: 25px;
object-fit: cover;
}

.box label {
font-weight: bold;
margin-top: 10px;
}

.box p {
margin-top: 5px;
}

.btnmua {
background-color: white; /* Change to desired button color */
color: black;
border: none;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius: 5px;
cursor: pointer;
border: 1px solid black;
}

.btnmua:hover {
background-color: black; /* Khi di chuột vào, nền sẽ chuyển sang màu đen */
background-image: linear-gradient(to bottom, transparent, #45a049); /* Hiệu ứng gradient từ trên xuống */
color: white; /* Màu chữ khi di chuột vào */
}

/* Icons */
.fa {
font-size: 24px;
margin-left: 5px;
}
.box:hover {
transform: scale(1.1);
background-color: lightgray;
}
::placeholder {
text-align: center; /* Căn giữa placeholder */
}
/* Selector cho thẻ <select> */
#products {
justify-content: center;
width: 200px; /* Chiều rộng */
padding: 10px; /* Khoảng cách bên trong */
border: 1px solid #ccc; /* Viền */
border-radius: 5px; /* Bo tròn viền */
font-size: 16px; /* Kích thước chữ */
}

/* Selector cho tùy chọn <option> */
#products option {
background-color: #f0f0f0; /* Màu nền */
color: #333; /* Màu chữ */
padding: 5px 10px; /* Khoảng cách bên trong */
font-size: 14px; /* Kích thước chữ */
}

/* Selector cho tùy chọn được chọn <option> */
#products option:checked {
background-color: #ccc; /* Màu nền */
color: #fff; /* Màu chữ */
}
       /* CSS cho table */
    </style>

</head>
<body>
    <div id="dau">
        <div id="NameAvada" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
        AVADA-Shop
        </div>   
        <div id="find" class="dau1" style="display: flex; justify-content: center;align-items:center ;">
            <input  id="find" style="width: 100%; border-radius: 25px;" type="text" name="" id=""  placeholder="search" ></div>
        <div id="caidat" class="dau1" style="display: flex; justify-items:center; align-items: center; "> 
            <div class="dau-b"><i class="fa fa-th" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-commenting" aria-hidden="true"></i></div>
            <div class="dau-b"><i class="fa fa-bell" aria-hidden="true"></i></div> 
            <div class="dau-b" id="signoutbutton"><i style="color: white; class="fa fa-sign-out" aria-hidden="true"></i></div>
        </div>
    </div>
    <br>
    <div id="cuoi" style="display: flex ; width: 100%; margin-top: 50px;">
        <div class="dau1">
            <ul class="custom-list" style="position: fixed;">
                <li class="custom-list-item"><a href=""><i class="fa fa-user" aria-hidden="true"></i> <label id="greet" ></label></a></li>
                <li class="custom-list-item"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ</a></li>
                <li class="custom-list-item"><a href="friend.html"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Bạn Bè</a></li>
                <li class="custom-list-item"><a href="Shopping.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Avada Shop</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> News feed</a></li>
                <li class="custom-list-item"><a href="Booking.html"><i class="fa fa-ticket" aria-hidden="true"></i> Booking</a></li>
                <li class="custom-list-item">Video Shot</li>
                <li class="custom-list-item"><a href="Music.html"><i class="fa fa-music" aria-hidden="true"></i> Avada Music</a></li>
                <li class="custom-list-item"><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a></li>
            </ul>
        </div>
        <div class="dau2" style="border-radius: 50px; width: 100%;flex-direction: column">
            <div class="titleshop">
                <div class="conten-title-shop">
                    <label for="">Shopping-Giỏ Hàng</label>
                </div>
                <div class="conten-title-shop">
                    <input style="width: 100%; border-radius: 25px;"  placeholder="Tìm Kiếm Sản Phẩm" name="" id="">
                </div>
                <div class="conten-title-shop">
                    <a href="shopping.html"><i class="fa fa-shopping-bag" style="color:white" aria-hidden="true"></i></i></a>
                   
                </div>
            </div>
            <div class="row-box">
                <div class="boxcenter">
                    <H2>Đơn Hàng của bạn:</H2>
                    <img src="hình/cart-empty.png" alt="">
                    <P><a href="shopping.html">Tiếp Tục Đặt hàng</a></P>
                </div>
               
        </div>
            
    </div>  
    </div>
    <script>
        let UserInfo = JSON.parse(sessionStorage.getItem("user-info"))

        let GreetHead = document.getElementById('greet');
        let SignoutBtn = document.getElementById('signoutbutton');
       
        let Signout = ()=>{
            sessionStorage.removeItem("user-creds");
            sessionStorage.removeItem("user-info");
            window.location.href ='index.html'
        }
        let CheckCred = ()=>{
            if(!sessionStorage.getItem("user-creds"))
                window.location.href='index.html'
            else{
        
                GreetHead.innerText =  `${UserInfo.firstname+" "+ UserInfo.lastname}`;
            }
        }
        window.addEventListener('load',CheckCred);
        SignoutBtn.addEventListener('click',Signout)

     
        </script>
</body>
</html>
    
    ';



<?php
}
?>