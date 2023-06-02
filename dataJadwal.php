<?php
  include "config/koneksi.php";
  include "config/fungsi.php";
?>

<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Jadwal Latihan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="emp-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th col-index = 2>Nama
                    <select class="table-filter" onchange="filter_rows()">
                    <option value="all"></option>
                    </select>
                    <th>Tanggal Latihan</th>
                    <th>Waktu Latihan</th>
                    <th>Jenis Latihan</th>
                    <th>Nama Pt</th>  
                    <th>Keterangan</th>    
                  </tr>
                  </thead>
                  <?php
                    //$tampil = mysqli_query($mysqli, "select * from barang");
                    $tampil = mysqli_query($koneksi, "SELECT * FROM (select nama_member,member_id from member order by member_id asc) a right join (select * from jadwal_latihan order by jadwal_latihan_id asc) b on a.member_id = b.member_id;");
                    $no =1;
                    while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                  <tbody>
                  <!--Di sini kita gak usah nampilkan rating juga gapapa, yang penting bisa INSERT + Foto lah-->
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $hasil['nama_member']; ?></td> 
                    <td><?php echo tgl_indo_singkat($hasil['tanggal_latihan']); ?></td>
                    <td><?php echo fungsi_waktu1($hasil['waktu_latihan']); ?></td>
                    <td><?php echo $hasil['jenis_latihan']; ?></td> 
                    <td><?php echo $hasil['nama_pt']; ?></td>             
                    <td>
                      <a href="index.php?p=editjadwal&id=<?php echo $hasil['jadwal_latihan_id']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                      <a onclick="return confirm('apakah anda yakin ingin menghapus \'<?php echo "jadwal latihan dengan no =".$no?> ?');" href="deleteJadwal.php?id=<?php echo $hasil['jadwal_latihan_id']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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
    <script>
        getUniqueValuesFromColumn()
    </script>