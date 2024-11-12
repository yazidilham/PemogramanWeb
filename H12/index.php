<?php
require_once "Crud.php";

$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jabatan = $_POST["jabatan"];
    $keterangan = $_POST["keterangan"];
    $crud->create($jabatan, $keterangan);
}

if (isset($_GET["action"]) && $_GET['action'] == 'delete') {
    $id = $_GET["id"];
    $crud->delete($id);
}

$tampil = $crud->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah</button>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tampil as $show): ?>
                <tr>
                    <td><?php echo $show["id"]; ?></td>
                    <td><?php echo $show["jabatan"]; ?></td>
                    <td><?php echo $show["keterangan"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $show['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $show['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
