<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Form Ucapan</title>
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
    input[type="text"] { 
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
    .greeting { 
      margin-top: 15px; 
      padding: 12px; 
      border-radius: 6px; 
      background: #f0fff4; 
      border: 1px solid #d1fae5; 
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Form Ucapan</h1>

    <form method="post" action="">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu" required>
      <div class="actions">
        <input type="reset" value="Reset" onclick="window.location.href=window.location.href"> 
        <input type="submit" value="Submit">
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        echo "<div class=\"greeting\">Halo, <strong>$nama</strong> Semangat belajarnya yaa!</div>";
    }
    ?>
    <div class="nav-buttons">
      <a href="menu.php" class="button home-button">Back</a>
    </div>
  </div>
</body>
</html>