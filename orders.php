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
    <title>Orders | Afriyanto</title>
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
                            <li class="list-group-item list-group-item-action py-2 border-0">
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
                            <li class="list-group-item list-group-item-action py-2 border-0 active" aria-current="true">
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
                <h2 class="pt-3 pb-2 mb-3 border-bottom">Orders Data</h2>
                <div class="gap-2 mb-3 d-md-block">

                    <!-- Modal Insert-->
                    <!-- Modal Insert End -->

                    <!-- Refresh Button -->
                    <a href="orders.php" class="btn btn-success btn-sm me-1 mb-1" style="width: 90px;">
                        <i class="fa-solid fa-arrows-rotate"></i>
                        Refresh
                    </a>
                    <!-- Refresh Button End -->

                    <!-- Modal Edit -->
                    <!-- Modal Edit End -->

                    <!-- Modal View -->
                    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditLabel">View Orders</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="idOrders">ID Orders</label>
                                                    <input type="text" class="form-control mb-2" name="idOrders" id="idOrders" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="status">Status</label>
                                                    <?php
                                                    include './proses/koneksi.php';
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    $query = mysqli_query($con, "SELECT * FROM tbl_transaksi JOIN tbl_mobil ON tbl_mobil.id_mobil = tbl_transaksi.id_mobil");

                                                    while ($data = mysqli_fetch_assoc($query)) {
                                                        $tglawal = strtotime($data['tgl_transaksi']);

                                                        $jumlah = $data['jumlah'];
                                                        $sekarang = strtotime(date('Y-m-d'));

                                                        $jatuhtempo = strtotime("+" . $jumlah . " days", $tglawal);
                                                        $minus1 = strtotime("-1 day", $jatuhtempo);

                                                        if ($sekarang < $minus1) {
                                                            $_SESSION['status'] = 'Berjalan';
                                                        } elseif ($sekarang === $minus1) {
                                                            $_SESSION['status'] = '-1 hari';
                                                        } else {
                                                            $_SESSION['status'] = 'Habis';
                                                        }
                                                    }
                                                    ?>
                                                    <input type="text" class="form-control mb-2" name="status" value="<?php echo $_SESSION['status'] ?>" id="status" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="idMobil">Car Name</label>
                                                    <input type="text" class="form-control mb-2" name="idMobil" id="idMobil" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="date">Date Orders</label>
                                                    <input type="text" class="form-control mb-2" name="date" id="date" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="customers">Customers</label>
                                                    <input type="text" class="form-control mb-2" name="customers" id="customers" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="identity">Identity</label>
                                                    <input type="text" class="form-control mb-2" name="identity" id="identity" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="noIdentity">No. Identity</label>
                                                    <input type="text" class="form-control mb-2" name="noIdentity" id="noIdentity" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="phone">Phone</label>
                                                    <input type="tel" class="form-control mb-2" name="phone" id="phone" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="price">Price</label>
                                                    <input type="text" class="form-control mb-2" name="price" id="price" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="amount">Amount</label>
                                                    <input type="text" class="form-control mb-2" name="amount" id="amount" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="unit">Unit</label>
                                                    <input type="text" class="form-control mb-2" name="unit" id="unit" readonly>
                                                </div>
                                                <div class="col">
                                                    <label for="total">Total</label>
                                                    <input type="text" class="form-control mb-2" name="total" id="total" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal View End -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalHapusLabel">Delete Cars</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this data?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="idMobil2" id="idMobil2">
                                        <input type="submit" class="btn btn-primary" name="delete" value="Delete">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['delete'])) {
                        include './proses/koneksi.php';

                        $id = $_POST['idMobil2'];

                        $sql = "DELETE FROM tbl_transaksi WHERE id_transaksi = '" . $id . "'";

                        if (!mysqli_query($con, $sql)) {
                            die('Error: ' . mysqli_error($con));
                        }

                        mysqli_close($con);
                    }
                    ?>
                    <!-- Modal Delete End -->

                </div>

                <!-- Data Tables -->
                <div class="table-responsive small">
                    <table id="data" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th class="bg-primary text-white">No.</th>
                                <th class="bg-primary text-white">ID Orders</th>
                                <th class="bg-primary text-white">Car Name</th>
                                <th class="bg-primary text-white">Date Orders</th>
                                <th class="bg-primary text-white">Customers</th>
                                <th class="bg-primary text-white">Identity</th>
                                <th class="bg-primary text-white">No. Identity</th>
                                <th class="bg-primary text-white">Phone</th>
                                <th class="bg-primary text-white">Price</th>
                                <th class="bg-primary text-white">Amount</th>
                                <th class="bg-primary text-white">Unit</th>
                                <th class="bg-primary text-white">Total</th>
                                <th class="bg-primary text-white">Status</th>
                                <th class="bg-primary text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './proses/koneksi.php';
                            date_default_timezone_set('Asia/Jakarta');
                            $query = mysqli_query($con, "SELECT * FROM tbl_transaksi JOIN tbl_mobil ON tbl_mobil.id_mobil = tbl_transaksi.id_mobil");
                            $counter = 1;

                            while ($data = mysqli_fetch_assoc($query)) {
                                $tglawal = strtotime($data['tgl_transaksi']);

                                $jumlah = $data['jumlah'];
                                $sekarang = strtotime(date('Y-m-d'));

                                $jatuhtempo = strtotime("+" . $jumlah . " days", $tglawal);
                                $minus1 = strtotime("-1 day", $jatuhtempo);

                                if ($sekarang < $minus1) {
                                    $_SESSION['status'] = '<span class="badge text-bg-success">Berjalan</span>';
                                } elseif ($sekarang === $minus1) {
                                    $_SESSION['status'] = '<span class="badge text-bg-warning">-1 hari</span>';
                                } else {
                                    $_SESSION['status'] = '<span class="badge text-bg-danger">Habis</span>';
                                }

                                echo "<tr>";
                                echo "<td>" . $counter++ . "</td>";
                                echo "<td>" . $data['id_transaksi'] . "</td>";
                                echo "<td>" . $data['nama_mobil'] . "</td>";
                                echo "<td>" . $data['tgl_transaksi'] . "</td>";
                                echo "<td>" . $data['nama_pelanggan'] . "</td>";
                                echo "<td>" . $data['identitas'] . "</td>";
                                echo "<td>" . $data['no_identitas'] . "</td>";
                                echo "<td>" . $data['no_hp'] . "</td>";
                                echo "<td>Rp " . number_format($data['harga'], 0, ',', '.') . "</td>";
                                echo "<td>" . $data['jumlah'] . "</td>";
                                echo "<td>" . $data['satuan'] . "</td>";
                                echo "<td>Rp " . number_format($data['total'], 0, ',', '.') . "</td>";
                                echo "<td>" . $_SESSION['status'] . "</td>";
                                echo "<td>";
                                echo '<button type="button" class="btn btn-success btn-sm me-2 editBtn" data-bs-toggle="modal" data-bs-target="#modalEdit" 
                                data-idorders="' . $data['id_transaksi'] . '" data-idmobil="' . $data['nama_mobil'] . '" data-tgltransaksi="' . $data['tgl_transaksi'] . '" 
                                data-customers="' . $data['nama_pelanggan'] . '" data-identitas="' . $data['identitas'] . '" data-noidentitas="' . $data['no_identitas'] . '" 
                                data-nohp="' . $data['no_hp'] . '"  data-harga="' . $data['harga'] . '" data-jumlah="' . $data['jumlah'] . '" data-satuan="' . $data['satuan'] . '"
                                data-total="' . $data['total'] . '">
                                <i class="fa-solid fa-eye"></i>
                                </button>';
                                echo '<button type="button" class="btn btn-danger btn-sm me-2 deleteBtn" data-bs-toggle="modal" data-bs-target="#modalHapus" 
                                data-idorders="' . $data['id_transaksi'] . '" >
                                <i class="fa-solid fa-trash"></i>
                                </button>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- Data Tables End -->

            </main>
            <!-- Main Section End -->

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

        $(document).ready(function() {
            $(".editBtn").click(function() {
                var idorders = $(this).data("idorders");
                var idmobil = $(this).data("idmobil");
                var tgltransaksi = $(this).data("tgltransaksi");
                var customers = $(this).data("customers");
                var identitas = $(this).data("identitas");
                var noidentitas = $(this).data("noidentitas");
                var nohp = $(this).data("nohp");
                var harga = $(this).data("harga").toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR"
                });
                var jumlah = $(this).data("jumlah");
                var satuan = $(this).data("satuan");
                var total = $(this).data("total").toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR"
                });

                $("#idOrders").val(idorders);
                $("#idMobil").val(idmobil);
                $("#date").val(tgltransaksi);
                $("#customers").val(customers);
                $("#identity").val(identitas);
                $("#noIdentity").val(noidentitas);
                $("#phone").val(nohp);
                $("#price").val(harga);
                $("#amount").val(jumlah);
                $("#unit").val(satuan);
                $("#total").val(total);
            });
        });

        $(document).ready(function() {
            $(".deleteBtn").click(function() {
                var idKategori = $(this).data("idorders");
                $("#idMobil2").val(idKategori);
            });
        });
    </script>
    <!-- Script End -->
</body>

</html>