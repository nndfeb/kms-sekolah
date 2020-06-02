<?php
include "../init.php";

if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('file','id',$id);
}

?>

<!-- 
<div class="main">
    <button class="button button1"><a href="tambah_file.php">Uload</a></button>
</div>


<div class="table-container">
    <table border=1 style="border-collapse: collapse">
        <thead>
            <tr>
                <th>No</th>
                <th>Subjek</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>File</th>
                <th>Type</th>
                <th>Size</th>
                <th>Created</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <?php
    $no = 1;
    $data = $admin->tampil('file','','');
    while ($row = $data->fetch_object()) :
?>

        <tbody>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->subjek; ?></td>
                <td><?= $row->kategori ?></td>
                <td><?= $row->keterangan ?></td>
                <td>
                    <a target="_blank" href="../../assets/uploads/files/<?= $row->file ?>">Lihat</a>
                    <!-- <img src="../../assets/uploads/files/<?= $row->file ?>" width="20px" > -->
</td>
<td><?= $row->type ?></td>
<td><?= $row->size ?> Kb</td>
<td><?= $row->created?></td>
<td>
    <a href="edit_file.php?ubah=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin merubah data ?')"><img
            src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
    <a href="?hapus=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><img
            src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
</td>
</tr>
</tbody>
<?php endwhile ?>
</table>
</div> -->


<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_file" class="btn btn-submit">Tambah File</a>
        </div>
    </div>
    <div class="card">
        <table style="text-align: center;" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Subjek</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>File</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Created</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php
    $no = 1;
    $data = $admin->tampil('file','','');
    while ($row = $data->fetch_object()) :
?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->subjek; ?></td>
                <td><?= $row->kategori ?></td>
                <td><?= $row->keterangan ?></td>
                <td>
                    <a target="_blank" href="../../assets/uploads/files/<?= $row->file ?>">Lihat</a>
                    <!-- <img src="../../assets/uploads/files/<?= $row->file ?>" width="20px" > -->
                </td>
                <td><?= $row->type ?></td>
                <td><?= $row->size ?> Kb</td>
                <td><?= $row->created?></td>
                <td>
                    <a href="edit_file.php?ubah=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin merubah data ?')"><img
                            src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
                    <a href="?hapus=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><img
                            src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>