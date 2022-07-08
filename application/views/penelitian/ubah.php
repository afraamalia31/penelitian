<div class="col-sm-9">
    <hr>
            <div class="card mt-3  text-white">
                <div class="card-header text-white text-center">
                    <h2> <strong>Form Ubah Data Penelitian</strong></h2>
                </div>
                <div class="col-md-12">
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $tbl_penelitian['id']; ?>">
                        <div class="form-group">
                            <label for="nama_dosen"> Nama Dosen </label>
                            <input type="text" name="nama_dosen" class="form-control" id="nama_dosen" value="<?= $tbl_penelitian['nama_dosen']; ?>">
                            <small class="form-text text-danger"> <?= form_error('nama_dosen'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nik"> NIK </label>
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= $tbl_penelitian['nik']; ?>" placeholder="ex. 190302052">
                            <small class="form-text text-danger"> <?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="topik"> Topik </label>
                            <input type="text" name="topik" class="form-control" id="topik" value="<?= $tbl_penelitian['topik']; ?>">
                            <small class="form-text text-danger"> <?= form_error('topik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="judul"> Judul </label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $tbl_penelitian['judul']; ?>">
                            <small class="form-text text-danger"> <?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="waktu"> Tahun Ajar </label>
                            <select class="form-control" id="waktu" name="waktu" value="<?= $tbl_penelitian['waktu']; ?>">
                            <small class="form-text text-danger"> <?= form_error('waktu'); ?></small>
                                <?php foreach ($waktu as $w) : ?>

                                    <?php if ($w == $tbl_penelitian['waktu']) : ?>
                                        <option value="<?= $w; ?>" selected><?= $w; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $w; ?>"><?= $w; ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_mhs"> Nama Mahasiswa </label>
                            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" value="<?= $tbl_penelitian['nama_mhs']; ?>" >
                            <small class="form-text text-danger"> <?= form_error('nama_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim_mhs"> NIM Mahasiswa </label>
                            <input type="text" name="nim_mhs" class="form-control" id="nim_mhs" value="<?= $tbl_penelitian['nim_mhs']; ?>" placeholder="ex. 20.01.4547" >
                            <small class="form-text text-danger"> <?= form_error('nim_mhs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label> Link Publikasi </label>
                            <input type="url" name="link" class="form-control" id="link" value="<?= $tbl_penelitian['link']; ?>">
                            <small class="form-text text-danger"> <?= form_error('link'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary"> Ubah Data </button>
                    </form>
                </div>
            </div>


        </div>
    </div>

