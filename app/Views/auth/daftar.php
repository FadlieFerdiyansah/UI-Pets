<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="kotak-login" id="kotak-daftar">
                <h3 class="text-center">Silahkan <b>Daftar</b></h3>
                <?php if (session('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session('pesan'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="/auth/proses_daftar" method="post">
                    <input type="hidden" name="level" value="user">
                    <div class="row mb-3">
                        <div class="col-6">
                            <input type="text" class="form-control <?= ($validation->hasError('nama_dpn') ? 'is-invalid' : ''); ?>" name="nama_dpn" placeholder="Nama depan">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('nama_dpn'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="nama_blkng" placeholder="Nama belakang">
                        </div>
                    </div>
                    <div class="form-group ">
                        <select class="custom-select <?= ($validation->hasError('jenkel') ? 'is-invalid' : ''); ?>" name="jenkel">
                            <option selected>Pilih jenis kelamin</option>
                            <option value="1">Pria</option>
                            <option value="0">Wanita</option>
                        </select>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('jenkel'); ?>
                        </div>
                    </div>
                    <input type="email" class="form-control <?= ($validation->hasError('email') ? 'is-invalid' : ''); ?>" name="email" placeholder="Email">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                    <input type="password" class="form-control mt-3 <?= ($validation->hasError('password') ? 'is-invalid' : ''); ?>" name="password" placeholder="Password">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                    <input type="password" class="form-control mt-3 <?= ($validation->hasError('konfirmasi_password') ? 'is-invalid' : ''); ?>" name="konfirmasi_password" placeholder="Konfirmasi Password">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('konfirmasi_password'); ?>
                    </div>
                    <small class="d-block mt-3">Sudah mempunyai akun ? silahkan <a href="/auth/login">Login</a></small>
                    <button type="submit" class="btn btn-primary md"><b>Daftar</b></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>