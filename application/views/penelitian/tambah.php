<div class="col-sm-9">
    <hr>
    <div class="card mt-3 ">
        <div class="card-header mt-5 text-blue text-center">
            <h2> <strong>Form Input Tambah Data Penelitian</strong></h2>
        </div>

        <div class="col-md-12 align-content: center;">
            <div class="card-body mt-3 " style="align-content: center;">
                <form action="" method="POST">
                    <div class="form-group ">
                        <label for="nama_dosen"> Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control" id="nama_dosen">
                        <small class="form-text text-danger"> <?= form_error('nama_dosen'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nik"> NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="ex. 190302052">
                        <small class="form-text text-danger"> <?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="topik"> Topik </label>
                        <input type="text" name="topik" class="form-control" id="topik">
                        <small class="form-text text-danger"> <?= form_error('topik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="judul"> Judul </label>
                        <input type="text" name="judul" class="form-control" id="judul">
                        <small class="form-text text-danger"> <?= form_error('judul'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="waktu"> Tahun Ajar </label>
                        <select class="form-control" id="waktu" name="waktu">
                            <small class="form-text text-danger"> <?= form_error('waktu'); ?></small>
                            <?php foreach ($waktu as $w) : ?>
                                <option value="<?= $w; ?>"><?= $w; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_mhs"> Nama Mahasiswa </label>
                        <input type="text" name="nama_mhs" class="form-control" id="nama_mhs">
                        <small class="form-text text-danger"> <?= form_error('nama_mhs'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nim_mhs"> NIM Mahasiswa </label>
                        <input type="text" name="nim_mhs" class="form-control" id="nim_mhs" placeholder="ex. 20.01.4547">
                        <small class="form-text text-danger"> <?= form_error('nim_mhs'); ?></small>
                    </div>
                    <div class="form-group">
                        <label> Link Publikasi </label>
                        <input type="url" name="link" class="form-control" id="link">
                        <small class="form-text text-danger"> <?= form_error('link'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary"> Tambah Data </button>
                    <button type="reset" name="reset" class="btn btn-danger"> Reset </button>
                </form>
            </div>
        </div>
    </div>