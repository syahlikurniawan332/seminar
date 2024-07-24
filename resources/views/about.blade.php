@section('title', 'tentang kami')

<x-app>

    <!-- tentang Perusahaan -->
    <div class="container-fluid mx-0 text-center m-0 p-0">
        <div class="position-relative">
            <img src={{asset("assets/img/page3.jpg")}} class="img-fluid imgCenter opacity-50" alt="Seminar Hero Image">
            <div class="overlay-text-1 animate-fade-in">
                <div class="row">
                    <h1 class="display-4 text-shadow fw-bold">E-ticketing</h1>
                    <p class="lead text-shadow">Perusahaan Pelayanan Reservasi tiket seminar</p>
                </div>
            </div>
            <div class="overlay-text animate-slide-up">
                <div class="row mt-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolore suscipit nam ut officiis obcaecati sint, atque explicabo ea doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ut.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- privacy Policy -->
    <div class="bg-dark">
        <div class="container my-5 pb-4">
            <div class="row">
                <div class="heading-privacy">
                    <h3 class="text-light fw-bold pt-4">Privacy Policy</h3>
                </div>
                <div class="body-privacy text-light">
                    <h5 class="text-light">Kebijakan Privacy</h5>
                    <div class="ms-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam esse odio adipisci, aspernatur omnis labore voluptas dolor nemo fugit ut veritatis vel veniam autem sequi cumque ipsa, voluptatem molestiae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit mollitia sequi cum, fugiat quisquam nemo facilis nostrum quod nam dolorum modi, architecto velit dolores fugit id qui aliquam veniam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi veniam possimus eligendi fuga ipsa eum cumque sed cupiditate alias quia, perspiciatis voluptas, inventore mollitia. Aspernatur perferendis unde esse est.</p>
                    </div>

                    <h5 class="text-light mt-5">Informasi yang dikumpulkan</h5>
                    <div class="ms-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam esse odio adipisci, aspernatur omnis labore voluptas dolor nemo fugit ut veritatis vel veniam autem sequi cumque ipsa, voluptatem molestiae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit mollitia sequi cum, fugiat quisquam nemo facilis nostrum quod nam dolorum modi, architecto velit dolores fugit id qui aliquam veniam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi veniam possimus eligendi fuga ipsa eum cumque sed cupiditate alias quia, perspiciatis voluptas, inventore mollitia. Aspernatur perferendis unde esse est.</p>
                    </div>

                    <h5 class="text-light mt-5">DISCLOSURE OF PERSONAL INFORMATION</h5>
                    <div class="ms-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam esse odio adipisci, aspernatur omnis labore voluptas dolor nemo fugit ut veritatis vel veniam autem sequi cumque ipsa, voluptatem molestiae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit mollitia sequi cum, fugiat quisquam nemo facilis nostrum quod nam dolorum modi, architecto velit dolores fugit id qui aliquam veniam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi veniam possimus eligendi fuga ipsa eum cumque sed cupiditate alias quia, perspiciatis voluptas, inventore mollitia. Aspernatur perferendis unde esse est.</p>
                    </div>

                    <h5 class="text-light mt-5">Data yang digunakan</h5>
                    <div class="ms-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laboriosam esse odio adipisci, aspernatur omnis labore voluptas dolor nemo fugit ut veritatis vel veniam autem sequi cumque ipsa, voluptatem molestiae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit mollitia sequi cum, fugiat quisquam nemo facilis nostrum quod nam dolorum modi, architecto velit dolores fugit id qui aliquam veniam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nisi veniam possimus eligendi fuga ipsa eum cumque sed cupiditate alias quia, perspiciatis voluptas, inventore mollitia. Aspernatur perferendis unde esse est.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- faqs -->
    <div class="container shadow-sm">
        <div class="row">
            <div class="faqs text-center">
                <h3 class="fw-bold font-monospace">FAQS</h3>
            </div>
            <div class="body-faqs shadow">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item bg-secondary text-white">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Pertanyaan 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, pariatur magni, accusamus dolores voluptatum voluptatem quas dolor dolorum, iusto delectus nulla ipsam maiores quam doloribus consectetur rerum blanditiis architecto quos.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-secondary text-white mt-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pertanyaan 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, pariatur magni, accusamus dolores voluptatum voluptatem quas dolor dolorum, iusto delectus nulla ipsam maiores quam doloribus consectetur rerum blanditiis architecto quos.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-secondary text-white mt-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pertanyaan 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, pariatur magni, accusamus dolores voluptatum voluptatem quas dolor dolorum, iusto delectus nulla ipsam maiores quam doloribus consectetur rerum blanditiis architecto quos.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-secondary text-white mt-3">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Pertanyaan 4
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, pariatur magni, accusamus dolores voluptatum voluptatem quas dolor dolorum, iusto delectus nulla ipsam maiores quam doloribus consectetur rerum blanditiis architecto quos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center my-5 pb-4">
            <h6 class="fw-bold">Search Your Questions</h6>
            <div class="footer-faqs d-flex justify-content-center">
                <input type="text" placeholder="email" id=" email">
                <button class="btn btn-sm btn-outline-secondary">submit</button>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- kontak -->
    <div class="kontak-kami-container container mt-5">
        <h3 class="text-center fw-bold">Kontak Kami</h3>
        <div class="row justify-content-center mt-4">
            <div class="col-md-3 text-center">
                <i class="fab fa-whatsapp fa-2x mb-2"></i>
                <p>WhatsApp: <a href="https://wa.me/nomorwhatsapp" target="_blank">+62 812-3456-7890</a></p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fab fa-twitter fa-2x mb-2"></i>
                <p>Twitter: <a href="https://twitter.com/akun_twitter" target="_blank">@akun_twitter</a></p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fab fa-instagram fa-2x mb-2"></i>
                <p>Instagram: <a href="https://instagram.com/akun_instagram" target="_blank">@akun_instagram</a></p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fab fa-tiktok fa-2x mb-2"></i>
                <p>TikTok: <a href="https://tiktok.com/@akun_tiktok" target="_blank">@akun_tiktok</a></p>
            </div>
        </div>
    </div>
    <!-- end -->

</x-app>