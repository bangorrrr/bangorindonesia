@extends('layouts.front2')
@section('content')
<!-- kemitraan Start -->
<div class="container-xxl pt-5" id="story ">
    <div class="container py-5 px-lg-5">
      <di class="row align-items-center">
        <div
          class="col-lg-5 p-5 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="{{asset('bangor/img/kemitraan.png')}}" alt="">
        </div>

        <!-- <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="bangor/img/kemitraan2.png" alt="">
        </div>
        <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="bangor/img/kemitraan.png" alt="">
        </div> -->

          <div
          class="section-title position-relative col-lg-7 fadeInUp"
          data-wow-delay="0.1s"
        >
          <h1 class="mb-5">PAKET KEMITRAAN REGULER</h1>
          <p class="mb-4">
            Paket Kemitraan Burger Bangor Reguler merupakan peluang investasi yang terbukti dengan banyak tawaran menarik dan keuntungan yang pasti.
          </p>
          <p>Apa yang ditawarkan dalam kemitraan Burger Bangor?
          </p>
          <ul>
            <li><strong>Merek yang Kuat</strong> Anda akan menggunakan merek Burger Bangor yang sudah dikenal luas dan memiliki reputasi yang baik.</li>
            <li><strong>Sistem yang Teruji</strong>Anda akan mendapatkan sistem operasional yang sudah teruji dan terbukti berhasil.</li>
            <li><strong>Dukungan dari Pusat</strong> Anda akan mendapatkan dukungan penuh dari pusat, mulai dari pelatihan, suplai bahan baku, hingga promosi.</li>
            <li><strong>Potensi Keuntungan yang Menjanjikan</strong>  Dengan sistem yang telah teruji dan dukungan dari pusat, Anda berpotensi mendapatkan keuntungan yang menarik.</li>
          </ul>
          <a
            href="https://wa.me/6281586369239"
            class="socmed btn btn-outline-primary py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
            >Hubungi kami</a
          >
        </div>
        <hr>
    </div>
    <div class="container py-5 px-lg-5">
      <di class="row align-items-center">
        <div
          class="col-lg-5 p-4 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="{{asset('bangor/img/kemitraan2.png')}}" alt="">
        </div>

        <!-- <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="bangor/img/kemitraan2.png" alt="">
        </div>
        <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="bangor/img/kemitraan.png" alt="">
        </div> -->

        <div
          class="section-title position-relative col-lg-7 fadeInUp"
          data-wow-delay="0.1s"
        >
          <h1 class="mb-5">PAKET KEMITRAAN AUTOPILOT</h1>
          <p class="mb-4">
            Kemitraan Burger Bangor merupakan peluang bisnis yang menarik bagi Anda yang ingin bergabung dalam jaringan bisnis kuliner yang sedang berkembang pesat. Dengan menjadi mitra Burger Bangor, Anda akan mendapatkan kesempatan untuk menjalankan bisnis dengan merek yang sudah dikenal dan memiliki pangsa pasar yang luas.
          </p>
          <p>Apa yang ditawarkan dalam kemitraan Burger Bangor?
          </p>
          <ul>
            <li><strong>Merek yang Kuat</strong> Anda akan menggunakan merek Burger Bangor yang sudah dikenal luas dan memiliki reputasi yang baik.</li>
            <li><strong>Sistem yang Teruji</strong>Anda akan mendapatkan sistem operasional yang sudah teruji dan terbukti berhasil.</li>
            <li><strong>Dukungan dari Pusat</strong> Anda akan mendapatkan dukungan penuh dari pusat, mulai dari pelatihan, suplai bahan baku, hingga promosi.</li>
            <li><strong>Potensi Keuntungan yang Menjanjikan</strong>  Dengan sistem yang telah teruji dan dukungan dari pusat, Anda berpotensi mendapatkan keuntungan yang menarik.</li>
          </ul>
          <a
            href="https://wa.me/6281586369239"
            class="socmed btn btn-outline-primary py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
            >Hubungi kami</a
          >
        </div>
        <hr>
    </div>
    <div class="container py-5 px-lg-5">
      <di class="row align-items-center">
        <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="{{asset('bangor/img/kemitraan4.png')}}" alt="">
        </div>
        <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="{{asset('bangor/img/kemitraan3.png')}}" alt="">
        </div>
        <div
          class="col-lg-4 p-1 fadeInUp"
          data-wow-delay="0.1s"
        >
          <img class="img-fluid" src="{{asset('bangor/img/kemitraan5.png')}}" alt="">
        </div>

    </div>
  </div>
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
