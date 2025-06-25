    <nav
      id="navlistWrapper"
      class="navbar navbar-expand-lg navbar-light bg-white py-3 pt-2 pb-2"
    >
      <div class="container">
        <div class="row w-100 align-items-center">
          <!-- Logo di kiri -->
          <div
            class="col-6 col-lg-4 d-flex align-items-center order-1 order-lg-1"
          >
            <a class="m-0 navbar-brand" href="#">
              <img
                src="{{asset('front/assets/img/logo.png')}}"
                alt="Portal Berita Logo"
                class="logo-img"
              />
            </a>
          </div>

          <!-- Tombol di kanan -->
          <div
            class="col-6 col-lg-4 d-flex justify-content-end align-items-center order-2 order-lg-3"
          >
            <a href="auth/regist.html" class="btn btn-register me-2 shadow-lg"
              >Daftar</a
            >
            <a href="auth/login.html" class="btn btn-signin shadow-lg">Masuk</a>
          </div>

          <!-- Search Bar -->
          <div class="col-12 col-lg-4 d-flex mt-3 mt-lg-0 order-3 order-lg-2">
            <form class="d-flex w-100 position-relative">
              <input
                class="form-control rounded-cover ps-5"
                type="search"
                placeholder="Search..."
                aria-label="Search"
              />
              <i
                class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"
              ></i>
            </form>
          </div>
        </div>
      </div>
    </nav>
