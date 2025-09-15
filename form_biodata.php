<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Form Biodata</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      background: #f4f6fb; 
      color: #222; 
      margin: 0; 
      padding: 0; 
    }
    .card { 
      max-width: 450px; 
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
    input[type="text"], input[type="number"], select { 
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
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Form Biodata</h1>

    <form method="post" action="">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu" required>

      <label for="umur">Umur</label>
      <input type="number" id="umur" name="umur" min="1" max="100" required>

      <label for="jk">Jenis Kelamin</label>
      <select id="jk" name="jk" required>
        <option value="" selected disabled>Pilih Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat kamu" required>

      <div class="actions">
        <input type="reset" value="Reset" onclick="window.location.href=window.location.href">
        <input type="submit" value="Kirim">
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama   = $_POST['nama'];
        $umur   = $_POST['umur'];
        $jk     = $_POST['jk'];
        $alamat = $_POST['alamat'];

        echo "<div class=\"result\">
        Halo, nama saya <strong>$nama</strong>, saya <strong>$jk</strong> berumur <strong>$umur</strong> tahun, dan saya tinggal di <strong>$alamat</strong>.
        </div>";
    }
    ?>
  </div>
</body>
</html>