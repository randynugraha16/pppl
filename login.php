<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Login Form</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    />
  </head>

  <style>
    :root {
      --main-bg: #8dbac0;
    }

    .main-bg {
      background: var(--main-bg) !important;
    }
    .navbar {
      background-color: #00000085;
    }
    .navbar a {
      position: relative;
    }
    .navbar-nav {
      font-size: 20px;
      color: #ffffff;
    }
    .navbar .nav-item {
      text-transform: uppercase;
      position: relative;
      z-index: 99;
    }
    .navbar-nav .nav-item .nav-link {
      color: #ffffff !important;
    }
    .navbar-nav li .active::after {
      content: "";
      display: block;
      border-bottom: 4px solid #0b63dc;
      width: 50%;
      margin: auto;
    }
    .navbar-nav li a:hover::after {
      content: "";
      display: block;
      border-bottom: 4px solid #0b63dc;
      width: 50%;
      margin: auto;
    }

    input:focus,
    button:focus {
      border: 1px solid var(--main-bg) !important;
      box-shadow: none !important;
    }

    .form-check-input:checked {
      background-color: var(--main-bg) !important;
      border-color: var(--main-bg) !important;
    }

    .card,
    .btn,
    input {
      border-radius: 0 !important;
    }
    @media (max-width: 576px) {
      .navbar {
        background-color: #081314;
      }
    }
  </style>

  <body class="main-bg">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img
            src="img/rca_LOGO-removebg-preview 1.png"
            alt="ocistok.com"
            width="50"
            height="50"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.html">SERCIVE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Login Form -->
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">

          <div class="card shadow">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Login</h2>
            </div>
            <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username atau password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
        ?>
            <div class="card-body">
              <form method="POST" action="cek_login.php">
                <div class="mb-4">
                  <label for="username" class="form-label"
                    >Username/Email</label
                  >
                  <input type="text" class="form-control" name="username" id="username" />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" />
                </div>
                <div class="mb-4">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="remember"
                  />
                  <label for="remember" class="form-label">Remember Me</label>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn text-light main-bg">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
