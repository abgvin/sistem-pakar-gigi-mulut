<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        <h4 class="card-title"> Tabel Penyakit Gigi dan Mulut</h4>
        <div class="update pull-right">
            <a href="pakar.php?a=add-penyakit" class="btn btn-primary btn-round">Tambah Data</a>
        </div>
        </div>
        <div class="card-body">
        <div class="">
            <table class="table table-striped table-bordered" id="table">
            <thead class=" text-primary">
               <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="text-center">Kode Penyakit </th>
               <th class="text-center"> Nama Penyakit </th>
               <th class="text-center"> Keterangan </th>
               <th class="text-center"> Solusi</th>
               <th class="text-center"> Option </th>
            </thead>
            <tbody>
            <?php
            $no = 1;
            $sqls = mysqli_query($con, "SELECT * FROM tabel_penyakit") or die(mysqli_error($con));
            foreach ($sqls as $sql ) { ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $sql['kode_penyakit'] ?></td>
                    <td class="text-center"><?= $sql['nama_penyakit'] ?></td>
                    <td class="text-justify"><?= $sql['keterangan'] ?></td>
                    <td class="text-justify"><?= $sql['solusi'] ?></td>
                    <td class="text-center">
                        <a href="pakar.php?a=edit-penyakit&kode=<?= $sql['kode_penyakit'] ?>" class="btn btn-primary btn-round btn-sm">Edit</a> <hr>
                        <a href="pakar.php?a=del-penyakit&kode=<?= $sql['kode_penyakit'] ?>" class="btn btn-danger btn-round btn-sm">Del</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>