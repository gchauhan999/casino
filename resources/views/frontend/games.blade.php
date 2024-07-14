@extends('layouts.main')
@section('main-container')
    <!-- inner hero section start -->
<section class="inner-banner bg_img" style="background: url('/assets/images/inner-banner/bg2.jpg') top;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Games</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a href="index-2.html">Home</a></li>
          <li>Games</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- inner hero section end -->

    <!-- Game Section Starts Here -->
    <section class="game-section padding-top padding-bottom bg_img" style="background: url(/assets/images/game/bg3.jpg);">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item2.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Roulette</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="/games/roulette" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item4.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Coin</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="/games/coin" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item2.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Roulette</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="#0" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item4.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Roulette</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="#0" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item6.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Coins Rolling</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="/game-details" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="game-item">
                        <div class="game-inner">
                            <div class="game-item__thumb">
                                <img src="/assets/images/game/item6.png" alt="game">
                            </div>
                            <div class="game-item__content">
                                <h4 class="title">Dice Rolling</h4>
                                <p class="invest-info">Invest Limit</p>
                                <p class="invest-amount">$10.49 - $1,000</p>
                                <a href="#0" class="cmn--btn active btn--md radius-0">Play Now</a>
                            </div>
                        </div>
                        <div class="ball"></div>
                    </div>
                </div>
            </div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#0" class="page-link"><i class="las la-arrow-left"></i></a></li>
                <li class="page-item active"><a href="#0" class="page-link">01</a></li>
                <li class="page-item"><a href="#0" class="page-link">02</a></li>
                <li class="page-item"><a href="#0" class="page-link">03</a></li>
                <li class="page-item"><a href="#0" class="page-link"><i class="las la-arrow-right"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Game Section Ends Here -->
@endsection