<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="kotak-login">
                <h3 class="text-center">Silahkan <b>Login</b></h3>
                <?php if (session('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session('pesan'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="/auth/proses_login" method="post">
                    <input type="email" class="form-control" name="email" placeholder="email" required>
                    <input type="password" class="form-control mt-3" name="password" placeholder="Password" required>
                    <small class="d-block mt-3">Belum mempunyai akun ? <span id="daftar-login">silahkan <a href="/auth/daftar">Daftar</a></span></small>
                    <button type="submit" class="btn btn-primary md button"><b>Login</b></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>