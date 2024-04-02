<?php

include_once 'mahasiswa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // mengambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nama_kampus = $_POST['nama_kampus'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    // membuat objek Mahasiswa
    $mahasiswa = new Mahasiswa($nim, $nama, $nama_kampus, $mata_kuliah, $nilai);

    $judul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="css/style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css"
    />
  </head>
  <body>
  <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
    <div class="container">
      <div class="row center-form">
        <div class="col-md-6 input-form">
          <h2 class="mb-4 text-center">Form Nilai Ujian</h2>
          
          <form method="post">
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input
                type="text"
                class="form-control"
                id="nim"
                name="nim"
                required
              />
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                required
              />
            </div>
            <div class="mb-3">
              <label for="kuliah" class="form-label">Nama Kampus</label>
              <select class="form-control" id="kuliah" name="nama_kampus" >
              <option value="">--Pilih Kampus--</option>
                <?php
foreach ($nama_kampus as $universitas) {
    echo "<option value='$universitas'>$universitas</option>";
}
      ?>
                </select>
            </div>
            <div class="mb-3">
              <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
              <select class="form-control" id="kuliah" name="mata_kuliah" >
              <option value="">--Pilih Mata Kuliah--</option>
                <?php
foreach ($mata_kuliah as $matkul) {
    echo "<option value='$matkul'>$matkul</option>";
}
      ?>
                </select>
            </div>
            <div class="mb-3">
              <label for="nilai" class="form-label">Nilai</label>
              <input
                type="number"
                class="form-control"
                id="nilai"
                name="nilai"
                required
              />
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    <?php } ?>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <div class="container mt-5 input-form">
        <h2 class="text-center mb-4">Hasil Nilai Ujian</h2>
        <table id="mahasiswa"
        class="table table-striped table-hover"
        style="width: 100%">
            <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kampus</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $mahasiswa->nim; ?></td>
                <td><?php echo $mahasiswa->nama; ?></td>
                <td><?php echo $mahasiswa->nama_kampus; ?></td>
                <td><?php echo $mahasiswa->mata_kuliah; ?></td>
                <td><?php echo $mahasiswa->nilai; ?></td>
                <td><?php echo $mahasiswa->Grade(); ?></td>
                <td><?php echo $mahasiswa->Predikat(); ?></td>
                <td><?php echo $mahasiswa->Status(); ?></td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-start ">
              <button type="submit" class="btn btn-success" onclick="redirectToAnotherPage()">Kembali</button>
            </div>
    </div>
<?php } ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script>
      new DataTable("#mahasiswa");

      function redirectToAnotherPage() {
        window.location.href = "objmahasiswa.php";
      }
    </script>  
    </body>
</html>