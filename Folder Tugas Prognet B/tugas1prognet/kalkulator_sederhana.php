<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Kalkulator Sederhana</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      background: #f4f6fb; 
      color: #222; 
      margin: 0; 
      padding: 0; 
    }
    .card { 
      max-width: 500px; 
      margin: 80px auto; 
      background: #fff; 
      border-radius: 10px; 
      padding: 20px; 
      box-shadow: 0 6px 20px rgba(0,0,0,0.1); 
    }
    h1 { 
      font-size: 20px; 
      margin: 0 0 15px; 
      text-align: center; 
    }
    form { 
      display: flex; 
      align-items: center; 
      gap: 10px; 
      flex-wrap: wrap;
    }
    input[type="number"], select { 
      padding: 10px; 
      border: 1px solid #ccc; 
      border-radius: 6px; 
      box-sizing: border-box; 
    }
    input[type="number"] { 
      width: 100px; 
    }
    select { 
      width: 100px; 
    }
    .actions { 
      margin-left: auto;
      display: flex; 
      gap: 8px; 
    }
    input[type="submit"], input[type="reset"] { 
      padding: 8px 14px; 
      border-radius: 6px; 
      border: none; 
      cursor: pointer; 
    }
    input[type="submit"] { 
      background: #2563eb; 
      color: #fff; 
    }
    input[type="reset"] { 
      background: #e5e7eb; 
      color: #111; 
    }
    .result { 
      margin-top: 20px; 
      padding: 12px; 
      border-radius: 6px; 
      background: #f0fff4; 
      border: 1px solid #d1fae5; 
      text-align: center; 
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Kalkulator Sederhana</h1>

    <form method="post" action="">
      <input type="number" name="angka1" placeholder="Angka 1" required>
      
      <select name="op">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">×</option>
        <option value="bagi">÷</option>
      </select>
      
      <input type="number" name="angka2" placeholder="Angka 2" required>

      <div class="actions">
        <input type="reset" value="Reset" onclick="window.location.href=window.location.href">
        <input type="submit" value="Hitung">
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $op = $_POST['op'];
        $hasil = 0;

        switch ($op) {
            case "tambah": $hasil = $a + $b; break;
            case "kurang": $hasil = $a - $b; break;
            case "kali":   $hasil = $a * $b; break;
            case "bagi":   
                if ($b != 0) { 
                    $hasil = $a / $b; 
                } else { 
                    $hasil = "Error: tidak bisa dibagi 0"; 
                }
                break;
        }

        echo "<div class=\"result\">Hasil: $hasil</div>";
    }
    ?>
    <div class="nav-buttons">
      <a href="menu.php" class="button home-button">Back</a>
    </div>
  </div>
</body>
</html>