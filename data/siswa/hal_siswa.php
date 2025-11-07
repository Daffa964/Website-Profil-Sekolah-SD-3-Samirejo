<section id="profil" class="profil">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Data Siswa</h2>
            </div>
            <div class="card-body">
                <form method="POST" class="form-inline" action="">
                    <label>Pilih Kelas</label>
                    <select class="form-control ml-2 mr-2" name="id_kelas">
                        <option value="">-- Pilih Kelas --</option>
                        <?php 
                        $c = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        while ($dc = mysqli_fetch_array($c)) { ?>
                            <option value="<?= $dc['id_kelas'] ?>"><?= $dc['kelas'] ?></option>
                        <?php } ?>
                    </select>
                    <label>Masukkan NISN</label>
                    <input type="text" class="form-control ml-2 mr-2" name="nisn" placeholder="Ketik NISN">
                    <button class="btn btn-primary ml-2" name="filter"><i class="icofont-search"></i> Cari</button>
                </form>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Detail Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['filter'])) {
                                $no = 1;
                                $query = null;

                                // Prioritize NISN search if provided
                                if (isset($_POST['nisn']) && !empty($_POST['nisn'])) {
                                    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nisn = '$nisn'");
                                } 
                                // Fallback to class search if NISN is empty and class is selected
                                elseif (isset($_POST['id_kelas']) && !empty($_POST['id_kelas'])) {
                                    $id_kelas = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_kelas = '$id_kelas'");
                                }

                                if ($query && mysqli_num_rows($query) > 0) {
                                    while ($fetch = mysqli_fetch_array($query)) {
                                        // Fetch class information
                                        $id_kelas = $fetch['id_kelas'];
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$id_kelas'");
                                        $d = mysqli_fetch_array($data); // Get class data
                                        ?>
                                        <tr>
                                            <td width="50"><b><?= $no++; ?>.</b></td>
                                            <td><?= $fetch['nisn'] ?></td>
                                            <td><?= $fetch['nama_siswa'] ?></td>
                                            <td><?= $d['kelas'] ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#DetailSiswaModal<?= $fetch['id_siswa'] ?>" class="btn btn-dark btn-xs text-warning"><i class="icofont-ui-user"></i> Detail</a>
                                                <!-- Modal detail -->
                                                <div class="modal fade" id="DetailSiswaModal<?= $fetch['id_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Profil Siswa</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="container" width="100%">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Nama Lengkap</th>
                                                                            <td><?= $fetch['nama_siswa'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>NIS</th>
                                                                            <td><?= $fetch['nis'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>NISN</th>
                                                                            <td><?= $fetch['nisn'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Tempat dan Tanggal Lahir</th>
                                                                            <td><?= $fetch['tempat_lahir'] ?>,
                                                                                <?php $a = $fetch['tanggal_lahir'];
                                                                                echo date("d-M-Y", strtotime($a)) ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Jenis Kelamin</th>
                                                                            <td>
                                                                                <?php
                                                                                // Use 'jk' as the correct gender column with 'lk' and 'pr' values
                                                                                $gender = isset($fetch['jk']) ? $fetch['jk'] : '';
                                                                                if ($gender == 'lk') {
                                                                                    echo "Laki-Laki";
                                                                                } elseif ($gender == 'pr') {
                                                                                    echo "Perempuan";
                                                                                } else {
                                                                                    echo "Tidak Diketahui";
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Alamat</th>
                                                                            <td><?= $fetch['alamat'] ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="5" class="text-center">Tidak ada siswa ditemukan</td></tr>';
                                }
                            } else {
                                echo '<tr><td colspan="5" class="text-center">Silakan pilih kelas atau masukkan NISN untuk mencari</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>