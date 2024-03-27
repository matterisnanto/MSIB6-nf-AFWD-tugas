    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TOKO BSI</title>
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <div class="text">
              <p>Belanja Kebutuhan elektronik? di BSI aja !!!</p>
            </div>
          </div>
          <form class="col-md-6 right" action="PHP-2.php" method="post">
            <div class="input-box">
              <header>Form Belanja</header>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="napem"
                  name="napembeli"
                  required=""
                  autocomplete="off"
                />
                <label for="napem">Nama Pembeli</label>
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="produkpilihan"
                  >Produk</label
                >
                <select class="form-select" name="pilprod" id="produkpilihan">
                  <option selected>--pilih produk--</option>
                  <option value="TV">TV</option>
                  <option value="kulkas">Kulkas</option>
                  <option value="mesin cuci">Mesin Cuci</option>
                  <option value="AC">AC</option>
                </select>
              </div>
              <div class="input-group">
                <label for="jml">Jumlah Barang</label>
                <input type="number" name="jmlbrg" class="input" id="jml" />
              </div>
              <div class="input-field">
                <input type="submit" name="lanjut" class="submit" value="Submit"  />
              </div>
          </form>

        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    </body>
    </html>
    
   

   
   
<?php

    $nama = $_POST['napembeli'];
$produk = $_POST['pilprod'];
$jmlbrg = $_POST['jmlbrg'];
$proses = $_POST['lanjut'];

switch ($produk) {
    case 'TV':
        $harga = 1000000;
        break;
    case 'kulkas':
        $harga = 2000000;
        break;
    case 'mesin cuci':
        $harga = 3000000;
        break;
    case 'AC':
        $harga = 4000000;
        break;
    default:
        $harga = 0;
        break;
}

$totbelanja = $harga * $jmlbrg;
$diskon = 0.20 * $totbelanja;
$ppn = 0.10 * ($totbelanja - $diskon);
$hrgbersih = ($totbelanja - $diskon) + $ppn;

if (isset($proses)) {
    ?>


    <div class="wrapper">
      <div class="container main">
          <table class="table table-primary table-striped ">
            <tr>
              <td>Nama</td>
              <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
              <td>Produk</td>
              <td>: <?php echo $produk; ?></td>
            </tr>
            <tr>
              <td>Jumlah</td>
              <td>: <?php echo $jmlbrg; ?></td>
            </tr>
            <tr>
              <td>Harga Satuan</td>
              <td>: Rp.<?php echo number_format($harga, 0, ',', '.'); ?></td>
            </tr>
            <tr>
              <td>Total Belanja</td>
              <td>: Rp.<?php echo number_format($totbelanja, 0, ',', '.'); ?></td>
            </tr>
            <tr>
              <td>Potongan Diskon</td>
              <td>: Rp.<?php echo number_format($diskon, 0, ',', '.'); ?></td>
            </tr>
            <tr>
              <td>PPN</td>
              <td>: Rp.<?php echo number_format($ppn, 0, ',', '.'); ?></td>
            </tr>
            <tr>
              <td>Harga Bersih</td>
              <td>: Rp.<?php echo number_format($hrgbersih, 0, ',', '.'); ?></td>
            </tr>
            <tr>
              <td colspan="2"><div class="input-field">
                <input type="submit" class="submit" value="Kembali" onclick="redirectToAnotherPage()" />
              </div></td>
            </tr>
          </table>
      </div>
    </div>

    <script>
      function redirectToAnotherPage() {
        window.location.href = "PHP-2.php";
      }

  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: 'smooth'
  });
</script>
<?php } ?>
