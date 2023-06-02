<?php
  include "config/koneksi.php";
  include "config/fungsi.php";
?>

<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Kunjungan Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Berkunjung</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                    //$tampil = mysqli_query($mysqli, "select * from barang");
                    $tampil = mysqli_query($koneksi, "SELECT * FROM (select nama_member,member_id from member ORDER BY member_id asc) a right join (select * from kunjungan_member order by kunjungan_id asc) b on b.member_id = a.member_id");
                    $no =1;
                    while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                  <tbody>
                  <!--Di sini kita gak usah nampilkan rating juga gapapa, yang penting bisa INSERT + Foto lah-->
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $hasil['nama_member']; ?></td>
                    <td><?php echo tgl_indo_singkat($hasil['waktu_kunjungan'])." ". fungsi_waktu($hasil['waktu_kunjungan'])."Wib" ?></td>                       
                    <td>
                      <a onclick="return confirm('apakah anda yakin ingin menghapus \'<?php echo $hasil['member_id']. "\' (Dengan Nama member: " . $hasil['nama_member'].")"; ?> ?');" href="deleteKunjungan.php?id=<?php echo $hasil['kunjungan_id']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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