<style>
  .bs-glyphicons {
    margin: 5px 20px 20px 0px;
    overflow: hidden;
  }
  .bs-glyphicons-list {
    padding-left: 0;
    list-style: none;
  }

  .bs-glyphicons-list a {
    color:#8a8a8a !important;
  }
  ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
  }
  .bs-glyphicons li {
    float: left;
    width: 20%;
    height: 155px;
    padding: 30px;
    font-size: 10px;
    line-height: 1.4;
    text-align: center;
    border: 1px solid #cecece;
    background-color: #ffffff;
  }
  .bs-glyphicons li:hover {
    background-color: #e3e3e3;
  }
  .bs-glyphicons .glyphicon {
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 74px;
  }
  .glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .bs-glyphicons .glyphicon-class {
    display: block;
    text-align: center;
    word-wrap: break-word;
  }
</style>
<div class="bs-docs-section">



  <div class="row">
   <div class="col-md-12">
    <div class="page-title">
     <!-- <ol class="breadcrumb">
       <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
       <li class="pull-right">
         <div id="reportrange" class="btn btn-green btn-square date-picker">
          <i class="fa fa-calendar"></i>
          <span class="date-range">February 15, 2017 - March 16, 2017</span> <i class="fa fa-caret-down"></i>
        </div>
      </li>
    </ol> -->
    <h4 style='padding-top:15px; font-family: arial, sans-serif;'>Selamat Datang 
      <strong>
        <?php 
        if ($_SESSION[unit] == '0'){
          echo "$_SESSION[namalengkap] "; 
        }else{
          echo "$_SESSION[namalengkap] <b style='color:red'>Unit Kerja $_SESSION[unit]</b>"; 
        }

        ?></strong> di Bops Pengarsipan ...</h4>
        <!--       <small>Aplikasi surat menyurat adalah aplikasi yang sengaja dibangun untuk mengelola semua data-data suarat masuk, surat keluar dan juga hak akses masing-masing user terhadap data-data surat masuk dan keluar pada sebuah perusahaan, Silahkan Mengelola Semua Data yang ada Melalui menu-menu yang telah tersedia di bawah ini :</small> -->
        <hr>
      </div>
    </div>
  </div> 


  <div class="row" >
   <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="#">
        <div class="circle-tile-heading cyan">
          <img src="images/images/dashboard.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content cyan">
        <div class="circle-tile-description text-faded">
          Dashboard Home
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <?php if ($_SESSION[unit] == '0'){ ?> 

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="inbox">
        <div class="circle-tile-heading dark-blue">
          <img src="images/images/mail.png" class="img-responsive" width="100%" aria-hidden="true">
        </div>
      </a>
      <div class="circle-tile-content dark-blue">
        <div class="circle-tile-description text-faded">
          Inbox A, F
        </div>
        <div class="circle-tile-number text-faded">
          265
          <span id="sparklineA"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="binbox">
        <div class="circle-tile-heading green">
          <img src="images/images/mail2.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green">
        <div class="circle-tile-description text-faded">
          Inbox B,C,D,E
        </div>
        <div class="circle-tile-number text-faded">
          32,384
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="inboxg">
        <div class="circle-tile-heading orange">
          <img src="images/images/mail5.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content orange">
        <div class="circle-tile-description text-faded">
          Inbox G
        </div>
        <div class="circle-tile-number text-faded">
          9 New
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="outbox">
        <div class="circle-tile-heading blue">
          <img src="images/images/mail4.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content blue">
        <div class="circle-tile-description text-faded">
          Outbox A, F
        </div>
        <div class="circle-tile-number text-faded">
          10
          <span id="sparklineB"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="boutbox">
        <div class="circle-tile-heading red">
          <img src="images/images/mail6.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content red">
        <div class="circle-tile-description text-faded">
          Outbox B,C,D,E
        </div>
        <div class="circle-tile-number text-faded">
          24
          <span id="sparklineC"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="outboxg">
        <div class="circle-tile-heading red">
          <img src="images/images/mail6.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content red">
        <div class="circle-tile-description text-faded">
          Outbox G
        </div>
        <div class="circle-tile-number text-faded">
          24
          <span id="sparklineC"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="undangan">
        <div class="circle-tile-heading purple">
          <img src="images/images/mail8.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content purple">
        <div class="circle-tile-description text-faded">
          Surat Undangan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="laporan">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat laporan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="kendaraan">
        <div class="circle-tile-heading blue-light">
          <img src="images/images/mobile.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content blue-light">
        <div class="circle-tile-description text-faded">
          Surat Kendaraan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="izin">
        <div class="circle-tile-heading green-light">
          <img src="images/images/izin.gif" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Izin Karyawan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="pinjamb">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Peminjaman
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="minta">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Peminjaman Barang
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>


  <?php }elseif ($_SESSION[unit] == 'F'){ ?>


  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="inbox">
        <div class="circle-tile-heading dark-blue">
          <img src="images/images/mail.png" class="img-responsive" width="100%" aria-hidden="true">
        </div>
      </a>
      <div class="circle-tile-content dark-blue">
        <div class="circle-tile-description text-faded">
          Surat Masuk
        </div>
        <div class="circle-tile-number text-faded">
          265
          <span id="sparklineA"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="outbox">
        <div class="circle-tile-heading blue">
          <img src="images/images/mail4.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content blue">
        <div class="circle-tile-description text-faded">
          Surat Keluar
        </div>
        <div class="circle-tile-number text-faded">
          10
          <span id="sparklineB"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="izin">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Izin Karyawan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <?php }elseif ($_SESSION[unit] == 'G'){ ?>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="inboxg">
        <div class="circle-tile-heading orange">
          <img src="images/images/mail5.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content orange">
        <div class="circle-tile-description text-faded">
          Surat Masuk
        </div>
        <div class="circle-tile-number text-faded">
          9 New
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="outboxg">
        <div class="circle-tile-heading red">
          <img src="images/images/mail6.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content red">
        <div class="circle-tile-description text-faded">
          Surat keluar
        </div>
        <div class="circle-tile-number text-faded">
          24
          <span id="sparklineC"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="pinjamb">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Peminjaman
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <?php }elseif ($_SESSION[unit] == 'A'){ ?>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="inbox">
        <div class="circle-tile-heading dark-blue">
          <img src="images/images/mail.png" class="img-responsive" width="100%" aria-hidden="true">
        </div>
      </a>
      <div class="circle-tile-content dark-blue">
        <div class="circle-tile-description text-faded">
          Surat Masuk
        </div>
        <div class="circle-tile-number text-faded">
          265
          <span id="sparklineA"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="outbox">
        <div class="circle-tile-heading blue">
          <img src="images/images/mail4.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content blue">
        <div class="circle-tile-description text-faded">
          Surat Keluar
        </div>
        <div class="circle-tile-number text-faded">
          10
          <span id="sparklineB"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="undangan">
        <div class="circle-tile-heading purple">
          <img src="images/images/mail8.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content purple">
        <div class="circle-tile-description text-faded">
          Surat Undangan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="laporan">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat laporan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="kendaraan">
        <div class="circle-tile-heading green-light">
          <img src="images/images/mobile.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
          Surat Kendaraan
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>


  <?php }else{ ?>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="binbox">
        <div class="circle-tile-heading dark-blue">
          <img src="images/images/mail.png" class="img-responsive" width="100%" aria-hidden="true">
        </div>
      </a>
      <div class="circle-tile-content dark-blue">
        <div class="circle-tile-description text-faded">
          Surat Masuk
        </div>
        <div class="circle-tile-number text-faded">
          265
          <span id="sparklineA"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="boutbox">
        <div class="circle-tile-heading blue">
          <img src="images/images/mail4.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content blue">
        <div class="circle-tile-description text-faded">
          Surat Keluar
        </div>
        <div class="circle-tile-number text-faded">
          10
          <span id="sparklineB"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="minta">
        <div class="circle-tile-heading green-light">
          <img src="images/images/laporan.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-light">
        <div class="circle-tile-description text-faded">
        Surat Permintaan Barang
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
<?php } ?>






  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="#">
        <div class="circle-tile-heading dark-gray">
          <img src="images/images/user.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content dark-gray">
        <div class="circle-tile-description text-faded">
          Data User biasa
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="#">
        <div class="circle-tile-heading green-dark">
          <img src="images/images/admin.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content green-dark">
        <div class="circle-tile-description text-faded">
          Data User Input
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>

  <?php if ($_SESSION[level] == 'user_admin'){ ?>
  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="#">
        <div class="circle-tile-heading brown">
          <img src="images/images/fasil.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content brown">
        <div class="circle-tile-description text-faded">
          Data User Admin
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>
   <?php } ?>

  <div class="col-lg-2 col-sm-6">
    <div class="circle-tile">
      <a href="#">
        <div class="circle-tile-heading pink">
          <img src="images/images/log.png" class="img-responsive" width="100%">
        </div>
      </a>
      <div class="circle-tile-content pink">
        <div class="circle-tile-description text-faded">
          Log-OUt
        </div>
        <div class="circle-tile-number text-faded">
          96
          <span id="sparklineD"></span>
        </div>
        <a href="#" class="circle-tile-footer">View <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>
  </div>


  
  ]





  
  