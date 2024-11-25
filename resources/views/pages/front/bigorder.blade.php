@extends('layouts.front2')
@section('content')
<div class="container-xxl pt-5">
    <marquee class="mt-5" scrollamount="10">
      <h3>
        THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
        GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
        BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN
        IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA
      </h3></marquee
    >
  </div>

  <!-- bigorder Start -->
  <div class="container-xxl" id="story ">
    <div class="container py-5 px-lg-5">
      <div class="row align-items-center">
        <div class="col-lg-5 fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid" src="{{asset('bangor/img/bigordermenu.png')}}" alt="" />
        </div>
        <div class="col-lg-7 fadeInUp" data-wow-delay="0.1s">
          <!-- <img src="img/tentangkami.png" alt="" style="max-width: 300px;"> -->
          <h1>BIG ORDER</h1>
          <p class="mb-4">
            Setiap acara menjadi lebih istimewa dengan kehadiran Pizza
            Ranjang. Bayangkan, seporsi pizza hangat dan lezat disajikan
            langsung, siap memanjakan lidah Anda dan tamu undangan. Kami
            hadir untuk memberikan pengalaman kuliner yang unik dan tak
            terlupakan, mengubah setiap momen menjadi perayaan yang meriah.
            Dengan Pizza Ranjang, setiap gigitan pizza adalah sebuah
            kenikmatan yang tak tergantikan.
          </p>
          <ul>
            <li>Min order 100pcs</li>
            <li>Pengiriman dari outlet terdekat</li>
            <li>Packaging box</li>
            <li>Pengiriman pakai gosend</li>
            <li>Dikenakan ongkir sesuai alamat yang dituju</li>
          </ul>
        </div>
      </div>
      <div class="row align-items-center mt-5">
        <div class="col-lg-5 fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid" src="{{asset('bangor/img/foodtruck.png')}}" alt="" />
        </div>
        <div class="col-lg-7 fadeInUp" data-wow-delay="0.1s">
          <!-- <img src="img/tentangkami.png" alt="" style="max-width: 300px;"> -->
          <h1>BIG ORDER with FOOD TRUCK</h1>
          <p class="mb-4">
            lebih dari sekadar truk makanan. Ini adalah pengalaman kuliner
            dan rekreasi yang tak terlupakan. Bayangkan menikmati sepotong
            pizza hangat sesaat setelah di masak. Meriahkan acara dan
            menghangatkan suasana dengan foodtruck Pizza Ranjang!
          </p>
          <ul>
            <li>Min order 200pcs</li>
            <li>Include Foodtruck dan Man Power</li>
            <li>Free Ongkir untuk JaBoDeTaBek</li>
            <li>Tersedia masak di lokasi</li>
            <li>Maks 3 menu</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-xxl pemesanan">
    <div>
      <h1>Tata Cara Pemesanan</h1>
      <h3>step 1</h3>
      <p>
        Customer menghubungi nomor berikut <a href="https://wa.me/6281318752885"
          >0813-1875-2885</
        >
      </p>
      <h3>step 2</h3>
      <p>Pengisian format order FOOD TRUCK atau BIG ORDER</p>
      <h3>step 3</h3>
      <p>
        Customer melakukan pembayaran dan memberikan bukti ke whatsapp
        customee service
      </p>
      <h3>step 4</h3>
      <p>Invoice akan dikirim melalui whatsapp</p>
      <h3>step 5</h3>
      <p>
        Pesanan diantar ke alamat tujuan sesuai dengan tanggal & waktu yang
        sudah ditulis melalui format order
      </p>
    </div>
  </div>


@endsection
