@section('title', 'Home Page')

<x-app>

    <!-- wellcome to page  -->
    <div class="container-fluid m-0 p-0 text-center">
        <div class="position-relative">
            <img src={{ asset("assets/img/seminar-hero.jpg") }} class="img-fluid" alt="Seminar Hero Image">
            <div class="overlay-text-1">
                <div class="row">
                    <h1 class="display-4 text-light fw-bold">Daftar dulu, Yuk!</h1>
                    <p class="lead text-shadow">Layanan Reservasi tiket seminar</p>
                </div>
            </div>
            <div class="overlay-text">
                <div class="row">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolore suscipit nam ut officiis obcaecati sint, atque explicabo ea doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ut.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end  -->

    <!-- yok segera daftar -->
    <div class="container mt-5">
        <div class="row text-center">
            <h3 class="mb-4 section-title">Yok Segera Daftar</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">

            <div class="text-center mb-4 indikator">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active me-2" aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This is a wider card with supporting text below as a natural -in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/img/page2.jpg" class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/img/page1.jpg" class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/img/page2.jpg" class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/img/page1.jpg" class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/img/page2.jpg" class="card-img-top card-img-fixed" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Heading</h5>
                                    <small class="ditunjukan">Mahasiswa - Umum</small>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url('/pageTiket') }}" class="btn btn-secondary">Daftar</a>
                                        </div>
                                        <div class="col">
                                            <p class="label fw-bold">Harga</p>
                                            <p class="nominal fw-bold fs-5">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- end  -->

    <!-- layanan  -->
    <div class="container text-center layanan-1">
        <img src={{ asset("assets/img/page3.jpg") }} class="img-fluid imgCenter rounded" alt="Service Image">
        <h1 class="my-5 section-title">LAYANAN KAMI</h1>
        <div class="row justify-content-center align-items-center layanan">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-10 d-flex align-items-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-lg bg-secondary text-light me-3" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, autem consequuntur repudiandae facilis non dolores deserunt laborum error sed sit officia harum esse pariatur recusandae neque porro assumenda odit atque?</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <!-- end  -->

    <!-- daftar  -->
    <div class="container text-center my-5 daftar">
        <h1 class="section-title">Tunggu Apalagi</h1>
        <h5>Amankan Tiketmu Sekarang</h5>
        <button type="button" class="btn btn-primary">Daftar</button>
    </div>
    <!-- end  -->

</x-app>