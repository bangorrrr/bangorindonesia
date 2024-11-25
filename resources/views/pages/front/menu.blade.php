@extends('layouts.front2')
@section('content')
      <!-- menu Start -->
      <div class="container-xxl" id="feature">
        <div class="container py-5 px-lg-5">
          <div
            class="section-title position-relative text-center mt-5 wow fadeInUp"
            data-wow-delay="0.1s"
          >
          <img src="{{asset('bangor/img/menubangor.png')}}" style="max-width: 300px; " alt="menu burger bangor">
          </div>

          <div class="row g-4 mt-4">
            <div
              class="feature-item col-lg-3 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/jelata.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/juragan.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/ningrat.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/sultan2.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/pitik.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/pitikfire.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/BBQ.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/fish.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img
                  src="{{asset('bangor/img/creamygarlic.png')}}"
                  style="max-width: 260px"
                  alt=""
                />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/cheese-jr.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/hotdog.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img
                  src="{{asset('bangor/img/hotdog-bolognese.png')}}"
                  style="max-width: 260px"
                  alt=""
                />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/congor.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/bfc.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
            <div
              class="feature-item col-lg-3 col-md-6 rounded fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="text-center">
                <img src="{{asset('bangor/img/fries.png')}}" style="max-width: 260px" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Features End -->
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
