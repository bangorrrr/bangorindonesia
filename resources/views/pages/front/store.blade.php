@extends('layouts.front2')
@section('content')
<marquee class="position-relative pt-5 mt-5" scrollamount="10"
        ><h1>
            5 Years Dedicated
            The Unexpected Journey
            >60 Months
>660 Outlets
>60 Million Burgers Sold
>6000 Job Oppotunities
        </h1></marquee
      >

      <!-- story Start -->
      <div class="container-xxl" id="  ">
        <div class="container py-5 px-lg-5">
          <div class="row align-items-center">
            <div
              class="col-lg-5 fadeInUp"
              data-wow-delay="0.1s"
            >
              <img class="img-fluid" src="{{asset('bangor/img/outletflagship.png')}}" alt="">
            </div>
              <div
              class="section-title position-relative col-lg-7 fadeInUp"
              data-wow-delay="0.1s"
            >
              <h1 class="mb-5">BANGOR FLAGSHIP</h1>
              <p class="mb-4">
                <br>Bangor Flagship adalah destinasi yang sempurna bagi Anda yang ingin menikmati suasana nyaman sambil berbelanja. Dengan desain interior yang modern dan dilengkapi fasilitas lengkap seperti ruang bersantai ber-AC, sofa empuk, dan Wi-Fi gratis, Anda dapat bersantai sejenak setelah puas berbelanja. Selain itu, terdapat pula berbagai pilihan menu makanan dan minuman yang menggugah selera. Tak hanya itu, Bangor Flagship juga sering mengadakan pameran menarik yang sayang untuk dilewatkan. Jelajahi koleksi merchandise eksklusif dan temukan sudut-sudut unik yang instagramable. Kunjungi Bangor Flagship sekarang dan rasakan pengalaman belanja yang tak terlupakan!
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- story Start -->
      <div class="container-xxl" id="story ">
        <div class="container py-5 px-lg-5">
          <div class="row align-items-center">
            <div
              class="col-lg-5 fadeInUp"
              data-wow-delay="0.1s"
            >
              <img class="img-fluid" src="{{asset('bangor/img/outletbiasa.png')}}" alt="">
            </div>
              <div
              class="section-title position-relative col-lg-7 fadeInUp"
              data-wow-delay="0.1s"
            >
              <h1 class="mb-5">BANGOR OUTLET</h1>
              <p class="mb-4">
                <br>Bangor Outlet adalah tempat yang ideal bagi Anda yang ingin menikmati kelezatan Burger Bangor dengan cepat dan mudah. Dengan konsep yang lebih minimalis dan fungsional, outlet ini dirancang khusus untuk melayani pelanggan yang ingin melakukan take away atau pesan antar.
              </p>
            </div>
          </div>
        </div>
      </div>


      <!-- Maps Start -->
      <div class="container-xxl maps" >
        <div class="main-content rounded wow fadeInUp" data-wow-delay="0.5s">
            <div class="contact-page-map text-center">
                <iframe src="https://www.google.com/maps/d/embed?mid=13UmbEmEOra-6_2kPORiSre_kXyTp9kM&ehbc=2E312F"></iframe>
            </div>
        </div>
      </div>
      <!-- About End -->

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
                    'background-position': 'center bottom, right 0px top 67%',
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
