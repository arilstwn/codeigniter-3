<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include( 'connect.php' ) ?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>記入してください、兄弟</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin = 'anonymous'>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js'
integrity = 'sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin = 'anonymous'>
</script>

</head>
<body class = 'min-vh-100 d-flex align-items-center'>
<div class = 'card w-100 m-auto p-3'>
<h3 class = 'text-center' >記入してください、お姉さん</h3>
<!-- <button <a herf="create.php" >nisa</button> -->
<a href="pdi.php">add</a>
<table class = 'table  table-striped'>
<thead>
<tr>

<th scope = 'col'>Unsername</th>
<th scope = 'col'>Nama waifu</th>   
<th scope = 'col'>Nama anak</th>
<th scope = 'col'>Nomor hp</th>
<th scope = 'col'>NIS</th>

</tr>
</thead>
<tbody classs = 'table-grup-divider'>
<?php
$sql = 'select * from pdi ';
$result = mysqli_query( $conn, $sql );
if ( $result ) {
    while( $data = mysqli_fetch_assoc( $result ) ) {
       $id = $data['id'];
       $Unsername = $data['Unsername'];
       $Nama_waifu = $data['Nama_waifu'];
       $Nama_anak = $data['Nama_anak'];
       $Nomer_hp = $data['Nomer_hp'];
       $NIS = $data['NIS'];
        echo '
            <tr>
            <td>'.$Unsername.'</td>
            <td>'.$Nama_waifu.'</td>
            <td>'.$Nama_anak.'</td>
            <td>'.$Nomer_hp.'</td>
            <td>'.$NIS.'</td>
            <td class="text-center">
            <a href="update.php?id='.$id.'" class="btn btn-sm btn-primary">Update</a>
            <button onclick="hapus('.$id.')" class="btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>
            ';
    }
}
?>
<script>
function hapus( id ) {
    var yes = confirm( 'Yakin Di Hapus?' );
    if ( yes === true ) {
        window.location.href = 'delete.php?id=' + id;
    }
}
</script>
</body>
</html
</body>
</html>