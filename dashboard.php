<?php
ob_start();
session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: ./login.php?pesan=belum_login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/mylogo-128x128.png" type="image/x-icon" />
    <title>Dashboard | Afriyanto</title>
    <?php
    include './component/css.php';
    ?>
    <link rel="stylesheet" href="./assets/css/dashboard.css">

</head>

<body>

    <!-- Header -->
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboard.php">Afrian's Rent</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars">
                        <use xlink:href="#list" />
                    </i>
                </button>
            </li>
        </ul>
    </header>
    <!-- Header End -->

    <div class="container-fluid">
        <div class="row">

            <!-- SideBar -->
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-dark" data-bs-theme="dark">
                <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Afrian's Rent</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-lg-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="navbar-nav flex-column list-group rounded-0">
                            <li class="list-group-item list-group-item-action py-2 border-0 active" aria-current="true">
                                <a class="nav-link" href="dashboard.php">
                                    <i class="fa-solid fa-gauge me-2" style="width:16px;"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="categories.php">
                                    <i class="fa-solid fa-list me-2" style="width:16px;"></i>
                                    Categories
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="cars.php">
                                    <i class="fa-solid fa-car me-2" style="width:16px;"></i>
                                    Cars
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="orders.php">
                                    <i class="fa-solid fa-clipboard me-2" style="width:16px;"></i>
                                    Orders
                                </a>
                            </li>
                            <li class="list-group-item py-2 border-0">
                                <hr class="my-3 ">
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="users.php">
                                    <i class="fa-solid fa-user me-2" style="width:16px;"></i>
                                    Users
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="index.php" target="_blank">
                                    <i class="fa-solid fa-house me-2" style="width:16px;"></i>
                                    Website
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action py-2 border-0">
                                <a class="nav-link" href="./proses/proses_logout.php">
                                    <i class="fa-solid fa-arrow-right-from-bracket me-2" style="width:16px;"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- SideBar End -->

            <!-- Main Section -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Dashboard</h2>
                </div>

                <!-- Widget -->
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card text-center">
                            <h5 class="card-header text-white bg-primary">Category of Cars</h5>
                            <div class="card-body">
                                <?php
                                include './proses/koneksi.php';
                                $sql = "SELECT COUNT(*) AS kategori_mobil FROM tbl_kategori_mobil";
                                $hasil = mysqli_query($con, $sql);

                                if (mysqli_num_rows($hasil) > 0) {
                                    $row = mysqli_fetch_assoc($hasil);
                                    $total_mobil = $row['kategori_mobil'];
                                    echo '<h5 class="card-title">' . $total_mobil . '</h5>';
                                } else {
                                    echo '<h5 class="card-title">No Data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card text-center">
                            <h5 class="card-header text-white bg-primary">Types of Cars</h5>
                            <div class="card-body">
                                <?php
                                include './proses/koneksi.php';
                                $sql = "SELECT COUNT(*) AS jenis_mobil FROM tbl_mobil";
                                $hasil = mysqli_query($con, $sql);

                                if (mysqli_num_rows($hasil) > 0) {
                                    $row = mysqli_fetch_assoc($hasil);
                                    $total_mobil = $row['jenis_mobil'];
                                    echo '<h5 class="card-title">' . $total_mobil . '</h5>';
                                } else {
                                    echo '<h5 class="card-title">No Data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card text-center">
                            <h5 class="card-header text-white bg-primary">Number of Cars</h5>
                            <div class="card-body">
                                <?php
                                include './proses/koneksi.php';
                                $sql = "SELECT SUM(stock) AS total_mobil FROM tbl_mobil";
                                $hasil = mysqli_query($con, $sql);

                                if (mysqli_num_rows($hasil) > 0) {
                                    $row = mysqli_fetch_assoc($hasil);
                                    $total_mobil = $row['total_mobil'];
                                    echo '<h5 class="card-title">' . $total_mobil . '</h5>';
                                } else {
                                    echo '<h5 class="card-title">No Data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card text-center">
                            <h5 class="card-header text-white bg-primary">Number of Orders</h5>
                            <div class="card-body">
                                <?php
                                include './proses/koneksi.php';
                                $sql = "SELECT COUNT(*) AS ttl_transaksi FROM tbl_transaksi";
                                $hasil = mysqli_query($con, $sql);

                                if (mysqli_num_rows($hasil) > 0) {
                                    $row = mysqli_fetch_assoc($hasil);
                                    $total_mobil = $row['ttl_transaksi'];
                                    echo '<h5 class="card-title">' . $total_mobil . '</h5>';
                                } else {
                                    echo '<h5 class="card-title">No Data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget End -->

                <!-- Data Tables -->
                <!-- Data Tables -->

            </main>
            <!-- Main Section -->

        </div>
    </div>

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

    <script>
        $(document).ready(function() {
            $("#data").DataTable();
        });
    </script>
    <!-- Script End -->
</body>

</html>