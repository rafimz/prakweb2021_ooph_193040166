<?php

// define ('NAMA', 'Busyro');
// echo NAMA;

// echo"<br>";

// const UMUR = 21;
// echo UMUR;

// echo __LINE__; //menampilkan baris
// echo __FILE__; //menampilkan alamat file

// function coba() {
//     return __FUNCTION__;
//     echo coba();
// }

class coba {
    public $kelas = __CLASS__;
}
    $obj = new coba;
    echo $obj->kelas;
?>