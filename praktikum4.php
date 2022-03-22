<?php

class PersegiPanjang {
    private $panjang;
    private $lebar;

    function __construct($panjang, $lebar ){
    $this->panjang = $panjang;
    $this->lebar = $lebar;
    }

    function Luas(){
     $luas=$panjang*$lebar;  
    return $luas;
    }

     function Keliling(){
      $keliling = 2 * ($panjang + $lebar);
      return $keliling;
     }

}


?>