<!DOCTYPE html>
<html>
<head>
  <title>Login - Administrator</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- bootstrap -->
  <link href="css/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

  <!-- theme -->
  <!-- <link rel="stylesheet" type="text/css" href="css/theme/default.css" /> -->

  <!-- libraries -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
  <!--  <link rel="stylesheet" type="text/css" href="css/elements/signin.css" /> -->

  <link rel="stylesheet" type="text/css" href="css/css/custom.css" />

  <!-- open sans font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
      <![endif]-->

  </head>
  <body background="images/images/back-login.jpg" style="background-repeat:no-repeat;background-size:cover;">
    <?php 
    if (isset($_POST[login])){
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $login=mysql_query("SELECT * FROM user
            WHERE username='$user' AND password='$pass' AND status='Y'");
        $cocok=mysql_num_rows($login);
        $r=mysql_fetch_array($login);

        if ($cocok > 0){
            $_SESSION[login]        = $r[id_user];
            $_SESSION[username]     = $r[username];
            $_SESSION[namalengkap]  = $r[nama_lengkap];
            $_SESSION[password]     = $r[password];
            $_SESSION[level]        = $r[level];
            $_SESSION[unit]        = $r[unit_kerja];

            header('location:index.php');
        }else{
            echo "<script>window.alert('Maaf, Anda Tidak Memiliki akses');
            window.location=('index.php')</script>";
        }
    }

    if (isset($_POST[aksidaftar])){
      $waktu = date("Y-m-d H:i:s");
      $pass = md5($_POST[b]);
      mysql_query("INSERT INTO user (username, password, nama_lengkap, alamat_email, no_telpon, alamat_lengkap, level, status, waktu_daftar, unit_kerja)
          VALUES ('$_POST[a]','$pass','$_POST[c]','$_POST[d]','$_POST[e]','$_POST[f]','user_biasa','N','$waktu','$_POST[unit]')");
      header('location:index.php?daftar=success');

  }

  if (isset($_GET[daftar])){
    ?>



    <div class="container">

        <div class="col-md-10 col-md-offset-1 main" >
          <div class="col-md-6 left-side" >
              <h2 class="logo"><img src="images/images/mail7.png" class="" width="25%">     Surat.co.id</h2>
              <p style="text-align: justify;text-justify: inter-word; padding: 10px 30px 0px 30px; -webkit-font-smoothing: antialiased !important;">Aplikasi surat menyurat adalah aplikasi yang sengaja dibangun untuk mengelola semua data-data suarat masuk, surat keluar dan juga hak akses masing-masing user terhadap data-data surat masuk dan keluar pada sebuah perusahaan, arapkan login terlebih dahulu , Untuk Mengelola Semua Data yang ada Melalui menu-menu yang telah tersedia di dalam dashboar aplikasi ini.<br/>
                  Jika Anda belum mempunyai account daftar disini...
              </p>

              <br>


          </div><!--col-sm-6-->

          <div class="col-md-6 right-side">
              <h2 class='logo'>Pendaftaran</h2>
              <div>
                <?php if ($_GET[daftar]=='success'){ ?>
                <p><i style='color:red'>Sukses Melakukan Pendaftaran, dan anda baru bisa login jika akun anda sudah di Aktifkan Oleh Administrator, <a href='index.php'>Login Disini!</a></i></p>
                <?php }else{ ?>
                <p>Masukkan Data anda Pada Form berikut untuk Mendaftar.</p>
                <?php } ?>

                <form class="form" role="form" action="" method='POST'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="" name='a'>
                        <input type="text" class="form-control" placeholder="Password" required="" name='b'>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required="" name='c'>
                        <input type="email" class="form-control" placeholder="Alamat Email" required="" name='d'>
                        <input type="text" class="form-control" placeholder="No Telepon" required="" name='e'>
                        <textarea style='height:90px' class="form-control" placeholder="Alamat Lengkap" required="" name='f'></textarea>
                        <select name="unit" class="form-control">
                            <option value="" selected>- Pilih Unit Kerja -</option>
                            <option value="A">Unit Kerja A</option>
                            <option value="B">Unit Kerja B</option>
                            <option value="C">Unit Kerja C</option>
                            <option value="D">Unit Kerja D</option>
                            <option value="E">Unit Kerja E</option>
                            <option value="F">Unit Kerja F</option>
                            <option value="G">Unit Kerja G</option>
                        </select>
                    </div>

                    <button name='aksidaftar' type="submit" class="btn btn-primary block full-width signin-btn">Kirimkan Data Pendaftaran</button>

                </form>
                <br>
            </div>

        </div><!--col-sm-6-->

    </div><!--col-sm-8-->

</div><!--container-->
<p class="m-t" style="text-align: center; color: #fff; padding-top: 20px;"> <small>@copy; Arsip Surat 2017, Develop By The Team</small> </p>
<br><br><br><br>
<?php }else{ ?>





<div class="container">

    <div class="col-md-10 col-md-offset-1 main" >
      <div class="col-md-6 left-side" >
          <h2 class="logo"><img src="images/images/mail7.png" class="" width="25%">     Surat.co.id</h2>
          <p style="text-align: justify;text-justify: inter-word; padding: 10px 30px 0px 30px; -webkit-font-smoothing: antialiased !important;">Aplikasi surat menyurat adalah aplikasi yang sengaja dibangun untuk mengelola semua data-data suarat masuk, surat keluar dan juga hak akses masing-masing user terhadap data-data surat masuk dan keluar pada sebuah perusahaan, arapkan login terlebih dahulu , Untuk Mengelola Semua Data yang ada Melalui menu-menu yang telah tersedia di dalam dashboar aplikasi ini.<br/>
              Jika Anda belum mempunyai account daftar disini...
          </p>

          <br>


      </div><!--col-sm-6-->

      <div class="col-md-6 right-side">
        <h2 class='logo'>Login</h2>

        <!--Form with header-->
        <form class="form" role="form" action="" method='POST'>


          <div class="form-group">
            <label for="form2">Your usersname</label>
            <input type="text" class="form-control input-md" placeholder="Username" required="" name='user'>
        </div>

        <div class="form-group">
            <label for="form4">Your password</label>
            <input type="password" class="form-control input-md" placeholder="Password" required="" name='pass'>
        </div>

        <div class="text-xs-center">
            <button name='login' type="submit" class="btn btn-block btn-lg btn-info">Login</button>
        </div>
        <div class="text-xs-center">
         <p class="text-muted text-center"><small>Anda Belum Punya Account?</small></p>
         <a class="btn btn-block btn-lg btn-warning" href="?daftar">Daftarkan Account Baru</a>
     </div>
 </form>
 <!--/Form with header-->

</div><!--col-sm-6-->

</div><!--col-sm-8-->

</div><!--container-->
<p class="m-t" style="text-align: center; color: #fff; padding-top: 20px;"> <small>@copy; Arsip Surat 2017, Develop By The Team</small> </p>


<?php } ?>







<!-- scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/theme.js"></script>


</body>

<!-- Mirrored from istran.net/myxdashboard/signin.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 03 Jun 2015 04:33:17 GMT -->
</html>