<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/mylogo-128x128.png" type="image/x-icon" />
    <title>Home | Afriyanto</title>
    <!-- CSS -->
    <?php
    include './component/css.php';
    ?>
    <link rel="stylesheet" href="./assets/css/index.css">
    <!-- CSS -->

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-top" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-body-secondary shadow-lg" id="navbar-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="./assets/img/afrian_rent.png" class="img-fluid" alt="Afrian Rent" style="width: 150px;">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#home" class="nav-item nav-link px-3">Home</a>
                    <a href="#about" class="nav-item nav-link px-3">About</a>
                    <a href="#catalog" class="nav-item nav-link px-3">Catalog</a>
                    <a href="#rent" class="nav-item nav-link px-3">Rent</a>
                    <a href="#contact" class="nav-item nav-link px-3">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero -->
    <div id="home">
        <div class="text-center" id="bg-image">
            <div class="mask d-flex justify-content-center align-items-center h-100">
                <div class="text-light">
                    <img src="./assets/img/afrian_rent.png" class="img-fluid mb-3 mw-25" alt="Afrian Rent" style="width: 80%;">
                    <h1 class="mb-3">Welcome to our website</h1>
                </div>
            </div>
            <div class="mask"></div>
        </div>
    </div>
    <!-- Hero End-->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="d-flex text-center justify-content-center align-items-center py-5">
                <div class="text">
                    <h1 class="mb-3">About Us</h1>
                    <p class="fs-5 mb-3">We at <strong>Afrian's Rent</strong> are a leading provider of car rental services
                        committed to delivering unforgettable travel experiences and exceptional service to our customers.
                        With a wide fleet of well-maintained vehicles, a team of experienced professionals, and competitive prices,
                        we are ready to meet your car rental needs with reliability and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Catalog -->
    <section id="catalog" class="bg-body-secondary">
        <div class="container">
            <div class="d-flex text-center justify-content-center align-items-center py-5">
                <div class="text">
                    <h1 class="mb-3">Our Catalog</h1>
                    <p class="fs-5 mb-3">Explore our extensive car catalog and discover the perfect ride for your journey with <strong>Afrian's Rent</strong>.
                        From sleek sedans to spacious SUVs, our diverse range of vehicles is designed to cater to your unique preferences and needs.
                        Whether you're embarking on a family vacation, a business trip, or an adventurous road trip, our catalog offers a wide selection of reliable
                        and well-maintained cars from leading brands. Experience comfort, style, and convenience as you hit the road with confidence,
                        knowing that you've chosen the ideal vehicle from our exceptional car catalog.</p>
                    <div class="category">
                        <h2 class="mt-5 mb-3">Category SUV</h2>
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/eaaa5f5e40e9438f82679396d5b1c17e_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/eaaa5f5e40e9438f82679396d5b1c17e_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Toyota Raize 2021</h5>
                                    <p class="small text-muted mb-3">Toyota Raize 1.0TG Sport CVT TSS</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 350.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/4cd0101e68114f0a945a91b3fb3eacd5_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/4cd0101e68114f0a945a91b3fb3eacd5_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Mitsubishi Pajero Sport 2021</h5>
                                    <p class="small text-muted mb-3">Mitsubishi Pajero Sport Dakar Ultimate 4x4 AT</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 500.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/3e9b231aad2f412ea749a6b201f8641c_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/3e9b231aad2f412ea749a6b201f8641c_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Toyota Fortuner 2021</h5>
                                    <p class="small text-muted mb-3">Toyota Fortuner 2.4 VRZ A/T 4x4</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 500.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/68e053797f794c3a86ba8cc8430f1d30_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/68e053797f794c3a86ba8cc8430f1d30_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Daihatsu Terios 2019</h5>
                                    <p class="small text-muted mb-3">Daihatsu Terios R A/T Deluxe</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 300.000 / Days</div>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-5 mb-3">Category MPV</h2>
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/63490eb9b5d1488691882d3f41b8484b_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/63490eb9b5d1488691882d3f41b8484b_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Toyota Avanza 2022</h5>
                                    <p class="small text-muted mb-3">Toyota Avanza 1.5 G CVT TSS</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 280.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/8a542591df364fbc9b1aec6c84bb6a72_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/8a542591df364fbc9b1aec6c84bb6a72_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Daihatsu Xenia 2021</h5>
                                    <p class="small text-muted mb-3">2022 Daihatsu Xenia 1.3R CVT</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 280.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/779c2f9d3e594806b7223cea286aab28_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/779c2f9d3e594806b7223cea286aab28_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Daihatsu Sigra 2022</h5>
                                    <p class="small text-muted mb-3">Daihatsu Sigra 1.0 D MT 2022</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 250.000 / Days</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://images.autofun.co.id/file1/6f56a26a83a54a4cbb764b5db548d79e_1608x906.jpg" data-lightbox="photos"><img class="img-fluid img-thumbnail" src="https://images.autofun.co.id/file1/6f56a26a83a54a4cbb764b5db548d79e_1608x906.jpg"></a>
                                <div class="p-4">
                                    <h5>Toyota Calya 2022</h5>
                                    <p class="small text-muted mb-3">Toyota Calya G AT</p>
                                    <div class="badge text-bg-danger px-3 rounded-pill font-weight-normal">Rp 250.000 / Days</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Catalog End -->

    <!-- Rent -->
    <?php
    include './rent.php';
    ?>
    <!-- Rent End -->

    <!-- Contact -->
    <section id="contact" class="bg-body-secondary">
        <div class="container">
            <div class="d-flex text-center justify-content-center align-items-center py-5">
                <div class="text">
                    <h1 class="mb-3">Contact</h1>
                    <p class="fs-5 mb-3">Need assistance or ready to make a reservation?
                        Contact us at <strong>021-87654321</strong> or email us at <strong>afrianrent@email.com</strong>.
                        Our friendly and knowledgeable customer support team is available
                        to answer all your queries and provide personalized solutions tailored
                        to your car rental needs. Whether you have questions about our fleet, pricing,
                        or booking process, we are here to ensure a seamless and hassle-free experience.
                        Don't hesitate to reach out to us, and let us assist you in creating memorable moments on the road.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Footer -->
    <?php
    include './section/footer.php';
    ?>
    <!-- Footer End -->

    <!-- Script -->
    <?php
    include './component/js.php';
    ?>
    <script src="./assets/js/script.js"></script>
    <!-- Script -->
    <script>
        // Mengambil referensi elemen div alert
        var alertDiv = document.getElementById('alertDiv');

        // Mengatur tata letak teks menjadi rata tengah
        alertDiv.style.textAlign = 'center';
    </script>

</body>

</html>

<?php
if (isset($_GET['pesan'])) {
    // Mengambil notifikasi dari parameter URL
    $notif = $_GET['pesan'];

    // Menampilkan notifikasi
    echo '<script>alert("' . $notif . '");</script>';
}
?>