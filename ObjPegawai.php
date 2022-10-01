<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <?php 
    require "Pegawai.php"; 

    $data = [
        [
            "nip" => "001", 
            "nama" => "Diluc", 
            "jabatan" => "Manager",
            "agama" => "Kristen",
            "status" => "Belum Menikah",
        ],

        [
            "nip" => "002", 
            "nama" => "Jean", 
            "jabatan" => "Manager",
            "agama" => "Islam",
            "status" => "Menikah",
        ],

        [
            "nip" => "003", 
            "nama" => "Keqing", 
            "jabatan" => "Staff",
            "agama" => "Buddha",
            "status" => "Belum Menikah",
        ],

        [
            "nip" => "004", 
            "nama" => "Yelan", 
            "jabatan" => "Asmen",
            "agama" => "Islam",
            "status" => "Menikah",
        ],

        [
            "nip" => "005", 
            "nama" => "Uwudin", 
            "jabatan" => "Kabag",
            "agama" => "Islam",
            "status" => "Menikah",
        ],
    ]
    ?>

    <div class="container">
        <h1 class="text-center mt-4 mb-4 text-warning">Data Nilai</h1>
            </hr>
            <div class="row">
                <?php 
                    foreach ($data as $pg) {
                        $nip = $pg['nip'];
                        $nama = $pg['nama'];
                        $jabatan = $pg['jabatan'];
                        $agama = $pg['agama'];
                        $status = $pg['status'];

                        $pegawai = new Pegawai($nip, $nama, $jabatan, $agama, $status);
                        $pegawai->mencetak();
                    }
                    ?>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>