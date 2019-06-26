  <style type="text/css">
    body {
      background:transparent !important;
      height: 100%;
    }
    html{
      height: 100%;
    }
  </style>
  <div class="p-0 text-center">
    <div class="row p-0 m-0 py-5 snap" style="height: 100vh;">
      <div class="container p-5 mx-5">
        <div class="row">
          <div class="my-5 col-md-6">
            <h1 class="text-left font-weight-bold display-1">Company</h1>
            <h1 class="text-left font-weight-bold display-1">Name</h1>
            <p class="lead font-weight-bold" style="background-color: rgba(255,255,255,.7); border-radius: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
    <!--Home 1 END-->
    <div class="row p-0 m-0 snap" style="background-color: rgb(252,247,243);width: 100%;height: 100vh;">
      <div class="container-fluid">
        <div class="row" style="height: 6vh;"><!--INI HEADBAR BACKGROUND-->
        </div>
        <div class="row" style="">
          <div class="container my-3 p-0" data-aos="fade-left" data-aos-duration="1500">
            <img src="<?php echo base_url();?>/assets/images/Promo2.1.png" height="300">
          </div>
          <div class="container py-3" style="background-color: rgb(240,230,222);height: 60vh;" data-aos="fade-right" data-aos-duration="1500">
            <h3 style="color:rgb(72,149,119)">Jadwal Keberangkatan Umroh 2019</h3>
            <table id="table" class="table-sm" style="width: 100%;">
              <thead>
                  <tr style="color: rgb(63,62,60);">
                      <th style="border-bottom: 2px solid rgb(63,62,60);">Paket Umroh</th>
                      <th style="border-bottom: 2px solid rgb(63,62,60);">Tanggal Keberangkatan</th>
                      <th style="border-bottom: 2px solid rgb(63,62,60);">Status</th>
                      <th style="border-bottom: 2px solid rgb(63,62,60);">Detail</th>
                  </tr>
              </thead>
              <tbody>
                <?php for($x=0;$x<=30;$x++){ ?>
                  <tr>
                      <td>Paket Umroh 1</td>
                      <td>20 Januari 2019</td>
                      <td>DITUTUP</td>
                      <td><button class="btn" style="background-color: rgb(252,189,120);border-radius: 90px;">Lihat Detail</button></td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Home 2 END-->
    <div class="row p-0 m-0 py-5 snap" style="background-color: rgb(252,247,243);width: 100%;height: 100vh;">
      <div class="container-fluid">
        <div class="row">
          <div class="container">
            
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function() {
    $('#table').DataTable({
      "lengthMenu": [[5], [5]],
      lengthChange:false
    });
  });
  $("#beranda").removeClass("h-passive");
  $("#beranda").addClass("h-active");
  $.scrollify({
    section : ".snap",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: false,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
    before:function() {},
    after:function() {},
    afterResize:function() {},
    afterRender:function() {}
  });
</script>
<script>
  AOS.init();
</script>
  <!--GANTI SESUAI PAGE (beranda,haji,umroh,galeri)-->