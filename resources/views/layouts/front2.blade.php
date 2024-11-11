<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BURGER BANGOR INDONESIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="BURGER BANGOR , BURGER MURAH" name="keywords" />
    <meta
      content="THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA"
      name="description"
    />

    <!-- Favicon -->
    <link href="{{asset('bangor/img/bangor.jpg')}}" rel="icon" />
    @include('includes.front.style')

  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-grow text-primary"
          style="width: 3rem; height: 3rem"
          role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      @include('includes.front.navbar-2')
      <!-- Navbar & Hero End -->

      @yield('content')

      <!-- Footer Start -->
      @include('includes.front.footer')
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"
        ><i class="bi bi-arrow-up text-white"></i
      ></a>




    @include('includes.front.script')
    @yield('script')
  </body>
</html>
