<div class="col-sm-9">
    <hr>
    <h2> <strong> Penelitian </strong> </h2>
    <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


    <div>
        <button class="btn" style="background-color: rgb(111, 180, 174); color: rgb(255, 255, 255);">
            <span class="glyphicon glyphicon-plus"></span>
            <a href="<?= base_url() ?>Penelitian/tambah" style="background-color: rgb(111, 180, 174); color: rgb(255, 255, 255);">Tambahkan Data Penelitian</a>
        </button> </br> </br>
    </div>

    <div class="navbar-form navbar-right">
        <form action="" method="post">
            <input type="text" name="keyword" class="form-control" placeholder="Cari Data Penelitian">
            <button type="submit" class="btn btn-success"> Cari </button>
    </div>

    </br> </br>
    <h3> <b> Daftar Penelitian </b> </h3>
    <?php if (empty($tbl_penelitian)) : ?>
        <div class="alert alert-danger" role="alert">
            Data tidak di temukan!
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <tr style="background-color: rgb(129, 190, 185); color: rgb(255, 255, 255);">
            <th width="400px" class="text-center">Nama Dosen</th>
            <th width="450px" class="text-center">Topik Penelitian</th>
            <th width="130px" class="text-center">Tahun Ajar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        <?php foreach ($tbl_penelitian as $p) : ?>
            <tr>

                <td><?= $p['nama_dosen']; ?></td>
                <td><?= $p['topik']; ?></td>
                <td class="text-center"><?= $p['waktu']; ?></td>

                <td class="text-center">
                    <a href="<?= base_url(); ?>penelitian/detail/<?= $p['id']; ?>" class="badge" style="background-color:rgb(37, 48, 99);"> Detail </a>
                    <a href="<?= base_url(); ?>penelitian/ubah/<?= $p['id']; ?>" class="badge" style="background-color:rgb(99, 155, 11);"> Ubah </a>
                    <a href="<?= base_url(); ?>penelitian/hapus/<?= $p['id']; ?>" class="badge" style="background-color:rgb(212, 42, 0);" onclick="return confirm('Anda yakin untuk menghapus data ini?');"> Hapus</a>


                </td>
            </tr>
        <?php endforeach; ?>
</div>

</table>