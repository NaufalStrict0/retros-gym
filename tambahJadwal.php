<?php
    include "config/fungsi.php";
    include "config/koneksi.php";
    $tampil = mysqli_query($koneksi, "select member_id,nama_member from member order by member_id asc");
?>
<section class="content">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM TAMBAH JADWAL LATIHAN</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <!-- Jika submit foto, harus ada enctype="multipart/form-data-->
        <form autocomplete="off" class="form-horizontal" method="post" action="prosesTambahJadwal.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Member</label>
                    <div class="col-sm-10">
                    <select name="member_id" class="form-control" require>
                    <?php while($row = mysqli_fetch_array($tampil, MYSQLI_ASSOC)) {?>
                            <option value="<?php echo $row['member_id'];?>">
                                <?php echo $row['nama_member'];}?>
                            </option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Latihan</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_latihan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Waktu Latihan</label>

                    <div class="col-sm-10">
                    <input type="time" class="form-control" name="wkt_latihan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Latihan</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jenis_latihan" maxlength="100" placeholder="JENIS LATIHAN" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Personal Trainer</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_pt" maxlength="100" placeholder="NAMA PERSONAL TRAINER" required>
                    </div>
                </div>
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">TAMBAH</button>
            
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
    </div>
</section>