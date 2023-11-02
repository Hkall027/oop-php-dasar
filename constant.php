<?php  

// define('NAMA', 'Haikal');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;


// class Coba {
//     const NAMA = 'HAIKAL';
// }

// echo Coba::NAMA;


// function coba() {
//     return __FUNCTION__;
// }

// echo Coba()

class Tes {
    public $kelas = __CLASS__;
}

$obj = new Tes;
echo $obj->kelas;





























?>