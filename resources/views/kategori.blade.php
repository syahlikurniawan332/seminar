@section('title', 'Kategori')

<x-app>
    <!-- search  -->
    <div class="container my-3">
        <div class="cari d-flex justify-content-end">
            <label for="search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search me-2" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></label>
            <input type="text" placeholder="search" id="search">
        </div>
    </div>
    <!-- end  -->

    <!-- seminar umum  -->
    <div class="container">
        <div class="row heading-kategori">
            <h5 class="fw-bold">Seminar Umum</h5>
            <p>berikut adalah seminar untuk umum</p>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural -in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
    </div>
    <!-- end  -->

    <!-- seminar mahasiswa  -->
    <div class="container mt-5">
        <div class="row heading-kategori">
            <h5 class="fw-bold">Seminar Mahasiswa</h5>
            <p>berikut adalah seminar untuk para mahasiswa / mahasiswa</p>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural -in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
    </div>
    <!-- end  -->

    <!-- seminar siswa -->
    <div class="container my-5">
        <div class="row heading-kategori">
            <h5 class="fw-bold">Seminar siswa</h5>
            <p>berikut adalah seminar untuk para siswa</p>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural -in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page2.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
                                    <img src={{ asset("assets/img/page1.jpg") }} class="card-img-top card-img-fixed" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Heading</h5>
                                        <small class="ditunjukan">Mahasiswa - Umum</small>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col">
                                                <a href={{ url('/pageTiket') }} class="btn btn-secondary">Daftar</a>
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
    </div>
    <!-- end -->
</x-app>