<?php
include './../Function/Connection/Connection.php';

$result = $conn->query("SELECT * FROM FormInput"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PT Qtasnim Digital Teknologi</title>
    <link rel="stylesheet" href="./../Style/Main.css" />
    <link rel="stylesheet" href="./../Style/Root.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body>
    <main id="main">
      <section class="AdminDasboard">
        <div class="MainAdminDasboard">
          <div class="HeadlineFormInput">
            <h1>PT Qtasnim Digital Teknologi</h1>
          </div>
          <div class="ContentAdminDasboard">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nomor</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Jumlah Barang</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Jenis Barang</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $nomor = 1;
            while ($row = $result->fetch_assoc()) : ?>
                <tr>
                  <th scope="row"><?php echo $nomor; ?></th>
                  <td><?php echo $row['nama_barang']; ?></td>
                  <td><?php echo $row['stock']; ?></td>
                  <td><?php echo $row['jumlah_terjual']; ?></td>
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><?php echo $row['jenis_barang']; ?></td>
                  <td>
                    <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $row['id']; ?>"> Delete </a>
                  </td>
                </tr>

                <?php
            $nomor++;
            endwhile;
            ?>
              </tbody>
            </table>
          </div>
<div class="ButtonActionDashboard">
           <button><a href="./../index.php">Form Input</a></button>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">Anda Yakin Ingin Delete Data Ini?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-danger" id="deleteLink">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      $("#exampleModal").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        $("#deleteLink").attr("href", "./../Function/Order/Delete.php?id=" + id);
      });
    </script>
  </body>
</html>

<?php
$conn->close(); ?>
