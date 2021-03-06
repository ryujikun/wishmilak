<!DOCTYPE html>
<html lang="en" style="height:100%; ">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  
  <!-- // <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="administrator/bootstrap/css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">  
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
  
  <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>

<body style="margin:0;font-family:'Roboto', sans-serif;height:100%;overflow-x:hidden;">
  <div class="row" id="header" style="margin:0;background-color:#303f9f;box-shadow: 3px 2px 10px #888888;">
    <div id="kotak_header" style="padding:3%;color:white;">
      <h1>WISHMILAK</h1>
      <div id="batang" style="width:10%;background-color:white;height:2px;"></div>
      <h5>Sistem informasi Wisma Institut Teknologi Sepuluh Nopember</h5>
    </div>
  <!--   <nav>
      <ul style="display:inline-block;">
        <li><div id="navbar"><a href="">HOME</a></div></li>
        <li><div id="navbar"><a href="">INFORMASI</a></div></li>
      </ul>
    </nav> -->
    <div id="navbar">
      <ul class="nav navbar-nav navbar-right" style="background-color:white;">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Informasi</a></li>
      </ul>
    </div>
  </div>
  <div class="container" style="height:auto;">
    <h3 style="text-align:center;">Periksa jadwal penyewaan</h3>
    <div id="batang" style="background-color:rgb(51, 51, 51);height:2px;margin: 0px auto;width: 20%;opacity:0.5;margin-bottom:3%;"></div>
    <div class="row" style="">
      <div class="col-md-3" style="float:left;"></div>
      <div class="col-md-6" style="background-color: rgb(244, 67, 54);padding: 2%;float:left;margin-bottom:5%;">
         <form role="form">
          <div class="form-group" style="float:left;width:50%;padding:1%;">
              <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" placeholder="Waktu masuk"/>
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
          <div class="form-group" style="float:left;width:50%;padding:1%;">
              <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" placeholder="Waktu keluar"/>
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
          <div class="form-group" style="float:left;width:33%;padding:1%;">
          <label for="sel2" style="color:white;">Pilih nama wisma:</label>
            <select class="form-control" id="sel1">
              <option>Flamboyan</option>
              <option>Bougenville</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group" style="float:left;width:33%;padding:1%;">
          <label for="sel2" style="color:white;">Pilih jenis kamar:</label>
            <select class="form-control" id="sel1">
              <option>VVIP</option>
              <option>VIP</option>
              <option>Biasa</option>
              <option>4</option>
            </select>
          </div>
          <div class="form-group" style="float:left;width:33%;padding:1%;">
            <label for="usr" style="color:white;">Jumlah orang:</label>
            <input type="text" class="form-control" id="usr" placeholder="Jumlah orang">
          </div>
          <div style="width: 67%;">
          <button type="button" class="btn btn-primary" style="float: right;width: 50%;margin: 0px auto;">Periksa wisma</button>
          </div>
        </form>
      </div>
      <div class="col-md-3" style="float:left;"></div>
    </div>
    <div class="row" style="margin-bottom:5%;">
      <!-- <div class="col-md-3"></div> -->
      <div class="col-md-12">
        <div style="background-color:#64dd17;padding: 5%;margin:0 auto;text-align:center;width:50%;">
          <h4 style="margin-bottom:5%;">Kamar tersedia, silahkan melanjutkan proses penyewaan.</h4>
          <form role="form" style="">
            <div style="width: 67%;">
            <button type="button" class="btn btn-primary" style="float: right;width: 50%;margin: 0px auto;background-color:#009688;">Lanjutkan</button>
            </div>
          </form>
        </div>
      </div>
      <!-- <div class="col-md-3"></div> -->
    </div>
  </div>
  <div class="row" id="footer" style="background-color:#424242;width:100%;margin:0;float:left;padding-bottom:3%;">
    <div class="col-md-4" id="kolom_footer">
      <h3>Hubungi kami</h3>
      <p>Institut Teknologi Sepuluh Nopember, Surabaya</p>
      <uL>
        <li style="text-decoration:none;"><strong>Ridho Perdana</strong> 5113100164</li>
        <li style="text-decoration:none;"><strong>Bandem Suardika</strong> 5113100164</li>
        <li style="text-decoration:none;"><strong>Faris Musthafa</strong> 5113100164</li>
      </uL>
    </div>
    <div class="col-md-4" id="kolom_footer">
    </div>
    <div class="col-md-4" id="kolom_footer">
      <h3>Hubungi kami</h3>
      <p>Institut Teknologi Sepuluh Nopember, Surabaya</p>
      <uL>
        <li style="text-decoration:none;"><strong>Ridho Perdana</strong> 5113100164</li>
        <li style="text-decoration:none;"><strong>Bandem Suardika</strong> 5113100164</li>
        <li style="text-decoration:none;"><strong>Faris Musthafa</strong> 5113100164</li>
      </uL>
    </div>
  </div>
</body>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker(
          {
            locale: 'en'
          });
    });
</script>
</html>
