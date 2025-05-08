<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PT FALSAH IZORA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
<?php 
 include "layout/template.php"
?>
        <!-- Main Content -->
        <main class="col-md-10 p-4">
            <div class="bg-primary text-white p-3 mb-4">
                <h5 class="mb-0">Aplikasi Penyewaan Mesin Fotokopi</h5>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <h4>Data Mesin Fotokopi</h4>
                <a href="create.php" class="btn btn-primary">+ Tambah Mesin</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($conn,"SELECT * FROM daftarmesin");
                        while ($row = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?= $row['id_mesin'] ?></td>
                            <td><?= $row['gambar_mesin'] ?></td>
                            <td><?= $row['nama_mesin'] ?></td>
                            <td><?= $row['harga_mesin'] ?></td>
                            <td><?= $row['kategori_mesin'] ?></td>
                            <td class="table-actions">
                            <button class="btn btn-sm btn-warning btn-edit"
                            data-id="<?= $row['id_mesin'] ?>"
                            data-gambar="<?= $row['gambar_mesin'] ?>"
                            data-nama="<?= $row['nama_mesin'] ?>"
                            data-harga="<?= $row['harga_mesin'] ?>"
                            data-kategori="<?= $row['kategori_mesin'] ?>">
                            Edit
                            </button>
                            <a href="delete.php?id=<?= $row['id_mesin'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formTambah" method="post" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahLabel">Tambah Mesin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label>Gambar</label>
            <input type="text" name="gambar_mesin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_mesin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga_mesin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori_mesin" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formEdit" method="post" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditLabel">Edit Mesin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id_mesin" value="<?= $data['id_mesin'] ?>">

        <div class="mb-3">
            <input type="hidden" name="id_mesin" id="edit-id">
            <label>Gambar</label>
            <input type="text" name="gambar_mesin" id="edit-gambar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama_mesin" id="edit-nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga_mesin" id="edit-harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori_mesin" id="edit-kategori" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>

<!-- Ajax Script -->
<script>
$(document).ready(function() {
    $('#formTambah').on('submit', function(e) {
        e.preventDefault();
        $.post('create.php', $(this).serialize(), function() {
            alert("Data berhasil ditambahkan!");
            location.reload();
        }).fail(function() {
            alert("Gagal menambahkan data.");
        });
    });

    $(document).on('click', '.btn-edit', function(e) {
    e.preventDefault();
    $('#edit-id').val($(this).data('id'));
    $('#edit-gambar').val($(this).data('gambar'));
    $('#edit-nama').val($(this).data('nama'));
    $('#edit-harga').val($(this).data('harga'));
    $('#edit-kategori').val($(this).data('kategori'));
    $('#modalEdit').modal('show');
});



    $('#formEdit').on('submit', function(e) {
        e.preventDefault();
        $.post('edit.php', $(this).serialize(), function() {
            alert("Data berhasil diperbarui!");
            location.reload();
        }).fail(function() {
            alert("Gagal memperbarui data.");
        });
    });
});
</script>
</body>
</html>