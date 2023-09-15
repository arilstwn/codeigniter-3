<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <style>
body {
  background-image: url('https://embed.pixiv.net/artwork.php?illust_id=103921801');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body >
   

<div class="row ">
            <div class="col-12 card p-5">
                <div class="card-body min-vh-100  align-items-center">
                    <div class="card w-100 m-auto p-2">
                        <table class="table  table-striped">
                            <center><thead>
                                <tr>
                                    <th scope="col">No </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">NISN </th>
                                    <th scope="col"> Gender </th>
                                    <th scope="col"> Kelas </th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead></center>
                            <tbody>
                                <?php
                 $no= 0;foreach ($siswa as $row  ) :$no++                          
                    ?>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo$no ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <?php echo $row->nama_siswa ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?php echo tampil_full_kelas_byid($row->id_kelas); ?>
                                 </td>
                                 <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <a href="#"
                                    class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-sky-700">Ubah</a>
                                    <a href="#"
                                    class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">Hapus</a>
                                  
                                  
                                     </a>
                                            
                                          </td>
                                          
                                       </tr><?php endforeach ?>
                                       
                                    </tbody>
                                 </table>
                                 
                                 <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-primary">Tambah</a>
                    </div>
                    </form>

                   

                </div>
            </div>
<script>
   function hapus(id) {
      var yes = confirm('yakin di hapus');
      if (yes == true) {
         window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
      }
   }
</script>
</body>
</html>