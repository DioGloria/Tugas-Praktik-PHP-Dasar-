<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Menu Jajanan Bali</title>
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
    select { 
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
    <h1>Menu Jajanan Bali</h1>

    <form method="post" action="">
      <label for="menu">Pilih Menu</label>
      <select id="menu" name="menu">
        <option value="" selected disabled>Pilih Menu</option>
        <option value="laklak">Laklak</option>
        <option value="pisang">Pisang Rai</option>
        <option value="bendu">Jaje Bendu</option>
        <option value="klepon">Klepon</option>
        <option value="bubur">Bubur Injin</option>
      </select>

      <div class="actions">
        <input type="reset" value="Reset" onclick="window.location.href=window.location.href">
        <input type="submit" value="Lihat Harga">
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $menu = $_POST['menu'];
        switch ($menu) {
            case "laklak": $harga = 5000; $nama = "Laklak"; break;
            case "pisang": $harga = 7000; $nama = "Pisang Rai"; break;
            case "bendu":  $harga = 8000; $nama = "Jaje Bendu"; break;
            case "klepon": $harga = 6000; $nama = "Klepon"; break;
            case "bubur":  $harga = 10000; $nama = "Bubur Injin"; break;
            default: $harga = 0; $nama = "Tidak diketahui";
        }
        echo "<div class=\"result\">Harga <strong>$nama</strong> adalah Rp ".number_format($harga,0,",",".")."</div>";
    }
    ?>
  </div>
</body>
</html>