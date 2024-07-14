@extends('layouts.main')
@section('main-container')v
    <!-- inner hero section start -->
<section class="inner-banner bg_img" style="background: url('/assets/images/inner-banner/bg2.jpg') top;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6 text-center">
        <h2 class="title text-white">Withdraw Logs</h2>
        <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
          <li><a  href="/index ">Home</a></li>
          <li>Withdraw Log</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- inner hero section end -->
    
    <!-- Dashboard Section Starts Here -->
    <div class="dashboard-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="close-dashboard d-lg-none">
                            <i class="las la-times"></i>
                        </div>
                        <div class="dashboard-user">
                            <div class="user-thumb">
                                <img src="/assets/images/top/item1.png" alt="dashboard">
                            </div>
                            <div class="user-content">
                                <span>Welcome</span>
                                <h5 class="name">Munna Ahmed</h5>
                                <ul class="user-option">
                                    <li>
                                        <a  href="/#0">
                                            <i class="las la-bell"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="/#0">
                                            <i class="las la-pen"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="/#0">
                                            <i class="las la-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="user-dashboard-tab">
                            <li>
                                <a  href="/dashboard " class="active">Dashboard</a>
                            </li>
                            <li>
                                <a  href="/deposit-log ">Deposit History</a>
                            </li>
                            <li>
                                <a  href="/withdraw-log ">Withdraw History</a>
                            </li>
                            <li>
                                <a  href="/transection ">Transection History</a>
                            </li>
                            <li>
                                <a  href="/profile ">Account Settings</a>
                            </li>
                            <li>
                                <a  href="/change-pass ">Security Settings</a>
                            </li>
                            <li>
                                <a   href="/#0">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="user-toggler-wrapper d-flex align-items-center d-lg-none">
                        <h4 class="title m-0">User Dashboard</h4>
                        <div class="user-toggler">
                            <i class="las la-sliders-h"></i>
                        </div>
                    </div>
                    <div class="table--responsive--md">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Transection ID</th>
                                    <th>Transection Type</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#481XV93NCKD0</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$150.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#V93N481XCKD0</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$500.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#1XCKD0V93N48</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$350.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#V981XCKD03N4</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$250.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#481XV93NCKD0</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$150.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#V93N481XCKD0</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$500.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#1XCKD0V93N48</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$350.50</td>
                                </tr>
                                <tr>
                                    <td class="trx-id" data-label="Transection ID">#V981XCKD03N4</td>
                                    <td class="trx-type" data-label="Transection Type">Withdraw</td>
                                    <td class="date" data-label="Date">12 Mar, 21 at 12:30 AM</td>
                                    <td class="amount" data-label="Amount">$250.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Section Ends Here -->
@endsection