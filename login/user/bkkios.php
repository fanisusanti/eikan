<?php
include 'header.php';
?>

        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                            <div class="row">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h2 class="text-center">BUKA KIOS</h2>
                                <div class="col-md-12">
                                    <label>Nama Kios*</label>
                                    <input class="form-control" type="text" name="nama_toko" placeholder="Nama Kios">
                                </div>
                                <div class="col-md-12">
                                    <label>NIK*</label>
                                    <input class="form-control" type="text" name="nik" placeholder="NIK Anda">
                                </div>
                                <div class="col-md-12">
                                    <label>KTP*</label><p class="text-warning">* file ktp yang harus diupload harus berbentuk jpg, png, jpeg berukuran 1 mb.</p>
                                    <input class="form-control" name="file" type="file">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="hidden" name="id_akun" value="">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="hidden" name="tgl_buat" value="<?= date('d-m-Y')?>">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Buka Toko</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
 <?php
include 'footer.php';
?>