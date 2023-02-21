<?php

$Mang=array(
    "Name"=>"Phan Thanh Lực",
    "Hobbies"=>array(
        "Chơi bóng",
        "Xem phim",
        "Chơi game",
        array(
            "Game_1"=>"Đấu trường thú",
            "Game_2"=>"Cướp đường phố",
        )
        ),
    "Province"=>"Quảng Trị"
);

echo $Mang["Name"]."<br>";
echo $Mang["Hobbies"][3]["Game_1"]."<br>";
echo $Mang["Province"]."<br>";

echo "Phần khác";

$cars=array("Honda","Vinahouse","Taxi","Container","Been");
echo  "<br>";
$Length=count($cars);
for($i=0;$i<$Length;$i++){
    echo $cars[$i]."<br>";
}
$carss=array("Honda"=>"Lực","Vinahouse"=>"Biên","Taxi"=>"Thắng","Container"=>"Hữu","Been"=>"Luân");
krsort($carss);
foreach($carss as $key=>$value){
    echo "Key is ".$key." Value is ". $value."<br>";
    
}


$home=array(array("Xuân","Nam","20"),
    array("Lực","Nam","19"),
    array("Thắng","Nam","19"),
    array("Hữu","Nam","19"));

for($row=0;$row<4;$row++){
    echo "<br>";
    for($colum=0;$colum<3;$colum++){
        echo $home[$row][$colum]." ";
    }
}
echo "<br>"
?>
<?php 
$sanpham=array("id" =>5, "Ten"=>"Gạo", "Gia"=>12000, "SL"=>3);
reset($sanpham);
while (key($sanpham) != null) {
  echo key($sanpham) . " =  " . current($sanpham) . "<br/>";
  next($sanpham); 
}
?>

<?php $daySP=array("5"=>"Mắm","3"=>"Muối","1"=>"Gạo","4"=>"Dưa"); ?>
<table border=1 width=200>
<tr> <th>idSP</th> <th> TênSP </th> </tr>
<?php
  foreach ($daySP as $k => $v ) {
   echo " <tr> <td> $k </td> <td> $v </td> </tr>";
  }
?>
</table>






   
