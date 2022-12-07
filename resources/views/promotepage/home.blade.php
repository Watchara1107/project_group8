@extends('layouts.promote')
@section('content')
  
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
  
    <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Me Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <span>โปรโมชั่น</span>
        <h2>โปรโมชั่น</h2>
      </div>
     
      <div class="row" data-aos="fade-up" data-aos-delay="100">
      @foreach ($promotion as $pro)
      <div class="col-lg-6 col-md-6">
        <div class="hotel">
          <div class="hotel-img">

          
            <img src="{{ asset('admin/upload/promotion/'.$pro->image) }}" alt="Hotel 1" class="img-fluid">
          </div>
          <h3>{{ $pro->name }} ราคา {{ $pro->price }}</h3>
          <h5></h5>
    
        </div>
      </div>
      @endforeach

        
        </div>
        
          <div class="section-title">
        <span>สถานที่ท่องเที่ยว</span>
        <h2>สถานที่ท่องเที่ยว</h2>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src=" {{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src=" {{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('template/promote/assets/img/gallery/a.jpg ')  }}" class="d-block w-100" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
</div>

<div class="section-title">
<h2>เครื่องเล่นที่น่าเล่น</h2>
<div class="row" data-aos="fade-up" data-aos-delay="100">
@foreach ($player as $play)
<div class="col-lg-6 col-md-6">
  <div class="hotel">
    <div class="hotel-img">
      <img src=" {{ asset('admin/upload/player/'.$play->image) }}" alt="Hotel 1" class="img-fluid">
    </div>
    <h3 class="mt-4">{{ $play->name }}</h3>
    <h3>{{ $play->price }}</h3>
    </div>
  </div>
@endforeach
      </div>
    </div>

<!-- End .content-->

<!-- End About Me Section -->

  <!-- ======= My Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>เมนูการจองที่พักและเครื่องเล่น</span>
        <h2>เมนูการจองที่พักและเครื่องเล่น</h2>
    


        <div class="row row-cols-1 row-cols-md-2 g-4">
@foreach ($room as $rooms)
<div class="col">
  <div class="card">
    <img src="{{ asset('admin/upload/room/'.$rooms->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $rooms->name }}</h5>
      <a href="#" class="btn btn-primary">{{ $rooms->price }}</a>
    </div>
  </div>
</div>
@endforeach

</div><!-- End My Resume Section -->

  <!-- ======= My Services Section ======= -->
  
  <section id="services" class="services">
    <div class="container">

      
<!-- End My Services Section -->

  <!-- ======= Testimonials Section ======= -->

<!-- End testimonial item -->

<!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
 
  <!-- ======= My Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
     <div class="section-title">
        <span>ข้อมูลการจอง</span>
        <h2>ข้อมูลการจอง</h2>
     
      </div>

      <figure class="figure">
<img src="{{ asset('template/promote/assets/img/T6.jpg ')  }}" class="figure-img img-fluid rounded" alt="...">
<p class="fs-2">แพรกลางแม่น้ำ</p>
</figure>


<p class="lh-1">รายชั่วโมง 50บาท เหมาทั้งวัน 200 บาท</p><br><br>

      <!-- End My Portfolio Section -->

  <!-- ======= Pricing Section ======= -->
 <!-- End Pricing Section -->

  <!-- ======= Contact Me Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact Me</span>
        <h2>Contact Me</h2>
        <p></p>
      </div>

      <div class="row text-center">

        <p class="fs-2">สามารถติดต่อได้</p>
        <p class="fw-semibold">หาดเต็มรัก Byเสี่ยหมึก</p>
        <p class="fs-4">โทร.087-991-8729</p><br>


      </div>

    </div>
  </section><!-- End Contact Me Section -->

</main><!-- End #main -->
@stop