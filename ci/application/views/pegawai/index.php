<div class="container">
    <div class="row">
        <div class="col-md-6 mt-3">
            <a href="<?php base_url(); ?>pegawai/insert" class="btn btn-primary">Tambah Karyawan</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mt-3">
        <h1>Daftar Pegawai</h1>
        <ul class="list-group">
            <?php foreach($pegawai as $item) : ?>
            <li class="list-group-item"><?php echo $item['nama']; ?></li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>