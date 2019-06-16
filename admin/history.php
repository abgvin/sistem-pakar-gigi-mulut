<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title"> Tabel Riwayat Konsultasi User</h4>
        <div class="update pull-right">
            <a href="pakar.php?a=history" class="btn btn-primary btn-round">Refresh</a>
        </div>
        </div>
        <div class="card-body">
        <div class="">
            <table class="table table-hover" id="">
            <thead class=" text-primary">
               <!-- <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
               <!-- <th class="text-center"> Tanggal Konsul  </th> -->
               <th class="text-center"> Nama User </th>
               <th class="text-center"> Usia </th>
               <th class="text-center"> Alamat </th>
               <th class="text-center"> Gejala Yang Di pilih</th>
               <!-- <th class="text-center"> Gejala Yang dipilih </th> -->
               <th class="text-center"> Hasil Diagnosa </th>
               <th class="text-center"> Option </th>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $sqls = mysqli_query($con, "SELECT h.username, h.nama_lengkap, h.nama_penyakit, h.nama_gejala, h.tanggal, t.usia, t.alamat FROM hasil_konsul h, tabel_user t WHERE h.username = t.username") or die(mysqli_error($con));
            foreach ($sqls as $sql) { ?>
                <tr>
                    <!-- <td class="text-center"><//?= $no++ ?></td> -->
                    <!-- <td class="text-center"><//?= $sql['tanggal'] ?></td> -->
                    <td class="text-center"><?= $sql['nama_lengkap'] ?></td>
                    <td class="text-center"><?= $sql['usia'] ?></td>
                    <td class="text-center"><?= $sql['alamat'] ?></td>
                    <td><?= $sql['nama_gejala'] ?></td>
                    <!-- <td class="text-center"><//?= $sql['nama_gejala'] ?></td> -->
                    <td class="text-center">
                    <?php
                        if ( $sql['nama_penyakit'] == 'Kelainan Dentofacial' || $sql['nama_penyakit'] == 'Kista dalam Rongga Mulut') { $penyakit = '-'; } else { $penyakit =  $sql['nama_penyakit']; }
                        ?>
                    <?= $penyakit ?></td>
                    <td class="text-center">
                        <a href="pakar.php?a=del-history&username=<?= $sql['username'] ?>" class="btn btn-danger btn-round btn-sm">Del</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>