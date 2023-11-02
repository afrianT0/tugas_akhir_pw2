<section id="rent">
    <div class="container">
        <div class="d-flex text-center justify-content-center align-items-center py-5">
            <div class="text">
                <h1 class="mb-3">Rent</h1>
                <p class="fs-5 mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Eveniet excepturi aut, maiores dolores necessitatibus porro quaerat deleniti ea reiciendis architecto molestias eligendi.
                    Dolor rerum, quam nemo est et repudiandae commodi.</p>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <form action="./proses/proses_rent.php" method="POST">
                            <div class="row justify-content-center text-start">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <?php
                                                include './proses/koneksi.php';

                                                $query = mysqli_query($con, "SELECT SUBSTRING(MAX(id_transaksi), 8) as id FROM tbl_transaksi");
                                                $data = mysqli_fetch_array($query);

                                                $kodeBarang = $data['id'];
                                                $urutan = (int) ($kodeBarang);
                                                $urutan++;

                                                $huruf = "ID-TRS-";
                                                $kodeBarang = $huruf . sprintf("%03s", $urutan);

                                                mysqli_close($con);
                                                ?>
                                                <input type="hidden" class="form-control mb-2" name="idOrders" value="<?php echo $kodeBarang ?>" readonly required>
                                                <label for="nama">Your Name</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                            </div>
                                            <div class="col">
                                                <label for="nama">Phone</label>
                                                <input type="tel" class="form-control" name="noHP" placeholder="8888 8888 8888" maxlength="13" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kode">Stock Car</label>
                                        <select class="form-control" name="kode" id="kode" onchange="updateHarga(this)">
                                            <option selected>Select your cars</option>
                                            <?php
                                            include './proses/koneksi.php';
                                            $sql = mysqli_query($con, "SELECT * FROM tbl_mobil JOIN tbl_kategori_mobil ON tbl_kategori_mobil.id_kategori = tbl_mobil.id_kategori");
                                            while ($data = mysqli_fetch_assoc($sql)) {
                                                if ($data['stock'] > 0) {
                                                    echo '<option value="' . $data['id_mobil'] . '" data-harga="' . $data['harga'] . '">' . $data['nama_kategori'] . ' - ' . $data['nama_mobil'] . '</option>';
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label for="nama">Identity</label>
                                                <select class="form-select" name="idn" aria-label="IdentityLabel">
                                                    <option selected>Select your identity</option>
                                                    <option value="KTP">KTP</option>
                                                    <option value="SIM">SIM</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="nama">Identity Number</label>
                                                <input type="text" class="form-control" name="noidn" id="noidn" placeholder="Identity Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label for="nama">Price</label>
                                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" readonly required>
                                            </div>
                                            <div class="col">
                                                <label for="hari"></label>
                                                <input type="text" class="form-control" name="satuan" placeholder="per Days" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label for="jumlah">Amount</label>
                                                <input type="number" class="form-control" step="0.01" max="100" name="jumlah" id="jumlah" placeholder="Jumlah" onchange="updateTotal()" required>
                                            </div>
                                            <div class="col">
                                                <label for="hari"></label>
                                                <input type="text" class="form-control" name="satuan" placeholder="per Days" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jumlah">Total Payment</label>
                                        <input type="number" class="form-control" name="total" id="total" placeholder="Total Pembayaran" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Process">
                                <input type="reset" class="btn btn-secondary" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>