<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PT Qtasnim Digital Teknologi</title>
    <link rel="stylesheet" href="./Style/Main.css" />
    <link rel="stylesheet" href="./Style/Root.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body>

    <?php
if (isset($_GET['success']) && $_GET['success'] == 'true') {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dimasukkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}
?>

    <main id="main">
      <section class="FormInput">
        <div class="MainFormInput">
          <div class="HeadlineFormInput">
            <h1>PT Qtasnim Digital Teknologi</h1>
          </div>
          <div class="ContentFormInput">
            <form action="Function/Proceed/Process.php" method="post">
              <div class="ContentFormInputTop">
                <input type="text" placeholder="Nama Barang" name="nama_barang" required />
                <input type="number" placeholder="Stock" name="stock" required />
              </div>
              <div class="ContentFormInputBottom">
                <input type="number" placeholder="Jumlah Terjual" name="jumlah_terjual" required />
                <input type="date" name="tanggal" required />
                <input type="text" placeholder="Jenis Barang" name="jenis_barang" required />
              </div>
              <div class="ContentFormInputButton">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
               <div class="ButtonActionDashboard">
           <button><a href="./Dashboard/Admin.php">Data Admin</a></button>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
