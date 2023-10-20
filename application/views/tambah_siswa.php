<form action="">
    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control">
        <?= form_error('nama_siswa', '<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Kelas</label> Siswa</label>
        <input type="text" name="kelas_siswa" class="form-control">
        <?= form_error('kelas_siswa', '<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Alamat Siswa</label>
        <textarea name="alamat_siswa" cols="30" rows="10"></textarea>
        <?= form_error('alamat_siswa', '<div class="text-small text-danger">','</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control">
        <?= form_error('nomor_telepon', '<div class="text-small text-danger">','</div>'); ?>
    </div>
</form>