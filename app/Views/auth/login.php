
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login | WebGIS</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fontawesome/fontawesome-free/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?=site_url('logo.svg')?>" alt="logo" width="30">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
              <?php if (session()->getFlashdata('success')) : ?>
              <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">x</button>
                  <b>Success</b>
                  <?=session()->getFlashdata('success')?>
                </div>
              </div>
            <?php endif; ?>  
              <?php if (session()->getFlashdata('error')) : ?>
			    <div class="alert alert-danger alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">x</button>
					<b>Error</b>
					<?=session()->getFlashdata('error')?>
				</div>
			    </div>
		        <?php endif; ?>
                <form method="POST" action="<?=site_url('auth/loginProcess')?>" class="needs-validation" novalidate="">
                    <?=csrf_field()?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="6Lef1fokAAAAAPcig_76UrqoEK4Pg0mp2HiKONRC"></div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-2 text-muted text-center">
              Belum mempunyai akun ? <a href="<?=site_url('auth/register')?>">Buat Akun</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/popper.js"></script>
  <script src="<?=base_url()?>/template/assets/js/tooltip.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/moment.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/auth/custom.js"></script>

  <!-- reCAPTCHA v3 -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>