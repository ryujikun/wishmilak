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
        <li><a href="index.php">Beranda</a></li>
      <li><a href="#">Informasi</a></li>
      <li><a href="kamar.php">Kamar</a></li>
      <li><a href="#"><form><input type="text" class="form-control" id="usr" placeholder="Kode Penyewaan"></form></a></li>
      </ul>
    </div>
  </div>
  <div class="container" style="height:auto;">
    <h3 style="text-align:center;">Sisa waktu membayar</h3>
    <div id="batang" style="background-color:rgb(51, 51, 51);height:2px;margin: 0px auto;width: 20%;opacity:0.5;margin-bottom:3%;"></div>
	      <div class="col-md-3" style="float:left;"></div>
      <div class="col-md-6" style="padding: 2%;float:left;margin-bottom:5%;border:1px solid grey; text-align: left;">
	<h3 style="text-align:center;">
	
	<label id="minutes">00</label>:<label id="seconds">00</label>
    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 3600;
        setInterval(setTime, 1000);

        function setTime()
        {
            --totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
    </script>
	
	</h3></div><br><br><br>
	
	
	

  </div>
  <div class="container" style="height:auto;">
    <h3 style="text-align:center;">Petunjuk Pembayaran di Konter</h3>
    <div id="batang" style="background-color:rgb(51, 51, 51);height:2px;margin: 0px auto;width: 30%;opacity:0.5;margin-bottom:3%;"></div>
	<div class="row" style="">
      <div class="col-md-3" style="float:left;"></div>
      <div class="col-md-6" style="padding: 2%;float:left;margin-bottom:5%;border:1px solid grey; text-align: left;">
    <div class="row">
              <ol type="1">
				<li>Lakukan pembayaran sebelum waktu habis. Waktu yang diberikan selama 60 menit.</li><br>
			    <li>Tunjukkan ID transaksi kepada petugas kami. <i>ID transaksi Anda adalah <b>75886542</b></i></li><br>
				<li>Jumlah biaya deposit yang diminta oleh petugas kami akan sama dengan biaya yang ditampilkan pada halaman ini. <i>Jumlah biaya deposit Anda sebesar <b>Rp137.500,00</b></i></li><br>
				<li>Setelah melakukan pembyaran, lanjut ke halaman berikutnya untuk melakukan validasi.</li>
			  </ol>
			  
			  
         </div>
		 
		</div>
    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-12" style="width:100%;">
        <div style="text-align:center;">
		<a href="validate_ctr.php">
        <button type="button" class="btn btn-danger" style="margin: 0px auto;">Saya sudah bayar</button>
		</a>
        </div>
      </div>
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