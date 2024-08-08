@extends('layouts.main')

@section('main-container')
    <!-- inner hero section start -->
    <section class="inner-banner bg_img" style="background: url('/assets/images/inner-banner/bg2.jpg') top;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6 text-center">
                    <h2 class="title text-white">Profile</h2>
                    <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- inner hero section end -->

    <!-- Profile Section Starts Here -->
    <section class="profile-section padding-top padding-bottom">
        <div class="container">
            <div class="profile-edit-wrapper">
                <div class="row gy-5">
                    <form class="account__form form row g-4" method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-xl-4">
                            <div class="profile__thumb__edit text-center custom--card">
                                <div class="card--body">
                                    <div class="thumb">
                                        <img src="{{ $user->picture ? asset('assets/images/account/' . $user->picture) : '' }}" alt="picture">
                                    </div>
                                    <div class="profile__info">
                                        <h4 class="name">{{ $user->firstname }} {{ $user->lastname }}</h4>
                                        <p class="username">{{ $user->username }}</p>
                                        <p class="username">{{ $user->about }}</p>
                                        <input type="file" class="form-control d-none" id="picture" name="picture">
                                        <label class="cmn--btn active btn--md mt-3" for="picture">Update Profile Picture</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="custom--card card--lg">
                                <div class="card--body">
                                    <div class="row gy-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input id="firstname" type="text" class="form-control form--control style-two" placeholder="First Name" name="firstname" value="{{ $user->firstname }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input id="lastname" type="text" class="form-control form--control style-two" placeholder="Last Name" name="lastname" value="{{ $user->lastname }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username</label>
                                                <input id="username" type="text" class="form-control form--control style-two" placeholder="Username" name="username" value="{{ $user->username }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input id="email" type="email" class="form-control form--control style-two" placeholder="......@gmail.com" name="email" value="{{ $user->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="form-label">Country</label>
                                                <select id="country" class="form-select form--select form--control style-two" name="country" required>
                                                    <option value="Bangladesh" {{ $user->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                                    <option value="India" {{ $user->country == 'India' ? 'selected' : '' }}>India</option>
                                                    <option value="English" {{ $user->country == 'English' ? 'selected' : '' }}>English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone_number" class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text text--base">+91</span>
                                                    <input id="phone_number" type="tel" class="form-control form--control style-two" name="phone_number" value="{{ $user->phone_number }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address" class="form-label">Address</label>
                                                <input id="address" type="text" class="form-control form--control style-two" placeholder="Address" name="address" value="{{ $user->address }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="zipCode" class="form-label">Zip Code</label>
                                                <input id="zipCode" type="text" class="form-control form--control style-two" placeholder="Zip Code" name="zipCode" value="{{ $user->zipCode }}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="about" class="form-label">About You</label>
                                                <textarea id="about" class="form-control form--control style-two pt-3" placeholder="Write here" name="about">{{ $user->about }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <button class="cmn--btn active mt-3" type="submit">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section Ends Here -->
@endsection
