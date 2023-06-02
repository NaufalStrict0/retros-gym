<?php
  include "config/koneksi.php";
  include "config/fungsi.php";
?>

<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>      
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Perpanjang</th>
                    <th>Tanggal Berlaku</th>                    
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  
                    
                    //$tampil = mysqli_query($mysqli, "select * from barang");
                    $tampil = mysqli_query($koneksi, "SELECT * FROM member ORDER BY member_id asc");
                    $no =1;
                    while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                  <tbody>
                  <!--Di sini kita gak usah nampilkan rating juga gapapa, yang penting bisa INSERT + Foto lah-->
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $hasil['nama_member']; ?></td>
                    <td><?php echo $hasil['gender']; ?></td>
                    <td><?php echo $hasil['alamat']; ?></td>             
                    <td><?php echo $hasil['no_hp']; ?></td> 
                    <td><?php echo tgl_indo_singkat($hasil['tgl_daftar_member']); ?></td>
                    <td><?php echo tgl_indo_singkat($hasil['tgl_perpanjang_member']); ?></td>
                    <td><?php echo tgl_indo_singkat($hasil['tgl_habis_member']); ?></td>                        
                 
                    <td>
                      <a href="index.php?p=editmember&id=<?php echo $hasil['member_id']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                      <a onclick="return confirm('apakah anda yakin ingin menghapus \'<?php echo $hasil['member_id']. "\' (Dengan Nama member: " . $hasil['nama_member'].")"; ?> ?');" href="deleteMember.php?id=<?php echo $hasil['member_id']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                    </td>
                  </tr>
                  <?php
                  
                    }

                  ?>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>