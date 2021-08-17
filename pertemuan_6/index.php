<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Pertemuan 6</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h4>Form Sederhana</h4>
            </div>
            <div class="card-body">
                <form action="index.php" method="POST">
                <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value ="Laki - Laki">Laki - laki</option>
                                    <option value ="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Tempat Lahir </label>
                                <input type="text" class="form-control" name="tempat">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label> Tanggal Lahir </label>
                                <input type="date" class="form-control" name="tgl">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tgl'];
        $umur = date("Y") - date("Y", strtotime($tanggal))
    ?>

        <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Tampil Data</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td><?= $nama ?></td>
                            </tr>
                            <tr>
                                <td>Jenis_kelamin</td>
                                <td><?= $jenis_kelamin ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= $alamat ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><?= date("d-m-y", strtotime($tanggal)) ?></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td><?= $umur ?> Tahun</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
        }
    ?>

</body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>