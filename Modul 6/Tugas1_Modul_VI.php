<?php
    
    $identitas=array("Ahmad"=>"17","Hafidz"=>"21","Faiz"=>"17","Huda"=>"18","Dodi"=>"20");

    echo "<h2>Fungsi Pengurutan</h2>";
    $sort = $identitas;
    sort($sort);
    echo "<b>Sort</b><br>";
    foreach($sort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }

    $asort = $identitas;
    asort($asort);
    echo "<br><b>Asort</b><br>";
    foreach($asort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }

    $ksort = $identitas;
    ksort($ksort);
    echo "<br><b>Ksort</b><br>";
    foreach($ksort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }

    $rsort = $identitas;
    rsort($rsort);
    echo "<br><b>Rsort</b><br>";
    foreach($rsort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }

    $arsort = $identitas;
    arsort($arsort);
    echo "<br><b>Arsort</b><br>";
    foreach($arsort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }

    $krsort = $identitas;
    krsort($krsort);
    echo "<br><b>Krsort</b><br>";
    foreach($krsort as $nama => $umur){
    echo $nama." => ".$umur."<br>";
    }
?>