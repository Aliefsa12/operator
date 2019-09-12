<?php

if (isset($_POST['sbm'])) {

    $bil  = $_POST['bilanan'];
    $pang = $_POST['pangkat'];
    
    foreach ($bil as $data => $x) {
        for ($i=$x; $i <= $pang ; $i++) { 
            echo "$i x ";
        }
    }
    // var_damp($nama);
    //foreach ($bil as $data => $x) {
    //    echo "Nama : " . $bil[$data] .
    //  " - kelas : " . $pang[$data] . "<hr>";
    //}
}

?>