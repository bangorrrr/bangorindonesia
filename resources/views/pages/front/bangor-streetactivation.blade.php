@extends('layouts.front2')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center">
                <h1>BANGOR GOES TO EVENT</h1>
            </div>
            <div>
                <p>Burger Bangor menyelenggarakan kegiatan bangor berbagi di berbagai tempat seperti panti asuhan, yayasan disabilitas, panti jompo dan rumah yatim. Kegiatan ini bertujuan untuk memberikan bantuan kepada mereka yang membutuhkan seperti sembako, alat tulis dan kebutuhan pokok lainnya. Melalui kegiatan ini, kami tidak hanya sekadar datang dan memberikan bantuan, namun kami hadir untuk terlibat, bermain, dan mendengarkan cerita-cerita mereka yang begitu bermakna.

                    Bagi kami, Bangor Berbagi bukan sekadar program sosial yang dijadwalkan secara rutin, tetapi sebuah gerakan kepedulian yang melekat dalam visi kami. Kami berharap kegiatan ini bisa menginspirasi lebih banyak pihak untuk ikut berbagi dan peduli.

                    Komitmen kami untuk terus berbagi juga merupakan bagian misi kami untuk menciptakan masyarakat yang saling mendukung dan peduli satu sama lain. Setiap langkah yang kami ambil dalam program Bangor Berbagi diharapkan dapat memberikan keceriaan dan harapan baru bagi mereka yang kami temui.
                    </p>
            </div>
        </div>
    </div>

  </main>



  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"
    ><i class="bi bi-arrow-up text-white"></i
  ></a>
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
