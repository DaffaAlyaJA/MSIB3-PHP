<?php 
require_once "Shape.php";

class Square extends Shape {

    //Persegi Panjang
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        $namaBidang = "Persegi Panjang";
        echo $namaBidang;
    } 

    public function luasBidang() {
        $luasBidang = $this -> panjang * $this -> lebar;
        echo $luasBidang;
    }

    public function kelilingBidang() {
        $kelilingBidang = 2 * ($this -> panjang + $this -> lebar);
        echo $kelilingBidang;
    }

    public function keterangan() {
        echo "
        Panjang : ".$this->panjang."<br>
        Lebar : ".$this->lebar."
        ";
    }

    public function mencetak() {
        echo'
        <tr>
            <td>'.$this->namaBidang().'</td>
            <td>'.$this->luasBidang().'</td>
            <td>'.$this->kelilingBidang().'</td>
        </tr>
        ';
    }
}

?>