<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= host . '/' . name_project . view_font; ?>login/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= host . '/' . name_project . view_font; ?>login/assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
                <p class="login-card-description">Create account</p>
                <form method="post" class="colorlib-form">
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">E-mail Address</label>
                                <input type="mail" id="fname" class="form-control"  name="user" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Address</label>
                                <input type="text" id="towncity" name="address" class="form-control" placeholder="Town or City" required>
                             </div>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Phone">Phone Number</label>
                            <input name="phone" type="text" id="zippostalcode" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyname">Sex</label>
                            <select name="sex" class="form-control" required>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyname">Pass</label>
                        <input type="password" name="pass" id="towncity" name="address" class="form-control" placeholder="Town or City" required>
                        </div>
                        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                    </div>
                </div>
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="?view=login" class="text-reset">Login</a></p>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
