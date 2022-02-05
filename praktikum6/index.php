<?php
    include "konekin.php";
    $kelas = ['SE03A', 'SE03B'];
    $sql = "SELECT * FROM data";
    $data = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- DISINI MENGGUNAKAN BOOTSTRAP DAN AWESOME FONT UNTUK MEMPERCANTIK TAMPILAN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CRUD PHP</title>
  </head>
  <body>
   

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <form action="simpan.php" method="post">
                    <!-- FORM INPUT TEXT NAMA -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>

                    <!-- FORM UNTUK MENAMPILKAN KELAS -->
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <!-- DISINI MENGGUNAKAN FOREACH UNTUK MELAKUKAN PERULANGAN MENAMPILKAN ITEM YANG ADA DI DALAM LIST -->
                            <option value="">Pilih</option>
                            <?php foreach($kelas as $kl) : ?>
                            <option value="<?= $kl; ?>"> <?= $kl; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- FORM INPUT TEXT ALAMAT -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                    </div>
                    <!-- FORM INPUT FOTO -->
                    <div class="form-group">
                        <label>Foto :</label>
                        <!-- INPUT GAMBAR DAN MENAMPILKAN PREVIEW GAMBAR YANG DIKIRIM -->
				        <input type="file" name="foto" required="required" onchange="readURL(this);">
                        <img id="blah" src="#" alt="your image">
				        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                    </div>
                    

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>
                    
                </h4>
                <!-- MENGGUNAKAN COUNT(*) UNTUK MENGHITUNG TOTAL BARIS-->
                <!-- MENGGUNAKAN FUNGSI mysqli_num_rows() UNTUK MENGHITUNG ROW -->
                <?php 
                    $sql2 = "SELECT count(*) FROM data";
                    $hasil = $conn->query($sql);
                    $show = mysqli_num_rows($hasil);
                ?>
                <h5>Jumlah Data: <?= $show ?></h5>
                

                <!-- MANAMPILKAN TIAP DATA -->
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- PHP DATA NAMA -->
                                <h4><?= $dt['nama']; ?></h4>
                            </div>
                            <div class="col-md-6">
                                <!-- BUTTON PHP HAPUS -->
                                <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type='button' class="close">
                                    <span class="fa fa-trash"></span>
                                </a>
                                <!-- BUTTON PHP EDIT -->
                                <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type='button' class="close">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <!-- PHP DATA KELAS -->
                                <p class="text-right"><?= $dt['kelas']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- PHP DATA ALAMAT -->
                                <p><?= $dt['alamat']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="gambar/<?php echo $dt['foto'] ?>" width="150" height="150">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- JAVASCRIPT UNTUK CODE PREVIEW GAMBAR YANG AKAN DI UPLOAD -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
  </body>
</html>