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
    <title>Rental Mobil Detail - Laravel</title>
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
        <a class="navbar-brand" href="/detail">Refresh</a>
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
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Detail Mobil</h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img
                class="card-img-top"
                src="{{ asset('img/Gemera31.jpg')}}"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div>
                  <!-- Product name-->
                  <h3 class="fw-bolder text-primary">Deskripsi</h3>
                  <p>
                    Namanya Koenigsegg tentu tak bisa lepas dari performa mesinnya yang begitu buas. Gemera mengandalkan mesin bensin 2.000 cc twin turbo tiga silinder yang dipadu dengan teknologi plug-in hybrid. Mesin bensinnya mampu menghasilkan tenaga 600 hp dan torsi 600 Nm, dan jika digabung dengan motor listrik, tenaganya bisa mencapai 1.100 hp!
                    <p>Saking besarnya tenaga yang dihasilkannya, Gemera mampu berakselerasi 0-100 km/jam dalam waktu 1,9 detik saja serta kecepatan maksimal 400 km/jam. Performanya yang dahsyat ini mampu mengalahkan rekor yang dicetak oleh Bentley Continental Supersports. Kebetulan keduanya sama-sama berupa mobil 4-seater berperforma tinggi.</p>
                    <p>Karena begitu spesial, hanya ada 300 unit yang disediakan untuk pasar global, sedangkan untuk Indonesia belum jelas berapa unit yang akan tersedia. Penjualan Dibuka Dari Tanggal 17 Agustus Hingga 30 September mendatang.</p>

                  </p>
                  <div class="mobil-info-list border-top pt-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>TURBO</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>CHARGER</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>AUDIO</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>AC</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card">
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <h5 class="fw-bolder">Special Item</h5>
                    <div class="rent-price mb-3">
                      <span style="font-size: 1rem" class="text-primary"
                        >Rp.200m/</span
                      >30 sep
                    </div>
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan Bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">2</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a
                    class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                    href="/contact"
                    style="column-gap: 0.4rem"
                    >Beli Mobil <i class="ri-whatsapp-line"></i>
                  </a>
                </div>
              </div>
            </div>
            <a class="btn btn-primary mt-auto" href="/">Kembali</a>
          </div>
        </div>
      </div>
    </section>
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