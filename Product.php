<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Product.css">
    <title>Document</title>
</head>
<body>
<?php
$Smartphone = array(
    "Nổi bật nhất" =>array(
        "Sp1"=>array(
        "Img" => "data:image/jpeg;base64,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",
        "Title" => "Iphone",
        "Price" => "12344"
        ),
        "Sp2"=>array(
        "Img" => "data:image/jpeg;base64,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",
        "Title" => "Iphone",
        "Price" => "12344"
        )
        ),
   

    "Sản phẩm mới" => array(
        "Sp1"=>array(
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxAKT6557MFbyJQo3ooMupSuy5nrxK1BFrgQ&usqp=CAU",
            "Title" => "Iphone",
            "Price" => "12344"
        ),
        "Sp2"=>array(
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNO41A7B4T9sZOxLimA4QB6vup6XBlhH3t_g&usqp=CAU",
            "Title" => "Iphone",
            "Price" => "12344"
        ),
    ),
   
);

foreach ($Smartphone as $key => $value) {
    if ($key == "Nổi bật nhất") {
    ?>
        <div class="New"><?php echo $key ?></div>
        <?php foreach ($value as $key_pro => $value_pro) {
        ?> 
        <div class="Item">
            <div>
                <img class="image" src="<?php echo $value_pro["Img"] ?>" alt="">
                <p class="title"><?php echo $value_pro["Title"] ?></p>
                <p class="price"><?php echo $value_pro["Price"] ?></p>
            </div>
        </div>
        <?php
        }
    }
    elseif($key == "Sản phẩm mới"){
        ?>
        <div class="New"><?php echo $key ?></div>
        <?php foreach ($value as $key_pro => $value_pro) {
        ?> 
        <div class="Pro">
            <div>
                <img class="image" src="<?php echo $value_pro["Img"] ?>" alt="">
                <p class="title"><?php echo $value_pro["Title"] ?></p>
                <p class="price"><?php echo $value_pro["Price"] ?></p>
            </div>
        </div>
        <?php
        }
    }
    }
?>
</body>
</html>

