@extends('layouts.main')
@section('main-container')
    <!-- inner hero section start -->
<section class="inner-banner bg_img" style="background: url('/assets/images/inner-banner/bg2.jpg') top;">
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Games</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a href="/index">Home</a></li>
          <li>Games</li>
        </ul>
      </div>
    </div>
  </div>
</section>
    <div class="container game">
    <div class="wheel-container">
        <div class="wheel" id="wheel">
          <img src="/assets/images/game/roulettewheel.png" alt="Roulette Wheel" class="wheel-image">
        </div>
        <div class="pointer">
          <img src="/assets/images/game/pointer.png" alt="Roulette Wheel Pointer" class="pointer-image">
        </div>
      </div>
      <button id="spin-button">Spin</button>
      <input type="number" id="chosen-number" min="0" max="36" placeholder="Enter a number (0-36)">
    </div>
@endsection