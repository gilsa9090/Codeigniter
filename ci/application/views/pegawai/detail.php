<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Pegawai
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pegawai['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $pegawai['email']; ?></h6>
                    <p class="card-text"><?php echo $pegawai['nip']; ?></p>
                    <p class="card-text"><?php echo $pegawai['jurusan']; ?></p>
                    <a href="<?php echo base_url(); ?>pegawai" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>