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
<section class="padding-top padding-bottom">
        <div class="container game">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="wheel-container-left">
                        <div class="form-group-mt-4 mt-sm-5 justify-content-center d-flex flex-wrap justify-content-between">
                            <div class="wheel" id="wheel">
                               <img src="/assets/images/game/roulettewheel.png" alt="Roulette Wheel" class="wheel-image">
                            </div>
                            <div class="pointer">
                               <img src="/assets/images/game/pointer.png" alt="Roulette Wheel Pointer" class="pointer-image">
                            </div>
                        </div>
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
                            <div class="form-group-mt-4 mt-sm-5 justify-content-center d-flex flex-wrap justify-content-between">
                              <div id="numbers-container">
                                <div class="row">
                                   <table class="col-12">
                                    <tr>       
                                          <td><button id="number-button" class=" table-btn cmn--btn text-white bg--base text-center">0</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">1</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">2</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">3</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">4</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">5</button></td>
                                    </tr>
                                    <tr>        
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">6</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">7</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">9</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">10</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">11</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">12</button></td>
                                    </tr>
                                    <tr>        
                                          
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">13</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">14</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">15</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">16</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">17</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">18</button></td>
                                    </tr>
                                    <tr>        
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">19</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">20</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">21</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">22</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">23</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">24</button></td>
                                    </tr>
                                    <tr>        
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">25</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">26</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">27</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">28</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">29</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">30</button></td>
                                    </tr>
                                    <tr>        
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">31</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">32</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">33</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">34</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">35</button></td>
                                          <td><button id="number-button" class="  table-btn cmn--btn text-white bg--base text-center">36</button></td>
                                    </tr>
                                   </table>
                                </div>
                              </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button id="spin-button" type="button" class="cmn--btn active w-100 text-center">Spin Now</button>
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