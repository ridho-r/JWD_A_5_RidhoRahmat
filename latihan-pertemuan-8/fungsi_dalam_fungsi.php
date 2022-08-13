<?php
    function hitungUmur($thn_lahir,$thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Selamat Datang"){
        echo $salam. ", ";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Saya berusia ".hitungUmur(1992,2019)."tahun <br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    perkenalan("komang");
?>