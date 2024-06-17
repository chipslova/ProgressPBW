<?php
  
    include "tampildata.php";
    include "editdata.php";

    $data_edit = mysqli_fetch_assoc($proses_ambil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <!-- <form action="prosestest5.php" method="POST"> /method ada get(bisa diliat dilink dan bisa diubah melalui link) dan pos(dokumen yg dikirim gabisa diliatt)
        kalo mau misahin html dan php tinggal masukinn nama file php-nya didalam form action    
        NPM:
        <input type="text" name="npm" value="">
            <br>
        NILAI : <input type="text" name="nilai" value="">
            <br>
        ULANGI : <input type="text" name="loop" value="">
            <br>
        <button type="submit" name="proses"> 
            PROSES DATA
        </button>
    </form> -->

    <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <?php
                                if ($_GET['id']!=''){
                                ?>
                                  <form action="editdata.php?id=<?php echo $edit_data['id']?>proses=1" method="POST"></form>
                                <?php
                                  }else{
                                ?>
                                  <form action="prosestest5.php" method="POST">
                                <?php
                                  }
                                ?>

                                        <legend>Input Nilai Mahasiswa</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="npm">Nama Mahasiswa</label>
                                          <div class="controls">
                                           <input type="hidden" class="input-xlarge focused" id="nama" name="nama" 
                                            value="<?php if($data_edit['id'] != "")echo $data_edit['id'];?>">

                                            <input type="text" class="input-xlarge focused" id="nama" name="nama" 
                                            value="<?php if($data_edit['nama_mahasiswa'] != "")echo $data_edit['id'];?>">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="nilai">Prodi Mahasiswa</label>
                                          <div class="controls">
                                          <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="nilai">Ulangi</label>
                                          <div class="controls">
                                          <input type="text" class="input-xlarge focused" id="loop" name="loop" value="">
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Proses</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </form>    
                                </div>  
                            </div> 
                        </div>   
                    </div> 

                                        
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>ID Mahasiswa</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
						                  <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>
                                      <?php 
                                            while($data = mysqli_fetch_assoc($proses)){
                                      ?>

						                <tr>
						                  <td><?php echo $data['id']?></td>
						                  <td><?php echo $data['nama_mahasiswa']?></td>
						                  <td><?php echo $data['prodi']?></td>
						                  <td><a href="editdata.php?id=<?php echo $data['id'];?>"> Edit </a> | 
                                    <a href="hapusdata.php?id=<?php echo $data['id']; ?>"> Hapus </a></td>
						                </tr>
						              <?php
                                            }
                                      ?>  
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

    </div> 

</body>
</html>