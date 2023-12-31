<?php 
include 'class/siswa.php';
$siswa = new Siswa();
$dataSiswa = $siswa->tampilDataSiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<body>
    <div class="barang">
      <h1>Data Siswa</h1>
      <a href="tambahsiswa.php">Tambah</a>
      <table class="table table-dark table-striped">
 
        <tr>
          <th>No.</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Foto</th>
          <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($dataSiswa as $data) : ?>
        <tr>
          <td><?= $i; ?></td> 
          <td><?= $data["nama_siswa"]; ?></td>
          <td><?= $data["kelas"]; ?></td>
          <td><img src="foto/<?= $data["foto"]; ?>" alt="" width="90"></td>
          <td>
            <a href="editsiswa.php?id=<?= $data["id_siswa"]; ?>" class="edit">Edit</a>
            <a href="hapussiswa.php?id=<?= $data["id_siswa"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
</body>
</html>

    