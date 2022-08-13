<?php
    function perkenalan($nama, $salam){
        echo $salam. ", ";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

        perkenalan("komang","Hi");

        echo "<hr>";

        $saya = "Medi";
        $ucapanSalam = "Selamat pagi";
        perkenalan($saya, $ucapanSalam);
    
?>