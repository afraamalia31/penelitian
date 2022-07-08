<div class="col-sm-9">
    <hr>
            <div class="card mt-3">
                <h2 class="card-header text-white text-center" style="background-color:#3980bd; color: rgb(255, 255, 255);">Detail Data Penelitian</h2>
            </div>
            <div class="card-body">
                <h4 class="mb-1" style=" font-weight: bolder;"> Nama Dosen </h4>
                <hp> <?= $tbl_penelitian['nama_dosen']; ?> </p>

                    <h4 class="mb-1" style=" font-weight: bolder;"> NIK Dosen </h4>
                    <p class="card-text"> <?= $tbl_penelitian['nik']; ?> </p>


                    <h4 class="mb-1" style=" font-weight: bolder;"> Topik Penelitian </h4>
                    <p class="card-text"> <?= $tbl_penelitian['topik']; ?> </p>


                    <h4 class="mb-1" style=" font-weight: bolder;"> Judul Penelitian </h4>
                    <p class="card-text"> <?= $tbl_penelitian['judul']; ?> </p>

                    <h4 class="mb-1" style=" font-weight: bolder;"> Tahun Ajar </h4>
                    <p class="card-text"> <?= $tbl_penelitian['waktu']; ?> </p>

                    <h4 class="mb-1" style=" font-weight: bolder;"> Nama Mahasiswa </h4>
                    <p class="card-text"> <?= $tbl_penelitian['nama_mhs']; ?> </p>

                    <h4 class="mb-1" style=" font-weight: bolder;"> NIM Mahasiswa </h4>
                    <p class="card-text"> <?= $tbl_penelitian['nim_mhs']; ?> </p>

                    <h4 class="mb-1" style=" font-weight: bolder;"> Link Publikasi </h4>
                    <a href="<?php echo $tbl_penelitian['link']; ?>" target="_blank"> link publikasi </a>
            </div>
            </br>
            <div class="card-footer" style="background-color:#3980bd ;">
                <a href="<?= base_url(); ?>penelitian" type="button" class="btn btn-primary"> Kembali </a>
            </div>
 
</section>