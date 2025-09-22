<?php
$mahasiswa = [
    ["nim"=>"2405551051","nama"=>"Andri Rahman","umur"=>20,"prodi"=>"TI"],
    ["nim"=>"2405551052","nama"=>"Bagas Nugraha","umur"=>21,"prodi"=>"TI"],
    ["nim"=>"2405551053","nama"=>"Cahya Putra","umur"=>19,"prodi"=>"SI"],
    ["nim"=>"2405551054","nama"=>"Dwi Kurniawan","umur"=>22,"prodi"=>"TI"],
    ["nim"=>"2405551055","nama"=>"Eric Wijaya","umur"=>20,"prodi"=>"SI"],
    ["nim"=>"2405551056","nama"=>"Fajar Tirto","umur"=>23,"prodi"=>"TI"],
    ["nim"=>"2405551057","nama"=>"Giri Santoso","umur"=>21,"prodi"=>"SI"],
    ["nim"=>"2405551058","nama"=>"Hendra Jaya","umur"=>19,"prodi"=>"TI"],
    ["nim"=>"2405551059","nama"=>"Indra Okta","umur"=>20,"prodi"=>"SI"],
    ["nim"=>"2405551060","nama"=>"Joko Susilo","umur"=>22,"prodi"=>"TI"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 5 - Multidimensi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 5 - Multidimensi</h1>
  </header>

  <div class="container">
    <section>
      <h2>Data Mahasiswa</h2>
        <table>
        <tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Prodi</th></tr>
            <?php foreach ($mahasiswa as $m) { ?>
            <tr>
                <td><?php echo $m['nim']; ?></td>
                <td><?php echo $m['nama']; ?></td>
                <td><?php echo $m['umur']; ?></td>
                <td><?php echo $m['prodi']; ?></td>
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