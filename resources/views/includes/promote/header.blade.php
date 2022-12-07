  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
        <li><a class="nav-link scrollto" href="#about">เมนูการจองที่พักและเครื่องเล่น</a></li>
        <li><a class="nav-link scrollto" href="#resume">โปรโมชั่น</a></li>       
        <li><a class="nav-link scrollto" href="#contact">ติดต่อ</a></li>


@if (Route::has('login'))
        @auth
        <li><a class="nav-link scrollto" href="{{ url('/home')}}">admin</a></li>
@else
        <li><a class="nav-link scrollto" href="{{ route('login')}}">Login</a></li>
    @if (Route::has('register'))

        <li><a class="nav-link scrollto " href="{{ route('register')}}">สมัครสมาชิก</a></li>
 @endif
        @endauth
@endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->  