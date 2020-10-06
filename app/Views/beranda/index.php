<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1> <b>Welcome</b> To Our <b>Website</b></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt et eaque autem cupiditate facere rerum.</p>
                <hr class="col my-4">
                <button class="btn btn-outline-secondary btn-md" id="btn">Learn More</button><br>
            </div>
            <div class="col-md-4">
                <div class="landing animate__backInRight"></div>
            </div>
        </div>
    </div>
</div>


<div class="parent">
    <div class="container">
        <div class="row c-1">
            <div class="col-md-4">
                <div class="white-cat wow animate__slideInLeft"></div>
            </div>

            <div class="col-lg-8">
                <h3 class="text-center my-4" id="h3">Rawat peliharaan dengan baik</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, sunt provident. Deserunt laborum voluptate voluptatum temporibus in, voluptas quae recusandae itaque iusto excepturi consectetur unde numquam laboriosam aliquid facilis maiores?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At quibusdam voluptates autem atque provident. Maxime vel quod hic sit ut quisquam, commodi dolorem, sapiente eaque consequuntur illum tempore ipsum officia.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md mt-4 mb-4">
            <h3 class="text-center" id="h3">Jenis-jenis Perawatan</h3>
        </div>
    </div>


    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md">
                <div class="card card-perawatan">
                    <img class="card-img-top" src="/assets/img/dog-ilustrator.png" alt="gambar makanan">
                    <div class="card-body">
                        <p class="card-text">Some quick example </p>
                    </div>
                </div>
            </div>
            <div class="col-md img-mid">
                <div class="card card-perawatan">
                    <img class="card-img-top" src="/assets/img/cute-cat.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card card-perawatan">
                    <img class="card-img-top" src="/assets/img/dog-ilustrator.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parent1">
    <div class="container">
        <div class="row">
            <div class="col-md mt-4 mb-4">
                <h3 class="text-center" id="h3">Makanan Sehat</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top food wow animate__slideInLeft" src="/assets/img/food.png" alt="Card image cap">
            </div>

            <div class="col-lg-8 content-1">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, sunt provident. Deserunt laborum voluptate voluptatum temporibus in, voluptas quae recusandae itaque iusto excepturi consectetur unde numquam laboriosam aliquid facilis maiores?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At quibusdam voluptates autem atque provident. Maxime vel quod hic sit ut quisquam, commodi dolorem, sapiente eaque consequuntur illum tempore ipsum officia.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium totam voluptatibus, ducimus illo praesentium optio, dolores inventore dicta earum distinctio dignissimos assumenda nisi. Animi quos doloremque ipsa corrupti, dolorem reiciendis.
                </p>
            </div>
        </div>
    </div>
</div>

<section id="contact" class="contact">
    <div class="container">
        <div class="row pt-4 mb-5">
            <div class="col text-center">
                <h3>Kontak Kita</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Kontak Kita</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h1>Location</h1>
                    </li>
                    <li class="list-group-item">My Office</li>
                    <li class="list-group-item">Jl. Gang Langgar No. 45, Jakarta</li>
                    <li class="list-group-item">West Java, Indonesia</li>
                </ul>
            </div>

            <div class="col-lg-6 form-kontak">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telp">No Telp</label>
                        <input type="text" class="form-control" id="telp">
                    </div>
                    <div class="form-group">
                        <label for="nama">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Kirim Pesan!</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>