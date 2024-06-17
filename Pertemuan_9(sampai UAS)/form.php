<?php
  include "tampilkan_data.php";
  include "edit_data.php";

  $data_edit = mysqli_fetch_assoc($proses_ambil);

  // search feature
  $cari = $_GET['cari'];
  if(isset($cari)){
    $query = "SELECT * FROM mahasiswa WHERE blkg LIKE '%$cari%' OR prodi LIKE '%$cari%'";
    $proses = mysqli_query($koneksi, $query);
  } else {
    $query = "SELECT * FROM mahasiswa";
    $proses = mysqli_query($koneksi, $query);
  }
?>

<html>
    <header>
        <title>
          Data Mahasiswa
        </title>

        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>
            
        <body>

            <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                
                                <?php
                                    if (isset($_GET['id']) && $_GET['id']!= ''){
                                        //proses edit data
                               ?>  
                                  <form action="edit_data.php?id=<?php echo $data_edit['id']?>&proses=1" method="POST">
                                <?php
                                  }else{
                               ?>
                                  <form action="proses.php" method="POST">
                                <?php
                                    }
                               ?>
                           
                                      <fieldset>
                                        <legend>Masukkan Data Mahasiswa</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="nama">NAMA DEPAN : </label>
                                          <div class="controls">
                                            <input type="hidden" class="input-xlarge focused" id="nama" name="nama" 
                                            value="<?php if($data_edit['id']!= "") echo $data_edit['id'];?>">

                                            <input type="text" class="input-xlarge focused" id="nama" name="nama" 
                                            value="<?php if (isset($data_edit['nama_mahasiswa']) && $data_edit['nama_mahasiswa']!= "") echo $data_edit['nama_mahasiswa'];?>">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="blkg">NAMA BELAKANG : </label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="blkg" name="blkg" 
                                            value="<?php if (isset($data_edit['blkg']) && $data_edit['blkg']!= "") echo $data_edit['blkg'];?>">
                                            </div>
                                        </div>
                                            
                                        <div class="control-group">
                                              <label class="control-label" for="prodi ">PRODI MAHASISWA : </label>
                                              <div class="controls">
                                                <input type="text" class="input-xlarge focused" id="prodi" name="prodi" 
                                                value="<?php if (isset($data_edit['prodi']) && $data_edit['prodi']!= "") echo $data_edit['prodi'];?>">
                                          </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">PROSES</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                </form>
                                </div> 

                                <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
  <div class="control-group">
    <label class="control-label" for="cari">Cari :</label>
    <div class="controls">
      <input type="text" id="cari" name="cari" placeholder="Nama Belakang atau Prodi">
      <button type="submit" class="btn btn-primary">Cari</button>
    </div>
  </div>
</form>

<!-- tabel data mahasiswa -->
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama Depan</th>
      <th>Nama Belakang</th>
      <th>Prodi Mahasiswa</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $cari = $_GET['cari'];
      if(isset($cari)){
        $query = "SELECT * FROM mahasiswa WHERE blkg LIKE '%$cari%' OR prodi LIKE '%$cari%'";
        $proses = mysqli_query($koneksi, $query);
      } else {
        $query = "SELECT * FROM mahasiswa";
        $proses = mysqli_query($koneksi, $query);
      }
      
      while($data = mysqli_fetch_assoc($proses)){
   ?>
      <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['nama_mahasiswa']?></td>
        <td><?php echo $data['blkg']?></td>
        <td><?php echo $data['prodi']?></td>
        <td><a href="form.php?id=<?php echo $data['id'];?>"> Edit </a>|
        <a href="hapus_data.php?id=<?php echo $data['id'];?>"> Hapus </a></td>
      </tr>
    <?php
      }
   ?>
  </tbody>
</table>                                  