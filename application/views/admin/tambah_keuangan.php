<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center"><b>Tambah Siswa</b></h3>
        <hr>
        <form action="<?php echo base_url('admin/aksi_tambah_keuangan') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label"><b>Nama Siswa</b></label>
                <input type="text" class="form-control" id="nama" name="nama">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label"><b>NISN</b></label>
                <input type="text" class="form-control" id="nisn" name="nisn">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label"><b>Gender</b></label>
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="2D">2D</option>
                </select>
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label"><b>Kelas</b></label>
                <input type="text" class="form-control" id="kelas" name="kelas">
                <hr>
            </div>
            
                <input type="file" name="foto" />
                <div class="d-grid gap-2 d-md-block">
                    <hr>
                    <br>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </div>
                </div>
        </form>
    </div>
</body>

</html>
