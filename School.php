<?php

$School=array(
    "Rom 206"=>array(
     "SV1"=> array(
            "Name"=>"Bien",
            "Tinh"=>"QT"
     ),
     "SV2"=> array(
        "Name"=>"Bie",
        "Tinh"=>"QT"
     ),
     "SV3"=> array(
        "Name"=>"Bi",
        "Tinh"=>"QT"
     ),
    ),
    "Rom 207"=>array(
        "SV1"=> array(
               "Name"=>"Trung",
               "Tinh"=>"QT"
        ),
        "SV2"=> array(
           "Name"=>"Trun",
           "Tinh"=>"QT"
        ),
        "SV3"=> array(
           "Name"=>"Tru",
           "Tinh"=>"QT"
        ),
        )
);

foreach($School as $key => $value) {
    ?>
    <h1><?php echo $key ?></h1>
    <ul>
        <?php
        foreach ($value as $key_son => $value_son) {
            ?> 
            <li>
                <p>Ma Phon :<?php echo $key_son ?></p>
                <p>Ten <?php echo $value_son["Name"] ?></p>
                <p>Tinh <?php echo $value_son["Tinh"] ?></p>
            </li>
            <?php
        }
        ?>
    </ul>
    <?php
}
?>