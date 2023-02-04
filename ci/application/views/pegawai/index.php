<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 mt-3">
            <a href="<?php base_url(); ?>pegawai/insert" class="btn btn-primary">Tambah Karyawan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 mt-2">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari Karyawan">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="button">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mt-3">
        <h1>Daftar Pegawai</h1>
        <?php if(empty($pegawai)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Tidak Ada.. Silahkan Cari atau isi lagi
            </div>
        <?php endif; ?>
        <ul class="list-group">
            <?php foreach($pegawai as $item) : ?>
            <li class="list-group-item">
                <?php echo $item['nama']; ?>
                <a href="<?php base_url(); ?>pegawai/hapus/<?php echo $item['id'];?>"
                class="badge badge-danger float-right" onClick="return confirm('Gass?');">Hapus</a>
                <a href="<?php base_url(); ?>pegawai/detail/<?php echo $item['id'];?>"
                class="badge badge-info float-right mr-2">Detail</a>
                <a href="<?php base_url(); ?>pegawai/edit/<?php echo $item['id'];?>"
                class="badge badge-warning float-right mr-2">Edit</a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>