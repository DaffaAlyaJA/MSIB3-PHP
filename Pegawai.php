<?php 
class Pegawai {
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    const PT = "Teyvat Adventure Guild";
    static $no = 1;

    public function __construct($nip, $nama, $jabatan, $agama, $status) {
        $this -> nip = $nip;
        $this -> nama = $nama;
        $this -> jabatan = $jabatan;
        $this -> agama = $agama;
        $this -> status = $status;
    }
    
    public function setGapok() {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asmen':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
        }
            return $gapok;
    }

    public function setTunjab() {
        $tunjab = (20 * $this -> setGapok()) / 100;
        return $tunjab;
    }

    public function setTunkel() {
        $tunkel = ($this -> status == "Menikah") ? (10 * $this -> setGapok()) / 100 : 0;
        return $tunkel;
    }

    public function setGator() {
        $gator = $this -> setGapok() + $this -> setTunjab() + $this -> setTunkel();
        return $gator;
    }

    public function setZakat() {
        $zakat = ($this -> agama == "Islam" && $this -> setGator() >= 6000000) ? (2.5 * $this -> setGapok()) / 100 : 0;
        return $zakat;
    }

    public function setGaber() {
        $gaber = $this -> setGator() - $this -> setZakat();
        return $gaber;
    }

    public function mencetak() {

    //     echo 'NIP :' . $this -> nip . '</br>';
    //     echo 'Nama :' . $this -> nama . '</br>';
    //     echo 'Agama :' . $this -> agama . '</br>';
    //     echo 'Status :' . $this -> status . '</br>';
    //     echo 'GajiPokok : Rp.' . number_format($this -> setGator()), 2, ',','.' . '</br>';
    //     echo 'Tunjangan Jabatan : Rp.' . number_format($this -> setTunjab()), 2, ',','.' . '</br>';
    //     echo 'Tunjangan Keluarga : Rp.' . number_format($this -> setTunkel()), 2, ',','.' . '</br>';
    //     echo 'Zakat : Rp.' . number_format($this -> setZakat()), 2, ',','.' . '</br>';
    //     echo 'Gaji Kotor : Rp.' . number_format($this -> setGator()), 2, ',','.' . '</br>';
    //     echo 'Gaji Bersih : Rp.' . number_format($this -> mencetak()), 2, ',','.' . '</br>';

    //     echo Pegawai::PT . '</br>';
    //     echo 'No.' . self::$jumlah . '</br>';
    // }

    echo '
    <div class="col-12">
        <div class="card mt-3 bg-info">
            <div class="card-header text-warning">
                <h4>'.Pegawai::PT.'</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-primary">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Keluarga</th>
                            <th>Gaji Kotor</th>
                            <th>Zakat</th>
                            <th>Gaji Bersih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>'.self::$no.'</th>
                            <th>'.$this -> nip.'</th>
                            <th>'.$this -> nama.'</th>
                            <th>'.$this -> jabatan.'</th>
                            <th>'.$this -> agama.'</th>
                            <th>'.$this -> status.'</th>
                            <th>Rp.'.number_format($this -> setGapok()).'</th>
                            <th>Rp.'.number_format($this -> setTunjab()).'</th>
                            <th>Rp.'.number_format($this -> setTunkel()).'</th>
                            <th>Rp.'.number_format($this -> setGator()).'</th>
                            <th>Rp.'.number_format($this -> setZakat()).'</th>
                            <th>Rp.'.number_format($this -> setGaber()).'</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>';
    }
}
?>