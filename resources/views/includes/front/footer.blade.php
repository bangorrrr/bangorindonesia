<div
        class="container-fluid bg-primary text-light footer wow fadeIn"
        data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
          <div class="row g-5">
            <div class="col-md-6 col-lg-3">
              <h4 class="text-white mb-4">Address</h4>
              <p>
                <i class="fa fa-map-marker-alt me-3"></i>Rukan Greatwall, Jl.
                Green Lake City Boulevard No.25 Blok A29-30, Petir, Cipondoh,
                Tangerang City, Banten 15147
              </p>
              <p><i class="fa fa-phone-alt me-3"></i>+62 812-1966-8834</p>
              <p><i class="fa fa-envelope me-3"></i>burgerbangor@gmail.com</p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h4 class="text-white mb-4">Quick Link</h4>
              <a href="{{route('public')}}" class="btn btn-link ">Home</a>
              <a href="{{route('public.about')}}" class="btn btn-link ">About</a>
              <a href="{{route('public.menu')}}" class="btn btn-link ">Menu</a>
              <a href="{{route('public.store')}}" class="btn btn-link ">Store</a>
              <a href="{{route('public.partnership')}}" class="btn btn-link">Partnership</a>
              <a href="{{route('public.contact')}}" class="btn btn-link">Contact</a>
            </div>
            <div class="col-md-6 col-lg-3">
              <h4 class="text-white mb-4">Our Activation</h4>
              <a href="{{route('public.bigorder')}}" class="btn btn-link">Big order</a>
              <a href="{{route('public.bangor-berbagi')}}" class="btn btn-link">Bangor Berbagi</a>
              <a href="https://bangorfest.com/" class="btn btn-link">Bangor Festival</a>
              <a href="{{route('public.bangor-goestoevent')}}" class="btn btn-link">Bangor Goes To Event</a>
              <a href="{{route('public.bangor-goestoschool')}}" class="btn btn-link">Bangor Goes To School x Bertanding</a>
              <a href="{{route('public.bangor-funcookingclass')}}" class="btn btn-link">Bangor Fun Cooking Class</a>
            </div>
            <div class="col-md-6 col-lg-3">
              <img class="img-fluid" src="{{asset('bangor/img/logo.png')}}" alt="" />
              <!-- <h4 class="text-white mb-4">Newsletter</h4>
              <p>
                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulpu
              </p>
              <div class="position-relative w-100 mt-3">
                <input
                  class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
                  type="text"
                  placeholder="Your Email"
                  style="height: 48px"
                />
                <button
                  type="button"
                  class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"
                >
                  <i class="fa fa-paper-plane text-primary-gradient fs-4"></i>
                </button>
              </div> -->
            </div>
          </div>
        </div>
        <div class="container px-lg-5">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy;
                <a class=" " href="#">www.burgerbangorindonesia.com</a>, <p>All
                Right Reserved. {{date ('Y')}}</p>
                {{-- <a class=" " href="">Burger Bangor</a> --}}
              </div>
              {{-- <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
