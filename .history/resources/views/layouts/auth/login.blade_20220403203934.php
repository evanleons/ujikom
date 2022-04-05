<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- CSS Libraries -->
<link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

<!-- Template CSS -->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/components.css">
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">


        <div class="card card-primary">
          <div class="login-brand">
            <img src="assets/img" alt="logo" width="100" style="margin-bottom: -50px;">
          </div>
          <div class="card-header"><center><p>Selamat Datang, di Website Peduli Diri</p></center></div>

          <div class="card-body">
            <form method="POST" action="#" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">NIK</label>
                <input id="email" type="email" class="form-control" placeholder="Masukkan NIK Anda" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Nama Lengkap</label>
                  <div class="float-right">
                  </div>
                </div>
                <input id="password" type="password" placeholder="Masukkan Nama Lengkap Anda" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  Login
                </button>
              </div>
            </form>

            <div class="row sm-gutters">
            </div>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
        Tidak punya akun? <a href="/register">Register</a>
        </div>
        <div class="simple-footer">

        </div>
      </div>
    </div>
  </div>
@endsection
