@extends('layouts.front')
@section('content')
        <marquee class="position-relative" scrollamount="10">
        <h1>
        THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
        GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
        BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN
        INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA
        </h1>
    </marquee>

    <!--carousel-->
    <div class="container-xxl py-5 promo">
        <div class="owl-carousel promo-carousel wow fadeInUp"  data-wow-delay="0.1s">
            <div class="promo-item rounded p-4 " id="carousel_content">
                <div class="d-flex align-items-center shadow">
                <img
                    class="img-fluid bg-white rounded flex-shrink-1 p-1 align-items-center"
                    src="{{asset('bangor/img/banner1.jpg')}}"
                />
                </div>
            </div>
            <div class="promo-item rounded p-4">
                <div class="d-flex align-items-center shadow">
                <img
                    class="img-fluid bg-white rounded flex-shrink-1 p-1"
                    src="{{asset('bangor/img/banner3.jpg')}}"
                />
                </div>
            </div>
            <div class="promo-item rounded p-4">
                <div class="d-flex align-items-center shadow">
                <img
                    class="img-fluid bg-white rounded flex-shrink-1 p-1"
                    src="{{asset('bangor/img/banner2.jpg')}}"
                />
                </div>
            </div>
        </div>
    </div>
    <!--end carousel-->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container px-lg-5">
        <div class="row align-items-center">
            <div class="position-relative col-lg-6 fadeInUp" data-wow-delay="0.1s">
                <img src="{{asset('bangor/img/tentangkami.png')}}" style="max-width: 250px;" alt="Tentang Kami">
                <p class="text-justify mb-4">
                    Tepat pada tahun 2019, berawal dari sebuah obrolan senja yang Unfaedah di pojok warung kopi, tercetus ide kecil kami untuk mencoba membuat usaha makanan yang kami harapkan bisa menopang hidup anak cucu cicit di kemudian hari. Akhirnya tanpa basa basi berdasarkan sedikit bekal pengalaman saat masih remaja kami mencoba membuat burger lokal dengan nama BURGER BANGOR Sesuai dengan namanya Bangor!
                    <br> <br> Tentu ini bukan sembarang burger pada umumnya, Bangor memiliki varian parodi kasta Jelata, Juragan, Ningrat sampai level Sultan. Dengan racikan citarasa Bangor yang berbeda, burger halal rendah lemak dengan 100% premium beef, juga roti dan saos yang kami buat sendiri kami hadirkan dengan harga yang sangat terjangkau mulai dari Rp. 13.000. Kini lima  tahun telah berlalu dan ternyata 8 dari 10 wanita mengatakan ini benar-benar Bangor, Gawat!
                </p>
                <a
                    href=""
                    class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
                    >Selengkapnya
                </a>
            </div>
            <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                <div class="embed-responsive embed-responsive-3by4">
                  <iframe
                    class="embed-responsive-item col-12 my-3"
                    src="https://www.youtube.com/embed/TK0FdE66D3s?si=ODukuDvrtjS7Bv7T"
                    style="min-height: 400px"
                  ></iframe>
                </div>
              </div>
        </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Promotion Start -->
    <div class="container-fluid my-5 px-0">
        <div class="row bg-primary m-0">
            <div
            class="col-md-6 px-0 animated wow slideInLeft"
            data-wow-delay="0.5s"
            style="min-height: 100px">
            <div class="position-relative h-100">
                <img
                    class="img-fluid"
                    src="{{asset('bangor/img/promotion.png')}}"
                    style="object-fit: cover"/>
            </div>
          </div>
          <div
            class="col-md-6 py-5 py-md-0 px-0 animated wow slideInRight"
            data-wow-delay="0.5s"
          >
            <div
              class="h-100 d-flex flex-column align-items-center justify-content-center p-5"
            >
              <div
                class="d-flex align-items-center justify-content-center mb-4"
                style="width: 100px; height: 100px"
              >
                <h3 class="font-weight-bold text-secondary mb-0">
                  <img src="{{asset('bangor/img/icon.png')}}" style="max-width: 300px" />
                </h3>
              </div>
              <h3 class="font-weight-bold text-white mt-3 mb-4">
                BURGER BANGOR
              </h3>
              <p class="text-white mb-4">
                Burger Halal Rendah Lemak dengan 100% Premium Beef
              </p>
              <a
                href="https://linkr.it/13ZYnV"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on GrabFood</a
              >
              <a
                href="https://www.shopeefood.co.id/"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on ShoopeFood</a
              >
              <a
                href="https://linkr.it/4yLSwJ"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on GoFood</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- Promotion End -->


    <!-- magazine Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container py-5 px-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <div class="row">
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-48.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/1WJnZ4dtMcDz3lFPlmaPmG0i6QK0SEmiR/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-47.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/1eZmxuWdWTgVdayF-iLvbXFHNLozDCP10/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-46.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/1CW8WjqwuH42XXfUvdFf3aQCpudDPc7qY/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-45.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/143Zs3cNr4FFK-jKTWSVe0S0Zqzi52s4c/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-44.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/154bgZDYAGan9geXXW2HOhLRY5si3XvbW/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
                <div class="col-4 cards">
                <img src="{{asset('bangor/img/magazine-43.jpg')}}" alt="" class="img-fluid" />
                <span>
                    <a
                    href="https://drive.google.com/file/d/1qPeKxwAoUWUZj_lgp67j5X4vDTkkoPF7/view?usp=drive_link"
                    >Download</a
                    >
                </span>
                </div>
            </div>
            </div>
            <div class="col-lg-6 my-3 text-center data-wow-delay="0.1s">
                <img

                    src="{{asset('bangor/img/bangormagz.png')}}" alt="bangor magazines"
                    style="max-width: 300px"/>
                        <p class="mb-4">
                            Bangor Magazine merupakan majalah yang hadir setiap minggunya untuk memberikan segudang informasi terbaru dan cerita menarik seputar Burger Bangor, Majalah ini dibuat untuk menginspirasi dan membantu Sobat Bangor agar selalu update dengan perkembangan terbaru! Yuk, baca sekarang dan dapatkan informasi menarik setiap minggunya!
                        </p>
                        <a
                            href="https://drive.google.com/drive/folders/1_Mr3nUIN3QxWsfEGDrjt5slPo0mRNpya"
                            class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
                            >Selengkapnya
                        </a>
            </div>
        </div>
        </div>
    </div>

    <!-- pelayanan kami -->
    <div class="container-xxl py-5 pelayanan">
        <div class="container px-lg-5">
        <div
            class="position-relative mb-5 wow fadeInUp"
            data-wow-delay="0.1s">
            <img class="img-fluid" src="{{asset('bangor/img/adaapadibangor.png')}}" style="max-width: 350px;" alt="ada apa di bangor?">
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
            >
                <div class="service-icon d-flex align-items-center justify-content-center">
                <img src="{{asset('bangor/img/partnership.png')}}" alt="partnership burger bangor" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>PARTNERSHIP</strong></h5>
                <p>
                Peluang emas bagi Anda yang ingin berinvestasi di bisnis F&B
                kami yang sudah terbukti sukses
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill" href="{{route('public.partnership')}}"
                >Selengkapnya</a
                >
            </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
            >
                <div class="service-icon d-flex align-items-center justify-content-center">
                <img src="{{asset('bangor/img/bigorder.png')}}" alt="pesan banyak burger bangor" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BIG ORDER</strong></h5>
                <p>
                Punya acara besar dan butuh makanan enak dalam jumlah besar?
                Order untuk memudahkan pesanan dalam jumlah banyak
                Burger Bangor siap jadi solusi!
                </p>
                <div>
                 <a
                  class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                  href="{{route('public.bigorder')}}"
                  >selengkapnya</a>

                </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img src="{{asset('bangor/img/Bangorfest.jpg')}}" alt="bangorfest vol.3" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BANGORFEST</strong></h5>
                <p>
                  Pesta burger murah diiringi dengan penyanyi populer yang akan
                  selalu hadir dalam 2 tahun kebelakang dan
                  <strong>AKAN HADIR KEMBALI PADA 2025!</strong>
                </p>
                <a
                  class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                  href="https://bangorfest.com"
                  >Selengkapnya</a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img src="{{asset('bangor/img/goestoschool.png')}}" alt="bangor goes to school" class="img-fluid" style="max-width: 100px;" >
                </div>
                <h5 class="mb-3"><strong>BANGOR GOES TO SCHOOL</strong></h5>
                <p>
                  Selangkah lebih dekat dengan sekolah-sekolah keren se
                  Indonesia! diharapkan membentuk pribadi siswa yang selalu
                  bersyukur, kreatif, dan berani. Yuk intip keseruan
                  kegiatannya!
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill" href="{{route('public.bangor-goestoschool')}}">Selengkapnya</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img class="img-fluid" src="{{asset('bangor/img/bangorberbagi.png')}}" alt="bangor berbagi" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BANGOR BERBAGI</strong></h5>
                <p>
                  Kami percaya bahwa dengan memberikan kembali kepada
                  masyarakat, kita bisa menciptakan senyuman yang lebih banyak.
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill" href="{{route('public.bangor-berbagi')}}">Selengkapnya</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img class="img-fluid" src="{{asset('bangor/img/funcookingclass.png')}}" alt="fun cooking class burger bangor" style="max-width: 80px;">
                </div>
                <h5 class="mb-3"><strong>FUN COOKING CLASS</strong></h5>
                <p>
                  kegiatan seru untuk anak-anak yang diadakan oleh Burger
                  Bangor. Di kelas ini, si kecil akan belajar cara membuat
                  burger mereka sendiri dengan cara yang menyenangkan.
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill" href="{{route('public.bangor-funcookingclass')}}">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-xxl" id="feature">
        <div class="container py-5 px-lg-5">
          <div
            class="position-relative text-center wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img src="{{asset('bangor/img/menubangor.png')}}" style="max-width: 300px;" alt="menu burger bangor">
          </div>

          <div class="row g-4 mt-4">
            <div
              class="feature-item col-lg-3 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/jelata.png')}}" style="max-width: 250px" alt="jelata" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/juragan.png')}}" style="max-width: 250px" alt="juragan" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/ningrat.png')}}" style="max-width: 250px" alt="ningrat" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/sultan.png')}}" style="max-width: 250px" alt="sultan" />
              </div>
            </div>
          </div>

          <div class="text-center">
            <a
              href="menu.html"
              class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
              >Selengkapnya</a
            >
          </div>
        </div>
      </div>

      <!-- media sosial -->
      <div class="container-xxl medsos">
        <div class="container px-md-5">
          <div
            class=" position-relative text-center mb-5 pb-2 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img src="{{asset('bangor/img/mediasosial.png')}}" alt="media sosial burger bangor" style="max-width: 350px;">
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.facebook.com/p/Burger-Bangor-100070755492590/" target="_blank"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/burgerbangor/"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/bangor.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h3 class="fw-bold m-0">Burger <br />Bangor</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/bangorfest/"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/Bangorfest.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h5 class="fw-bold m-0">
                    Bangor <br />
                    Fest
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/bangorgroup/"
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/Bangorgroup.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h5 class="fw-bold m-0">
                    Bangor <br />
                    Group
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      {{-- <!-- instagram -->
      <div
        class="elfsight-app-0a89c211-6a5a-4297-bf5c-9ee36231e5e1 p-5 mt-5"
        data-elfsight-app-lazy
      ></div> --}}
