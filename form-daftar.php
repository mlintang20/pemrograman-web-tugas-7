<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Siswa Baru</title>

  <!-- CDN Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  <header>
    <h1 class="text-center my-3">Formulir Pendaftaran Siswa Baru</h1>
  </header>

  <form action="proses-pendaftaran.php" method="POST" class="d-flex justify-content-center mt-5">
    <fieldset>

      <div class="my-3">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="nama lengkap" />
      </div>
      <div class="my-3">
        <label for="alamat">Alamat: </label>
        <textarea name="alamat"></textarea>
      </div>
      <div class="my-3">
        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
      </div>
      <div class="my-3">
        <label for="agama">Agama: </label>
        <select name="agama">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Katolik</option>
            <option>Hindu</option>
            <option>Budha</option>
        </select>
      </div>
      <div class="my-3">
        <label for="sekolah_asal">Sekolah Asal: </label>
        <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
      </div>
      <div class="d-flex justify-content-center">
        <input type="submit" value="Daftar" name="daftar" class="mt-3 bg-primary text-light">
      </div>

    </fieldset>
  </form>

  <!-- CDN Bootstrap JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>