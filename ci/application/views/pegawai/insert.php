<div class="container">

    <div class="row mt-3">
        <div class="col-md-6 mt-3">

            <div class="card">
                <div class="card-header">
                    Form Karyawan
                </div>
                <div class="card-body">
                <?php echo validation_errors(); ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" name="nip" id="nip">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <option value="nuklir">nuklir</option>
                        <option value="IT">IT</option>
                        <option value="Mesin">Mesin</option>
                        </select>
                    </div>
                    <input type="submit" name="insert" class="btn btn-primary float-right" id="">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>