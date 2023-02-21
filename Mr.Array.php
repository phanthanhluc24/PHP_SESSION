<?php
    $contact=array(
     "Student_1"=>array(
            "name"=>"Phan Thanh Lực ",
            "Gioi_Tinh"=>"nam"
        ),
    "Student_2"=>  array(
            "name"=>"Nguyễn Văn Biên ",
            "Gioi_Tinh"=> "nam"
        ),
    "Student_3"=> array(
            "name"=> "Phan Dức Thơ ",
            "Gioi_Tinh"=>"nam"
        )
    );
   foreach($contact as $key=>$value ){
        echo "Key is $key <br>";
        echo "--The name is ".$value['name']."<br> ";
        echo "--The sex is ".$value['Gioi_Tinh']."<br>";
   }