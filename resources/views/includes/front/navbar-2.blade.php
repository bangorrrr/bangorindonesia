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
              <a href="{{route('public.bangor-berbagi')}}" class="dropdown-item"
                >Bangor Berbagi</a
              >
              <a href="https://bangorfest.com/" class="dropdown-item"
                >Bangor Festival</a
              >
              <a href="{{route('public.bangor-goestoevent')}}" class="dropdown-item"
                >Bangor Goes To Event</a
              >
              <a href="{{route('public.bangor-goestoschool')}}" class="dropdown-item"
                >Bangor Goes To School x Bertanding</a
              >
              <a href="{{route('public.bangor-funcookingclass')}}" class="dropdown-item"
                >Bangor Fun Cooking Class</a
              >
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

  </div>
  <!-- Navbar & Hero End -->

