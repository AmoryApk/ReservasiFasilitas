<html>
	<head>
		<title>Login</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/listi.png">

		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
		<link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-theme.min.css">
		
		<script language='javascript' src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
		<script language='javascript' src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>


	</head>

	<body >

			<div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservasi Ruangan</a>
                </div>
                </div>
            </div>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<form method="POST" action="<?php echo base_url();?>index.php/Login/aksilogin" class="box">
								<h1>Login</h1>
								<p class="text-muted"> Please enter your login and password!</p> 
								<div class="form-group">
								<input type="nik" name="username" class="form-control" placeholder="Username">
								</div>
								<div class="form-group">
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
								<div class="form-group">
								</div>
									<?php
										echo "<div class='$kelas'> $error   </div>";
										?>
									</div>
								
								<input style="" type="submit" class="btn btn-primary" name="btnLogin">
								<div class="col-md-12">
									<ul class="social-network social-circle">
										<li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
									</ul>
								</div>
							</form>
							<a class="forgot text-muted" href="<?php echo site_url('Register_controller') ?>">Register</a> 
                            <a class="forgot text-muted" href="<?php echo site_url('Admin') ?>">Admin</a>
						</div>
					</div>
				</div>
			</div>
			

				
			</div>
		</div>
		<style>
			body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}

.card {
    margin-bottom: 20px;
    border: none
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #191919;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="nik"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="nik"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
		</style>
	</body>
</html>