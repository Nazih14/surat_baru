      <!-- begin SIDE NAV USER PANEL -->     


      <li class="dashboard">
       <a class="active" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
   </li>

   <?php if ($_SESSION[unit] == '0'){ ?>  
   <li class="panel">
       <a href="inbox">
         <i class="fa fa-bar-chart-o"></i> Inbox A, F <i class="fa fa-caret-down pull-right"></i>
     </a>
 </li>

 <li class="panel">
     <a href="binbox">
       <i class="fa fa-calendar"></i> Inbox B,C,D,E <i class="fa fa-caret-down pull-right"></i>
   </a>
</li>

<li class="panel">
   <a href="inboxg">
     <i class="fa fa-clipboard"></i> Inbox G <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
    <a href="outbox">
       <i class="fa fa-edit"></i> Outbox A, F <i class="fa fa-caret-down pull-right"></i>
   </a>
</li>

<li class="panel">
    <a href="boutbox">
        <i class="fa fa-edit"></i> Outbox A,B,C,D,E <i class="fa fa-caret-down pull-right"></i>
    </a>
</li>

<li class="panel">
   <a href="outboxg">
     <i class="fa fa-inbox"></i> Outbox G <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="undangan">
   <i class="fa fa-envelope"></i> Surat Undangan <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<li class="panel">
 <a href="laporan">
   <i class="fa fa-envelope"></i> Surat Laporan <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<li class="panel">
 <a href="kendaraan">
   <i class="fa fa-envelope"></i> Surat Kendaraan <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<li class="panel">
 <a href="izin">
   <i class="fa fa-envelope"></i> Surat Izin Karyawan <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<li class="panel">
 <a href="pinjamb">
   <i class="fa fa-envelope"></i> Surat Peminjam <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<li class="panel">
 <a href="minta">
   <i class="fa fa-envelope"></i> Permintaan Barang <i class="fa fa-caret-down pull-right"></i>
</a>
</li>

<?php }elseif ($_SESSION[unit] == 'F'){ ?>


<li class="panel">
 <a href="inbox">
     <i class="fa fa-envelope"></i> Surat Masuk <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="outbox">
     <i class="fa fa-envelope"></i> Surat Keluar <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="izin">
     <i class="fa fa-envelope"></i> Surat Izin Karyawan <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>


<?php }elseif ($_SESSION[unit] == 'G'){ ?>


<li class="panel">
 <a href="inboxg">
     <i class="fa fa-envelope"></i> Surat Masuk <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="outboxg">
     <i class="fa fa-envelope"></i> Surat Keluar <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="pinjamb">
     <i class="fa fa-envelope"></i> Peminjaman <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>


<?php }elseif ($_SESSION[unit] == 'A'){ ?>

<li class="panel">
 <a href="inbox">
     <i class="fa fa-envelope"></i> Surat Masuk <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="outbox">
     <i class="fa fa-envelope"></i> Surat Keluar <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="undangan">
     <i class="fa fa-envelope"></i> Surat Undangan <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="laporan">
     <i class="fa fa-envelope"></i> Surat Laporan <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="kendaraan">
     <i class="fa fa-envelope"></i> Surat Kendaraan <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<?php }else{ ?>

<li class="panel">
 <a href="binbox">
     <i class="fa fa-envelope"></i> Surat Masuk <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="boutbox">
     <i class="fa fa-envelope"></i> Surat Keluar <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>

<li class="panel">
 <a href="minta">
     <i class="fa fa-envelope"></i> Permintaan Barang <i class="fa fa-caret-down pull-right"></i>
 </a>
</li>


<?php } ?>

<li class="panel">
 <a href="javascript:;" data-toggle="collapse" data-target="#charts">
 <i class="fa fa-bar-chart-o"></i> Data User <i class="fa fa-caret-down pull-right"></i>
</a>

<ul class="collapse nav" id="charts">
    <li>
      <a href="index.php?page=user&stat=1"><i class="fa fa-angle-double-right"></i> Data User Biasa</a>
  </li>
  <li>
      <a href="index.php?page=user&stat=2"><i class="fa fa-angle-double-right"></i> Data User Input</a>
  </li>
  <?php if ($_SESSION[level] == 'user_admin'){ ?>
  <li>
      <a href="index.php?page=user&stat=3"><i class="fa fa-angle-double-right"></i> Data User Admin</a>
  </li>
  <?php } ?>
</ul>
</li>
