<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        body{
          background-image: url('https://arifkeisuke.com/wp-content/uploads/2017/12/anime-anime-art-Shigatsu-wa-Kimi-no-Uso-arima-kousei-1894839.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
        <style>
        div{
          background-image: url('https://i.ytimg.com/vi/CmRyGcR8fc4/maxresdefault.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center"><b>Ubah Pembayaran</b></h3>
        <hr>
        
        <?php foreach ($pembayaran as $row) : ?>
        <form action="<?php echo base_url('keuangan/aksi_ubah_pembayaran') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
        <input name="id" type="hidden" value="<?php echo $row->id ?>">
            <div class="mb-3 col-6">
                <label for="id_siswa" class="form-label"><b>ID Siswa</b></label>
                <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo$row->id_siswa ?>">
                <hr>
            </div>
            <div class="mb-3 col-6">
                <label for="jenis_pembayaran" class="form-label"><b>Jenis Pembayaran</b></label>
                <select name="jenis_pembayaran" class="form-select" value="<?php echo $row->jenis_pembayaran ?>">
                    <option selected>Pilih Jenis Pembayaran</option>
            
            </option>
                    <option value="Pembayaran_SPP">Pembayaran SPP</option>
                    <option value="Pembayaran_Uang_Gedung">Pembayaran Uang Gedung</option>
                    <option value="Pembayaran_Seragam">Pembayaran Seragam</option>
                </select>
                <hr>
            </div>
            
                <button class="btn btn-lg btn-primary" type="submit">Ubah</button>           
                        </form>
                        <?php endforeach; ?>
</body>

</html>