<div>
    <div>
        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('img/logo2.jpg') }}" alt="Logo" style="height: 50px;">


                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">

                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#produk" class="nav-item nav-link active">Produk</a>
                        <a href="#kontak" class="nav-item nav-link active">Kontak</a>
                        <a href="#artikel" class="nav-item nav-link active">Artikel</a>


                        <a href="/login" class="nav-item nav-link" wire:navigate>Login</a>

                    </div>

            </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h1 class="mb-5 display-3 text-light">Spesialis Spare Part Industri dan Alat Teknik</h1>
                    <h4 class="mb-3 text-secondary">Menerima pengiriman seluruh wilayah indonesia</h4>
                    <h4 class="mb-3 text-secondary">Menerima jasa lapis karet roda esek dan lapis karet pulley drum</h4>
                    <h4 class="mb-3 text-secondary">Menerima sambung belt conveyor dengan sistem dingin dan panas</h4>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{ asset('img/product/WhatsApp Image 2023-12-14 at 18.03.03 (1).jpeg') }}"
                                    class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Timbangan</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{ asset('img/product/beltconveyot.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Belt Conveyor</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{ asset('img/product/WhatsApp Image 2023-12-14 at 18.03.02.jpeg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Dinamo Motor</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pilihan Lengkap</h5>
                            <p class="mb-0">Kami Menyediakan Ratusan Jenis Produk dan Menerima Sesuai Permintaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Security Payment</h5>
                            <p class="mb-0">100% security payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>30 Day Return</h5>
                            <p class="mb-0">30 day money guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>24/7 Support</h5>
                            Support every time fast

                            <div class="my-3 ">
                                <span>Admin 1 : 0858-6106-3878</span>
                                <a href="https://wa.me/6285861063878" class="btn btn-primary text-white"><i
                                        class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>&nbsp;WhatsApp 1</a>
                            </div>
                            <div class="my-3 ">
                                <span>
                                    Admin 2 : ‪0821‑3118‑4425</span>
                                <a href="https://wa.me/6282131184425" class="btn btn-primary text-white"><i
                                        class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>&nbsp;WhatsApp 2</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div id="produk">
        <livewire:home.produk-component />
    </div>
    <!-- Fruits Shop End-->







    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>satisfied customers</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality of service</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->

    {{-- Article Start --}}
    <div id="artikel">
        <livewire:home.article-component />
    </div>
    {{-- Article End --}}


    <!-- Tastimonial Start -->
    <livewire:home.comments />
    <!-- Tastimonial End -->


    <!-- Identitas Section Start-->

    <div id="kontak" class="container-fluid banner bg-secondary my-5">
        <div class="text-center mt-5">
            <h1 class="display-3 text-white">Hubungi Kami</h1>
        </div>
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="py-4">
                        <iframe class="w-100 p-5"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.958130381241!2d112.43856728847385!3d-7.474499438713928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d8f15010c43%3A0x6e3d24151d72594!2sJl.%20Miji%20Baru%20Satu%2C%20Mergelo%2C%20Kota%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1703083159448!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="fs-3 text-white" style="margin-bottom: 40px;"><i class="fa-solid fa-envelope fa-2xl"
                            style="color: #ffffff;"></i>&nbsp; momenteknik.id@gmail.com</p>
                    <p class="fs-3 text-white" style="margin-bottom: 40px;"><i
                            class="fa-solid fa-location-dot fa-2xl" style="color: #ffffff;"></i>&nbsp; Miji Baru
                        Executive D4 Jl. Tropodo, Miji, Prajurit Kulon, Kota Mojokerto</p>
                    <div class="my-3 text-white">
                        <span>Admin 1 : 0858-6106-3878</span>
                        <a href="https://wa.me/6285861063878" class="btn btn-primary text-white"><i
                                class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>&nbsp;WhatsApp 1</a>
                    </div>
                    <div class="my-3 text-white">
                        <span>
                            Admin 2 : 0821‑3118‑4425</span>
                        <a href="https://wa.me/6282131184425" class="btn btn-primary text-white"><i
                                class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>&nbsp;WhatsApp 2</a>
                    </div>
                    <div class="my-3 text-white">
                        <span>
                            <a class="text-white fw-bold" href="https://www.instagram.com/momenteknik.id?igsh=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram"></i> @momenteknik.id</a></span>
                            <a class="text-white fw-bold d-block mt-2" href="https://www.facebook.com/profile.php?id=61555696793494&mibextid=zOiqff"><i class="fa-brands fa-facebook"></i>&nbsp;Momen Teknik</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Identitas Section End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>MM
                            Teknik</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>
</div>
