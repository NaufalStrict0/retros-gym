<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM TAMBAH MEMBER</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <!-- Jika submit foto, harus ada enctype="multipart/form-data-->
        <form autocomplete="off" class="form-horizontal" method="post" action="prosesTambahMember.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                        <input id="nama" type="text" class="form-control" name="namaMember" maxlength="100" placeholder="NAMA MEMBER" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No.Hp</label>
                    <div class="col-sm-10">
                        <input type="phone" class="form-control" name="noHp" maxlength="12" placeholder="NOMOR HP" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>

                    <div class="col-sm-10">
                    <select name="gender" class="form-control">
                        <option value="Laki - Laki" >Laki - Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" maxlength="100" placeholder="NAMA MEMBER" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Daftar</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggalDaftar" placeholder="TANGGAL DAFTAR" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Berlaku Member</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggalBerlaku" placeholder="TANGGAL BERLAKU" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">PASSWORD</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" maxlength="100" placeholder="PASSWORD" required>
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