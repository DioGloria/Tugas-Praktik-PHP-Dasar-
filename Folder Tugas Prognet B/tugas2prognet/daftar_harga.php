<?php
$barang = [
    "Baju Kaos" => 115000,
    "Celana" => 80000,
    "Sepatu" => 150000,
    "Kemeja" => 145000,
    "Topi" => 35000,
    "Kacamata" => 50000
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 3 - Daftar Harga</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 3 - Daftar Harga</h1>
  </header>

  <div class="container">
    <section>
      <h2>Daftar Harga Barang</h2>
        <table>
        <tr><th>Nama Barang</th><th>Harga</th></tr>
            <?php foreach ($barang as $nama => $harga) { ?>
                <tr>
                    <td><?php echo $nama; ?></td>
                    <td>Rp <?php echo $harga; ?></td>
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