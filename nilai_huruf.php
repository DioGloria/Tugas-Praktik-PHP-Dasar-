<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Nilai Huruf</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      background: #f4f6fb; 
      color: #222; 
      margin: 0; 
      padding: 0; 
    }
    .card { 
      max-width: 400px; 
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
    label { 
      display: block; 
      margin-bottom: 6px; 
      font-weight: bold; 
    }
    input[type="number"] { 
      width: 100%; 
      padding: 10px; 
      border: 1px solid #ccc; 
      border-radius: 6px; 
      margin-bottom: 15px; 
      box-sizing: border-box; 
    }
    .actions { 
      display: flex; 
      justify-content: flex-end; 
      gap: 10px; 
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
      margin-top: 15px; 
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
    <h1>Nilai Huruf</h1>

    <form method="post" action="">
      <label for="nilai">Masukkan Nilai (0 - 100)</label>
      <input type="number" id="nilai" name="nilai" min="0" max="100" required>

      <div class="actions">
        <input type="reset" value="Reset" onclick="window.location.href=window.location.href">
        <input type="submit" value="Cek">
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['nilai'];
        if ($n >= 85) {
            $grade = "A";
        } elseif ($n >= 70) {
            $grade = "B";
        } elseif ($n >= 55) {
            $grade = "C";
        } elseif ($n >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<div class=\"result\">Nilai Anda: <strong>$n</strong> Grade <strong>$grade</strong></div>";
    }
    ?>
  </div>
</body>
</html>