<div class="container">

    <div class="row mt-3">
        <div class="col-md-6 mt-3">

            <div class="card">
                <div class="card-header">
                    Form Edit Karyawan
                </div>
                <div class="card-body">
                <?php echo validation_errors(); ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $pegawai['nama']; ?>" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control"value="<?php echo $pegawai['nip']; ?>" name="nip" id="nip">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="<?php echo $pegawai['email']; ?>" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <option value="nuklir">nuklir</option>
                        <option value="IT">IT</option>
                        <option value="Mesin">Mesin</option>
                        </select>
                    </div>
                    <input type="submit" value="Edit" name="Edit" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>