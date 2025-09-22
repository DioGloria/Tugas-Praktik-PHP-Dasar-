<?php
$mahasiswa = [
    ["nim"=>"2405551051","nama"=>"Andri Rahman","nilai"=>80],
    ["nim"=>"2405551052","nama"=>"Bagas Nugraha","nilai"=>60],
    ["nim"=>"2405551053","nama"=>"Cahya Putra","nilai"=>90],
    ["nim"=>"2405551054","nama"=>"Dwi Kurniawan","nilai"=>75],
    ["nim"=>"2405551055","nama"=>"Eric Wijaya","nilai"=>85],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 6 - Array + Kondisi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 6 - Array + Kondisi</h1>
  </header>

  <div class="container">
    <section>
      <h2>Hasil Nilai Mahasiswa</h2>
        <table>
        <tr><th>NIM</th><th>Nama</th><th>Nilai</th><th>Keterangan</th></tr>
            <?php foreach ($mahasiswa as $m) { 
            $status = ($m['nilai'] >= 70) ? "Lulus" : "Tidak Lulus"; ?>
            <tr>
                <td><?php echo $m['nim']; ?></td>
                <td><?php echo $m['nama']; ?></td>
                <td><?php echo $m['nilai']; ?></td>
                <td><?php echo $status; ?></td>
            </tr>
            <?php } ?>
        </table>
    </section>

    <div class="nav-buttons">
      <a href="menu.php" class="button home-button">Back</a>
    </div>
  </div>

  <footer>
    <p>© 2025 - Tugas PHP Array</p>
  </footer>
</body>
</html>
