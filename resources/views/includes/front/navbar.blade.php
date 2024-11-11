<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0" id="home">
    <nav
      class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
    >
      <a href="" class="navbar-brand p-0">
        <!--<h1 class="m-0">FitApp</h1> -->
        <img src="{{asset('bangor/img/logo.png')}}" alt="Logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="fa fa-bars"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
          <a href="{{route('public')}}" class="nav-item nav-link {{Request::is('/') ? 'active' : '' }}">Home</a>
          <a href="{{route('public.about')}}" class="nav-item nav-link {{Request::is('about') ? 'active' : '' }}">About</a>
          <a href="{{route('public.menu')}}" class="nav-item nav-link {{Request::is('menu') ? 'active' : '' }}">Menu</a>
          <a href="{{route('public.store')}}" class="nav-item nav-link {{Request::is('store') ? 'active' : '' }}">Store</a>
          <a href="{{route('public.partnership')}}" class="nav-item nav-link {{Request::is('partnership') ? 'active' : '' }}">Partnership</a>
          {{-- <a href="{{route('public')}}" class="nav-item nav-link " >Blog</a> --}}
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Activation</a
            >
            <div class="dropdown-menu m-0">
              <a href="{{route('public.bigorder')}}" class="dropdown-item">Big order</a>
              <a href="{{route('public.bangor-berbagi')}}" class="dropdown-item">Bangor Berbagi</a>
              <a href="https://bangorfest.com/" class="dropdown-item">Bangor Festival</a>
              <a href="{{route('public.bangor-goestoevent')}}" class="dropdown-item">Bangor Goes To Event</a>
              <a href="{{route('public.bangor-goestoschool')}}" class="dropdown-item">Bangor Goes To School x Bertanding</a>
              <a href="{{route('public.bangor-funcookingclass')}}" class="dropdown-item">Bangor Fun Cooking Class</a>
              {{-- <a href="{{route('public.bangor-funcookingclass')}}" class="dropdown-item"
                >Bangor Street Activation</a
              > --}}

            </div>
          </div>
          <a href="{{route('public.contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        <!--<a
          href=""
          class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block"
          >Start Free Trial</a
        > -->
      </div>
    </nav>

    <div class="container-xxl hero-header">
      <div class="container px-lg-5">
        <div class="row g-5">
          <div class="col-lg-8 text-center text-lg-start">
            <h1 class="text-white mb-4 animated slideInDown" id="masthead-title">
              BURGER BANGOR BURGERNYA INDONESIA
            </h1>
            <p class="text-white pb-3 animated slideInDown" id="masthead-subtitle">
              Burger Bangor sebagai number #1 local burger company in Indonesia selalu memberikan kualitas terbaik bagi Sobat Bangor. Dengan bahan baku terbaik 100% daging sapi Australia berkualitas tinggi dan rendah lemak, roti, dan saus homemade membawa kami sebagai brand burger lokal yang sudah tersebar di 600 gerai di seluruh Indonesia dan akan terus bertambah, bertumbuh, berkembang hingga ke seluruh dunia.
            </p>
            <div class="socmed d-flex align-items-center mt-4">
              <a class="btn btn-outline-primary btn-square me-3" href="https://www.facebook.com/p/Burger-Bangor-100070755492590/" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square me-3" target="_blank"
                href="https://wa.me/6281586369239"
                ><i class="fab fa-whatsapp"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square me-3" target="_blank"
                href="https://www.instagram.com/burgerbangor/"
                ><i class="fab fa-instagram"></i
              ></a>
              <audio autoplay>
                <source src="{{asset('bangor/jingle-bangor.mp3')}}" type="audio/mp3" />
                Browsermu tidak mendukung tag audio, upgrade donk!
              </audio>
            </div>
          </div>
          <div
            class="col-lg-4 d-flex justify-content-center justify-content-lg wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="owl-carousel screenshot-carousel">
              <img class="img-fluid" src="{{asset('bangor/img/screenshot-1.png')}}" alt="" />
              <img class="img-fluid" src="{{asset('bangor/img/screenshot-2.png')}}" alt="" />
              <img class="img-fluid" src="{{asset('bangor/img/screenshot-3.png')}}" alt="" />
              <img class="img-fluid" src="{{asset('bangor/img/screenshot-4.png')}}" alt="" />
              <img class="img-fluid" src="{{asset('bangor/img/screenshot-5.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->

