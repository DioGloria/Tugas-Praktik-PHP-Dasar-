<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tugas 4 - Bilangan Genap</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tugas 4 - Bilangan Genap</h1>
  </header>

  <div class="container">
    <section>
      <h2>Bilangan Genap</h2>
        <form method="post">
        Nilai Bawah (Minimum): <input type="number" name="n1" required>
        Nilai Atas (Maksimum): <input type="number" name="n2" required>
        <input type="submit" value="Tampilkan">
        </form>
    <div>
        <?php
        if (isset($_POST['n1']) && isset($_POST['n2'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            echo "<div class=\"output\">";
            echo "<h3>Bilangan Genap antara $n1 dan $n2:</h3>";
            for ($i = $n1; $i <= $n2; $i++) {
                if ($i % 2 == 0) {
                    echo $i . "<p>";
                }
            }
        }
        ?>
    </div>
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