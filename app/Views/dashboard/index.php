<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br><br>
            <h2>Hallo, <?= session('nama_dpn'); ?></h2>
            <button class="btn btn-danger"><a href="/dashboard/logout">Logout</a></button>
        </div>
    </div>
</div>
<?= $this->EndSection(); ?>