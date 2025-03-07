@extends('layouts.main')
@section('main-container')
    <!-- inner hero section start -->
<section class="inner-banner bg_img" style="background: url('/assets/images/inner-banner/bg2.jpg') top;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Game Details</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a href="/index">Home</a></li>
          <li>Game Details</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- inner hero section end -->

    <section class="padding-top padding-bottom">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="game-details-left">
                    <div id="coin-flip-cont">
                        <div class="coins-wrapper">
                           <div class="front"><img id="coinHeadImage" src="/assets/images/game/head.png" alt="game"></div>
                           <div class="back"><img id="coinTailImage" src="/assets/images/game/tail.png" alt="game"></div>
                        </div>
                    </div>
                        <div class="cd-ft"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="game-details-right">
                        <form id="game" novalidate="novalidate">
                            <h3 class="mb-4 text-center">Current Balance : <span class="base--color"><span class="bal">100</span> USD</span></h3>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="invest" class="form-control form--control amount-field" placeholder="Enter amount">
                                    <span class="input-group-text text-white bg--base" id="basic-addon2">USD</span>
                                </div>
                                <small class="form-text text-muted"><i class="fas fa-info-circle mr-2"></i>Minimum: 1 USD | Maximum: 500.00 USD | <span class="text-warning">Win Amount  1  %</span></small>
                            </div>    
                            <div class="form-group mt-4 mt-sm-5 justify-content-center d-flex flex-wrap justify-content-between">
                            <div class="single-select head gmimg" data-choice="heads">
                                    <img src="/assets/images/game/head.png" alt="game-image">
                                </div>
                                <div class="single-select tail gmimg" data-choice="tails">
                                    <img src="/assets/images/game/tail.png" alt="game-image">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button type="button" click="play()" id="flipButton" class="cmn--btn active w-100 text-center">Play Now</button>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="mt-3 btn btn-link btn--sm radius-5">Game Instruction <i class="las la-info-circle"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <div class=" modal custom--modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content section-bg border-0">
                <div class="modal-header modal--header bg--base">
                    <h4 class="modal-title text-dark" id="exampleModalLongTitle">Game Rules</h4>
                </div>
                <div class="modal-body modal--body">
                    <h3 class="title mb-2">Before Game Start: </h3>
                    <p>Officia quod velit eaque tempore assumenda, blanditiis corporis praesentium voluptate provident. Sunt enim obcaecati odio doloremque molestiae aspernatur fuga eveniet molestias autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsam sapiente aut est nostrum, labore quibusdam aliquid repellendus dignissimos consequuntur aspernatur voluptates consectetur aliquam quam nesciunt impedit? Vitae blanditiis vero officiis quidem ipsum esse! Praesentium, laudantium numquam! Corporis sed adipisci, incidunt aut, accusamus sit, nihil tenetur ipsam quaerat optio nisi?</p>
                </div>
                <div class="modal-footer modal--footer">
                    <button type="button" class="btn btn--danger btn--md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function play() {
        alert('Play Now button working');
    }
</script>