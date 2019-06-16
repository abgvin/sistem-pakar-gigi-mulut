<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title"> Rules Sistem Pakar Penyakit Gigi dan Mulut</h4>
        <div class="update pull-right">
            <a href="pakar.php?a=rules" class="btn btn-info btn-round">Refresh</a>
            <a href="pakar.php?a=add-rules" class="btn btn-primary btn-round">Tambah Data</a>
        </div>
        </div>
        <div class="card-body">
        <div class="">
            <table class="table table-striped table-bordered" id="">
            <thead class=" text-primary">
               <!-- <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
               <th class="text-center"> Kode Penyakit </th>
               <th class="text-center"> Nama Penyakit </th>
               <th class="text-center"> Gejala </th>
               <th class="text-center"> Option </th>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $query = "SELECT tr.kode_penyakit, tp.nama_penyakit, tg.nama_gejala FROM tabel_rules tr, tabel_penyakit tp, tabel_gejala tg WHERE tr.kode_penyakit = tp.kode_penyakit AND tr.kode_gejala = tg.kode_gejala ORDER BY tr.kode_penyakit ASC";
            $sqls = mysqli_query($con, $query) or die(mysqli_error($con));
            foreach ($sqls as $sql ) { ?>
                <tr>
                    <!-- <td><//?= $no++ ?></td> -->
                    <td><?= $sql['kode_penyakit'] ?></td>
                    <td><?= $sql['nama_penyakit'] ?></td>
                    <td><?= $sql['nama_gejala'] ?></td>
                    <td>
                        <a href="pakar.php?a=del-rules&kode=<?= $sql['kode_penyakit'] ?>" class="btn btn-danger btn-round btn-sm">Del</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>