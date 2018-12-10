<!-- tham so mac dinh -->
<?php 
$so1 = 12;
$so2 = 13;
  
// chỉ truyền 2 đối số vào
echo tinhtong($so1, $so2);
  
// $c có một giá trị mặc định
// hàm này tính tổng của 3 số
function tinhtong($a, $b, $c = false)
{
    $tong = $a + $b;
    if ($c != false){ // nếu $c được truyền vào (vì false là giá trị mặc định)
        $tong = $tong + $c; // thì thực hiện cộng thêm $c
    }
    return $tong;
}


?>