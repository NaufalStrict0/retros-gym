<?php
    include "config/fungsi.php";
    include "config/koneksi.php";
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM jadwal_latihan where jadwal_latihan_id='".$id."' ");
    $hasil = mysqli_fetch_array($tampil);

?>
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM EDIT JADWAL</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="prosesEditJadwal.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL LATIHAN</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_latihan" maxlength="25" value="<?php echo $hasil['tanggal_latihan']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">WAKTU LATIHAN</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="wkt_latihan" value="<?php echo fungsi_waktu($hasil['waktu_latihan']); ?>">
                    </div>
                </div>                              
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">JENIS LATIHAN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_hp" maxlength="16" value="<?php echo $hasil['jenis_latihan']; ?>" placeholder="JENIS LATIHAN" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA PT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tgl_daftar" maxlength="160" value="<?php echo $hasil['nama_pt']; ?>" placeholder="NAMA PT" readonly>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">UPDATE</button>
            
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
    </div>
</section>