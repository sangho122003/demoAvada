<?php
    function showcart($cart){
        $tong=0;
        $ttien=0;
        $kq="";
        $i=0;
        foreach($cart as $sp){
            $ttien=$sp[3]*$sp[4];

            $tong+=$ttien;
            $kq.='
                <tr>
                    <td>'.($i+1).'</td>
                    <td><img src="'. $sp[1].'" width="100px"></td>
                    <td>'.$sp[2].'</td>
                    <td>'.$sp[3].'</td>
                    <td>'.$sp[4].'</td>
                    <td>'.number_format($ttien,0,',','.').'</td>
                    <td style="text-align: center;"> <a href="delcart.php?id='.$i.'">Xóa</a></td>
                </tr>
            
            '
            ;
            $i++;
        }
      
        $kq.='
        <tr>
        <td colspan="5">Tổng Đơn Hàng</td>
        <td style="background-color: #ccc;">'.number_format($tong,0,',','.').'</td>
        <td "><input style="color:"red" type="button" value="Thanh Toán"></td>
    </tr>
        ';
        return $kq;
    };
?>
