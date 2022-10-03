<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abstract Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <h2 align="center">Tabel Abstract Class Bentuk 2D</h2>
    <hr/>
    <?php 
    require_once "Round.php";
    require_once "Triangle.php";
    require_once "Square.php";

    $thead = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];
    ?>
    <div class="container-fluid">
        <table class="table table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <?php 
                    foreach ($thead as $judul) { ?>
                        <th><?= $judul ?></th>    
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                $persegiPanjang = new Square(10, 5);
                $lingkaran = new Round(14);
                $segitiga = new Triangle(12, 24, 6);

                $bentuk = [$persegiPanjang, $lingkaran, $segitiga];
                $no = 1;

                foreach ($bentuk as $btk) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $btk->namaBidang() ?></td>
                        <td><?= $btk->keterangan()?></td>
                        <td><?= $btk->luasBidang()?></td>
                        <td><?= $btk->kelilingBidang()?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

