@extends('layouts.front2')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center">
                <h1>BANGOR GOES TO SCHOOL X BERTANDING</h1>
            </div>
            <div>
                <p>Bangor Goes to School adalah kegiatan yang dirancang khusus untuk memperkenalkan Burger Bangor kepada generasi muda di seluruh Indonesia. Melalui kunjungan langsung ke sekolah-sekolah dari tingkat SD, SMP, SMA, hingga pesantren dan kampus. Tujuan kami dalam kegiatan ini yaitu agar Burger Bangor dapat dikenal oleh setiap orang khususnya anak-anak dan remaja Indonesia.

                    Program ini juga dilengkapi dengan berbagai serangkaian kegiatan Bangor Bertanding seperti tarik tambang, balap karung, dan berbagai permainan lainnya yang menjadi daya tarik tersendiri di setiap kunjungan kami. Setiap lomba ini menghadirkan keceriaan yang mengundang tawa dan semangat kebersamaan

                    Melalui kegiatan Bangor Goes to School kami berharap dapat membuat Burger Bangor semakin dikenal luas dan menjadi pilihan utama di hati masyarakat Indonesia. Selain itu, kami berkomitmen untuk terus berinovasi dan menghadirkan pengalaman menyenangkan agar Burger Bangor tidak hanya dikenal sebagai produk lokal yang enak, tetapi juga dapat membawa keceriaan di setiap kunjungannya.

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
