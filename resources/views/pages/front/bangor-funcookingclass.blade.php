@extends('layouts.front2')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center">
                <h1>BANGOR FUN COOKING CLASS</h1>
            </div>
            <div>
                <p>Burger Bangor mengadakan kegiatan seru untuk anak-anak, yaitu Fun Cooking Class! Di sini, si kecil bisa belajar cara membuat burger mereka sendiri dengan cara yang menyenangkan. Mereka akan diperkenalkan pada berbagai bahan burger, . Setelah memahami bahan-bahan tersebut, anak-anak juga akan diajari teknik plating burger yang menarik,

                    Tidak hanya itu, akan ada sesi mewarnai yang menyenangkan, di mana anak-anak bisa berkreasi dan mengekspresikan kreativitas mereka dengan gambar-gambar burger.

                    Kegiatan Fun Cooking Class bertujuan untuk memberikan pengalaman belajar yang menyenangkan sambil mengembangkan keterampilan si kecil untuk belajar menyajikan makanan, Selain itu, kegiatan ini juga mendorong anak-anak untuk berkreasi dan mengekspresikan kreativitas mereka.
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
