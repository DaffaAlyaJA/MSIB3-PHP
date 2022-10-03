<?php 
require_once "Shape.php";

class Round extends Shape {
    public $jari;
    public function __construct($jari) {
        $this -> jari = $jari;
    }

    public function namaBidang() {
        $namaBidang = "Lingkaran";
        echo $namaBidang;
    } 

    public function luasBidang() {
        $luasLingkaran = 3.14 * $this -> jari * $this -> jari;
        echo $luasLingkaran;
    }

    public function kelilingBidang() {
        $kelilingLingkaran = 2 * 3.14 * $this -> jari;
        echo $kelilingLingkaran;
    }

    public function keterangan() {
        echo "
        Jari-Jari : ".$this->jari."<br>
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