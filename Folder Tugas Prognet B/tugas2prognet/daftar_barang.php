<?php
$barang = ["Baju Kaos", "Celana", "Sepatu", "Kemeja", "Topi", "Kacamata"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 1 - Daftar Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 1 - Daftar Barang</h1>
  </header>

  <div class="container">
    <section>
      <h2>Daftar Barang</h2>
        <ul>
            <?php foreach ($barang as $b) { ?>
                <li><?php echo $b; ?></li>
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