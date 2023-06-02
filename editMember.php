<?php
    include "config/fungsi.php";
    include "config/koneksi.php";
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM member where member_id='".$id."' ");
    $hasil = mysqli_fetch_array($tampil);

?>
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM EDIT MEMBER</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="prosesEditMember.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA MEMBER</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_member" maxlength="25" value="<?php echo $hasil['nama_member']; ?>" placeholder="NAMA PELANGGAN" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">GENDER</label>
                    <div class="col-sm-10">
                    <select name="gender" class="form-control col-sm-10" readonly>
                            <!--UPLOAD KTP-->
                            <option value="Laki - Laki" <?php if($hasil['gender']=="Laki - Laki"){ echo "selected"; } ?> >Laki - Laki</option>
                            <option value="Perempuan" <?php if($hasil['gender']=="Perempuan"){ echo "selected"; } ?> >Perempuan</option>
                    </select>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ALAMAT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" value="<?php echo $hasil['alamat']; ?>" placeholder="ALAMAT" readonly>
                    </div>
                </div>                              
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NOMOR HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_hp" maxlength="16" value="<?php echo $hasil['no_hp']; ?>" placeholder="NO. HP PELANGGAN" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL DAFTAR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tgl_daftar" maxlength="160" value="<?php echo $hasil['tgl_daftar_member']; ?>" placeholder="TANGGAL DAFTAR" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL PERPANJANG</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_perpanjang" value="<?php echo $hasil['tgl_perpanjang_member']; ?>" placeholder="TANGGAL PERPANJANG MEMBER">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL HABIS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tgl_habis" value="<?php echo $hasil['tgl_habis_member']; ?>" placeholder="TANGGAL HABIS MEMBER" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">PASSWORD BARU</label>

                    <div class="col-sm-10">
                    <label>Kosongkan jika tidak ada perubahan atau 4-16 karakter untuk meresetnya</label>
                        <input type="password" class="form-control" name="password" maxlength="16">

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