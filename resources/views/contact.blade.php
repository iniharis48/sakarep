<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact Kami- Laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/contact">Refresh</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Kontak Kami</h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 m-auto">
            <div class="contact-form">
              <form action="/contact" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-6 mb-2">
                    <div class="name-input form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Isikan nama lengkap"
                        name="nama"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 mb-2">
                    <div class="email-input form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Isikan alamat email"
                        name="email"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-6 mb-2">
                    <div class="subject-input form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Isikan nomer ponsel anda"
                        name="nmr_telp"
                      />
                    </div>
                  </div>
                </div>
                <div class="message-input form-group mb-3">
                  <textarea
                    name="pesan"
                    cols="30"
                    rows="10"
                    placeholder="Isikan pesan anda"
                    class="form-control"
                  ></textarea>
                </div>
                <div class="input-submit form-group">
                  <button
                    type="submit"
                    style="height: 50px; width: 400px; margin: 0 auto"
                    class="d-block btn btn-primary"
                  >
                    Kirim Pesan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <a class="btn btn-primary mt-auto" href="/">Kembali</a>
      </div>
    </section>

    <div class="maparea">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe
            width="100%"
            height="498"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=jeringo&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe
          ><a href="https://fmovies-online.net">fmovies</a><br /><style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 498px;
              width: 100%;
            }</style
          ><a href="https://www.embedgooglemap.net"></a
          ><style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 498px;
              width: 100%;
            }
          </style>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Rental Mobil &copy; Your Website 
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