@endsection
@section('script')
<script>
    $('document').ready(function(e){
        $.ajax({
            url: "{{route('public.data')}}",
            method: 'GET',
            success: function(response){

                let masterhead =  response.master_head;
                let mastercarousel =  response.master_carousel;
                if (masterhead){
                    $('#masthead-title').empty().text(masterhead.title);
                    $('#masthead-subtitle').empty().text(masterhead.subtitle);
                    $('.hero-header').css({
                    'background': `url("{{asset('bangor//img/bg-bottom2.png')}}") no-repeat, url("/storage/${masterhead.image}") no-repeat, linear-gradient(to bottom right, #222222, #000000)`,
                    'background-position': 'center bottom, right -175px top 40%',
                    'margin-bottom': '6rem',
                    'padding': '13rem 0 0 0'
                    });
                }
                if (mastercarousel && mastercarousel.length > 0){
                    $('#carousel_content').empty();
                    mastercarousel.forEach(function(mastercarousel){
                        let carouselItem = `
                        <div class="promo-item rounded p-4 " >
                            <div class="d-flex align-items-center shadow">
                                <img
                                class="img-fluid bg-white rounded flex-shrink-1 p-1 align-items-center"
                                src="/storage/${mastercarousel.image}"/>
                            </div>
                        </div>
                        `;
                        $('#carousel_content').append(carouselItem);
                    });

                }
            }
        });

    });
</script>
@endsection
