<?php
$mahasiswa = [
    "2405551051" => "Andri Rahman",
    "2405551052" => "Bagas Nugraha",
    "2405551053" => "Cahya Putra",
    "2405551054" => "Dwi Kurniawan",
    "2405551055" => "Eric Wijaya"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 2 - Daftar Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 2 - Daftar Mahasiswa</h1>
  </header>

  <div class="container">
    <section>
      <h2>Daftar Mahasiswa</h2>
        <ul>
            <?php foreach ($mahasiswa as $nim => $nama) { ?>
                <li><?php echo "NIM: $nim - Nama: $nama"; ?></li>
            <?php } ?>
        </ul>
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