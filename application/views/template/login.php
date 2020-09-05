
<html>
<!-- Mirrored from e-tikela.pakpakbharatkab.go.id/index.php/masuk by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 08:14:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	
	<title>Sibahanpe</title>
	<link rel="shortcut icon" type="image/x-icon" href="//www.pakpakbharatkab.go.id/favicon.ico" />
	<!--
	<link href="https://sidahari.pakpakbharatkab.go.id//assets/login/semantic.min.css" rel="stylesheet" type="text/css">
	<link href="https://sidahari.pakpakbharatkab.go.id//assets/login/login.css" rel="stylesheet" type="text/css">
	<script src="https://sidahari.pakpakbharatkab.go.id//assets/login/jquery-2.1.4.min.js" lang="javascript"></script>
	<script src="https://sidahari.pakpakbharatkab.go.id//assets/login/semantic.min.js" lang="javascript"></script>
-->
	<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--
	<link rel="stylesheet" type="text/css" href="https://sidahari.pakpakbharatkab.go.id/assets/pace/css/flash.css">

	<script type="text/javascript" src="https://sidahari.pakpakbharatkab.go.id/assets/pace/js/pace.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/pace/pace.min.css">
-->

</head>
<style type="text/css">
.box_shadow {
	width: 100px;
	height: 100px;
	margin: 100px;
	box-shadow:
	-52px -52px 0px 0px #f65314,
	52px -52px 0px 0px #7cbb00,
	-52px 52px 0px 0px #00a1f1,
	52px 52px 0px 0px #ffbb00;
}
</style>
<body style="background: #ddd;">
<br><br><br><br>

<div class="col-sm-12">
	<div class="row">
<div class="col-sm-8 text-center">
	<div class="alert alert-info" style="height: 350px">
	<img src="//www.pakpakbharatkab.go.id/imej/pakpaklogo.png" class="ui image">
 <h3>SIBAHANPE</h3>
								
									(Sistem Informasi Tambahan Penghasilan Pegawai)<br>
									<strong>Kab. Pakpak Bharat</strong>


									
<br>
<br>
<br>
<small>Copyright Diskominfo <?php echo date('Y')?></small>
		<div style="clear: both;"></div>
		</div>



</div>

<div class="col-sm-4">
<div class="alert alert-warning" style="height: 350px">
	<form action="" method="POST" id="login_admin" class="ui form">

	<h4>Login Pengguna</h4>
	NIP:
	<input type="text" class="form-control" name="NIK" id="NIK" placeholder="NIP">	

	<br>
	PASSWORD:
	<input type="password" name="password" class="form-control" placeholder="Password"><br>
	<div id="info_login"></div>
	<button type="submit" class="btn btn-primary ">Login</button>

</form>

<div style="clear: both;"></div>
</div>

</div>
</div>
</div>
<div style="clear: both;"></div>




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>

<!-- PACE -->
<script src="<?php echo base_url()?>assets/plugins/pace/pace.min.js"></script>


    <script>
$(document).ajaxStart(function() { Pace.restart(); });


 $("#login_admin").on("submit",function(){
	  
	  
	  var NIK = $("#NIK").val();
	  //alert(NIK);
	  $("#info_login").fadeOut().html('<div class="alert alert-primary alert-dismissible"><b>Loading!!!</b> Mohon menunggu.</div>').fadeIn();
	  
	  $.post("<?php echo base_url()?>index.php/login/cek_login",$(this).serialize(),function(e){
		 
			//alert(e);
			
			if(e=='0')
			{
				$("#info_login").fadeOut().html('<div class="alert alert-danger alert-dismissible"><b>Perhatian!!!</b> NIK atau Password salah.</div>').fadeIn();
				
			}else if(e=='2')
			{
				$("#info_login").fadeOut().html('<div class="alert alert-warning alert-dismissible"><b>Warning!!!</b> Acount non active</div>').fadeIn();
				
			}else if(e=='1')
			{
				$("#info_login").fadeOut().html('<div class="alert alert-success alert-dismissible"><b>Berhasil!!!</b> Mohon tunggu...</div>').fadeIn();
							
				
				window.location.replace("<?php echo base_url()?>");
				
				
				
			}else if(e=='3')
			{
				$("#info_login").fadeOut().html('<div class="alert alert-warning alert-dismissible"><b>Warning!!!</b> Acount <b>'+NIK+'</b> sedang login.</div>').fadeIn();
			}
			
	  });
	  
	  
	 return false; 
  });
</script>

</body>
<!-- Mirrored from e-tikela.pakpakbharatkab.go.id/index.php/masuk by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 08:14:32 GMT -->
</html>