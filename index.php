<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Siswa</title>

  <!-- CDN Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="mx-4">
  <header>
    <h1>Pendaftaran Siswa Baru</h1>
  </header>

  <h3>Menu</h3>
  <nav>
    <ul>
      <li><a href="form-daftar.php" class="text-decoration-none">Daftar Baru</a></li>
      <li><a href="list-siswa.php" class="text-decoration-none">Pendaftar</a></li>
    </ul>
  </nav>

  <?php if(isset($_GET['status'])): ?>
    <div>
      <?php 
        if($_GET['status'] == 'sukses') {
          echo "<p class='text-success'>Pendaftaran berhasil!</p>";
        } else {
          echo "<p class='text-danger'>Pendaftaran gagal!</p>";
        }
        ?>
    </div>
  <?php endif; ?>

  <!-- cdn Bootstrap js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>